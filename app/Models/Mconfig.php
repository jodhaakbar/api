<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class mconfig extends Sximo  {
	
	protected $table = 'tb_config';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_config.* FROM tb_config  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_config.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
