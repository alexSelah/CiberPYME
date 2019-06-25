@extends('layouts.appNoAuth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('text.bienvenida') }}</div>

                <div class="card-body">
                    
                    <p>En las páginas anteriores has visto un caso práctico de un Análisis de Riesgos. Se basaba en un despacho de arquitectos con dos usuarios, dos ordenadores, sistemas móviles, una impresora y una conexión a Internet. </p>
                    <p>Ahora vamos a probar el sistema de una forma viva, como si estuviéramos en un sistema de verdad, basándonos en los datos que hemos visto hasta ahora. Es decir, la aplicación práctica de la teoría.</p>
                    <br>
                    <p>El usuario que tengo preparado para estas pruebas es el siguiente:</p>
                    <p><b>Usuario:</b> prueba@ciberpyme.com </p>
                    <p><b>Contraseña:</b> prueba1234</p>
                    <br>
                    <p>En la siguiente página introduce esas credenciales y prueba la aplicación todo lo que quieras.</p>
                    <br>
                    <center>
                    <a class="text-center" href="{{ url('loginprueba') }}"><button class="btn btn-success">¡Empecemos!</button></a>
                    </center>

                        <br><br>
                    <br><br>
                    <!-- Footer -->
                    <footer class="page-footer font-small cyan darken-3">
                        <nav aria-label="...">
                          <ul class="pagination pagination-sm justify-content-center">
                            <li class="page-item">
                              <a class="page-link" href="{{ url('fase6') }}"><b>&laquo; {{ __('text.btnPrevious')}}</b></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase1') }}">Fase 1</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase2') }}">Fase 2</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase3') }}">Fase 3</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase4') }}">Fase 4</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase5') }}">Fase 5</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase6') }}">Fase 6</a></li>
                            <li class="page-item active">
                              <span class="page-link">
                                Final del Tour
                                <span class="sr-only">(current)</span>
                              </span>
                            </li>
                            <li class="page-item">
                              <a class="page-link" href="{{ url('loginprueba') }}"><b>{{ __('text.btnNext')}} &raquo;</b></a>
                            </li>
                          </ul>
                        </nav>
                    </footer>
                    <!-- Footer -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
