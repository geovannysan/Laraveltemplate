<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table="categoria";
    protected $fillable = array('nombre','descrition','telefono');
	public function Producto()
	{
		return $this->hasMany("App\producto");
		# code...
	}
}
