<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable =['description', 'quantity', 'price', 'amount', 'supply_id'];
    protected $dates = ['created_at', 'updated_at'];

    public supply(){
    	return $this->belongsTo('\App\Supply');
    }
}
