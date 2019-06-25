@extends('layouts.appNoAuth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('text.bienvenida') }}</div>

                <div class="card-body">
                    
                    <H1 class="text-center">
                        <P STYLE="margin-top: 0.25in"><B>FASE 6</B></P>
                    </H1>
                    <P class="text-justify" STYLE="margin-top: 0.08in">Ya casi tenemos
                    terminado nuestro Análisis de Riesgos. Durante su ejecución seguro
                    que ya hemos visto algunas flaquezas en nuestros Sistemas, incluso
                    puede que hayamos pensado en algunas mejoras. Ahora queda, tan solo,
                    escribirlo todo para dejar un buen informe.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">En esta última fase,
                    vamos a tratar de buscar soluciones para aquellos riesgos que superen
                    un valor que hayamos fijado como tope para nuestro riesgo, el Nivel Máximo Tolerable. Si
                    queremos estar muy, muy seguros, intentaremos solucionar aquellos que
                    superen el valor 1 o 2, si estamos realizando un análisis cuantitativo,
                    o un valor “bajo” si es cualitativo. Si somos flexibles y no nos
                    preocupa demasiado la seguridad, podemos establecer un límite más
                    alto. En el ejemplo que nos ocupa vamos a estudiar aquellos riesgos
                    que superen el valor 4, o “medio”.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">Cuando queremos tratar
                    de solucionar un riesgo existen cuatro tipos de estrategias:</P>
                    <OL>
                        <LI><P STYLE="margin-top: 0.08in"><B>Transferir</B>: Consiste en
                        delegar la gestión del riesgo a un tercero para que lo solucione
                        él. Un ejemplo de transferencia es el caso de las copias de
                        seguridad online. Si no tenemos un sistema de almacenamiento externo
                        para los Backup en nuestra empresa, podemos contratar un servicio de
                        copias de seguridad en la nube, como Dropbox, Zoolz, Amazon, etc.
                        Que se encarguen de almacenar, custodiar y establecer todas las
                        medidas de seguridad (replicación, control de accesos, seguridad
                        física, etc.) para librarnos nosotros de esa tarea. Otro ejemplo es
                        contratar un seguro para garantizar un activo.</P>
                        <LI><P STYLE="margin-top: 0.08in"><B>Eliminar</B>: Podemos eliminar
                        el activo que causa el riesgo. Es la técnica de “Muerto el perro
                        se acabó la rabia”. Si eliminamos el activo, la amenaza también
                        se elimina. Por ejemplo, para el caso de las amenazas de accesos no
                        autorizados desde internet (exfiltración de información) podemos
                        decidir que nuestra empresa no va a tener conexión fuera de su red
                        interna, cancelaríamos el contrato con nuestro ISP y así, teniendo
                        una red que no está conectada a nada fuera de ella misma, sería
                        muy difícil que accedieran agentes externos, con lo que la amenaza
                        también desaparecería.</P>
                        <LI><P STYLE="margin-top: 0.08in"><B>Asumir</B>: En ocasiones la
                        solución del problema es demasiado cara, y no compensa tratar de
                        solucionarla. En ese caso lo mejor es asumir el riesgo y tenerlo en
                        cuenta por si alguna vez se materializa. Un ejemplo de esto es el
                        riesgo producido por las posibles enfermedades del personal; a lo
                        mejor es muy caro contratar a alguien solo para mantenerlo para los
                        casos de bajas y enfermedades puntuales. En ese caso lo mejor es
                        asumir que los trabajadores pueden ponerse enfermos y lidiar con
                        ello cuando ocurra. Otro ejemplo es para el riesgo de insuficiencia
                        energética. Es posible que sea muy caro comprar y mantener un
                        generador, y lo mejor es asumir los cortes que se puedan producir y
                        contratar un seguro que cubra los desperfectos cuando ocurra (aunque
                        eso sería más de Implantación).</P>
                        <LI><P STYLE="margin-top: 0.08in"><B>Implantar</B>: Se trata de, una
                        vez visto el riesgo, implantar una solución efectiva que mitigue la
                        amenaza, incluso la elimine. Se trataría de la estrategia más
                        efectiva, ya que seguimos trabajando con normalidad, pero tendríamos
                        cubierto un frente para contingencias en el caso de esa amenaza. Un
                        ejemplo de Implantación sería, en el caso del riesgo de rotura o
                        avería de un equipo informático. En ese caso podríamos comprar
                        uno y tenerlo en reserva para el caso de que falle, el trabajador no
                        esté mucho tiempo sin poder trabajar.</P>
                    </OL>
                    <P class="text-justify" STYLE="margin-top: 0.08in">En nuestro pequeño
                    estudio tenemos algunos riesgos que superan el índice 4. Podríamos
                    hacer una aproximación más incisiva rebajando el nivel a 3, pero el
                    gasto que supondría tratar con tantos incidentes no compensaría a
                    la recompensa obtenida, así que en el resto de las amenazas (las
                    inferiores a 4) vamos a “asumir” el riesgo. 
                    </P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">Así pues, con valor de
                    riesgo superior a 4 “medio”, tenemos códigos: C2, F1, H16, H13,
                    H12, H8, H4, H2, P8, P5, P4 y P1. Vamos a ver uno por uno que hacemos
                    con ellos.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in"><B>P1.
                    Enfermedad-Indisposición de Arquitecto 1</B>: Podríamos contratar,
                    en este caso un nutricionista para que vigile la alimentación, un
                    plan médico que hiciese revisiones periódicas o animar al empleado
                    a hacer ejercicio regular. Pero en este caso vamos a sumir el riesgo
                    de que se pueda producir una baja por enfermedad.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in"><B>P4 y P8. Ingeniería
                    Social (Robo de Claves). Ambos arquitectos: </B>En ambos casos<B> </B>la
                    amenaza se ve aumentada porque en el ordenador que usan para
                    trabajar, inician sesión directamente con un usuario administrador.
                    Así pues, en el caso de que le robasen la contraseña (por cualquier
                    medio) los atacantes tendrían acceso a toda la información sin
                    restricciones. Es un riesgo muy alto, así que hemos decidido
                    implantar una política de contraseñas robusta y una separación de
                    privilegios. Los trabajadores arquitectos a partir de ahora iniciarán
                    sesión con un usuario normal, y si tienen que instalar o ejecutar un
                    programa con privilegios de administrador, se introducirá la clave
                    de Administrador en ese caso concreto.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in"><B>P5.</B>
                    <B>Enfermedad-Indisposición de Arquitecto 2</B>: Al igual que en el
                    riesgo anterior, vamos a asumirlo y no tratar de buscar posibles
                    soluciones.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in"><B>H2 y H8. Difusión
                    de Software Dañino en los ordenadores PC1 y PC2:</B> En este caso,
                    el riesgo se ve aumentado por que en la Fase 4 encontramos una
                    vulnerabilidad de que el antivirus no estaba actualizado en el PC1.
                    Además, es el ordenador principal que contiene información
                    sensible, así que su pérdida sería catastrófica para la empresa.
                    Es por eso por lo que tiene el riesgo más alto de toda la tabla. 
                    </P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">En este caso vamos a
                    Implantar una medida que dará solución al problema de ambos
                    ordenadores, crearemos una tarea en Windows (Gestor de tareas) para
                    que automáticamente cada lunes actualice de manera forzosa el
                    antivirus. También actualizaremos los sistemas a una solución
                    completa de gestión de amenazas, así en lugar de “solo antivirus”
                    contrataremos una solución “Total” que incluya otros servicios,
                    como firewall, protección contra Ransomware, control parental,
                    gestor de contraseñas, etc. Matamos varios pájaros de un tiro.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in"><B>H4. Caída del
                    sistema por fallo eléctrico o de Software. PC1</B>: Como hemos
                    dicho, el PC1 tiene sistemas críticos para nuestro trabajo en esta
                    empresa ficticia. Así pues, una caída del sistema en este ordenador
                    causaría una gran incidencia. Para solucionarlo hemos decidido
                    comprar un pequeño SAI (Sistema de Alimentación Ininterrumpida)
                    para que, en el caso de corte de luz, podamos guardar los datos y no
                    perder la información con la que estemos trabajando. Extender este
                    sistema al resto de ordenadores, es demasiado costoso, así que hemos
                    decidido cubrir solo lo esencial en este aspecto. El resto lo
                    asumimos.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in">En cuanto a la caída
                    del sistema por fallo de Software debemos asumirlo, pues buscar una
                    solución de redundancia de datos y cosas parecidas queda fuera de
                    nuestro estudio y nuestro presupuesto.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in"><B>H12 y H13. Robo,
                    extravío o rotura y exfiltración de datos de terminales de teléfono
                    móvil</B>: Ambas cosas están relacionadas en nuestro estudio,
                    además de que el riesgo se ve agravado porque no contamos con un
                    sistema de protección por PIN, huella dactilar, contraseña o
                    patrón, así que si se pierde o nos roban el teléfono tendrían
                    acceso total a su contenido. Para tratar con este riesgo, decidimos
                    implantar un sistema de bloqueo automático propio del teléfono,
                    protegido por un patrón. Además, tendremos un dispositivo como
                    auxiliar y todos los datos del terminal (contactos, imágenes, etc.)
                    sincronizados en la nube con los servicios de Google (Gmail, Google
                    Photos, etc.). En caso de pérdida, todos esos datos se sincronizarán
                    con el nuevo terminal de manera inmediata.</P>
                    <P class="text-justify" STYLE="margin-top: 0.08in"><B>F1. Daños por
                    causas naturales (fuego, agua…) en la Habitación 1 (despacho)</B>:
                    El riesgo se ve aumentado porque no contamos con un sistema
                    antiincendios y es la habitación donde están todos los demás
                    sistemas. Así que un fuego en esta habitación nos haría perder
                    todos los demás sistemas. Para paliar este riesgo vamos a
                    implementar un sistema de copias de seguridad en la nube y vamos a
                    comprar un extintor pequeño de polvo polivalente para apagar
                    pequeños conatos de incendio.</P>
                    <P class="text-justify" STYLE="margin-top: 0.25in">Como podemos comprobar,
                    todas las medidas que hemos decidido adoptar son razonables y no
                    excesivamente caras. Solucionan muchos de nuestros problemas, y el
                    resto los asumimos como vicisitudes que nos pueden ocurrir en el día
                    a día. Por supuesto, cuando más completo y concreto hagamos nuestro
                    análisis más riesgos contemplaremos y más activos podremos
                    proteger. Como siempre, un buen equilibrio entre esfuerzo y
                    resultados será la clave para conseguir un éxito aceptable.</P>
                    
                    <br><br>

                    <p>En la aplicación podrás ver el listado, a modo de informe, con un selector de Nivel Máximo Tolerable, y podremos añadir nuevas decisiones sobre las amenazas.</p>

                    <img src="images/capturasprograma/fase6.png" class="img-fluid" alt="Imagen Fase 6">

                    <br><br>
                    <!-- Footer -->
                    <footer class="page-footer font-small cyan darken-3">
                        <nav aria-label="...">
                          <ul class="pagination pagination-sm justify-content-center">
                            <li class="page-item">
                              <a class="page-link" href="{{ url('fase5') }}"><b>&laquo; {{ __('text.btnPrevious')}}</b></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase1') }}">Fase 1</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase2') }}">Fase 2</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase3') }}">Fase 3</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase4') }}">Fase 4</a></li>
                            <li class="page-item"><a class="page-link" href="{{ url('fase5') }}">Fase 5</a></li>
                            <li class="page-item active">
                              <span class="page-link">
                                Fase 6
                                <span class="sr-only">(current)</span>
                              </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="{{ url('fin') }}">Final del Tour</a></li>
                            <li class="page-item">
                              <a class="page-link" href="{{ url('fin') }}"><b>{{ __('text.btnNext')}} &raquo;</b></a>
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
