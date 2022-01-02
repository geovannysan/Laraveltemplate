<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
	protected $table ="profile";
	protected $fillable = array('name','email','photo',);
	
}
