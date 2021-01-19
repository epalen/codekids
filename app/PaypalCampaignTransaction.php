<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaypalCampaignTransaction extends Model
{
    protected $table = 'paypal_campaign_transactions';

    protected $fillable = [
    	'campaign_id', 
    	'payment_id', 
    	'intent', 
    	'state', 
    	'cart', 
    	'payment_method', 
    	'status', 
    	'payer_id', 
    	'payer_email', 
    	'payer_name', 
    	'payer_last_name', 
    	'payer_address', 
    	'payer_city', 
    	'payer_state', 
    	'payer_postal_code', 
    	'payer_country_code', 
    	'transaction_total', 
    	'transaction_fee', 
    	'transaction_currency', 
    	'merchant_id', 
    	'payee_email'
    ];

    /**
     * The PaypalTransaction that belong to the Candidate.
     */
    public function campaign()
    {
        return $this->belongsTo('App\Campaign');
    } 

    public function scopeSearch($query, $name)
    {
        return $query
            ->where('campaign_id', 'like', '%' .$name. '%')
            ->orWhere('payment_id', 'like', '%' .$name. '%');
    }

    public function scopeCtransactions($query)
    {  
        $query->rightJoin('campaigns', 'paypal_campaign_transactions.campaign_id', '=', 'campaigns.id')
            ->join('groups', 'campaigns.group_id', '=', 'groups.id')
            ->join('courses', 'campaigns.course_id', '=', 'courses.id')
            ->select('paypal_campaign_transactions.campaign_id as cmpid', 'campaigns.id', 'campaigns.title', 'campaigns.subtitle', 'campaigns.description', 'campaigns.goal', 'campaigns.avatar', 'campaigns.start_date', \DB::raw('sum(transaction_total - transaction_fee) as total'), 'groups.id as grp_id', 'groups.name as grp_name', 'courses.name as crs_name')
            ->groupBy('paypal_campaign_transactions.campaign_id', 'campaigns.id', 'campaigns.title', 'campaigns.subtitle', 'campaigns.description', 'campaigns.goal', 'campaigns.avatar', 'campaigns.start_date', 'groups.id', 'groups.name', 'courses.name')
            ->get();
    }
}
