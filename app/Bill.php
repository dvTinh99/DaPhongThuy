<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bills';
    protected $fillable = ['customer_id', 'date_order', 'total', 'payment', 'note'];
    public $timestamp = true;

    public function customer ()
    {
        return $this->hasOne('App\Customer');
    }

    public function billdetail ()
    {
        return $this->hasOne('App\BillDetail');
    }

}
