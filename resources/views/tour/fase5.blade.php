@extends('layouts.appNoAuth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('text.bienvenida') }}</div>

                <div class="card-body">
                    
                    <H1 class="text-center">
                        <P STYLE="margin-top: 0.25in"><B>FASE 5</B></P>
                    </H1>
                    <P class="text-justify" STYLE="margin-top: 0.08in">En esta fase veremos el resultado del cálculo de la fase anterior.
                    </P>
                   
                    <P class="text-justify" STYLE="margin-top: 0.08in">Se ha añadido una última columna, en la
                    tabla, en la que incluiremos el Índice de Riesgo, que es un campo calculado
                    derivado de las dos anteriores. Se calcula multiplicando el nivel de
                    Probabilidad por el nivel de Impacto. Si estamos usando un análisis
                    cualitativo le asignaremos un valor basándonos en la confluencia de
                    los dos factores</P>
                    <P class="text-justify" STYLE="margin-top: 0.25in">Por lo tanto, la fórmula que se aplica es:</P>
                    <P class="text-center"><B>Riesgo = Probabilidad x Impacto</B></P>
                    <P class="text-justify" STYLE="margin-top: 0.08in"><B>Importante: </B>Si
                    en la fase anterior observamos alguna vulnerabilidad para un activo y
                    un riesgo en concreto se va a aumentar, automáticamente, el índice de riesgo en un valor o
                    un punto (de bajo a medio, de medio a alto, de 3 a 4, de 6 a 7,
                    etc.). Igualmente, si tenemos alguna salvaguarda para ese activo, el
                    índice de riesgo para esa amenaza se reducirá en un punto o en un
                    valor.</P>
                    <P ALIGN=CENTER STYLE="page-break-after: avoid"><FONT COLOR="#4472c4"><B><FONT SIZE=2>Tabla Índice de Riesgo calculado a partir de Probabilidad e Impacto</FONT></B></FONT></P>
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
                                <TH WIDTH=63 BGCOLOR="#bfbfbf" STYLE="border-top: 1px solid #00000a; border-bottom: 1.50pt double #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>Riesgo</P>
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
                                <TD WIDTH=59 STYLE="border-top: 1.50pt double #00000a; border-bottom: 1px solid #00000a; border-left: 1px solid #00000a; border-right: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>4</P>
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>4*</P>
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>4</P>
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>4*</P>
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>9</P>
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>4</P>
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>4</P>
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>6</P>
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>4*</P>
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>3</P>
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>2*</P>
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>4*</P>
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
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
                                <TD WIDTH=59 STYLE="border: 1px solid #00000a; padding-top: 0in; padding-bottom: 0in; padding-left: 0.08in; padding-right: 0.08in">
                                    <P class="text-justify" ALIGN=CENTER>2*</P>
                                </TD>
                            </TR>
                        </TABLE>
                    </CENTER>
                    <P class="text-justify" STYLE="margin-top: 0.25in">Los elementos que hemos
                    marcado por un asterisco (*) son amenazas cuyo riesgo se ha visto
                    aumentado o disminuido por causa de una vulnerabilidad o una
                    salvaguarda.</P>
                    
                    <br><br>

                    <p>En la aplicación podrás ver el listado, a modo de informe, donde se verá el nivel de riesgo de cada activo y cada amenaza. Además, podrás definir un nivel máximo de riesgo y la aplicación marcará en rojo aquellas amenazas que superen ese nivel máximo tolerable.</p>

                    <img src="images/capturasprograma/fase5.png" class="img-fluid" alt="Imagen Fase 5">

                    <br><br>
                    <!-- Footer -->
                    <footer class="page-footer font-small cyan darken-3">
                        <nav aria-label="...">
                          <ul class="pagination pagination-sm justify-content-center">
                            <li class="page-item">
                              <a class="page-link" href="{{ url('fase4') }}"><b>&laquo; {{ __('text.btnPrevious')}}</b></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase1') }}">Fase 1</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase2') }}">Fase 2</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase3') }}">Fase 3</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase4') }}">Fase 4</a></li>
                            <li class="page-item active">
                              <span class="page-link">
                                Fase 5
                                <span class="sr-only">(current)</span>
                              </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase6') }}">Fase 6</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fin') }}">Final del Tour</a></li>
                            <li class="page-item">
                              <a class="page-link" href="{{ url('fase6') }}"><b>{{ __('text.btnNext')}} &raquo;</b></a>
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
