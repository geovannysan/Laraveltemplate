<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

use App\Producto;


class Geovanny extends Controller
{
    //
    protected $Sim;
    public function __construct(Producto $Sim)
    {
        $this->Sim = $Sim;
    }
    public function rana(){
    	$c = array();
      $b =0;

        for($i=0;$i<=5;$i++){
          array_push($c, mt_rand(0, 10));
          
        };
          foreach ($c as $clave => $valor) {
                  if($b==$clave ){
                $b=$b+$valor;
              //echo "$clave "."\n";                
              }    
          }
          if($b+1>=count($c)){
         return response()->json(['message'=>'true'],200);
          }
          else{
            return response()->json(['message'=>'false'],404);
            //echo json_encode($b);
          }

    }
    public function index(){
      try {
        $Sim = $this->Sim->Datos();
         return View('layouts.index',['data' => $Sim]);
      } catch (Exception $e) {
        
      }


     
    }
}
