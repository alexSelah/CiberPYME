@extends('layouts.appNoAuth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('text.bienvenida') }}</div>

                <div class="card-body">
                    
                    
                    <P class="text-justify" STYLE="margin-top: 0.08in">En la primera aproximación a la metodología, 
                    vamos a <B>definir el alcance </B>de nuestro análisis. ¿Hasta dónde
                    queremos llegar? Es muy difícil abarcarlo todo y en ocasiones el
                    esfuerzo no merece la pena. Como mínimo debería cubrir los
                    elementos que hemos incluido en nuestro Plan de Seguridad, pero
                    podemos extenderlo a otros sistemas, como los personales de casa, los
                    teléfonos móviles particulares o algunos elementos privados de los
                    trabajadores. Aunque también es posible que si es la primera vez que
                    se hace un Análisis de Riesgos, queramos centrarnos en los elementos
                    más esenciales y críticos para el funcionamiento de la empresa.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">En nuestra mano está
                    decidir qué elementos queremos incluir, ya sean sistemas
                    informáticos, como ordenadores, teléfonos, routers, etc.; o
                    elementos físicos como habitaciones, puestos de trabajo, edificios,
                    etc.; o incluso personal y trabajadores, externos o internos. Somos
                    nosotros los que tenemos que marcar el límite del análisis. Lo que
                    si hay que tener en cuenta es que cuantos más elementos incluyamos
                    más tiempo tendremos que dedicar y más esfuerzo nos costará.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">También tenemos que
                    tomar una decisión en este momento, y es la <B>decisión de</B>
                    <B>actuar</B>. De nada sirve el esfuerzo y el dinero invertidos en
                    desarrollar un Análisis de Riesgos si no tomamos la decisión de
                    implementar las medidas que nos salgan a resultas de haber hecho el
                    análisis. Si no tenemos la determinación de cambiar de hábitos,
                    gastar dinero o implementar medidas que aumenten nuestra seguridad,
                    es mejor que nos ahorremos el esfuerzo.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">No hay mejor manera de
                    aprender que con un ejemplo. Así que vamos a crear, en esta y las
                    siguientes fases, un Análisis de Riesgos Sencillo para una PYME
                    pequeña, de dos trabajadores. Un despacho de arquitectos. 
                    </P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">En esta primera fase
                    estableceríamos el alcance. Como es algo informativo lo que queremos
                    es saber que elementos tenemos en riesgo y el índice de
                    vulnerabilidad que tienen estos elementos.</P>
                    <P>
                        Vamos a ver a través de un sencillo ejemplo, como funciona esta metodología, y vamos a usar un usuario de pruebas para hacerlo. Al final del tour encontrarás las credenciales de ese usuario para poder loguearte y probar en vivo la aplicación.
                    </P>
                    <br>
                    <p>Cuando inicies sesión verás una pantalla de incio, llamada Panel de Control, como la que sigue. Desde ellas podrás navegar entre las fases</p>
                    <img src="images/capturasprograma/home.png" class="img-fluid" alt="Imagen de Inicio">
                    <br>
                    <h4 class="text-center">¿Empezamos?</h4>
                    <br><br>
                    <!-- Footer -->
                    <footer class="page-footer font-small cyan darken-3">
                        <nav aria-label="...">
                          <ul class="pagination pagination-sm justify-content-center">
                            <li class="page-item">
                              <a class="page-link" href="{{ url('/') }}"><b>&laquo; {{ __('text.btnPrevious')}}</b></a>
                            </li>
                            <li class="page-item active">
                              <span class="page-link">
                                Inicio del Tour
                                <span class="sr-only">(current)</span>
                              </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase1') }}">Fase 1</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase2') }}">Fase 2</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase3') }}">Fase 3</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase4') }}">Fase 4</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase5') }}">Fase 5</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase6') }}">Fase 6</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fin') }}">Final del Tour</a></li>
                            <li class="page-item">
                              <a class="page-link" href="{{ url('fase1') }}"><b>{{ __('text.btnNext')}} &raquo;</b></a>
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
