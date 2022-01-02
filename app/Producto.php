<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
/**
 * 
 */
class Producto extends Model
{
	protected $table="producto";
	protected $fillable = array('nombre','valor','cantidad','categoria_id',);
	public function Categoria()
	{
		return $this->belongsTo("App\categoria");
	}
	public function Datos (){
		return Producto::paginate(2);
	}
}

