<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['name', 'phone', 'address'];
    protected $dates = ['created_at', 'updated_at'];

    public function supply(){
    	return $this->hasMany('\App\Supply');
    }
}
