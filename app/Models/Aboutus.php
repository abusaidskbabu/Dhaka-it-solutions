<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class aboutus extends Sximo  {
	
	protected $table = 'about_us';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT about_us.* FROM about_us  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE about_us.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
