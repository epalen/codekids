<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PaypalCandidateTransaction;
use App\Candidate_Transaction;
use App\Sponsor;

class AdminCandidatePaymentController extends Controller
{
    protected $data;    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($data)
    { 
        //dd($data);

        foreach($data->transactions as $rtrs){ 
            $tc = $rtrs->amount;
            $tp = $rtrs->payee;
            
            foreach($rtrs->related_resources as $rr){
                $tf = $rr->sale->transaction_fee;
            }

            foreach ($itlst = $rtrs->item_list->items as $ri) {
                $name = $ri->name;
            }
        }
        
        $pc = PaypalCandidateTransaction::create([
            'candidate_id'          => $name,
            'payment_id'            => $data->id,
            'intent'                => $data->intent,
            'state'                 => $data->state,
            'cart'                  => $data->cart,
            'payment_method'        => $data->payer->payment_method,
            'status'                => $data->payer->status,
            'payer_id'              => $data->payer->payer_info->payer_id,
            'payer_email'           => $data->payer->payer_info->email,
            'payer_name'            => $data->payer->payer_info->first_name,
            'payer_last_name'       => $data->payer->payer_info->last_name,
            'payer_address'         => $data->payer->payer_info->shipping_address->line1,
            'payer_city'            => $data->payer->payer_info->shipping_address->city,
            'payer_state'           => $data->payer->payer_info->shipping_address->state,
            'payer_postal_code'     => $data->payer->payer_info->shipping_address->postal_code,
            'payer_country_code'    => $data->payer->payer_info->shipping_address->country_code,
            'transaction_total'     => $tc->total,
            'transaction_currency'  => $tc->currency,
            'merchant_id'           => $tp->merchant_id,
            'payee_email'           => $tp->email,
            'transaction_fee'       => $tf->value
        ]); // Inserta los valores en la BD.

        $sp = Sponsor::create([
            'name'      => $data->payer->payer_info->first_name,
            'last_name' => $data->payer->payer_info->last_name,
            'email'     => $data->payer->payer_info->email
        ]);
    }
}
