<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class mlogs extends Sximo  {
	
	protected $table = 'tb_logs';
	protected $primaryKey = 'auditID';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_logs.* FROM tb_logs  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_logs.auditID IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
