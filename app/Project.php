<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Project extends Model
{
    //
    protected $fillable = ['type', 'name', 'location', 'budget', 'picture', 'supervisor'];
    protected $dates = ['created_at', 'updated_at'];

    public function materials()
    {
    	return $this->hasMany('\App\Material');
    }
    public function reports()
    {
    	return $this->hasMany('\App\Report');
    }

}
