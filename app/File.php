<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['name', 'total','project_id'];
    protected $dates =['created_at', 'update_at'];

    public function project()
    {
    	return $this->belongsTo('\App\Project');
    }

    public function materials()
    {
    	return $this->hasMany('\App\Material');
    }
}
