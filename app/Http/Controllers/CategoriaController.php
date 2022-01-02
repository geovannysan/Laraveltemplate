<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class CategoriaController extends Controller
{
     protected $Sim;
    public function __construct(Producto $Sim)
    {
        $this->Sim = $Sim;
    }

    public function index()
    {
        try{
         $Sim = $this->Sim->Datos();
         if($Sim->count()>0)return response()->json(['message'=>$Sim],200);
         return response()->json(['message'=>"null"],404);
        }catch(Exception $e){
             return response()->json(['message'=>"null"],403);
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
