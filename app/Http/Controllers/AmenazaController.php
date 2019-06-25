<?php

namespace CiberPYME\Http\Controllers;

use CiberPYME\Amenaza;
use CiberPYME\Activo;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;



class AmenazaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $activos = Activo::where('user_id',auth()->user()->id)->get();
        $respuesta = array(
            'activos'=>$activos,
        );
        return view('amenazas/list_amenazas',$respuesta);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexApi(Request $request)
    {
         $user = auth()->user();
        // //dd($user);
        
         $activos = Activo::where('user_id',$user->id)->get();
         //dd($activos);

        $resultado = array();
        foreach ($activos as $activo) {
            $amenazas = $activo->amenazas()->get();
            foreach ($amenazas as $amenaza) {
                $resultado[] = array(
                    'id' => $amenaza->id,
                    'id_amenaza' => $amenaza->id_amenaza,
                    'descripcion' => $amenaza->descripcion,
                    'identificador' => $activo->identificador    
                );
                
            }
        }


        return Datatables::of($resultado)->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexApiActivos(Request $request)
    {
        $user = auth()->user();
        //dd($user);

        $activos = Activo::where('user_id',$user->id)->get();
        //dd($activos);
        $respuesta = array(
            'activos'=>$activos,
        );

        return Datatables::of($activos)->make(true);
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
        if($request->input('inputIdent')==null || $request->input('activoselect')==null){
            $request->session()->flash('alert-danger', Lang::get('text.saveError'));
        }
        else{
            $user = auth()->user();
            $activosId = Activo::where('user_id',$user->id)->pluck('id');
            $amenazas = Amenaza::whereIn('activo_id',$activosId)->pluck('id');
           
           $existe = $amenazas
                ->where('id_amenaza', $request->input('inputIdent'))
                ->where('activo_id', $request->input('activoselect'))
           ->first();
           if ($existe) {
               $request->session()->flash('alert-danger', Lang::get('text.saveDuplicate')); 
           }else{
                $amenaza = new Amenaza();
                $amenaza->id_amenaza = $request->input('inputIdent');
                $amenaza->descripcion = $request->input('inputDesc');
                $amenaza->activo_id = $request->input('activoselect');
                $amenaza->save();
                $request->session()->flash('alert-success', Lang::get('text.saveSuccess')); 
           }
       }
       return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \CiberPYME\Amenazas  $amenazas
     * @return \Illuminate\Http\Response
     */
    public function show(Amenazas $amenazas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \CiberPYME\Amenazas  $amenazas
     * @return \Illuminate\Http\Response
     */
    public function edit(Amenazas $amenazas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \CiberPYME\Amenazas  $amenazas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Amenazas $amenazas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \CiberPYME\Amenazas  $amenazas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Amenaza $amenaza)
    {
        $user = auth()->user();
        $activosId = Activo::where('user_id',$user->id)->pluck('id');
        $amenazas = Amenaza::whereIn('activo_id',$activosId)->pluck('id');

        if($amenazas->contains($amenaza->id) ){
            $amenaza->delete();
            $request->session()->flash('alert-success', Lang::get('text.deleteSuccess'));
        }

        return $this->index();
    }
}
