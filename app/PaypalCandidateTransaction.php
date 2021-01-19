<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaypalCandidateTransaction extends Model
{
    protected $table = 'paypal_candidate_transactions';

    protected $fillable = [
    	'candidate_id', 
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
    public function candidate()
    {
        return $this->belongsTo('App\Candidate');
    } 
	
	public function scopeSearch($query, $name)
    {
        return $query
            ->where('candidate_id', 'like', '%' .$name. '%')
            ->orWhere('payment_id', 'like', '%' .$name. '%');
    }

    public function scopeTransactions($query)
    {        
        /*dd($query->rightJoin('candidates', 'paypal_transactions.candidate_id', '=', 'candidates.id')
            ->select('candidate_id as cid', \DB::raw('sum(transaction_total - transaction_fee) as total'))
            ->groupBy('candidate_id')
            ->get());*/ //Indentificar poque solo trae 3 registros

        $query->rightJoin('candidates', 'paypal_candidate_transactions.candidate_id', '=', 'candidates.id')
            ->join('groups', 'candidates.group_id', '=', 'groups.id')
            ->join('courses', 'candidates.course_id', '=', 'courses.id')
            ->select('paypal_candidate_transactions.candidate_id as cid', 'candidates.id', 'candidates.name', 'candidates.last_name', 'candidates.avatar', 'candidates.birthdate', 'candidates.description', 'candidates.goal', 'candidates.active', \DB::raw('sum(transaction_total - transaction_fee) as total'), 'groups.id as g_id', 'groups.name as g_name', 'courses.name as c_name')
            ->groupBy('paypal_candidate_transactions.candidate_id', 'candidates.id', 'candidates.name', 'candidates.last_name', 'candidates.avatar', 'candidates.birthdate', 'candidates.description', 'candidates.goal', 'candidates.active', 'groups.id', 'groups.name', 'courses.name')
            ->get();
    }
}
