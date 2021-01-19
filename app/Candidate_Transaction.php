<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate_Transaction extends Model
{
    protected $table = 'candidate_transactions';

    protected $fillable = ['candidate_id', 'transaction_id'];
}