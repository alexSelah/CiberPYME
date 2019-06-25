@extends('layouts.appNoAuth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('text.bienvenida') }}</div>

                <div class="card-body">
                    
                    <H1 class="text-center">
                        <P STYLE="margin-top: 0.25in"><B>FASE 4</B></P>
                    </H1>
                    <P class="text-justify" STYLE="margin-top: 0.08in">En esta fase vamos a
                    definir unos niveles de Probabilidad e Impacto para averiguar, posteriormente, el índice de riesgo
                    que tiene cada activo con relación a una amenaza concreta. 
                    </P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">Lo primero que vamos a
                    hacer es rescatar la tabla que hicimos en la fase 3. En concreto las
                    dos primeras columnas, las que establecen el identificador de amenaza
                    y el identificador de activo. </P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">A esa tabla le vamos a
                    añadir dos columnas: <B>Probabilidad e Impacto.</B></P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">La probabilidad es un
                    número, que le vamos a signar nosotros, que va a indicar cómo de
                    probables es que esa amenaza ocurra. Para ello vamos a basarnos en la
                    siguiente Tabla de Probabilidades:</P>
                    <P ALIGN=CENTER STYLE="page-break-after: avoid"><FONT COLOR="#4472c4"><B><FONT SIZE=2>Tabla
                    de Probabilidad de ocurrir incidente</FONT></B></FONT></P>
                    <TABLE WIDTH=595 CELLPADDING=7 CELLSPACING=0>
                        <COL WIDTH=92>
                        <COL WIDTH=77>
                        <COL WIDTH=383>
                        <TR VALIGN=TOP>
                            <TD WIDTH=92 BGCOLOR="#8eaadb" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify" ALIGN=CENTER><FONT SIZE=2><B>Cualitativo</B></FONT></P>
                            </TD>
                            <TD WIDTH=77 BGCOLOR="#8eaadb" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify" ALIGN=CENTER><FONT SIZE=2><B>Cuantitativo</B></FONT></P>
                            </TD>
                            <TD WIDTH=383 BGCOLOR="#8eaadb" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify"><FONT SIZE=2><B>Descripción</B></FONT></P>
                            </TD>
                        </TR>
                        <TR VALIGN=TOP>
                            <TD WIDTH=92 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>Baja</FONT></P>
                            </TD>
                            <TD WIDTH=77 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>1</FONT></P>
                            </TD>
                            <TD WIDTH=383 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify" STYLE="margin-left: 0.01in; text-indent: -0.01in">
                                <FONT SIZE=2>La amenaza se materializa como mucho una vez al año</FONT></P>
                            </TD>
                        </TR>
                        <TR VALIGN=TOP>
                            <TD WIDTH=92 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>Media</FONT></P>
                            </TD>
                            <TD WIDTH=77 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>2</FONT></P>
                            </TD>
                            <TD WIDTH=383 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify"><FONT SIZE=2>La amenaza puede ocurrir como
                                mucho una vez al mes</FONT></P>
                            </TD>
                        </TR>
                        <TR VALIGN=TOP>
                            <TD WIDTH=92 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>Alta</FONT></P>
                            </TD>
                            <TD WIDTH=77 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>3</FONT></P>
                            </TD>
                            <TD WIDTH=383 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify"><FONT SIZE=2>La amenaza se presenta como mucho
                                cada semana</FONT></P>
                            </TD>
                        </TR>
                    </TABLE>
                    <P class="text-justify" STYLE="margin-top: 0.25in">Si estamos realizando
                    un análisis Cualitativo vamos a usar palabras y si es cuantitativo
                    le asignaremos el número. Si una amenaza tiene, por ejemplo, una
                    probabilidad de que ocurra muy rara (una vez al año) le asignaremos
                    el número 1 o "Baja". Un ejemplo de probabilidad baja sería el robo de
                    material en el despacho de trabajo. Como solo hacemos un viaje largo
                    al año, que es cuando nos vamos de vacaciones y se queda el despacho desatendido, la
                    incidencia se podrá dar una vez al año a lo sumo. 
                    </P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">Un ejemplo de
                    probabilidad alta es el robo o pérdida de dispositivos móviles, ya
                    que salimos a menudo con él a la calle y es más probable que lo
                    perdamos o nos lo roben. En ese activo y en ese riesgo le asignaremos
                    un 3, la más alta.</P>
                    <br>
                    <P class="text-justify" STYLE="margin-top: 0.08in">A parte de calcular la
                    probabilidad de un posible incidente, también vamos a calcular el
                    impacto que tiene ese incidente en nuestro trabajo (o en su
                    resiliencia). No es lo mismo perder el ordenador con todos sus datos
                    que se quede sin tinta la impresora. El impacto en la vida laboral no
                    va a ser igual. Vamos a basarnos en el siguiente baremo contemplado
                    en la tabla:</P>
                    <P ALIGN=CENTER STYLE="page-break-after: avoid"><FONT COLOR="#4472c4"><B><FONT SIZE=2>Tabla
                    de Impacto laboral si ocurre un incidente</FONT></B></FONT></P>
                    <TABLE WIDTH=595 CELLPADDING=7 CELLSPACING=0>
                        <COL WIDTH=91>
                        <COL WIDTH=77>
                        <COL WIDTH=383>
                        <TR>
                            <TD WIDTH=91 BGCOLOR="#8eaadb" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify" ALIGN=CENTER><FONT SIZE=2><B>Cualitativo</B></FONT></P>
                            </TD>
                            <TD WIDTH=77 BGCOLOR="#8eaadb" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify" ALIGN=CENTER><FONT SIZE=2><B>Cuantitativo</B></FONT></P>
                            </TD>
                            <TD WIDTH=383 BGCOLOR="#8eaadb" STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify"><FONT SIZE=2><B>Descripción</B></FONT></P>
                            </TD>
                        </TR>
                        <TR>
                            <TD WIDTH=91 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>Bajo</FONT></P>
                            </TD>
                            <TD WIDTH=77 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>1</FONT></P>
                            </TD>
                            <TD WIDTH=383 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify" STYLE="margin-left: 0.01in; text-indent: -0.01in">
                                <FONT SIZE=2>El daño producido no tiene consecuencias para el
                                normal funcionamiento del trabajo.</FONT></P>
                            </TD>
                        </TR>
                        <TR>
                            <TD WIDTH=91 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>Medio</FONT></P>
                            </TD>
                            <TD WIDTH=77 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>2</FONT></P>
                            </TD>
                            <TD WIDTH=383 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify"><FONT SIZE=2>El daño producido tiene
                                consecuencias relevantes para el normal funcionamiento del
                                trabajo.</FONT></P>
                            </TD>
                        </TR>
                        <TR>
                            <TD WIDTH=91 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>Alto</FONT></P>
                            </TD>
                            <TD WIDTH=77 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify" ALIGN=CENTER><FONT SIZE=2>3</FONT></P>
                            </TD>
                            <TD WIDTH=383 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                <P class="text-justify"><FONT SIZE=2>El daño producido tiene
                                consecuencias graves para el normal funcionamiento del trabajo.</FONT></P>
                            </TD>
                        </TR>
                    </TABLE>
                    <P class="text-justify" STYLE="margin-top: 0.25in">Un impacto bajo puede
                    hacernos perder un tiempo corto mientras alguien lo soluciona, pero
                    sin llegar a detener el trabajo normal, o tal vez cree algunas
                    molestias poco graves. Un impacto medio puede causar que se paralice
                    el trabajo normal durante unas horas o como mucho un día. Un impacto
                    grave puede paralizar el normal funcionamiento de la empresa, causar
                    pérdidas económicas significativas o provocar problemas legales.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">Un ejemplo de impacto
                    bajo puede ser quedarse sin tinta. Un impacto alto puede ser que se
                    averíe el ordenador o perdamos el teléfono móvil sin copia de
                    seguridad. Nuevamente deberemos considerar, de manera personalizada,
                    que nivel de impacto tendrá una incidencia. Si no estamos seguros lo
                    mejor es poner el impacto más elevado posible, teniendo en
                    consideración todos los factores que influyen en él.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">Por último, en la
                    tabla incluiremos el Índice de Riesgo, que es un campo calculado
                    derivado de las dos anteriores. Se calcula multiplicando el nivel de
                    Probabilidad por el nivel de Impacto. Si estamos usando un análisis
                    cualitativo le asignaremos un valor basándonos en la confluencia de
                    los dos factores, según la siguiente tabla a continuación:</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in"><BR><BR>
                    </P>
                    <P ALIGN=CENTER STYLE="page-break-after: avoid"><FONT COLOR="#4472c4"><B><FONT SIZE=2>Tabla
                    de Baremo para Riesgo</FONT></B></FONT></P>
                    <style type="text/css">
                    .tg  {border-collapse:collapse;border-spacing:0;}
                    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                    .tg .tg-wt8g{font-weight:bold;background-color:#34cdf9;text-align:center;vertical-align:top}
                    .tg .tg-u4ur{background-color:#ffcc67;text-align:left;vertical-align:top}
                    .tg .tg-2sbs{font-weight:bold;background-color:#68cbd0;text-align:center;vertical-align:top}
                    .tg .tg-0lax{text-align:left;vertical-align:top}
                    </style>
                    <CENTER>
                        <table class="tg">
                          <tr>
                            <th class="tg-0lax"></th>
                            <th class="tg-2sbs" colspan="3">IMPACTO</th>
                          </tr>
                          <tr>
                            <td class="tg-wt8g">PROBABILIDAD</td>
                            <td class="tg-u4ur">BAJO</td>
                            <td class="tg-u4ur">MEDIO</td>
                            <td class="tg-u4ur">ALTO</td>
                          </tr>
                          <tr>
                            <td class="tg-u4ur">BAJA</td>
                            <td class="tg-0lax">Muy Bajo</td>
                            <td class="tg-0lax">Bajo<br></td>
                            <td class="tg-0lax">Medio<br></td>
                          </tr>
                          <tr>
                            <td class="tg-u4ur">MEDIA</td>
                            <td class="tg-0lax">Bajo</td>
                            <td class="tg-0lax">Medio</td>
                            <td class="tg-0lax">Alto</td>
                          </tr>
                          <tr>
                            <td class="tg-u4ur">ALTA</td>
                            <td class="tg-0lax">Medio</td>
                            <td class="tg-0lax">Alto</td>
                            <td class="tg-0lax">Muy Alto</td>
                          </tr>
                        </table>
                    </CENTER>
                    <P class="text-justify" STYLE="margin-top: 0.25in">Si estamos calculando
                    el valor Cuantitativo y hasta ahora hemos usado valores cualitativos,
                    podemos realizar una conversión similar a esta, la tabla de conversión:</P>
                    <P ALIGN=CENTER STYLE="page-break-after: avoid"><FONT COLOR="#4472c4"><B><FONT SIZE=2>Tabla
                    de Conversión de valores Cualitativos a Cuantitativos</FONT></B></FONT></P>
                    <CENTER>
                        <style type="text/css">
                    .tg  {border-collapse:collapse;border-spacing:0;}
                    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                    .tg .tg-wt8g{font-weight:bold;background-color:#34cdf9;text-align:center;vertical-align:top}
                    .tg .tg-u4ur{background-color:#ffcc67;text-align:left;vertical-align:top}
                    .tg .tg-2sbs{font-weight:bold;background-color:#68cbd0;text-align:center;vertical-align:top}
                    .tg .tg-0lax{text-align:left;vertical-align:top}
                    </style>
                    <CENTER>
                        <table class="tg">
                          <tr>
                            <th class="tg-0lax"></th>
                            <th class="tg-2sbs" colspan="3">IMPACTO</th>
                          </tr>
                          <tr>
                            <td class="tg-wt8g">PROBABILIDAD</td>
                            <td class="tg-u4ur">BAJO</td>
                            <td class="tg-u4ur">MEDIO</td>
                            <td class="tg-u4ur">ALTO</td>
                          </tr>
                          <tr>
                            <td class="tg-u4ur">BAJA</td>
                            <td class="tg-0lax">1</td>
                            <td class="tg-0lax">2<br></td>
                            <td class="tg-0lax">3<br></td>
                          </tr>
                          <tr>
                            <td class="tg-u4ur">MEDIA</td>
                            <td class="tg-0lax">4</td>
                            <td class="tg-0lax">5</td>
                            <td class="tg-0lax">6</td>
                          </tr>
                          <tr>
                            <td class="tg-u4ur">ALTA</td>
                            <td class="tg-0lax">7</td>
                            <td class="tg-0lax">8</td>
                            <td class="tg-0lax">9</td>
                          </tr>
                        </table>
                    </CENTER>
                    </CENTER>
                    <P class="text-justify" STYLE="margin-top: 0.25in">Debemos recordar que:
                    <B>Riesgo = Probabilidad x Impacto</B></P>
                    <P class="text-justify" STYLE="margin-top: 0.08in"><B>Importante: </B>Si
                    en la fase anterior observamos alguna vulnerabilidad para un activo y
                    un riesgo en concreto se aumentará el índice de riesgo en un valor o
                    un punto (de bajo a medio, de medio a alto, de 3 a 4, de 6 a 7,
                    etc.). <b>Esto nuestro programa lo hace automáticamente</b>, pero si lo estamos haciendo a mano, tendremos que reflejarlo. Igualmente, si tenemos alguna salvaguarda para ese activo, el
                    índice de riesgo para esa amenaza se reducirá en un punto o en un
                    valor.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">Vamos a realizar ahora
                    la tabla asignándole los valores que consideremos y, an la pantalla siguiente, se calculará el
                    riesgo posible para esa incidencia y ese activo. Vemos los resultados
                    en la Tabla siguiente.</P>
                    <P ALIGN=CENTER STYLE="page-break-after: avoid"><FONT COLOR="#4472c4"><B><FONT SIZE=2>Tabla
                    de Índice de Probabilidad e Impacto</FONT></B></FONT></P>
                    <CENTER>
                        <TABLE class="table" WIDTH=597 CELLPADDING=7 CELLSPACING=1>
                            <THEAD class="thead-light">
                                <TH WIDTH=68 BGCOLOR="#bfbfbf" STYLE="border-top: 1px solid #00000a; border-bottom: 1.50pt double #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>ID Amenaza</P>
                                </TH>
                                <TH WIDTH=53 BGCOLOR="#bfbfbf" STYLE="border-top: 1px solid #00000a; border-bottom: 1.50pt double #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>Activo</P>
                                </TH>
                                <TH WIDTH=176 BGCOLOR="#bfbfbf" STYLE="border-top: 1px solid #00000a; border-bottom: 1.50pt double #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>Amenaza</P>
                                </TH>
                                <TH WIDTH=86 BGCOLOR="#bfbfbf" STYLE="border-top: 1px solid #00000a; border-bottom: 1.50pt double #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>Probabilidad</P>
                                </TH>
                                <TH WIDTH=63 BGCOLOR="#bfbfbf" STYLE="border-top: 1px solid #00000a; border-bottom: 1.50pt double #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>Impacto</P>
                                </TH>
                            </THEAD>
                            <TR>
                                <TD WIDTH=68 STYLE="border-top: 1.50pt double #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">P1</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border-top: 1.50pt double #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Arq1</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border-top: 1.50pt double #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Enfermedad-Indisposición</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border-top: 1.50pt double #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>2</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border-top: 1.50pt double #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>2</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">P2</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Arq1</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Extorsión</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>3</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">P3</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Arq1</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Paternidad</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>2</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">P4</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Arq1</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Ingeniería Social (Robo de claves)</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>3</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">P5</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Arq2</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Enfermedad-Indisposición</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>2</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>2</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">P6</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Arq2</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Extorsión</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>3</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">P7</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Arq2</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Maternidad</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>2</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">P8</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Arq2</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Ingeniería Social (Robo de claves) 
                                    </P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>3</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H1</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC1</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Desastre Natural: Fuego, Agua, Eléctrico.</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>3</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H2</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC1</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Difusión de Software dañino, virus,
                                    troyanos, etc.</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>3</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>3</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H3</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC1</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Robo</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>3</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H4</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC1</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Caída del sistema por fallo eléctrico o de
                                    software.</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>2</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>2</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H5</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC1</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Rotura de elemento físico (Fuente de
                                    alimentación, memoria RAM, Placa base, etc.)</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>3</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H6</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC1</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Pérdida de Información</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>3</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H7</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC2</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Desastre Natural: Fuego, Agua, Eléctrico.</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>3</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H8</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC2</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Difusión de Software dañino, virus,
                                    troyanos, etc.</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>2</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>2</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H9</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC2</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Robo</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>2</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H10</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC2</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Caída del sistema por fallo eléctrico o de
                                    software.</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>2</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H11</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">PC2</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Rotura de elemento físico (Fuente de
                                    alimentación, memoria RAM, Placa base, etc.)</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>3</P>
                                </TD>

                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H12</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Tel</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Robo, avería o pérdida física del teléfono</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>3</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>2</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H13</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Tel</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Exfiltración de información</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>3</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H14</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Tel</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Fallo en las comunicaciones</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>3</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H15</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Imp</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Rotura o avería</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">H16</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Imp</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Falta de consumibles</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>3</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">F1</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Hab1</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Daño Natural (fuego, agua, obras, etc.)</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>3</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">F2</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Hab1</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Acceso no autorizado</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>2</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">C1</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Inet</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Caída del servicio, fallo en comunicaciones</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                            </TR>
                            <TR>
                                <TD WIDTH=68 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">C2</P>
                                </TD>
                                <TD WIDTH=53 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Inet</P>
                                </TD>
                                <TD WIDTH=176 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify">Interceptación de la comunicación (Robo de
                                    WiFi, ataque Man in the Middle, etc.)</P>
                                </TD>
                                <TD WIDTH=86 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>1</P>
                                </TD>
                                <TD WIDTH=63 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>3</P>
                                </TD>
                            </TR>
                        </TABLE>
                    </CENTER>
                    

                    <br><br>

                    <p>En la aplicación podrás ver el listado de todas la amenazas y podrás definir un nivel adecuado de probabilidad y de impacto.</p>

                    <img src="images/capturasprograma/fase4.png" class="img-fluid" alt="Imagen Fase 4">
                    

                    <br><br>
                    <!-- Footer -->
                    <footer class="page-footer font-small cyan darken-3">
                        <nav aria-label="...">
                          <ul class="pagination pagination-sm justify-content-center">
                            <li class="page-item">
                              <a class="page-link" href="{{ url('fase3') }}"><b>&laquo; {{ __('text.btnPrevious')}}</b></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase1') }}">Fase 1</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase2') }}">Fase 2</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase3') }}">Fase 3</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase4') }}">Fase 4</a></li>
                            <li class="page-item active">
                              <span class="page-link">
                                Fase 4
                                <span class="sr-only">(current)</span>
                              </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase6') }}">Fase 6</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fin') }}">Final del Tour</a></li>
                            <li class="page-item">
                              <a class="page-link" href="{{ url('fase5') }}"><b>{{ __('text.btnNext')}} &raquo;</b></a>
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
