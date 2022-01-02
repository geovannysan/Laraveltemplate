<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Simuno;

class Simarduino extends Controller
{
    // * @return \Illuminate\Http\Response
     protected $Sim;
	public function __construct(Simuno $Sim)
	{
	    $this->Sim = $Sim;
	}

    public function index()
    {
        try{
         $Sim = $this->Sim->Obtener();
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
    public function create(Request $req)
    {       
             
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         try {
            Simuno::create([
                'serie'=>$request->get('serie'),
                'keyread'=>$request->get('keyread'),
                'keywrite'=>$request->get('keywrite'),                
                'lat'=>$request->get('lat'),
                'lng'=>$request->get('lng'),
        ]);
          // newDatos([$request]);
           return response()->json(['Datos'=>"Datos guardados",'Mensaje'=>$request->all()],200); 
       } catch (Exception $e) {
           return response()->json(['message'=>$e],404); 
       } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
          $Sim=$this->Sim->Datos($id);
            if (!$Sim) return response()->json(['Mensaje'=>"error"],404);
            return response()->json(['Mensaje'=>$Sim],200);
        } catch (Exception $e) {
            return response()->json(['Mensaje'=>$e],404);
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
        try {
            
        } catch (Exception $e) {
            
        }
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
