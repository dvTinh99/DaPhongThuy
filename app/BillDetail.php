<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = 'billdetails';
    protected $fillable = ['bill_id','product_id','quantity','price'];
    public $timestamp = true;

    public function bill()
    {
        return $this->hasOne('App\Bill');
    }
    public function customer()
    {
        return $this->hasOne('App\Customer');
    }
}
