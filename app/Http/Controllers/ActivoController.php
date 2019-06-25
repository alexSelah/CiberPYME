<?php

namespace CiberPYME\Http\Controllers;

use CiberPYME\Activo;
use Illuminate\Http\Request;
use yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;


class ActivoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //$user = auth()->user();
        // //dd($user);
        
        //$activos = \CiberPYME\Activo::with(array('amenazas',function(Builder $query){
        //    $query->with('salvavulneras')->get();
        //}))->get();
                          //=>function (Builder $query) {$query->select('tipo','descripcion')}

        //dd($activos);


        return view('activos/list_activos');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexApi(Request $request)
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

        if($request->input('identificador')==null){
            $request->session()->flash('alert-danger', Lang::get('text.saveError'));
        }else{
            $user = auth()->user();
            $activos = Activo::where('user_id',$user->id);
           //dd($request);
           $existe = $activos
                ->where('identificador', $request->input('identificador'))
                ->where('user_id', $user->id)
           ->first();
           if ($existe) {
               $request->session()->flash('alert-danger', Lang::get('text.saveDuplicate')); 
           }else{
                $act = new Activo();
                $act->identificador = $request->input('identificador');
                $act->descripcion = $request->input('descripcion');
                $act->user_id = $user->id;
                $act->save();
                $request->session()->flash('alert-success', Lang::get('text.saveSuccess')); 
           }
        }
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \CiberPYME\Activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function show(Activo $activo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \CiberPYME\Activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function edit(Activo $activo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \CiberPYME\Activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activo $activo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \CiberPYME\Activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Activo $activo)
    {
        //dd($activo);

        $user = auth()->user();
        //dd($user);
        //
        if($activo->user_id===$user->id){
            $activo->delete();
            $request->session()->flash('alert-success', Lang::get('text.deleteSuccess')); 

        }

        return $this->index();
    }
}
