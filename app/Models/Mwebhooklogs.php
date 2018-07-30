<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class mwebhooklogs extends Sximo  {
	
	protected $table = 'tb_logs_webhook';
	protected $primaryKey = 'auditID';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_logs_webhook.* FROM tb_logs_webhook  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_logs_webhook.auditID IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
