<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = 'products';
	protected $fillable = ['id','category_id','name','price','promotion_price','material','meaning','size','status','image_list'];
	public $timestamp = true;
	public function cate(){
		return $this->hasOne('App\Cate');
	}

}
