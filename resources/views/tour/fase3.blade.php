@extends('layouts.appNoAuth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('text.bienvenida') }}</div>

                <div class="card-body">
                    
                    <H1 class="text-center">
                        <P STYLE="margin-top: 0.25in"><B>FASE 3</B></P>
                    </H1>
                    <P class="text-justify" STYLE="margin-top: 0.08in">En esta fase vamos a
                    evaluar las vulnerabilidades y las salvaguardas que tienen nuestros
                    sistemas. 
                    </P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">Las vulnerabilidades
                    son situaciones que suelen ocurrirles a nuestros sistemas y que no
                    están preparados para combatir o mitigar. Un ejemplo de
                    vulnerabilidad es tener un antivirus no actualizado, un hardware que
                    no tiene ya soporte porque sea muy viejo, un programa que usamos que
                    sea “pirata” o con el que no contemos con la licencia
                    actualizada. Estas vulnerabilidades harán que, en la siguiente fase,
                    nuestro riesgo para ese elemento sea mayor.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">Las salvaguardas, por
                    el contrario, van a ser fortalezas de nuestros sistemas. Situaciones
                    que ya estamos en posición de combatir con elementos con los que ya
                    contamos. Una salvaguarda por ejemplo es un antivirus actualizado al
                    día, una política estricta de contraseñas, un firewall (software o
                    hardware). Estas salvaguardas rebajarán el nivel de riesgo para ese
                    elemento.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">Podemos hacer
                    nuevamente una tabla, como la Tabla siguiente, para tener en cuenta estos
                    factores:</P>
                    <P class="text-center" STYLE="page-break-after: avoid"><FONT COLOR="#4472c4"><B><FONT SIZE=2>Tabla
                    de Vulnerabilidades y Salvaguardas</FONT></B></FONT></P>
                    <CENTER>
                        <TABLE WIDTH=623 CELLPADDING=7 CELLSPACING=1>
                            <COL WIDTH=78>
                            <COL WIDTH=259>
                            <COL WIDTH=238>
                            <TR>
                                <TD WIDTH=78 BGCOLOR="#bfbfbf" STYLE="border-top: 1px solid #00000a; border-bottom: 1.50pt double #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>Identificador</FONT></P>
                                </TD>
                                <TD WIDTH=259 BGCOLOR="#bfbfbf" STYLE="border-top: 1px solid #00000a; border-bottom: 1.50pt double #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>VULNERABILIDADES</FONT></P>
                                </TD>
                                <TD WIDTH=238 BGCOLOR="#bfbfbf" STYLE="border-top: 1px solid #00000a; border-bottom: 1.50pt double #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>SALVAGUARDAS</FONT></P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=78 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>PC1</FONT></P>
                                </TD>
                                <TD WIDTH=259 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <UL>
                                        <LI><P STYLE="margin-bottom: 0in"><FONT COLOR="#ff0000"><FONT SIZE=2>Antivirus
                                        no actualizado</FONT></FONT></P>
                                        <LI><P><FONT COLOR="#ff0000"><FONT SIZE=2>El usuario de trabajo
                                        es el Administrador</FONT></FONT></P>
                                    </UL>
                                </TD>
                                <TD WIDTH=238 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <UL>
                                        <LI><P><FONT COLOR="#00b050"><FONT SIZE=2>Firewall de Windows
                                        activo con políticas concretas</FONT></FONT></P>
                                    </UL>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=78 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>PC2</FONT></P>
                                </TD>
                                <TD WIDTH=259 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <UL>
                                        <LI><P><FONT COLOR="#ff0000"><FONT SIZE=2>El usuario de trabajo
                                        es el Administrador</FONT></FONT></P>
                                    </UL>
                                </TD>
                                <TD WIDTH=238 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <UL>
                                        <LI><P><FONT COLOR="#00b050"><FONT SIZE=2>Firewall de Windows
                                        activo</FONT></FONT></P>
                                    </UL>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=78 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>Tel</FONT></P>
                                </TD>
                                <TD WIDTH=259 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <UL>
                                        <LI><P><FONT COLOR="#ff0000"><FONT SIZE=2>Sin contraseña, pin o
                                        patrón de acceso</FONT></FONT></P>
                                    </UL>
                                </TD>
                                <TD WIDTH=238 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <UL>
                                        <LI><P STYLE="margin-bottom: 0in"><FONT COLOR="#00b050"><FONT SIZE=2>Sistema
                                        de localización de Google activado</FONT></FONT></P>
                                        <LI><P><FONT COLOR="#00b050"><FONT SIZE=2>Sincronizado con la
                                        nube.</FONT></FONT></P>
                                    </UL>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=78 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>Hab1</FONT></P>
                                </TD>
                                <TD WIDTH=259 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <UL>
                                        <LI><P STYLE="margin-bottom: 0in"><FONT COLOR="#ff0000"><FONT SIZE=2>No
                                        tiene extintores</FONT></FONT></P>
                                        <LI><P STYLE="margin-bottom: 0in"><FONT COLOR="#ff0000"><FONT SIZE=2>Cerradura
                                        normal no segura</FONT></FONT></P>
                                        <LI><P><FONT COLOR="#ff0000"><FONT SIZE=2>Elementos no anclados
                                        ni caja fuerte</FONT></FONT></P>
                                    </UL>
                                </TD>
                                <TD WIDTH=238 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <UL>
                                        <LI><P><FONT COLOR="#00b050"><FONT SIZE=2>Control de acceso en
                                        el edificio con cámara de seguridad comunitaria.</FONT></FONT></P>
                                    </UL>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=78 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>Imp</FONT></P>
                                </TD>
                                <TD WIDTH=259 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <UL>
                                        <LI><P STYLE="margin-bottom: 0in"><FONT COLOR="#ff0000"><FONT SIZE=2>Alto
                                        consumo de consumibles.</FONT></FONT></P>
                                        <LI><P><FONT COLOR="#ff0000"><FONT SIZE=2>Los inyectores de
                                        tinta se pueden secar u obstruir.</FONT></FONT></P>
                                    </UL>
                                </TD>
                                <TD WIDTH=238 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <UL>
                                        <LI><P><FONT COLOR="#00b050"><FONT SIZE=2>Consumibles de reserva</FONT></FONT></P>
                                    </UL>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=78 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>Inet</FONT></P>
                                </TD>
                                <TD WIDTH=259 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <UL>
                                        <LI><P STYLE="margin-bottom: 0in"><FONT COLOR="#ff0000"><FONT SIZE=2>Clave
                                        por defecto del Router Movistar</FONT></FONT></P>
                                        <LI><P><FONT COLOR="#ff0000"><FONT SIZE=2>Activado el botón WPS
                                        (inicio automático)</FONT></FONT></P>
                                    </UL>
                                </TD>
                                <TD WIDTH=238 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <UL>
                                        <LI><P><FONT COLOR="#00b050"><FONT SIZE=2>Firewall interno</FONT></FONT></P>
                                    </UL>
                                </TD>
                            </TR>
                        </TABLE>
                    </CENTER>
                    <P class="text-justify" STYLE="margin-top: 0.25in">En esta fase lo que
                    prima es la sinceridad. Ocultando información por miedo a parecer
                    demasiado vulnerables lo único que se conseguirá es que sigamos
                    siendo vulnerables y no podamos poner remedio al fallo.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">Seguramente durante
                    esta fase veamos demasiados fallos o imaginemos que tenemos muchas
                    vulnerabilidades, pero no nos preocupemos ya que simplemente estamos
                    considerando las posibilidades. Tener una vulnerabilidad no implicará
                    necesariamente que se cumpla la incidencia asociada a esa
                    vulnerabilidad.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">Así mismo las
                    salvaguardas no necesariamente van a protegernos siempre. Podemos
                    tener un sistema antivirus actualizado y aún así sufrir un
                    incidente con un virus que no esté en su base de datos de firmas.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">El Análisis de riesgos
                    trabaja sobre todo con probabilidades.</P>



                    <br><br>

                    <p>En la aplicación podrás ver el listado de las Salvaguardas y las Vulnerabilidades, definir nuevas o eliminar las que hay activas</p>

                    <img src="images/capturasprograma/fase3.png" class="img-fluid" alt="Imagen Fase 3">
                    

                    <br><br>
                   <!-- Footer -->
                    <footer class="page-footer font-small cyan darken-3">
                        <nav aria-label="...">
                          <ul class="pagination pagination-sm justify-content-center">
                            <li class="page-item">
                              <a class="page-link" href="{{ url('fase2') }}"><b>&laquo; {{ __('text.btnPrevious')}}</b></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase1') }}">Fase 1</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase2') }}">Fase 2</a></li>
                            <li class="page-item active">
                              <span class="page-link">
                                Fase 3
                                <span class="sr-only">(current)</span>
                              </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase4') }}">Fase 4</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase5') }}">Fase 5</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase6') }}">Fase 6</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fin') }}">Final del Tour</a></li>
                            <li class="page-item">
                              <a class="page-link" href="{{ url('fase4') }}"><b>{{ __('text.btnNext')}} &raquo;</b></a>
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
