<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Report extends Model
{
    //
     protected $fillable = ['date', 'body', 'project_id'];

     protected $dates = ['date', 'created_at', 'updated_at'];

     public function project()
     {
     	return $this->belongsTo('\App\Project');     
     }
}
