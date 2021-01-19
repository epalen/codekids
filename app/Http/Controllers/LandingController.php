<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaypalCandidateTransaction;
use App\PaypalCampaignTransaction;
use App\Featured_Campaign;
use App\Slider_Campaign;
use App\Team_Member;
use App\Candidate;
use App\Campaign;
use App\Sponsor;
use App\Partner;
use App\Course;
use App\About;
use App\Post;
use DB;

class LandingController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //return view('campaigns.index');

        $fcampaigns     = Featured_Campaign::all();

        $scampaigns     = Slider_Campaign::all();

        $teammembers    = Team_Member::all();

        //$groups       = Candidate::candidates()->paginate(6);

        $candidates     = PaypalCandidateTransaction::transactions()->orderBy('id','DESC')->paginate(6);
        //$balances     = PaypalTransaction::all();

        $campaigns    = Campaign::all();

        $qcampaigns      = PaypalCampaignTransaction::ctransactions()->orderBy('id','DESC')->paginate(6);

        $sponsors       = Sponsor::all();

        $partners       = Partner::all();

        //$courses      = Course::all();  

        $courses        = Course::orderBy('id','DESC')->paginate(6);

        //$abouts       = About::orderBy('id','DESC')->get(); 
        $abouts         = About::all(); 

        $posts          = Post::all();

        //dd($candidates);

        return view('landing', ['fcampaigns' => $fcampaigns, 'scampaigns' => $scampaigns, 'campaigns' => $campaigns, 'qcampaigns' => $qcampaigns, 'sponsors' => $sponsors, 'partners'=> $partners, 'abouts' => $abouts, 'courses' => $courses, 'teammembers' => $teammembers, 'posts' => $posts, 'candidates' => $candidates]);

        // Funciones para recargar vistas con Ajax //

        //$returnHTML = view('landing', compact('fcampaigns', 'scampaigns', 'candidates', 'campaigns', 'abouts', 'courses'))->render();

        //$returnHTML = view('landing')->with('fcampaigns', $fcampaigns, 'scampaigns', $scampaigns, 'candidates', $candidates, 'campaigns', $campaigns, 'abouts', $abouts, 'courses', $courses)->render();

        //dd($returnHTML);

        //return response()->json(array('success' => true, 'html' => $returnHTML));
    }
}
