<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Featured_Campaign extends Model
{
    protected $table = 'featured_campaigns';

    protected $fillable = ['campaign_id', 'start_date', 'end_date'];

    // Relation with Campaign model
    public function campaign()
    {
    	return $this->belongsTo('App\Campaign', 'campaign_id');
    }
}
