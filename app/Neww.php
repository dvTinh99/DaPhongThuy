<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Neww extends Model {

	protected $table = 'news';
	protected $fillable = ['name','image','content'];
	public $timestamp = true;
	public function user(){
		return $this->hasOne('App\User');
	}

}
