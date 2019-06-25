<?php

namespace CiberPYME\Http\Controllers;

use CiberPYME\Decision;
use Illuminate\Http\Request;
use CiberPYME\Amenaza;
use CiberPYME\Activo;
use CiberPYME\Riesgo;
use CiberPYME\Salvavulnera;
use Illuminate\Support\Arr;
use yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Collection;

class DecisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->indexDecisiones();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexDecisiones($indiceR = '1')
    {
        if( ! empty($indiceR)){
            if ($indiceR > '0' or $indiceR < '9') {
                        $RiesgoLvl = $indiceR;
                    }
            else {
            $RiesgoLvl ='1';
            }
        }
        else {
            $RiesgoLvl ='1';
        }
         

        $activos = Activo::where('user_id',auth()->user()->id)->get();
        //dd($activos);
        
        $itemsSV = array();
        $itemsSV[] = array('id'=>null,'tipo'=>null,'descripcion'=>null,'id_amenaza'=>null);
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
        foreach ($grouped as $key => $value) {
            $ArraySalvavulneras[] = array ('id_amenaza'=> $key ,'totalSV' => 0, 'Salvaguardas' => 0, 'Vulnerabilidades' => 0 );
            foreach ($value as $key2 => $value2) {
                if($value2 == 'S'){
                    $ArraySalvavulneras[$key2]['Salvaguardas'] = $ArraySalvavulneras[$key2]['Salvaguardas'] + 1;
                    $ArraySalvavulneras[$key2]['totalSV'] = $ArraySalvavulneras[$key2]['totalSV'] - 1;
                }
                if($value2 == 'V'){
                    $ArraySalvavulneras[$key2]['Vulnerabilidades'] = $ArraySalvavulneras[$key2]['Vulnerabilidades'] + 1;
                    $ArraySalvavulneras[$key2]['totalSV'] = $ArraySalvavulneras[$key2]['totalSV'] + 1;
                }
            }
        }
        //dd($ArraySalvavulneras);
        //$ArraySalvavulneras[] = array('id_amenaza'=>null ,'totalSV' => 0, 'Salvaguardas' => 0, 'Vulnerabilidades' => 0);

        $resultado = array();
        $itemsSV = array();
        foreach ($activos as $activo) {

            $amenazas = $activo->amenazas()->get();
            foreach ($amenazas as $amenaza) {
                $riesgos = $amenaza->riesgo()->get();
                foreach ($riesgos as $key => $riesgo) {
                    $riesgoCalculado = ($riesgo->probabilidad * $riesgo->impacto) + $ArraySalvavulneras[$key]['totalSV'];
                    if($riesgoCalculado < 1){
                        $riesgoCalculado = 1;
                    }
                    if($riesgoCalculado > 9){
                        $riesgoCalculado = 9;
                    }
                    //dd($riesgo->impacto);
                    $svItemsTXT = Lang::get('text.txtS').$ArraySalvavulneras[$key]['Salvaguardas']." ".Lang::get('text.txtV').$ArraySalvavulneras[$key]['Vulnerabilidades'];

                    $decisiones = $riesgo->decisiones()->get();
                    
                    if (empty($decisiones[0])){
                            $resultado[]= array(
                                'id' => null,
                                'id_activo' => $activo->identificador,
                                'amenaza_id' => $amenaza->id_amenaza,
                                'amenaza_desc' => $amenaza->descripcion,
                                'riesgoId' => $riesgo->id,
                                'riesgo' => $riesgoCalculado,
                                'estrategia' => null,
                                'descripcion' => null, 
                                'indiceR' => $RiesgoLvl   
                            );
                            break;
                    }else{
                        foreach ($decisiones as $decision) {
                            $tipo = Lang::get('text.estNoesp');
                            if($decision->estrategia=='I'){
                                $tipo = Lang::get('text.estImplant');
                            }
                            if($decision->estrategia=='E'){
                                $tipo = Lang::get('text.estEliminar');
                            }
                            if($decision->estrategia=='A'){
                                $tipo = Lang::get('text.estAsumir');
                            }
                            if($decision->estrategia=='T'){
                                $tipo = Lang::get('text.esttranfer');
                            }
                            $resultado[] = array(
                                'id' => $decision->id,
                                'id_activo' => $activo->identificador,
                                'amenaza_id' => $amenaza->id_amenaza,
                                'amenaza_desc' => $amenaza->descripcion,
                                'riesgoId' => $riesgo->id,
                                'riesgo' => $riesgoCalculado,
                                'estrategia' => $tipo,
                                'descripcion' => $decision->descripcion, 
                                'indiceR' => $RiesgoLvl   
                            );
                        }
                    }
               } 
            }
        }
        $mostrar=false;
        foreach ($resultado as $value) {
            if($value['id']){
                $mostrar=true;
            }
        }

        $respuesta = array(
            'mostrar'=>$mostrar,
            'riesgos'=>$resultado,
        );

        //dd($respuesta);
        return view('decision/list_decision',$respuesta);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \CiberPYME\Riesgo  $riesgo
     * @return \Illuminate\Http\Response
     */
    public function showDecisiones(Request $request)
    {
        //dd($request);
        return $this->indexDecisiones($request->selectRlvl);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->input('estrategia') || $request->input('idRiesgo')==null){
            $request->session()->flash('alert-danger', Lang::get('text.saveError'));
        }else{

            $user = auth()->user();
            $activosId = Activo::where('user_id',$user->id)->pluck('id');
            $amenazas = Amenaza::whereIn('activo_id',$activosId)->pluck('id');
            $riesgos = Riesgo::whereIn('amenaza_id', $amenazas)->get();

            //Conversion de tipos
            $tipo='I';
            if($request->input('estrategia')==Lang::get('text.estEliminar')){
                $tipo = 'E';
            }
            if($request->input('estrategia')==Lang::get('text.estAsumir')){
                $tipo = 'A';
            }
            if($request->input('estrategia')==Lang::get('text.esttranfer')){
                $tipo = 'T';
            }
            if($decision->estrategia=='N'){
                $tipo = Lang::get('text.estNoesp');
            }

           
           //dd($request);
           $existe = $riesgos
                ->where('tipo', $request->input('estrategia'))
                ->where('descripcion', $request->input('descripcion'))
                ->where('riesgo_id', $request->input('idRiesgo'))
           ->first();
           if ($existe) {
               $request->session()->flash('alert-danger', Lang::get('text.saveDuplicate')); 
           }else{
                $idRiesgo = $request->input('idRiesgo');
                $estrategia = $request->input('estrategia');
                $descripcion = $request->input('descripcion');

                $decision = Decision::where('riesgo_id',$idRiesgo)->first();
                //dd($decision);
                if ($decision == null){
                    $decision=new Decision();
                    $decision->riesgo_id = $idRiesgo;
                }
                $decision->estrategia = $estrategia;
                $decision->descripcion = $descripcion;
                $decision->save();
               $request->session()->flash('alert-success', Lang::get('text.saveSuccess')); 
           }
        }
       
       return $this->index();
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \CiberPYME\Decision  $decision
     * @return \Illuminate\Http\Response
     */
    public function show(Decision $decision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \CiberPYME\Decision  $decision
     * @return \Illuminate\Http\Response
     */
    public function edit(Decision $decision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \CiberPYME\Decision  $decision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Decision $decision)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \CiberPYME\Decision  $decision
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Decision $decision)
    {
        //dd($decision);
        $user = auth()->user();
        $activosId = Activo::where('user_id',$user->id)->pluck('id');
        $amenazasId = Amenaza::whereIn('activo_id',$activosId)->pluck('id');
        $riesgosId = Riesgo::whereIn('amenaza_id',$amenazasId)->pluck('id');
        $decisiones = Decision::whereIn('riesgo_id',$riesgosId)->pluck('id');

        if($decisiones->contains($decision->id) ){
            $request->session()->flash('alert-success', Lang::get('text.deleteSuccess'));
            $decision->delete();
        }

        return $this->index();
    }
}
