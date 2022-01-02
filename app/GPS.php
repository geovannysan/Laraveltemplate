<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GPS extends Model
{
     protected $table="sim_gps";
     protected $fillable = array('lnt','lng','sim_id',);
     public function Obtener(){
    	return GPS::All();
    }
	public function arduino()
	{
		return $this->belongsTo("App\Simuno");
	}
}
