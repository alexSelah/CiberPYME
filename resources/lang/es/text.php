<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Program text Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in the program text for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'login' => 'Iniciar Sesión',
    'E-Mail Address' => 'Dirección de E-Mail',
    'bienvenidoUS' => 'Bienvenido :username,',
    'bienvenida' => 'CiberPYME',
    'logged' => 'Panel de Control',
    'register' => 'Registrarse',
    'dashboard' => 'Panel de Control',
    'activos' => 'Listado de Activos',
    'home' => 'Inicio',
    'back' => 'Volver',
    'QuestionSuredelete' => '¿Está seguro de querer borrar el registro?',
    'docs' => 'Documentación',
    'testing' => 'Realizar un tour',
    'HomeActivos'=> 'Fase 1 - Activos',
    'btnHomeActivos' => "Ir a Activos",
    'descHomeActivos' => "Vaya a la página donde podrá ver los activos que tiene, borrarlos o crear nuevos.",
    'HomeMenaces' => "Fase 2 -  Amenazas",
    'btnHomeMenaces' => "Ir a Amenazas",
    'descHomeMenaces' => "Vaya a la página para comprobar las Amenazas que tiene cada activo, editarlos, borrarlos y crear nuevos.",
    'tablaVacia' => 'No existen registos en la tabla todavía. Por favor, cree uno nuevo',
    'saveSuccess' => 'Los cambios se han guardado con éxito',
    'saveDuplicate' => 'Fallo al guardar los cambios. El registro ya existe',
    'saveError' => 'Ha ocurrido un error al guardar el registro. ¿Ha introducido todos los datos correctamente?',
    'deleteSuccess' => 'El registro se ha borrado con éxito',
    'deleteError' => 'Ocurrió un problema al intentar borrar el registro.',
    
    'HomeVulneSalva' => 'Fase 3 -  Vulnerabilidades y Salvaguardas',
    'descHomeVulneSalva' => 'Vaya a la página donde podrá definir las Vulnerabilidades y Salvaguardas sobre cada activo.',
    'btnHomeVulneSalva' => 'Ir a V&S',
    'HomeCalculo' => 'Fase 4 -  Cálculos de Riesgo',
    'descHomeCalculo' => 'Vaya a la página donde podrá definir un valor de Impacto, Probabilidad sobre cada amenaza para calcular el Riesgo',
    'btnHomeCalculo' => 'Ir a Cálculo',
    'HomeAnalisis' => 'Fase 5 - Análisis de Riesgos',
    'btnHomeAnalisis' => 'Ver Análisis',
    'descHomeAnalisis' => 'Compruebe el Índice de Riesgo para cada activo como resultado del calculo realizado.',
    'HomeDecision' => 'Fase 6 - Resultados',
    'btnHomeDecision' => 'Ver Resultados',
    'descHomeDecision' => 'Comprobemos el resultado del Análisis de Riesgos y tomemos decisiones para mitigar los riesgos.',
    'ident' => 'Identificador', 
    'desc' => 'Descripcción',

    'delAsset' => 'Eliminar',
    'signoMenos-' => '-',
    'addAsset' => 'Añadir',
    'signoMas' => '+',
    'btnClose' => 'Cerrar',
    'lblAction' => "Acción",
    'btnPrevious' => 'Atrás',
    'btnNext' => 'Siguiente',
    'btnSelect' => 'Seleccionar',
    'btnSearch' => 'Buscar',
    'btnGuardar' => 'Guardar',
    'notDefined' => 'No Definido',
    'imprPDF' => 'PDF',

    /* Textos para la página de ACTIVOS */
    'F1activos' => 'Fase 1 - Listado de Activos',
    'F1text' =>'Elija un activo o añada activos a la tabla. Cada activo representa un elemento de su empresa (físico o no) sobre el que desea hacer un análisis de riesgos.',
    'colActivosIdent' => "Identificador",
    'colActivosDesc' => "Descripción",
    'btnBuscarActivo' => 'Buscar activo',       
    'nuevoActivo' => 'Crear nuevo Activo',
    'excelActivoText' => 'Tabla de Activos',
    


    /* Textos para la página de AMENAZAS */
    'F2amenazas' => 'Fase 2 - Amenazas por cada activo',
    'F2text' => 'Aquí podrás especificar las amenazas que afectan a cada activo',
    'colAmenazaIdent' => 'Identificador',
    'colAmenazaDesc' => 'Descripción',
    'colAmenazaActivo' => 'Activo',
    'btnBuscarActivo' => 'Buscar Amenaza',
    'nuevaAmenaza' => 'Crear nueva Amenaza',
    'excelAmenazaText' => 'Fase 2 - Amenazas por cada activo',
    'buscaActivosText' => 'Selecciona un Activo de tu lista',
    'newAmenazaId' => 'Que sea diferente de cualquier otro.',
    'newAmenazaDesc' => 'Explica brevemente en que consiste la amenaza.',
    'newAmenazaAct' => 'Activo que es objeto de la amenaza.',

    /* Textos para la página de SALVAVULNERAS */
    'F3vulAndSalva' => 'Fase 3 - Vulnerabilidades y Salvaguardas',
    'F3Salvavulnera' => 'Fase 3 - Salvaguardas y Vulnerabilidades de cada activo por amenaza',
    'F3text' => 'Aquí podrás especificar las Salvaguardas y las Vulnerabilidades que afectan a cada activo. Se ordenan por amenaza, porque cada salvaguarda protege frente a una amenaza y cada vulnerabilidad aumenta una amenaza.',
    'colSalvavulneraTipo' => 'Tipo',
    'colSalvavulneraDesc' => 'Descripción',
    'colSalvavulneraAmen' => 'Amenaza',
    'btnBuscarAmen' => 'Buscar Amenaza',
    'nuevaSalvavulnera' => 'Crear nueva Salvaguarda / Vulnerabilidad',
    'excelSalvavulneraText' => 'Fase 3 - Vulnerabilidades y Salvaguardas',
    'buscaSalvavulneraText' => 'Selecciona una Amenaza de tu lista',
    'newSalvavulneraTipo' => 'Que sea diferente de cualquier otro.',
    'newSalvavulneraDesc' => 'Explica brevemente en que consiste la Salvaguarda o Vulnerabilidad.',
    'newSalvavulneraAmen' => 'Amenaza que se ve influenciada la Salvaguarda o Vulnerabilidad.',
    'txtSalva' => 'Salvaguarda',
    'txtVulnera' => 'Vulnerabilidad',

    /*TEXTOS PARA LA FASE 4 DE CALCULOS*/
    'F4calculo' => 'Fase 4 - Cálculos de Probabilidad e Impacto sobre las amenazas',
    'F4text' => 'En esta fase vamos a definir unos niveles de Probabilidad y de Impacto sobre cada amenaza. Tenemos para cada uno tres niveles: Bajo, Medio y Alto. Sobre un activo podemos definir una probabilidad "baja" lo que querrá decir que es muy poco probable que ocurra, pero un Impacto "Alto", que quiere decir que si ocurre causará graves problemas a la empresa o al activo que afecta.',
    'colCalculoActivo' => 'Activo',
    'colCalculoAmenaza' => 'Amenaza',
    'colCalculoDescAmenaza' => 'Descripción Amenaza',
    'colCalculoProbabilidad' => 'Probabilidad',
    'colCalculoImpacto' => 'Impacto',
    'colCalculoSalvavulnera' => 'Aplica S/V',
    'prBaja' => 'Baja',
    'prMedia' => 'Media',
    'prAlta' => 'Alta',
    'imBajo' => 'Bajo',
    'imMedio' => 'Medio',
    'imAlto' => 'Alto',
    'guardaCalculo' => 'Guardar datos',
    'txtCalculoGuardar' => 'Se va a proceder a guardar los datos de Probabilidad e Impacto en la base de datos. ¿Quiere seguir?',


    /*TEXTOS PARA LA FASE 5 DE ANALISIS DE LOS RIESGOS*/
    'F5analisis' => 'Fase 5 - Análisis de Riesgos',
    'F5text' => 'Seleccione un nivel máximo de amenaza tolerable y verá en rojo aquellas amenazas que pueden suponer un riesgo para su negocio. Por defecto, el nivel es 4',
    'colAnalisisSV' => 'Tiene S/V',
    'colAnalisisRiesgo' => 'Riesgo',
    'nivelR'=> 'Nivel de Riesgo:',
    'txtS' => 'S:',
    'txtV'=> 'V:',
    'txtSalvaguarda' => 'Salvaguarda',
    'txtVulnerabilidad' => 'Vulnerabilidad',
    'cambiarNivelR' => 'Cambiar Nivel',
    'excelAnalisisText' => 'Fase 5 - Análisis de Riesgos',


    /*TEXTOS PARA LA FASE 6 DE DECISIONES*/
    'F6decisiones' => 'Fase 6 - Toma de decisiones',
    'F6text' => 'Ha llegado la hora de tomar decisiones en cuando a las amenazas y al riesgo que estas suponen. Seleccione un nivel máximo de amenaza tolerable y verá solo aquellas amenazas que superan ese nivel de riesgo para su negocio. Por defecto, el nivel es 1, para poder comprobar todas las Decisiones tomadas. Puede cambiar el nivel para limitarse a ver solo las decisiones cuyos riesgos superen ese nivel.',
    'colDecActivoAmenaza' => 'Activo / Amenaza',
    'colDecisionEstrategia' => 'Estrategia',
    'colDecisionDescripcion' => 'Descripción',
    'nuevaDecision' => 'Crear nueva Decisión',
    'nuevaDecisionTxt' => 'Seleccione una estrategia, describa lo que va a hacer para seguirla y seleccione un riesgo asociado a esa estrategia',
    'excelDecisionText' => 'Tabla de Decisiones',
    'estEliminarTxt' => 'Eliminar el activo que causa el riesgo',
    'esttranferTxt' => 'Transferir la gestión del riesgo',
    'estAsumirTxt' => 'Asumir el riesgo',
    'estImplantTxt' => 'Implantar medidas para bajar el riesgo',
    'estEliminar' => 'Eliminar',
    'esttranfer' => 'Transferir',
    'estAsumir' => 'Asumir',
    'estImplant' => 'Implantar',
    'estNoesp' => 'No Especificado',
    'estDecision' => 'Estrategia',
    'descDecision' => 'Descripción de la acción',
    'excelDecisionesText' => 'Fase 6 - Toma de decisiones',
    

    

];
