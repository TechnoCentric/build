<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Material extends Model
{
    //
    protected $fillable = ['material_type', 'amount_paid', 'payment_date', 'payment_type', 'paid_to', 'payment_status', 'project_id'];
    protected $dates =['payment_date', 'created_at', 'update_at'];

    public function project()
    {
    	return $this->belongsTo('\App\Project');
    }
}
