<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    protected $fillable = ['delivery_date', 'payment_date', 'supplier_id', 'status'];
    protected $dates = ['delivery_date', 'payment_date', 'created_at', 'updated_at'];

    public function supplier()
    {
    	return $this->belongsTo('\App\Supplier');
    }
}
