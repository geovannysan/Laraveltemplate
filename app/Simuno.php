<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simuno extends Model
{
 
 protected  $table="simuno";
    protected $fillable = array('serie','keyread','keywrite','lat','lng' );
    public function Obtener(){
    	return Simuno::All();
    }
    public function Datos($id){
    	return Simuno::find($id);
    }
    public function newDatos($id){
    	return Simuno::create([$id->all()]);
    }
   public function gps()
	{
		return $this->hasMany("App\GPS",'sim_id');
		# code...
	}
}
