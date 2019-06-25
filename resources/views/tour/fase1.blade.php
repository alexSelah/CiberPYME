@extends('layouts.appNoAuth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('text.bienvenida') }}</div>

                <div class="card-body">
                              
                <h1 class="text-center">
                    <P STYLE="margin-top: 0.25in"><B>FASE 1</B></P>
                </h1>
                <P class="text-justify" STYLE="margin-top: 0.08in">La Fase 1 de nuestro programa sirve para
                    establecer los activos que tenemos. Es un listado objetivo de todos
                    los elementos electrónicos, físicos (también locales,
                    habitaciones, personas, etc.) y lógicos (Software) que tenemos para
                    trabajar en la empresa. 
                    </P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">En este punto debemos
                    basarnos en la Fase 1 para poner un límite, y debemos ser lo
                    suficientemente sabios para obviar los elementos intrascendentes. Tal
                    vez tengamos fregonas en nuestro trabajo, ¡pero no van a sufrir
                    ningún percance!</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">Una vez que sabemos que
                    elementos queremos contemplar en nuestro análisis y el alcance o
                    concreción de este, haremos una tabla listando todos los elementos y
                    asignándoles un nombre clave, para que no nos equivoquemos en las
                    demás fases. A estos elementos les vamos a llamar <B>Activos</B>.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">En nuestro ejemplo de
                    Estudio de Arquitectura, podríamos poner los siguientes elementos
                    descritos en la Tabla de Activos.</P>
                    <P ALIGN=CENTER STYLE="page-break-after: avoid"><FONT COLOR="#4472c4"><B><FONT SIZE=2>Tabla
                    de Activos</FONT></B></FONT></P>
                    <CENTER>
                        <TABLE WIDTH=519 CELLPADDING=7 CELLSPACING=1>
                            <COL WIDTH=154>
                            <COL WIDTH=333>
                            <TR VALIGN=TOP>
                                <TD WIDTH=154 BGCOLOR="#bfbfbf" STYLE="border-top: 1px solid #00000a; border-bottom: 1.50pt double #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>Identificador</P>
                                </TD>
                                <TD WIDTH=333 BGCOLOR="#bfbfbf" STYLE="border-top: 1px solid #00000a; border-bottom: 1.50pt double #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>Descripción del Activo</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=154 STYLE="border-top: 1.50pt double #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Arq1</P>
                                </TD>
                                <TD WIDTH=333 STYLE="border-top: 1.50pt double #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Trabajador arquitecto 1: Alexander Pérez</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=154 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Arq2</P>
                                </TD>
                                <TD WIDTH=333 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Trabajador arquitecto 2: Juana García</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=154 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC1</P>
                                </TD>
                                <TD WIDTH=333 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Ordenador del arquitecto 1</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=154 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC2</P>
                                </TD>
                                <TD WIDTH=333 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Ordenador del arquitecto 2</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=154 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Tel</P>
                                </TD>
                                <TD WIDTH=333 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Teléfono móvil de arquitectos</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=154 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Hab1</P>
                                </TD>
                                <TD WIDTH=333 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Despacho o habitación donde se trabaja</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=154 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Imp</P>
                                </TD>
                                <TD WIDTH=333 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Impresora A4 Inyección de tinta a color</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=154 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Inet</P>
                                </TD>
                                <TD WIDTH=333 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Conexión a internet por Wifi con Router
                                    Movistar</P>
                                </TD>
                            </TR>
                        </TABLE>
                    </CENTER>
                    <P class="text-justify" STYLE="margin-top: 0.08in"><BR><BR>
                    </P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">Hemos puesto los
                    elementos más esenciales para realizar el trabajo. Estos activos los
                    consideramos esenciales en nuestra ficticia empresa de arquitectura,
                    así que hemos querido evaluar su riesgo.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">También podemos poner
                    los activos sueltos o agruparlos. Por ejemplo, hemos separado los dos
                    ordenadores en PC1 y PC2, pero hemos agrupado los dos teléfonos
                    móviles en un solo activo. Esto se hace si los activos tienen
                    particularidades que los diferencias de los otros o no.</P>
                <br>
                <p>En la primera pantalla, la de Activos, vamos a deifinir los elementos que vamos a proteger. Daremos de alta todoas aquellos activos que puedan sufrir algún tipo de percance. No te limites solo a los ataques informáticos, sino a percances de todo tipo.</p>
                    <img src="images/capturasprograma/fase1.png" class="img-fluid" alt="Imagen Fase 1">
                    
                    <br><br>
                    <!-- Footer -->
                    <footer class="page-footer font-small cyan darken-3">
                        <nav aria-label="...">
                          <ul class="pagination pagination-sm justify-content-center">
                            <li class="page-item">
                              <a class="page-link" href="{{ url('tour') }}"><b>&laquo; {{ __('text.btnPrevious')}}</b></a>
                            </li>
                            <li class="page-item active">
                              <span class="page-link">
                                Fase 1
                                <span class="sr-only">(current)</span>
                              </span>
                            </li>
                            {{-- <li class="page-item"><a class="page-link" href="{{ url('activos') }}">1</a></li> --}}
                            <li class="page-item"><a class="page-link" href="{{ url('fase2') }}">Fase 2</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase3') }}">Fase 3</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase4') }}">Fase 4</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase5') }}">Fase 5</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase6') }}">Fase 6</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fin') }}">Final del Tour</a></li>
                            <li class="page-item">
                              <a class="page-link" href="{{ url('fase2') }}"><b>{{ __('text.btnNext')}} &raquo;</b></a>
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
