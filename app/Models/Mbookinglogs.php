<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class mbookinglogs extends Sximo  {
	
	protected $table = 'tb_logs_booking';
	protected $primaryKey = 'auditID';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_logs_booking.* FROM tb_logs_booking  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_logs_booking.auditID IS NOT NULL  ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
