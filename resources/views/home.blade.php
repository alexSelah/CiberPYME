@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('text.dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('text.bienvenidoUS',['username'=>$username]) }}

                    <div class="row">
                    {{-- Fase 1 - Activos --}}
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="images/assets.jpg" alt="Fase 1 - Activos">
                            <div class="card-body">
                                <h5 class="card-title">{{ __('text.HomeActivos') }}</h5>
                                <p class="card-text">{{ __('text.descHomeActivos') }}</p>
                                <a class="btn btn-primary" href="{{ url('activos') }}">{{ __('text.btnHomeActivos') }}</a>
                            </div>
                            </div>
                        </div>
                        {{-- Fase 2 - Amenazas --}}
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="images/risk.jpg" alt="Fase 2 - Amenazas">
                            <div class="card-body">
                                <h5 class="card-title">{{ __('text.HomeMenaces') }}</h5>
                                <p class="card-text">{{ __('text.descHomeMenaces') }}</p>
                                <a class="btn btn-primary" href="{{ url('amenazas') }}">{{ __('text.btnHomeMenaces') }}</a>
                            </div>
                            </div>
                        </div>
                        {{-- Fase 3 - Salvaguardas y Vulnerabilidades --}}
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="images/vulnandsalv.jpg" alt="Fase 3 - Salvaguardas y Vulnerabilidades">
                            <div class="card-body">
                                <h5 class="card-title">{{ __('text.HomeVulneSalva') }}</h5>
                                <p class="card-text">{{ __('text.descHomeVulneSalva') }}</p>
                                <a class="btn btn-primary" href="{{ url('salvavulnera') }}">{{ __('text.btnHomeVulneSalva') }}</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        {{-- Fase 4 - Calculos --}}
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="images/calculator.jpg" alt="Fase 4 - Calculos">
                            <div class="card-body">
                                <h5 class="card-title">{{ __('text.HomeCalculo') }}</h5>
                                <p class="card-text">{{ __('text.descHomeCalculo') }}</p>
                                <a class="btn btn-primary" href="{{ url('calculo') }}">{{ __('text.btnHomeCalculo') }}</a>
                            </div>
                            </div>
                        </div>
                        {{-- Fase 5 - Analisis --}}
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="images/computeranalisys.jpg" alt="Fase 5 - Analisis">
                            <div class="card-body">
                                <h5 class="card-title">{{ __('text.HomeAnalisis') }}</h5>
                                <p class="card-text">{{ __('text.descHomeAnalisis') }}</p>
                                <a class="btn btn-primary" href="{{ url('analisis') }}">{{ __('text.btnHomeAnalisis') }}</a>
                            </div>
                            </div>
                        </div>
                            {{-- Fase 6 - Resultados --}}
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="images/decision.jpg" alt="Fase 6 - Resultados">
                            <div class="card-body">
                                <h5 class="card-title">{{ __('text.HomeDecision') }}</h5>
                                <p class="card-text">{{ __('text.descHomeDecision') }}</p>
                                <a class="btn btn-primary" href="{{ url('decisiones') }}">{{ __('text.btnHomeDecision') }}</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
