@extends('layouts.appNoAuth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('text.bienvenida') }}</div>

                <div class="card-body">
                    
                    <H1 class="text-center">
                        <P STYLE="margin-top: 0.25in"><B>FASE 2</B></P>
                    </H1>
                    <P class="text-justify" STYLE="margin-top: 0.08in">En esta fase vamos a
                    evaluar los riesgos que pueden sufrir cada uno de estos activos que
                    hemos definido en la fase anterior. Los riesgos pueden ser casi
                    innumerables, así que vamos a centrarnos en lo que definimos en la
                    Fase Inicial para limitarlos.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">Algunos ejemplos de
                    riesgos que podemos sufrir son:</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in"><B>Amenazas sobre los
                    elementos físicos:</B> Fuego, daños por agua, desastres naturales,
                    fuga de información, introducción de falsa información, alteración
                    de la información, corrupción de la información, destrucción de
                    información, interceptación de información (escucha), corte del
                    suministro eléctrico, condiciones inadecuadas de temperatura o
                    humedad, fallo de servicios de comunicaciones, interrupción de otros
                    servicios y suministros esenciales, degradación de los soportes de
                    almacenamiento de la información, ), errores de mantenimiento o
                    actualización de equipos (hardware).</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in"><B>Amenazas sobre los
                    elementos lógicos (Software, Programas):</B> Difusión de software
                    dañino, errores de mantenimiento o actualización de programas
                    (software), caída del sistema por sobrecarga, errores de
                    configuración, denegación de servicio.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in"><B>Amenazas sobre las
                    personas (internas y externas):</B> Pérdida de equipos,
                    indisponibilidad del personal, abuso de privilegios de acceso, acceso
                    no autorizado, errores de los usuarios, errores del administrador,
                    robo, extorsión, ingeniería social.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">Estos son solo algunos
                    ejemplos, los más básicos, pero en este punto tendremos que
                    realizar algo de investigación y tener mucha imaginación. Por
                    ejemplo, si hemos adquirido un sistema de almacenamiento en red (NAS)
                    podemos buscar en internet incidencias relacionadas con ese sistema,
                    como errores de fábrica (“<I>hay usuarios que dicen que el
                    ventilador se calienta mucho en este modelo</I>”), errores de
                    configuración (“<I>En algunos foros dicen que si lo configuras de
                    una manera determinada pierdes el acceso a él desde la red</I>”) y
                    muchos otros ejemplos. 
                    </P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">También debemos de
                    considerar la casuística de los empleados, o de aquellos que hayamos
                    decidido introducir en el análisis. <I>¿Qué le puede pasar a ese
                    trabajador?</I> Puede ser una enfermedad, un accidente, un embarazo,
                    un ataque informático dirigido a él (ingeniería social, extorsión,
                    etc.). No se trata de señalar al trabajador como problema, sino de
                    contemplar lo que le puede pasar para que, si le ocurre, estemos
                    preparados. Esto puede ser beneficioso, porque si un empleador sabe
                    lo que le puede ocurrir a un empleado y considera las posibles
                    soluciones, si finalmente ocurre estará preparado, no se frustrará
                    y no lo “pagará” con el trabajador.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">Haremos igual que en la
                    fase anterior: Una tabla con los activos (con el nombre clave) y las
                    incidencias que puede tener. 
                    </P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">En nuestro ejemplo
                    podríamos poner lo descrito en la Tabla de Amenazas, recuerda adaptarte a los
                    límites establecidos en la Fase 1:</P>
                    <P class="text-center" STYLE="page-break-after: avoid"><FONT COLOR="#4472c4"><B><FONT SIZE=2>Tabla
                    de Amenazas por activo</FONT></B></FONT></P>
                    <CENTER>
                        <TABLE class="table">
                            <THEAD class="thead-light"> 
                                <TH WIDTH=88 BGCOLOR="#bfbfbf" STYLE="border-top: 1px solid #00000a; border-bottom: 1.50pt double #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>ID Amenaza</P>
                                </TH>
                                <TH WIDTH=79 BGCOLOR="#bfbfbf" STYLE="border-top: 1px solid #00000a; border-bottom: 1.50pt double #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>Activo</P>
                                </TH>
                                <TH WIDTH=342 BGCOLOR="#bfbfbf" STYLE="border-top: 1px solid #00000a; border-bottom: 1.50pt double #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>Amenaza</P>
                                </TH>
                            </THEAD>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border-top: 1.50pt double #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify"><A NAME="_Hlk9849079"></A>P1</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border-top: 1.50pt double #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Arq1</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border-top: 1.50pt double #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Enfermedad-Indisposición</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">P2</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Arq1</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Extorsión</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">P3</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Arq1</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Paternidad</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">P4</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Arq1</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Ingeniería Social (Robo de claves)</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">P5</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Arq2</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Enfermedad-Indisposición</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">P6</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Arq2</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Extorsión</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">P7</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Arq2</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Maternidad</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">P8</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Arq2</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Ingeniería Social (Robo de claves) 
                                    </P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H1</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC1</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Desastre Natural: Fuego, Agua, Eléctrico.</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H2</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC1</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Difusión de Software dañino, virus,
                                    troyanos, etc.</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H3</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC1</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Robo</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H4</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC1</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Caída del sistema por fallo eléctrico o de
                                    software.</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H5</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC1</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Rotura de elemento físico (Fuente de
                                    alimentación, memoria RAM, Placa base, etc.)</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H6</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC1</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Pérdida de Información</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H7</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC2</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Desastre Natural: Fuego, Agua, Eléctrico.</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H8</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC2</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Difusión de Software dañino, virus,
                                    troyanos, etc.</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H9</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC2</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Robo</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H10</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC2</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Caída del sistema por fallo eléctrico o de
                                    software.</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H11</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC2</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Rotura de elemento físico (Fuente de
                                    alimentación, memoria RAM, Placa base, etc.)</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H12</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Tel</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Robo, avería o pérdida física del teléfono</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H13</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Tel</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Exfiltración de información</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H14</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Tel</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Fallo en las comunicaciones</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H15</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Imp</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Rotura o avería</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H16</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Imp</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Falta de consumibles</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">F1</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Hab1</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Daño Natural (fuego, agua, obras, etc.)</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">F2</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Hab1</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Acceso no autorizado</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">C1</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Inet</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Caída del servicio, fallo en comunicaciones</P>
                                </TD>
                            </TR>
                            <TR VALIGN=TOP>
                                <TD WIDTH=88 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">C2</P>
                                </TD>
                                <TD WIDTH=79 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Inet</P>
                                </TD>
                                <TD WIDTH=342 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Interceptación de la comunicación (Robo de
                                    Wifi, ataque Man in the Middle, etc.)</P>
                                </TD>
                            </TR>
                        </TABLE>
                    </CENTER>
                    <P class="text-justify" STYLE="margin-top: 0.25in">Esta fase la podemos
                    hacer tan concreta como queramos y tan completa como deseemos.
                    Podemos agrupar los elementos, como hemos hecho en el ejemplo con los
                    teléfonos, añadiendo solo uno cuando lo normal es que cada
                    trabajador tenga el propio.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">También podemos
                    considerar solo aquellas incidencias que pueden impedirnos trabajar
                    con normalidad, en lugar de todas aquellas probables para el activo.</P>
                    <br><br>

                    <p>En la aplicación podrás ver el listado de las amenazas actuales que afectan a los activos, definir nuevas amenazas o eliminar las que hay activas</p>

                    <img src="images/capturasprograma/fase2.png" class="img-fluid" alt="Imagen Fase 2">

                    
                    

                    <br><br>
                    <!-- Footer -->
                    <footer class="page-footer font-small cyan darken-3">
                        <nav aria-label="...">
                          <ul class="pagination pagination-sm justify-content-center">
                            <li class="page-item">
                              <a class="page-link" href="{{ url('fase1') }}"><b>&laquo; {{ __('text.btnPrevious')}}</b></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase1') }}">Fase 1</a></li>
                            <li class="page-item active">
                              <span class="page-link">
                                Fase 2
                                <span class="sr-only">(current)</span>
                              </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase3') }}">Fase 3</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase4') }}">Fase 4</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase5') }}">Fase 5</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase6') }}">Fase 6</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fin') }}">Final del Tour</a></li>
                            <li class="page-item">
                              <a class="page-link" href="{{ url('fase3') }}"><b>{{ __('text.btnNext')}} &raquo;</b></a>
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
