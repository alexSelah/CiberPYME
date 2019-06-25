@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('text.F4calculo')}}</div>
                    <div class="card-body">
                        {{ __('text.F4text') }}
                        <br/><hr> 
                        <form action="{{ url('/calculo/store') }}" method="POST">
                            {{ csrf_field() }}
                            <table class="table table-striped table-bordered text-center my-table" id="tablaCalculos">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="col-md-2">{{ __('text.colCalculoActivo')}}</th>
                                        <th class="col-md-1">{{ __('text.colCalculoAmenaza')}}</th>
                                        <th class="col-md-6">{{ __('text.colCalculoDescAmenaza')}}</th>
                                        <th class="col-md-1">{{ __('text.colCalculoProbabilidad')}}</th>
                                        <th class="col-md-1">{{ __('text.colCalculoImpacto')}}</th>
                                    </tr>
                                </thead>  

                                <tbody>
                                	@foreach ($calculos as $calculo)
        				            <tr>
        				            	<td style="display:none !important;"><input type="text" id="id[]" name="id[]" value="{{$calculo['id']}}"></td>
        				                <td class="align-middle">{{$calculo['identificador']}}</td>
        				                <td class="align-middle"><input type="text"  readonly class="text-center form-control-plaintext" name="id_amenaza[]" id="id_amenaza[]" value="{{$calculo['id_amenaza']}}"></td>
        				                <td class="align-middle">{{$calculo['descripcion']}}</td>
        				                <td class="align-middle"><select size="1" id="probabilidad[]" name="probabilidad[]">
        				                    <option value="1" @if($calculo['probabilidad']==Lang::get('text.prBaja')) echo selected @endif >
        				                        {{ __('text.prBaja')}}
        				                    </option>
        				                    <option value="2" @if($calculo['probabilidad']==Lang::get('text.prMedia')) echo selected @endif >
        				                        {{ __('text.prMedia')}}
        				                    </option>
        				                    <option value="3" @if($calculo['probabilidad']==Lang::get('text.prAlta')) echo selected @endif >
        				                        {{ __('text.prAlta')}}
        				                    </option>
        				                </select></td>
        				                <td class="align-middle"><select size="1" id="impacto[]" name="impacto[]">
        				                    <option value="1" @if($calculo['impacto']==Lang::get('text.imBajo')) echo selected @endif >
        				                        {{ __('text.imBajo')}}
        				                    </option>
        				                    <option value="2" @if($calculo['impacto']==Lang::get('text.imMedio')) echo selected @endif >
        				                        {{ __('text.imMedio')}}
        				                    </option>
        				                    <option value="3" @if($calculo['impacto']==Lang::get('text.imAlto')) echo selected @endif >
        				                        {{ __('text.imAlto')}}
        				                    </option>
        				                </select></td>
                                    @endforeach
        				            </tr>  
                                </tbody>
                            </table>
                            
                            <div class="dropdown-divider"></div>
                                <button class="btn btn-success form-control btn col-md-2" type="submit">
                                    {{ __('text.btnGuardar')}}
                                </button>                    
                        </form>
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
              <a class="page-link" href="{{ url('salvavulnera') }}">&laquo; {{ __('text.btnPrevious')}}</a>
            </li>
            <li class="page-item"><a class="page-link" href="{{ url('activos') }}">1</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('amenazas') }}">2</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('salvavulnera') }}">3</a></li>

            <li class="page-item active">
              <span class="page-link">
                4
                <span class="sr-only">(current)</span>
              </span>
            </li>
            <li class="page-item"><a class="page-link" href="{{ url('analisis') }}">5</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('decisiones') }}">6</a></li>
            <li class="page-item">
              <a class="page-link" href="{{ url('analisis') }}">{{ __('text.btnNext')}} &raquo;</a>
            </li>
          </ul>
        </nav>
        <a href="/home" class="previous" style="background-color: #f1f1f1; color: black"></a>
        <a href="/calculos" class="next" style="background-color: #4CAF50; color: white;"></a>
    </footer>
    <!-- Footer -->

</div>

@endsection
