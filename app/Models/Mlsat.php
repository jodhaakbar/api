<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class mlsat extends Sximo  {
	
	protected $table = 'tb_leader_sat';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_leader_sat.* FROM tb_leader_sat  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_leader_sat.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
