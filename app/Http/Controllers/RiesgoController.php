<?php

namespace CiberPYME\Http\Controllers;

use CiberPYME\Riesgo;
use Illuminate\Http\Request;
use CiberPYME\Amenaza;
use CiberPYME\Activo;
use CiberPYME\Salvavulnera;
use CiberPYME\Decision;
use Illuminate\Support\Arr;
use yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Collection;

class RiesgoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activos = Activo::where('user_id',auth()->user()->id)->get();
        //dd($activos);
        $resultado = array();
        foreach ($activos as $activo) {
            $amenazas = $activo->amenazas()->get();
            foreach ($amenazas as $amenaza) {
                //dd($amenaza);
                $riesgos = $amenaza->riesgo()->get();
                if (empty($riesgos[0])){
                    $resultado[] = array(
                        'id' => "",
                        'id_amenaza' => $amenaza->id_amenaza,
                        'descripcion' => $amenaza->descripcion,
                        'identificador' => $activo->identificador,
                        'probabilidad' =>Lang::get('text.prBaja'),
                        'impacto' => Lang::get('text.imBajo')
                    );
                }else{
                    foreach ($riesgos as $riesgo) {
                        //dd($riesgo);
                        switch($riesgo->probabilidad){
                            case('1'):
                                $probab = Lang::get('text.prBaja');
                                break;
                            case('2'):
                                $probab = Lang::get('text.prMedia');
                                break;
                            case('3'):
                                $probab = Lang::get('text.prAlta');
                                break;
                            default:
                                $probab = Lang::get('text.prBaja');
                        };
                        switch($riesgo->impacto){
                            case('1'):
                                $impac = Lang::get('text.imBajo');
                                break;
                            case('2'):
                                $impac = Lang::get('text.imMedio');
                                break;
                            case('3'):
                                $impac = Lang::get('text.imAlto');
                                break;
                            default:
                                $impac = Lang::get('text.imBajo');
                        }
                        $resultado[] = array(
                            'id' => $riesgo->id,
                            'id_amenaza' => $amenaza->id_amenaza,
                            'descripcion' => $amenaza->descripcion,
                            'identificador' => $activo->identificador,
                            'probabilidad' =>$probab,
                            'impacto' => $impac   
                        );
                    }
               } 
            }
        }



        $respuesta = array(
            'calculos'=>$resultado,
        );

        //dd($respuesta);
        return view('calculo/list_calculo',$respuesta);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAnalisis($indiceR = '4')
    {

        if( ! empty($indiceR)){
            if ($indiceR > '0' or $indiceR < '9') {
                        $RiesgoLvl = $indiceR;
                    }
            else {
            $RiesgoLvl ='4';
            }
        }
        else {
            $RiesgoLvl ='4';
        }
         

        $activos = Activo::where('user_id',auth()->user()->id)->get();
        //dd($activos);
        
        $itemsSV = array();
        foreach ($activos as $activo) {
            $amenazas = $activo->amenazas()->get();
            foreach ($amenazas as $amenaza) {
                $salvavulneras = $amenaza->salvavulneras()->get();
                foreach ($salvavulneras as $salvavulnera) {
                    $itemsSV[] = array(
                        'id' => $salvavulnera->id,
                        'tipo' => $salvavulnera->tipo,
                        'descripcion' => $salvavulnera->descripcion,
                        'id_amenaza' => $amenaza->id_amenaza    
                    );
                }
            }
        }
        $collection = Collection::make($itemsSV);
        $grouped = $collection->mapToGroups(function ($item, $key) {
            return [$item['id_amenaza'] => $item['tipo']];
        });
        //$grouped->toArray();
        //dd($grouped);
        $arraySalvavulneras = Collection::make();
        foreach ($grouped as $key => $value) {
            //dd($grouped);
            $objeto=Array ('id_amenaza' => $key,'totalSV' =>0, 'Salvaguardas' =>0, 'Vulnerabilidades'=>0);
            foreach ($value as $value2) {
                if($value2 === 'S'){
                    $objeto['Salvaguardas'] = $objeto['Salvaguardas'] + 1;
                    $objeto['Vulnerabilidades'] = $objeto['Vulnerabilidades'];
                    $objeto['totalSV'] = $objeto['totalSV'] - 1;
                }
                if($value2 === 'V'){
                    $objeto['Salvaguardas'] = $objeto['Salvaguardas'];
                    $objeto['Vulnerabilidades'] = $objeto['Vulnerabilidades'] + 1;
                    $objeto['totalSV'] = $objeto['totalSV'] + 1;
                }
            }
            //dd($objeto);
            $arraySalvavulneras->push($objeto);
        }
        //dd($arraySalvavulneras);

        $resultado = array();
        $itemsSV = array();
        foreach ($activos as $activo) {
            $amenazas = $activo->amenazas()->get();
            foreach ($amenazas as $amenaza) {
                $riesgos = $amenaza->riesgo()->get();
                 if (empty($riesgos[0])){
                    $resultado[] = array(
                        'id' => "",
                        'id_amenaza' => $amenaza->id_amenaza,
                        'descripcion' => $amenaza->descripcion,
                        'identificador' => $activo->identificador,
                        'probabilidad' =>Lang::get('text.prBaja'),
                        'impacto' => Lang::get('text.imBajo')
                    );
                }else{
                    foreach ($riesgos as $riesgo) {
                        switch($riesgo->probabilidad){
                            case('1'):
                                $probab = Lang::get('text.prBaja');
                                break;
                            case('2'):
                                $probab = Lang::get('text.prMedia');
                                break;
                            case('3'):
                                $probab = Lang::get('text.prAlta');
                                break;
                            default:
                                $probab = Lang::get('text.prBaja');
                        }
                        switch($riesgo->impacto){
                            case('1'):
                                $impac = Lang::get('text.imBajo');
                                break;
                            case('2'):
                                $impac = Lang::get('text.imMedio');
                                break;
                            case('3'):
                                $impac = Lang::get('text.imAlto');
                                break;
                            default:
                                $impac = Lang::get('text.imBajo');
                        }

                        $asv =Collection::make( $arraySalvavulneras->where('id_amenaza',$amenaza->id_amenaza));
                        //dd($asv->first()['totalSV']);

                        $riesgoCalculado = ($riesgo->probabilidad * $riesgo->impacto) + $asv->first()['totalSV'];
                        //dd($riesgoCalculado);
                        if($riesgoCalculado < 1){
                            $riesgoCalculado = 1;
                        }
                        if($riesgoCalculado > 9){
                            $riesgoCalculado = 9;
                        }
                        //dd($riesgo->impacto);
                        //
                        //dd($asv);
                        if($asv->first()['Salvaguardas']==null){
                            $salvas=0;
                        }else{
                            $salvas=$asv->first()['Salvaguardas'];
                        }

                        if($asv->first()['Vulnerabilidades']==null){
                            $vulneras=0;
                        }else{
                            $vulneras=$asv->first()['Vulnerabilidades'];
                        }
                        if ($asv!=null){
                            $svItemsTXT = Lang::get('text.txtS').$salvas." ".Lang::get('text.txtV').$vulneras;
                        }else{
                            $svItemsTXT = Lang::get('text.txtS').'0'." ".Lang::get('text.txtV').'0';
                        }
                        //dd($svItemsTXT);
                        $resultado[] = array(
                            'id' => $amenaza->id,
                            'id_amenaza' => $amenaza->id_amenaza,
                            'descripcion' => $amenaza->descripcion,
                            'identificador' => $activo->identificador,
                            'probabilidad' => $probab,
                            'impacto' => $impac,
                            'sv' => $svItemsTXT,
                            'riesgo' => $riesgoCalculado,
                            'indiceR' => $RiesgoLvl    
                        );
                   } 
               }
            }
        }



        $respuesta = array(
            'riesgos'=>$resultado,
        );

        if($respuesta['riesgos']==null){
           $resultado[] = array(
                            'id' => "",
                            'id_amenaza' => "",
                            'descripcion' => "",
                            'identificador' => "",
                            'probabilidad' => "",
                            'impacto' => "",
                            'sv' => "",
                            'riesgo' => "",
                            'indiceR' => $RiesgoLvl   
            );
           $respuesta = array(
            'riesgos'=>$resultado,
            );
        }

        //dd($respuesta);
        return view('analisis/list_analisis',$respuesta);
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
        //dd($request);
        $ids = collect($request['id']);
        $idsAmenazas = collect($request['id_amenaza']);
        $probabilidad = collect($request['probabilidad']);
        $impacto= collect($request['impacto']);
        $longitud = $ids->count();
        
        for ($i=0; $i < $longitud; $i++) { 
            $amenaza = Amenaza::where('id_amenaza',$idsAmenazas->get($i))->first();
            $id=$ids->get($i);
            //dd($riesgo);
            if ($id == null){
                $riesgo=new Riesgo();
                $riesgo->amenaza_id = $amenaza->id;
            }else{
                $riesgo=$amenaza->riesgo()->first();
            }
            //dd($riesgo);
            $riesgo->probabilidad = $probabilidad->get($i);
            $riesgo->impacto = $impacto->get($i);
            //d($riesgo);
            $riesgo->save();
        }
       $request->session()->flash('alert-success', Lang::get('text.saveSuccess')); 
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \CiberPYME\Riesgo  $riesgo
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //dd($request);
        return $this->indexAnalisis($request->selectRlvl);
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \CiberPYME\Riesgo  $riesgo
     * @return \Illuminate\Http\Response
     */
    public function edit(Riesgo $riesgo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \CiberPYME\Riesgo  $riesgo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Riesgo $riesgo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \CiberPYME\Riesgo  $riesgo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Riesgo $riesgo)
    {
        //
    }
}
