<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['name','gender','email','address','phonenumber'];
    public $timestamp = true;

    public function bill()
    {
        return $this->hasMany('App\Bill');
    }
    public function billdetail()
    {
        return $this->hasMany('App\BillDetail');
    }
}
