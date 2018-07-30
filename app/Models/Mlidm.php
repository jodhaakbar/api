<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class mlidm extends Sximo  {
	
	protected $table = 'tb_leader_idm';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_leader_idm.* FROM tb_leader_idm  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_leader_idm.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
