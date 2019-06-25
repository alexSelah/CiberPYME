<?php

namespace CiberPYME\Http\Controllers;

use CiberPYME\Salvavulnera;
use Illuminate\Http\Request;
use CiberPYME\Amenaza;
use CiberPYME\Activo;
use Illuminate\Support\Arr;
use yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;


class SalvavulneraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        // //dd($user);
        $activos = Activo::where('user_id',$user->id)->get();

        $resultado = array();
        foreach ($activos as $activo) {
            $amenazas = $activo->amenazas()->get();
            foreach ($amenazas as $amenaza) {               
                $resultado[] = array(
                    'id' => $amenaza->id,
                    'descripcion' => $amenaza->descripcion,
                    'id_amenaza' => $amenaza->id_amenaza,
                    'activoIdentificador' => $activo->identificador, 
                );
            }
        }

        $respuesta = array(
            'amenazas'=>$resultado,
        );
        //dd($respuesta);
        return view('salvavulnera/list_salvavulnera',$respuesta);
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

        $resultado = array();
        foreach ($activos as $activo) {
            $amenazas = $activo->amenazas()->get();
            foreach ($amenazas as $amenaza) {
                $salvavulneras = $amenaza->salvavulneras()->get();
                foreach ($salvavulneras as $salvavulnera) {
                    if($salvavulnera->tipo=='S'){
                        $tipoSV = Lang::get('text.txtSalvaguarda');
                    }else{
                        $tipoSV = Lang::get('text.txtVulnerabilidad');
                    }
                    $resultado[] = array(
                        'id' => $salvavulnera->id,
                        'tipo' => $tipoSV,
                        'descripcion' => $salvavulnera->descripcion,
                        'id_amenaza' => $amenaza->id_amenaza,
                        'activo_id' => $activo->identificador    
                    );
                }
            }
        }

        return Datatables::of($resultado)->make(true);
         
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
         if($request->amenazaSelect==null || $request->salvavulneraDesc==null){
            $request->session()->flash('alert-danger', Lang::get('text.saveError'));
        }else{

            $user = auth()->user();
            $activosId = Activo::where('user_id',$user->id)->pluck('id');
            $amenazas = Amenaza::whereIn('activo_id',$activosId)->pluck('id');
            $salvavulneras = Salvavulnera::whereIn('amenaza_id', $amenazas)->get();

            $tipoSV = 'S';
            if($request->tipoSalvavulnera==Lang::get('text.txtVulnerabilidad')){
                $tipoSV = 'V';
            }
           
           //dd($request);
           $existe = $salvavulneras
                ->where('tipo', $tipoSV)
                ->where('descripcion', $request->salvavulneraDesc)
                ->where('amenaza_id', $request->amenazaSelect)
           ->first();
           if ($existe) {
               $request->session()->flash('alert-danger', Lang::get('text.saveDuplicate')); 
           }else{
               $salvaV = new Salvavulnera();
               $salvaV->tipo = $tipoSV = 'V';
               $salvaV->descripcion = $request->salvavulneraDesc;
               $salvaV->amenaza_id = $request->amenazaSelect;
               $salvaV->save();
               $request->session()->flash('alert-success', Lang::get('text.saveSuccess')); 
           }
       }
       
       return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \CiberPYME\Salvavulnera  $salvavulnera
     * @return \Illuminate\Http\Response
     */
    public function show(Salvavulnera $salvavulnera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \CiberPYME\Salvavulnera  $salvavulnera
     * @return \Illuminate\Http\Response
     */
    public function edit(Salvavulnera $salvavulnera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \CiberPYME\Salvavulnera  $salvavulnera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salvavulnera $salvavulnera)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \CiberPYME\Salvavulnera  $salvavulnera
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Salvavulnera $salvavulnera)
    {
        $user = auth()->user();
        $activosId = Activo::where('user_id',$user->id)->pluck('id');
        $amenazas = Amenaza::whereIn('activo_id',$activosId)->pluck('id');
        $salvavulneras = Salvavulnera::whereIn('amenaza_id', $amenazas)->pluck('id');

        //dd($salvavulneras);
        if($salvavulneras->contains($salvavulnera->id) ){
            $request->session()->flash('alert-success', Lang::get('text.saveSuccess')); 
            $salvavulnera->delete();
        }
        
        return $this->index();
    }
}
