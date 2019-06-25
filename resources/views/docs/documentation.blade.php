@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('text.bienvenida') }}</div>

                <div class="card-body">
                    
                    <P CLASS="text-justify" STYLE="margin-top: 0.08in"><A NAME="_GoBack"></A>Vamos
                    a introducirnos en la <b>Metodología Magerit de análisis y gestión de
                    riesgos</b>, adaptándola un poco para hacerla más simple y sencilla.
                    Esta Metodología fue creada por el Consejo Superior de
                    Administración Electrónica de España para minimizar los riesgos
                    derivados de la implantación de un Plan de Seguridad y su
                    mantenimiento en las administraciones públicas. Después se hizo
                    extensivo a las empresas que trabajaban para las administraciones y
                    luego se hizo público para todas las empresas que quieran realizar
                    un estudio de este tipo.</P>
                    <P CLASS="text-justify" STYLE="margin-top: 0.08in">Un Análisis de Riesgos
                    no pretende ser un sistema infalible para evitar incidentes, sino que
                    nos va a permitir estar preparados para cuando esto ocurra.</P>
                    <P CLASS="text-justify" STYLE="margin-top: 0.08in">El Análisis de riesgos
                    más básico, se puede reproducir en seis fases, definiendo en cada
                    fase una característica del análisis. Tal y como se puede ver en la
                     Fases de creación de un Análisis de Riesgos, estas fases son
                    consecutivas y se deben hacer de manera lineal.</P>
                    
                    <P CLASS="text-justify" STYLE="margin-top: 0.08in; page-break-after: avoid">
                    <img class="card-img-top" src="images/gestionRiesgos.png" alt="Fase 1 - Activos"></P>
                    <P ALIGN=CENTER STYLE="margin-bottom: 0.14in"><A NAME="_Ref10830656"></A>
                    <FONT COLOR="#4472c4"><B><FONT SIZE=2>Ilustración 1 Fases de
                    creación de un Análisis de Riesgos</FONT></B></FONT></P>
                    <P CLASS="text-justify" STYLE="margin-top: 0.08in">La <B>Fase1</B>, sirve
                    para especificar hasta donde queremos llegar con nuestro análisis.
                    Como de profundo queremos hacerlo. Un análisis puede ser tan
                    sencillo o tan complejo como nos propongamos y en ocasiones hacerlo
                    complejo no siempre es lo idóneo. Tenemos que definir un límite que
                    no debemos traspasar.</P>
                    <P CLASS="text-justify" STYLE="margin-top: 0.08in">La <B>Fase 2</B>,
                    identifica los activos sobre los cuales queremos hacer el análisis.
                    Pueden ser activos físicos, como ordenadores, personas o edificios;
                    o activos virtuales, como programas, licencias, etc. Especificar en
                    concreto que activos tenemos y definirlos nos permitirá averiguar en
                    cuantos frentes tenemos que librar la guerra de la seguridad.</P>
                    <P CLASS="text-justify" STYLE="margin-top: 0.08in">La <B>Fase 3</B> nos
                    sirve para especificar las amenazas que actúan sobre cada activo.
                    Aquí debemos tener un poco de imaginación y realizar un poco de
                    investigación. Sobre cada activo que tengamos, definiremos las
                    situaciones, elementos o peligros que puedan afectar a su normal
                    funcionamiento.</P>
                    <P CLASS="text-justify" STYLE="margin-top: 0.08in">Con la <B>Fase 4</B>
                    definimos que Salvaguardas tenemos y que Vulnerabilidades nos
                    debilitan. Una salvaguarda es algo que hará más fuerte un activo,
                    impidiendo que sufra una amenaza o que esta se vea mitigada. Una
                    vulnerabilidad, por el contrario, hará que un activo se vea más
                    expuesto a una amenaza o que esta se produzca de forma más probable.</P>
                    <P CLASS="text-justify" STYLE="margin-top: 0.08in">En la <B>Fase 5</B>, la
                    penúltima, vamos a evaluar la probabilidad de que una amenaza se
                    materialice y el impacto que tendrá esa amenaza sobre el activo o el
                    trabajo que realiza. Ambas medidas tienen 3 niveles, Bajo (1), Medio
                    (2) y Alto (3). Según si realizamos un análisis cuantitativo o
                    cualitativo usaremos el número o la palabra para definir la
                    probabilidad y el impacto.</P>
                    <P CLASS="text-justify" STYLE="margin-top: 0.08in">La última fase, la
                    <B>Fase 6</B>, sirve para tratar los riesgos que superen un índice
                    que hayamos decidido. Todas las amenazas cuyo riesgo sea superior al
                    indicado, deberemos buscar una forma de mitigar o eliminar esa
                    amenaza. Tenemos 4 estrategias para tratar esto: Podemos transferir
                    el riesgo a un tercero, podemos eliminar el activo con lo cual
                    eliminaremos la amenaza, podemos asumir el riesgo esperando que no se
                    lleve a cabo nunca, o podemos implantar alguna medida que trate con
                    esa amenaza y proteja el activo.</P>
                    <P CLASS="text-justify" STYLE="margin-top: 0.08in">Cualquiera de estas
                    fases nos va a ir dando pistas sobre la situación de seguridad en la
                    que nos encontramos, y es normal que, mientras realizamos el
                    análisis, encontremos soluciones a muchos de nuestras
                    vulnerabilidades. Pero es en la última fase donde debemos tomar
                    decisiones drásticas y realizar una labor más técnica para
                    solventar las amenazas.</P>
                    <BR>
                    <P CLASS="text-justify" STYLE="margin-top: 0.08in">Vamos a hacer un
                    análisis inicial muy sencillo, en seis pasos, que nos va a permitir
                    darnos cuenta de que elementos tenemos que proteger (activos) y el
                    nivel que deberíamos aplicar a cada uno de esos elementos. Para
                    realizar este análisis vamos a seguir las pautas establecidas por el
                    Instituto Nacional de Ciberseguridad (INCIBE, 2017).</P>
                    <P CLASS="text-justify" STYLE="margin-top: 0.08in">En la metodología
                    Magerit, existen dos tipos de Análisis de Riesgos: El Cuantitativo y
                    el Cualitativo. Ambos son similares, pero uno utiliza una escala
                    numérica (del 1 al 9) para establecer el riesgo y el otro utiliza
                    una escala nominal (de <I>muy bajo</I> a <I>muy alto</I>). Para
                    algunas personas ver que tienen un riesgo de 9 no les dirá nada,
                    pero si ven “muy alto” en el riesgo es posible que signifique
                    algo para ellas. Aun así vamos a usar la escala cuantitativa, la
                    numérica, para el ejemplo de análisis de riesgo, ya que traducir de
                    números a letras se puede hacer con una tabla de conversión muy
                    sencilla e intuitiva</P>
                    <br>
                    <P CLASS="western" STYLE="margin-top: 0.08in">Para conseguir toda la documentación necesaria para trabajar con Magerit, dirijase a la página web de INCIBE:</P>
                    <h6 class="text-center"> <a href="https://administracionelectronica.gob.es/pae_Home/pae_Documentacion/pae_Metodolog/pae_Magerit.html?comentarioContenido=0">Portal Magerit v3</a>.</h6>

                    <br><br>
                    <p>Pero lo mejor para aprender es hacer un caso práctico. Recomendamos hacer el Tour para saber como funciona el programa CiberPYME</p>
                    <center>
                    <a class="text-center" href="{{ url('tour') }}"><button class="btn btn-primary">Hacer Tour</button></a>
                    </center>

                     <br><br>    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
