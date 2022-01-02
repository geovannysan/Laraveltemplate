<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Simuno;
use App\GPS;
class GpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $Sim;
    public function __construct(Simuno $Sim)
    {
        $this->Sim = $Sim;
    }
    public function index($id)
    {
        //
        try{
         $Sim = $this->Sim->Datos($id);
         $GPSs = $Sim->gps;
         if($GPSs->count()>0)return response()->json(['message'=>$GPSs],200);
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
    public function create(Request $req)
    {
       
                
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        try {
        $Sim = $this->Sim->Datos($id);
        if (!$Sim) return response()->json(['message'=>"null"],404);
        Simuno::created([$req->all()]);
        return response()->json(['message'=>"Datos guardados"],200); 
        } catch (Exception $e) {
            response()->json(['message'=>$e],404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$idg)
    {
        try {
        $Sim = $this->Sim->Datos($id);
        $gps = $Sim->gps()->find($idg);
        if (!$Sim||!$gps) return response()->json(['message'=>"null"],404);    
        return response()->json(['message'=>$gps],200); 
        } catch (Exception $e) {
            response()->json(['message'=>$e],404);
        }
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
