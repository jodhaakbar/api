<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class msubmission extends Sximo  {
	
	protected $table = 'tb_submission';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_submission.* FROM tb_submission  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_submission.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
