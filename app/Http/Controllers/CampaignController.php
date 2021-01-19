<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaypalCampaignTransaction;
use App\Featured_Campaign;
use App\Campaign;
use App\Partner;
use App\About;
use DB;

class CampaignController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('campaigns.index');

        $fcampaigns = Featured_Campaign::all();

        //$campaigns = Campaign::all();

        $campaigns     = PaypalCampaignTransaction::ctransactions()->orderBy('id','DESC')->paginate(4);

        $partners = Partner::all();

        $abouts = About::all();

        //dd($campaigns);

        return view('campaigns.index', compact('fcampaigns', 'campaigns', 'partners', 'abouts'))->render();
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
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $campaigns = Campaign::find($id);

        $balances = DB::table('paypal_campaign_transactions')
                ->select('campaign_id', DB::raw('sum(transaction_total-transaction_fee) as total'))
                ->where('campaign_id', $id)
                ->groupBy('campaign_id')
                ->orderBy('total', 'desc')
                ->get();

        $fcampaigns = Featured_Campaign::all();

        $partners = Partner::all();

        $abouts = About::all(); 
        
        return view('campaigns.new', compact('campaigns', 'fcampaigns', 'partners', 'abouts', 'trs', 'balances'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
