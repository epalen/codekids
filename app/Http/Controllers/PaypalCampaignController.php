<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use URL;
use Session;
use Redirect;
/** All Paypal Details class **/
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use App\PaypalCampaignTransaction;

class PaypalCampaignController extends Controller
{
    protected $data;

	protected $request;

    public function __construct(Request $request)
    {
	/** PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret'])
        );
		$this->_api_context->setConfig($paypal_conf['settings']);
    }
    
    /**
     * Show the application paywith paypalpage.
     *
     * @return \Illuminate\Http\Response
     */
    public function payCampaignPaypal()
    {
        return redirect()->action('CampaignController@index');
    }

    public function postPaymentWithpaypal(Request $request)
    {
		$this->request = $request->id;
		$this->request_name = $request->name;

		$payer = new Payer();		
		$payer->setPaymentMethod('paypal');
		$item = new Item();
		$item->setName($this->request) /** item name **/		
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($request->get('amount')); /** unit price **/
		//dd($item); // Datos del Item y monto seleccionado del formulario.
		//dd($payer); // Metodo de pago.
		$item_list = new ItemList();
		$item_list->setItems(array($item));
		$amount = new Amount();
		$amount->setCurrency('USD')
		    ->setTotal($request->get('amount'));
		//dd($item_list); // Arreglo de datos y monto seleccionados en el formulario.
		//dd($amount); // Monto y moneda capturadas en el formulario.
		$transaction = new Transaction();
		$transaction->setAmount($amount)
		    ->setItemList($item_list)
		    ->setDescription('La descripción de su transacción');
		//dd($transaction); // Arreglo de datos, monto, moneda y descripción seleccionados en el formulario.
		$redirect_urls = new RedirectUrls();
		$redirect_urls->setReturnUrl(URL::route('paymentcampaign.status')) /** Specify return URL **/
		    ->setCancelUrl(URL::route('paymentcampaign.status'));
		$payment = new Payment();
		$payment->setIntent('Sale')
		    ->setPayer($payer)
		    ->setRedirectUrls($redirect_urls)
		    ->setTransactions(array($transaction));
		/** dd($payment->create($this->_api_context));exit; **/
		//dd($payment); // Arreglo de datos, monto, moneda, descripción y rutas de redirección.
		try {
			$payment->create($this->_api_context);
		} catch (\PayPal\Exception\PPConnectionException $ex) {
			if (\Config::get('app.debug')) {
				\Session::put('error', 'El tiempo de conexión expiró');
		        return Redirect::route('paycampaignpaypal');
			} else {
				\Session::put('error', 'Ocurrió algún error, disculpe las molestias');
		        return Redirect::route('paycampaignpaypal');
			}
		}
		foreach ($payment->getLinks() as $link) {
			if ($link->getRel() == 'approval_url') {
				$redirect_url = $link->getHref();
		        break;
			}
		}
		//dd($redirect_url); // Ruta de redirección de Paypal en caso de un error.
		/** add payment ID to session **/
		Session::put('paypal_payment_id', $payment->getId());
		if (isset($redirect_url)) {
		/** redirect to paypal **/
		    return Redirect::away($redirect_url);
		}
		\Session::put('error', 'Ocurrió un error desconocido');
		return Redirect::route('addmoney.paycampaignpaypal');
	}

	public function getPaymentStatus(Request $request)
    {
        /** Get the payment ID before session clear **/
	    $payment_id = Session::get('paypal_payment_id');
	    //dd($payment_id); // Genera el ID del proceso de pago.
		/** clear the session payment ID **/
	    Session::forget('paypal_payment_id');
	    if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
			\Session::put('error', 'Pago fallido');
	        return Redirect::route('trade.record.store');
		}
		$payment = Payment::get($payment_id, $this->_api_context);
		//dd($payment); // Arreglo con datos del usuario, monto y datos de la transacción.
	    $execution = new PaymentExecution();
	    $execution->setPayerId(Input::get('PayerID'));
	    //dd($execution); // Genera el ID del proceso del pago realizado.
		/**Execute the payment **/
	    $result = $payment->execute($execution, $this->_api_context);
	    //dd($result); // Genera resultado del proceso y estado de aprovación de la transacción.
		if ($result->getState() == 'approved') {
			//\Session::put('success', 'Su pago se realizó exitosamente!!!');	

			$data = $result;

			$admp = new AdminCampaignPaymentController();

			$admp->store($data);

	        return Redirect::route('addmoney.paycampaignpaypal');
		}
		\Session::put('error', 'Pago fallido');

			$data = $result;

			$admp = new AdminCampaignPaymentController();

			$admp->store($data);

	    return Redirect::route('addmoney.paycampaignpaypal');
	}
}
