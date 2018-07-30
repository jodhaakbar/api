<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class mpeserta extends Sximo  {
	
	protected $table = 'tb_peserta';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_peserta.* FROM tb_peserta  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_peserta.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
