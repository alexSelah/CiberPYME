@extends('layouts.app')

@section('content')

<div style="display:none">
    <div id="printThis">
        <h3>{{ __('text.excelAnalisisText')}}</h3>
        <table border="1" padding="2" spacing="2" id="tablaCalculos">
            <thead>
                <tr>
                    <th style="text-align: left !importnat">{{ __('text.colCalculoActivo')}}</th>
                    <th style="text-align: left !importnat">{{ __('text.colCalculoAmenaza')}}</th>
                    <th style="text-align: left !importnat">{{ __('text.colCalculoDescAmenaza')}}</th>
                    <th style="text-align: left !importnat">{{ __('text.colCalculoProbabilidad')}}</th>
                    <th style="text-align: left !importnat">{{ __('text.colCalculoImpacto')}}</th>
                    <th style="text-align: left !importnat">{{ __('text.colAnalisisSV')}}</th>
                    <th style="text-align: left !importnat">{{ __('text.colAnalisisRiesgo')}}</th>
                </tr>
            </thead>  

            <tbody>
                @foreach ($riesgos as $riesgo)
                <tr @if($riesgo['riesgo']>=$riesgo['indiceR']) echo bgcolor="#ff9a85" @endif>
                    <td>{{$riesgo['identificador']}}</td>
                    <td>{{$riesgo['id_amenaza']}}</td>
                    <td>{{$riesgo['descripcion']}}</td>
                    <td>{{$riesgo['probabilidad']}}</td>
                    <td>{{$riesgo['impacto']}}</td>
                    <td>{{$riesgo['sv']}}</td>
                    <td>{{$riesgo['riesgo']}}</td>
                    </select></td>
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
                <div class="card-header">{{ __('text.F5analisis')}}</div>
                    <div class="card-body">
                        {{ __('text.F5text') }}
                        <br/><hr> 
                            
                            <form class="form-inline" action="{{ url('/analisis/show') }}" method="POST">
                                {{ csrf_field() }}
                            <div class="form-group mb-3 col-md-2">
                                <input type="text" readonly class="form-control-plaintext" value="{{ __('text.nivelR')}}" >
                            </div>
                            <div class="form-group mx-sm-3 mb-2">
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
                            <button type="submit" class="form-group btn btn-primary mb-2 btn-sm">{{ __('text.cambiarNivelR')}}</button>
                            <button type="button" class="ml-5 form-group btn btn-info mb-2  btn-sm" id="printPDF">{{ __('text.imprPDF')}}</button>

                            </form>
                            <br>
                            <table class="table table-striped table-bordered display text-center my-table" id="tablaCalculos">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="col-md-2">{{ __('text.colCalculoActivo')}}</th>
                                        <th class="col-md-1">{{ __('text.colCalculoAmenaza')}}</th>
                                        <th class="col-md-6">{{ __('text.colCalculoDescAmenaza')}}</th>
                                        <th class="col-md-1">{{ __('text.colCalculoProbabilidad')}}</th>
                                        <th class="col-md-1">{{ __('text.colCalculoImpacto')}}</th>
                                        <th class="col-md-1">{{ __('text.colAnalisisSV')}}</th>
                                        <th class="col-md-1">{{ __('text.colAnalisisRiesgo')}}</th>
                                    </tr>
                                </thead>  

                                <tbody>
                                	@foreach ($riesgos as $riesgo)
        				            <tr @if($riesgo['riesgo']>=$riesgo['indiceR']) echo style="background: #ff9a85 !important;" @endif>
        				            	<td style="display:none !important;"><input type="text" id="id[]" name="id[]" value="{{$riesgo['id']}}"></td>
        				                <td class="align-middle">{{$riesgo['identificador']}}</td>
        				                <td class="align-middle">{{$riesgo['id_amenaza']}}</td>
        				                <td class="align-middle">{{$riesgo['descripcion']}}</td>
        				                <td class="align-middle">{{$riesgo['probabilidad']}}</td>
                                        <td class="align-middle">{{$riesgo['impacto']}}</td>
                                        <td class="align-middle">{{$riesgo['sv']}}</td>
                                        <td class="align-middle">{{$riesgo['riesgo']}}</td>
        				                </select></td>
                                    @endforeach
        				            </tr>  
                                </tbody>
                            </table>                  
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
              <a class="page-link" href="{{ url('calculo') }}">&laquo; {{ __('text.btnPrevious')}}</a>
            </li>
            <li class="page-item"><a class="page-link" href="{{ url('activos') }}">1</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('amenazas') }}">2</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('salvavulnera') }}">3</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('calculo') }}">4</a></li>
            <li class="page-item active">
              <span class="page-link">
                5
                <span class="sr-only">(current)</span>
              </span>
            </li>
            <li class="page-item"><a class="page-link" href="{{ url('decisiones') }}">6</a></li>
            <li class="page-item">
              <a class="page-link" href="{{ url('decisiones') }}">{{ __('text.btnNext')}} &raquo;</a>
            </li>
          </ul>
        </nav>
        <a href="{{ url('home') }}" class="previous" style="background-color: #f1f1f1; color: black"></a>
        <a href="{{ url('decisiones') }}" class="next" style="background-color: #4CAF50; color: white;"></a>
    </footer>
    <!-- Footer -->

</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#printPDF').click(function(){
            printJS({printable: 'printThis', type: 'html', documentTitle:'CiberPYME'});
        });
    });
</script>

@endsection
