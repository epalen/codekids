<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaypalCandidateTransaction;
use App\Featured_Campaign;
use App\Candidate;
use App\Campaign;
use App\Partner;
use App\About;
use DB;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('candidates.index');

        $candidates     = PaypalCandidateTransaction::transactions()->orderBy('id','DESC')->paginate(9);

        $fcampaigns = Featured_Campaign::all();

        $campaigns = Campaign::all();

        $partners = Partner::all();

        $abouts = About::all();

        //dd($transactions);

        /*foreach($transactions as $balance){
            //dd($balance);
            //return view('admin.candidates.show',compact('candidates', 'balance'));
            //return view('candidates.index', compact('candidates', 'fcampaigns', 'campaigns', 'partners', 'abouts', 'balance'));
            //return view('candidates.index', ['candidates' => $candidates, 'balance' => $balance, 'fcampaigns' => $fcampaigns, 'campaigns' => $campaigns, 'partners' => $partners, 'abouts' => $abouts, 'balance' => $balance]);
        }*/

        return view('candidates.index', compact('candidates', 'fcampaigns', 'campaigns', 'partners', 'abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candidates = Candidate::find($id);

        $balances = DB::table('paypal_candidate_transactions')
                ->select('candidate_id', DB::raw('sum(transaction_total-transaction_fee) as total'))
                ->where('candidate_id', $id)
                ->groupBy('candidate_id')
                ->orderBy('total', 'desc')
                ->get();

        $fcampaigns = Featured_Campaign::all();

        $campaigns = Campaign::all();

        $partners = Partner::all();

        $abouts = About::all(); 
        
        return view('candidates.new', compact('candidates', 'fcampaigns', 'campaigns', 'partners', 'abouts', 'transactions', 'trs', 'balances'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
