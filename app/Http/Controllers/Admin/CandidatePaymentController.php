<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PaypalCandidateTransaction;
use DB;

class CandidatePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = PaypalCandidateTransaction::search($request->get('criteria'))->orderBy('id','DESC')->paginate(8);

        $balance = DB::table('paypal_candidate_transactions')->sum('transaction_total');

        $fee = DB::table('paypal_candidate_transactions')->sum('transaction_fee');

        $count = DB::table('paypal_candidate_transactions')->count();

        return view('admin.donations.candidates.index',compact('data', 'balance', 'fee', 'count'))
            ->with('i', ($request->input('page', 1) - 1) * 8);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transactions = PaypalCandidateTransaction::find($id); 

        $trs = DB::table('paypal_candidate_transactions')->count();

        return view('admin.donations.candidates.show',compact('transactions', 'trs'));
    }
}
