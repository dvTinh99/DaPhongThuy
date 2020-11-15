<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model {

	protected $table = 'categorys';
	protected $fillable = ['id','name','parent_id'];
	public $timestamp = true;
	public function product(){
		return $this->hasMany('App\Product');
	}

}
