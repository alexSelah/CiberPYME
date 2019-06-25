@extends('layouts.app')

@section('content')

<div style="display:none">
    <div id="printThis">
        <h3>{{ __('text.excelDecisionesText')}}</h3>
        <table border="1" padding="2" spacing="2" id="tablaCalculos">
            <thead>
                <tr>
                    <th style="text-align: left !importnat">{{ __('text.colDecActivoAmenaza')}}</th>
                    <th style="text-align: left !importnat">{{ __('text.colCalculoDescAmenaza')}}</th>
                    <th style="text-align: left !importnat">{{ __('text.colAnalisisRiesgo')}}</th>
                    <th style="text-align: left !importnat">{{ __('text.colDecisionEstrategia')}}</th>
                    <th style="text-align: left !importnat">{{ __('text.colDecisionDescripcion')}}</th>
                </tr>
            </thead> 
            <tbody>
                @foreach ($riesgos as $riesgo)
                <tr @if($riesgo['riesgo']<$riesgo['indiceR'] || $riesgo['estrategia']=="") echo style="display:none !important" @endif>
                    <td style="padding: 2px !important">{{$riesgo['id_activo']}} / {{$riesgo['amenaza_id']}}</td>
                    <td style="padding: 2px !important">{{$riesgo['amenaza_desc']}}</td>
                    <td style="padding: 2px !important">{{$riesgo['riesgo']}}</td>
                    <td style="padding: 2px !important">{{$riesgo['estrategia']}}</td>
                    <td style="padding: 2px !important">{{$riesgo['descripcion']}}</td>
                @endforeach
                </tr>  
            </tbody>
        </table> 
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('text.F6decisiones')}}</div>
                    <div class="card-body">
                        {{ __('text.F6text') }}
                        <br/><hr> 
                            @if(!$mostrar)
                                <form class="form-inline" action="{{ url('/decisiones/show') }}" method="POST">
                                    {{ csrf_field() }}
                                <div class="form-group mb-3 col-md-2">
                                    <input type="text" readonly class="form-control-plaintext" value="{{ __('text.nivelR')}}" >
                                </div>
                                <div class="form-group mx-sm-3 mb-3">
                                <select class="select" id="selectRlvl" name ="selectRlvl"data-live-search="true" data-size="9">
                                    <option value="1">
                                        1
                                    </option>
                                    <option value="2">
                                        2
                                    </option>
                                    <option value="3">
                                        3
                                    </option>
                                    <option value="4">
                                        4
                                    </option>
                                    <option value="5">
                                        5
                                    </option>
                                    <option value="6">
                                        6
                                    </option>
                                    <option value="7">
                                        7
                                    </option>
                                    <option value="8">
                                        8
                                    </option>
                                    <option value="9">
                                        9
                                    </option>                          
                                </select>
                                </div>
                                <button type="submit" disabled class="form-group btn btn-secondary btn-sm mb-3">{{ __('text.cambiarNivelR')}}</button>
                                </form>
                                <br>
                                <table class="table table-striped table-bordered text-center my-table" id="tablaCalculos">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="col-md-1">{{ __('text.colDecActivoAmenaza')}}</th>
                                            <th class="col-md-2">{{ __('text.colCalculoDescAmenaza')}}</th>
                                            <th class="col-md-1">{{ __('text.colAnalisisRiesgo')}}</th>
                                            <th class="col-md-1">{{ __('text.colDecisionEstrategia')}}</th>
                                            <th class="col-md-6">{{ __('text.colDecisionDescripcion')}}</th>
                                            <th class="col-md-1">{{ __('text.lblAction')}}</th>
                                        </tr>
                                    </thead> 
                                    <tbody>
                                        <tr>
                                        <td class="align-middle" colspan="6">{{ __('text.tablaVacia')}}</td>
                                        </tr>  
                                    </tbody>
                                </table>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                                        {{ __('text.nuevaDecision')}}
                                    </button>
                                </div> 

                            @else
                                <form class="form-inline" action="{{ url('/decisiones/show') }}" method="POST">
                                    {{ csrf_field() }}
                                <div class="form-group mb-2 col-md-2">
                                    <input type="text" readonly class="form-control-plaintext" value="{{ __('text.nivelR')}}" >
                                </div>
                                <div class="form-group mx-sm-3  mb-2">
                                <select class="select" id="selectRlvl" name ="selectRlvl"data-live-search="true" data-size="9">
                                    <option value="1" @if($riesgos[0]['indiceR']=='1') echo selected @endif >
                                        1
                                    </option>
                                    <option value="2" @if($riesgos[0]['indiceR']=='2') echo selected @endif >
                                        2
                                    </option>
                                    <option value="3" @if($riesgos[0]['indiceR']=='3') echo selected @endif >
                                        3
                                    </option>
                                    <option value="4" @if($riesgos[0]['indiceR']=='4') echo selected @endif >
                                        4
                                    </option>
                                    <option value="5" @if($riesgos[0]['indiceR']=='5') echo selected @endif >
                                        5
                                    </option>
                                    <option value="6" @if($riesgos[0]['indiceR']=='6') echo selected @endif >
                                        6
                                    </option>
                                    <option value="7" @if($riesgos[0]['indiceR']=='7') echo selected @endif >
                                        7
                                    </option>
                                    <option value="8" @if($riesgos[0]['indiceR']=='8') echo selected @endif >
                                        8
                                    </option>
                                    <option value="9" @if($riesgos[0]['indiceR']=='9') echo selected @endif >
                                        9
                                    </option>                          
                                </select>
                                </div>
                                <button type="submit" class="form-group btn btn-primary mb-2  btn-sm">{{ __('text.cambiarNivelR')}}</button>
                                <button type="button" class="ml-5 form-group btn btn-info mb-2  btn-sm" id="printPDF">{{ __('text.imprPDF')}}</button>

                                </form>
                                <br>
                                <table class="table table-striped table-bordered text-center my-table" id="tablaCalculos">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="col-md-1">{{ __('text.colDecActivoAmenaza')}}</th>
                                            <th class="col-md-2">{{ __('text.colCalculoDescAmenaza')}}</th>
                                            <th class="col-md-1">{{ __('text.colAnalisisRiesgo')}}</th>
                                            <th class="col-md-1">{{ __('text.colDecisionEstrategia')}}</th>
                                            <th class="col-md-6">{{ __('text.colDecisionDescripcion')}}</th>
                                            <th class="col-md-1">{{ __('text.lblAction')}}</th>
                                        </tr>
                                    </thead> 
                                    <tbody>
                                        @foreach ($riesgos as $riesgo)
                                        <tr @if($riesgo['riesgo']<$riesgo['indiceR'] || $riesgo['estrategia']=="") echo style="display:none !important" @endif>
                                            <td style="display:none !important;"><input type="text" id="id[]" name="id[]" value="{{$riesgo['id']}}"></td>
                                            <td class="align-middle">{{$riesgo['id_activo']}} / {{$riesgo['amenaza_id']}}</td>
                                            <td class="align-middle">{{$riesgo['amenaza_desc']}}</td>
                                            <td class="align-middle">{{$riesgo['riesgo']}}</td>
                                            <td class="align-middle">{{$riesgo['estrategia']}}</td>
                                            <td class="align-middle">{{$riesgo['descripcion']}}</td>
                                            <td class="align-middle">
                                                <a href="{{url('/decisiones/delete')}}/{{$riesgo['id']}}"><input type="button" class="btn btn-danger" value="{{ __('text.delAsset')}}" onclick="return confirm('{{ __('text.QuestionSuredelete')}}')" /></a>
                                            </td>                                        
                                            </select></td>
                                        @endforeach
                                        </tr>  
                                    </tbody>
                                </table> 


                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                                        {{ __('text.nuevaDecision')}}
                                    </button>

                                    {{----}}
                                </div>   

                            @endif

                                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <br/>

    <footer class="page-footer font-small cyan darken-3">
        <nav aria-label="...">
          <ul class="pagination pagination-sm justify-content-center">
            <li class="page-item"><a class="page-link" href="{{ url('home') }}">{{ __('text.home')}}</a></li>
            <li class="page-item">
              <a class="page-link" href="{{ url('analisis') }}">&laquo; {{ __('text.btnPrevious')}}</a>
            </li>
            <li class="page-item"><a class="page-link" href="{{ url('activos') }}">1</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('amenazas') }}">2</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('salvavulnera') }}">3</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('calculo') }}">4</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('analisis') }}">5</a></li>
            <li class="page-item active">
              <span class="page-link">
                6
                <span class="sr-only">(current)</span>
              </span>
            </li>
            <li class="page-item">
              <a class="page-link sr-only" href="#">{{ __('text.btnNext')}} &raquo;</a>
            </li>
          </ul>
        </nav>
        <a href="{{ url('home') }}" class="previous" style="background-color: #f1f1f1; color: black"></a>
    </footer>
    <!-- Footer -->

</div>


<!-- Modal Nueva Amenaza-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="container-fluid">
        <!-- Modal content-->
        <div class="modal-content col-md-12">
          <div class="modal-body">
                <p class="">{{ __('text.nuevaDecision') }}</p>
                <p class="">{{ __('text.nuevaDecisionTxt') }}</p>
                <hr>
                <form action="{{ url('/decisiones/create') }}" method="POST">
                    {{ csrf_field() }}

                      <div class="form-group row">
                        <label for="inputIdent" class="col-sm-2 col-form-label">{{ __('text.estDecision')}}</label>
                        <div class="col-sm-10">
                          <select class="form-control" id="estrategia" name="estrategia" style="width: 100%">
                                <option value="{{ __('text.estEliminar')}}">{{ __('text.estEliminarTxt')}}</option>
                                <option value="{{ __('text.esttranfer')}}">{{ __('text.esttranferTxt')}}</option>
                                <option value="{{ __('text.estAsumir')}}">{{ __('text.estAsumirTxt')}}</option>
                                <option value="{{ __('text.estImplant')}}">{{ __('text.estImplantTxt')}}</option>
                            </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputDesc" class="col-sm-2 col-form-label">{{ __('text.descDecision')}}</label>
                        <div class="col-sm-10">
                            <div class="md-form">
                              <i class="fas fa-pencil-alt prefix"></i>
                              <textarea id="form10" class="md-textarea form-control" name='descripcion' id='descripcion' rows="3"></textarea>
                            </div>
                        </div>
                      </div>

                      <div class="form-group row"> 
                        <label for="inputActiv" class="col-sm-2 col-form-label">{{ __('text.colDecActivoAmenaza')}}</label>
                        <div class="col-sm-10 select-outline">
                            <select class="js-example-basic-single custom-select-lg" id="idRiesgo" name="idRiesgo" style="width: 100%">
                                @foreach ($riesgos as $riesgo)
                                    <option value="{{$riesgo['riesgoId']}}">{{$riesgo['id_activo']}} / {{$riesgo['amenaza_id']}} - {{$riesgo['amenaza_desc']}}</option>
                                @endforeach
                            </select>

                        </div>
                      </div>
                      <br/>
                      <hr>
                    <div class="form-group row justify-content-md-center">
                            <div class="col col-lg-2">
                                <input class="btn btn-success form-control" type="submit" value="{{ __('text.addAsset')}}"/>
                            </div>
                            <div class="col-md-auto">
                            </div>
                            <div class="col col-lg-2">
                                <button type="button" class="btn btn-secondary form-control" data-dismiss="modal">
                                    {{ __('text.btnClose')}}
                                </button>
                            </div>
                    </div>
                </form>
          </div>
        </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    

    $(document).ready(function(){
        $('.js-example-basic-single').select2();
        $('#printPDF').click(function(){
            printJS({printable: 'printThis', type: 'html', documentTitle:'CiberPYME'});
        });
    });

</script>
@endsection
