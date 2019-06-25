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

    'login' => 'Login',
    'E-Mail Address' => 'E-Mail Address',
    'bienvenidoUS' => 'Wellcome :username,',
    'logged' => 'Dashboard',
    'bienvenida' => 'CiberPYME',
    'register' => 'Register',
    'dashboard' => 'Dashboard',
    'activos' => 'List of Assets',
    'home' => 'Home',
    'back' => 'Back',
    'QuestionSuredelete' => 'Are you sure you want to delete the record?',
    'docs' => 'Documentation (in Spanish)',
    'testing' => 'Do a tour (in Spanish)',
    'HomeActivos'=> 'Phase 1 - Assets',
    'btnHomeActivos' => "Go to Assets",
    'descHomeActivos' => "Go to Assets' page, where you can check, create or delete them.",
    'HomeMenaces' => "Phase 2 -  Threats",
    'btnHomeMenaces' => "Go to Threats",
    'descHomeMenaces' => "Go to the page where you can check the threats that affects each one of the assets, create new threats or delete them.",
    'tablaVacia' => 'The List in empty',
    'imprPDF' => 'PDF',
    'saveSuccess' => 'Changes saved succesfully',
    'saveDuplicate' => 'There was an error in saving. The record exist already in the DataBase.',
    'saveError' => 'There was an error when saving the record. Have you imput correctly the data?',
    'deleteSuccess' => 'The record was deleted succesfully',
    'deleteError' => 'There was an error when deleting the record',


    
    'HomeVulneSalva' => 'Phase 3 -  Safeguards and Vulnerabilities',
    'descHomeVulneSalva' => 'Here you can define the Safeguards that protects the assets and the vulnerabilities that weaknesses them.',
    'btnHomeVulneSalva' => 'Go to V&S',
    'HomeCalculo' => 'Phase 4 -  Risks calculation',
    'descHomeCalculo' => 'Set an Impact and Probability level for each threat that will set the ammount of Risk for each asset ',
    'btnHomeCalculo' => 'Go to calculation',
    'HomeAnalisis' => 'Phase 5 - Risk Analysis',
    'btnHomeAnalisis' => 'Check Analysis',
    'descHomeAnalisis' => 'Check the Risk Level for each assets from the calculation.',
    'HomeDecision' => 'Phase 6 - Report',
    'btnHomeDecision' => 'Go to Report',
    'descHomeDecision' => 'Analyze the report of the risk level and take decisions to minimize risks.',
    'ident' => 'Identifier', 
    'desc' => 'Description',

    'delAsset' => 'Delete',
    'signoMenos-' => '-',
    'addAsset' => 'Add new',
    'signoMas' => '+',
    'btnClose' => 'Close',
    'lblAction' => "Action",
    'btnPrevious' => 'Back',
    'btnNext' => 'Next',
    'btnSelect' => 'Select',
    'btnSearch' => 'Search',
    'btnGuardar' => 'Save',
    'notDefined' => 'Not Defined',

    /* Textos para la página de ACTIVOS */
    'F1activos' => 'Phase 1 - Assets list',
    'F1text' =>'Select an asset or add one asset to the talbe. Each asset represents an elemnt of your bussiness you want to protect.',
    'colActivosIdent' => 'Identifier',
    'colActivosDesc' => 'Description',
    'btnBuscarActivo' => 'Search Asset',       
    'nuevoActivo' => 'New Asset',
    'excelActivoText' => 'Assets List',
    


    /* Textos para la página de AMENAZAS */
    'F2amenazas' => 'Phase 2 - Threats by asset',
    'F2text' => 'Here you can specify the threats that affects each asset',
    'colAmenazaIdent' => 'Identifier',
    'colAmenazaDesc' => 'Description',
    'colAmenazaActivo' => 'Asset',
    'btnBuscarActivo' => 'Serach Asset',
    'nuevaAmenaza' => 'New Threat',
    'excelAmenazaText' => 'Threats List',
    'buscaActivosText' => 'Select one asset from the list',
    'newAmenazaId' => 'Make it diferent from anyone.',
    'newAmenazaDesc' => 'explain briefly what the threat is.',
    'newAmenazaAct' => 'Asset that is affected by the threat.',

    /* Textos para la página de SALVAVULNERAS */
    'F3vulAndSalva' => 'Phase 3 - Vulnerabilities and Safeguards',
    'F3Salvavulnera' => 'Phase 3 - Vulnerabilities and Safeguards for each asset by threat',
    'F3text' => 'Here you can set some Safeguards and Vulnerabilities for each threat and asset. Each Safeguard strengthen the asset and the Vulnerabilities make the asset weaker and the threat more lickely to happen.',
    'colSalvavulneraTipo' => 'Kind',
    'colSalvavulneraDesc' => 'Description',
    'colSalvavulneraAmen' => 'Threat',
    'btnBuscarAmen' => 'Search Threat',
    'nuevaSalvavulnera' => 'New Safeguard/Vulnerability',
    'excelSalvavulneraText' => 'Safeguards and Vulnerabilities list',
    'buscaSalvavulneraText' => 'Select a threat from your list',
    'newSalvavulneraTipo' => 'Make it unique',
    'newSalvavulneraDesc' => 'Explain briefly what is the Vulnerability or Safeguard.',
    'newSalvavulneraAmen' => 'Thrat that is affected by the Safeguard/Vulnerability.',
    'txtSalva' => 'Safeguard',
    'txtVulnera' => 'Vulnerability',

    /*TEXTOS PARA LA FASE 4 DE CALCULOS*/
    'F4calculo' => 'Phase 4 - Impact and Probability calculation for each threat',
    'F4text' => 'In this phase we will define some levels of Probability and Impact. We have three levels: Low, Medium and High. If an threat has a low probability level, it will not happen often, perhaps once a year.  High probability means it happens almost every week. A low impact means that if does not affect to our bussiness, and High impact means that it will cost us work and effort to recover from it, not to mention the economic loss',
    'colCalculoActivo' => 'Asset',
    'colCalculoAmenaza' => 'Thrat',
    'colCalculoDescAmenaza' => 'Threat description',
    'colCalculoProbabilidad' => 'Probability',
    'colCalculoImpacto' => 'Impact',
    'colCalculoSalvavulnera' => 'It has S/V',
    'prBaja' => 'Low',
    'prMedia' => 'Medium',
    'prAlta' => 'High',
    'imBajo' => 'Low',
    'imMedio' => 'Medium',
    'imAlto' => 'High',
    'guardaCalculo' => 'Save',
    'txtCalculoGuardar' => 'The probability and impact data will be saved, would you like to continue?',


    /*TEXTOS PARA LA FASE 5 DE ANALISIS DE LOS RIESGOS*/
    'F5analisis' => 'Phase 5 - Risk Analysis',
    'F5text' => 'Select a bearable level of risk and you will see those threats that are higher in red color. The default level is 4.',
    'colAnalisisSV' => 'It has S/V',
    'colAnalisisRiesgo' => 'Risk',
    'nivelR'=> 'Risk level:',
    'txtS' => 'S:',
    'txtV'=> 'V:',
    'txtSalvaguarda' => 'Safeguard',
    'txtVulnerabilidad' => 'Vulnerability',
    'cambiarNivelR' => 'Change level',


    /*TEXTOS PARA LA FASE 6 DE DECISIONES*/
    'F6decisiones' => 'Phase 6 - Decision Making',
    'F6text' => 'It is time to make decitions about the threats ans their risks. Select a maximum bearable risk level and you will see only those threats. Default level is 4.',
    'colDecActivoAmenaza' => 'Asset / Threat',
    'colDecisionEstrategia' => 'Strategy',
    'colDecisionDescripcion' => 'Description',
    'nuevaDecision' => 'New Decision',
    'nuevaDecisionTxt' => 'Select an strategy, describe what will you do to implement it and select a risk asociated to it.',
    'excelDecisionText' => 'Decisions list',
    'estEliminarTxt' => 'Remove the asset that cause the threat',
    'esttranferTxt' => 'Transfer the risk management',
    'estAsumirTxt' => 'Assume the risk',
    'estImplantTxt' => 'Implement measures to reduce the risk',
    'estEliminar' => 'Remove',
    'esttranfer' => 'Transfer',
    'estAsumir' => 'Asume',
    'estImplant' => 'Implement',
    'estNoesp' => 'Not Specified',
    'estDecision' => 'Strategy',
    'descDecision' => 'Action description',

];
