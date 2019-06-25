<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;


class TestSeeder extends Seeder
{
    /**
     *run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Usuario de prueba',
            'email' => 'prueba@ciberpyme.com',
            'password' => bcrypt('prueba1234'),
        ]);

        $usuario = DB::table('users')->where('email','prueba@ciberpyme.com')->get();

        //INSERTA VALORES PARA PRUEBA EN LA TABLA ACTIVOS
        DB::table('activos')->insert(['identificador' => 'Arq1',
            'descripcion' => 'Trabajador arquitecto 1: Alexander Pérez',
            'user_id' => $usuario[0]->id,
        ]);
        DB::table('activos')->insert(['identificador' => 'Arq2',
            'descripcion' => 'Trabajador arquitecto 2: Juana García',
            'user_id' => $usuario[0]->id,
        ]);
        DB::table('activos')->insert(['identificador' => 'PC1',
            'descripcion' => 'Ordenador del arquitecto 1',
            'user_id' => $usuario[0]->id,
        ]);
        DB::table('activos')->insert(['identificador' => 'PC2',
            'descripcion' => 'Ordenador del arquitecto 2',
            'user_id' => $usuario[0]->id,
        ]);
        DB::table('activos')->insert(['identificador' => 'Tel',
            'descripcion' => 'Teléfono móvil de arquitectos',
            'user_id' => $usuario[0]->id,
        ]);
        DB::table('activos')->insert(['identificador' => 'Hab1',
            'descripcion' => 'Despacho o habitación donde se trabaja',
            'user_id' => $usuario[0]->id,
        ]);
        DB::table('activos')->insert(['identificador' => 'Imp',
            'descripcion' => 'Impresora A4 Inyección de tinta a color',
            'user_id' => $usuario[0]->id,
        ]);
        DB::table('activos')->insert(['identificador' => 'Inet',
            'descripcion' => 'Conexión a internet por Wifi conrouter Movistar',
            'user_id' => $usuario[0]->id,
        ]);


        //OBTENEMOS LOS IDENTIFICADORES QUE HA CREADO PARA LOS ACTIVOS
        $arq1 = DB::table('activos')->where('identificador','Arq1')->get();
        $arq2 = DB::table('activos')->where('identificador','Arq2')->get();
        $pc1 = DB::table('activos')->where('identificador','PC1')->get();
        $pc2 = DB::table('activos')->where('identificador','PC2')->get();
        $tel = DB::table('activos')->where('identificador','Tel')->get();
        $hab = DB::table('activos')->where('identificador','Hab1')->get();
        $imp = DB::table('activos')->where('identificador','Imp')->get();
        $inet = DB::table('activos')->where('identificador','Inet')->get();

        //INSERTA VALORES PARA PRUEBA EN LA TABLA AMENAZAS
        DB::table('amenazas')->insert([
            'id_amenaza' => 'P1',
            'descripcion' => 'Enfermedad-Indisposición',
            'activo_id' => $arq1[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'P2',
            'descripcion' => 'extorsión',
            'activo_id' => $arq1[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'P3',
            'descripcion' => 'Paternidad',
            'activo_id' => $arq1[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'P4',
            'descripcion' => 'Ingeniería Social (Robo de claves)',
            'activo_id' => $arq1[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'P5',
            'descripcion' => 'Enfermedad-Indisposición',
            'activo_id' => $arq2[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'P6',
            'descripcion' => 'Extorsión',
            'activo_id' => $arq2[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'P7',
            'descripcion' => 'Maternidad',
            'activo_id' => $arq2[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'P8',
            'descripcion' => 'Ingeniería Social (Robo de claves) ',
            'activo_id' => $arq2[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'H1',
            'descripcion' => 'Desastre Natural: Fuego, Agua, Eléctrico.',
            'activo_id' => $pc1[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'H2',
            'descripcion' => 'Difusión de Software dañino, virus, troyanos, etc.',
            'activo_id' => $pc1[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'H3',
            'descripcion' => 'Robo',
            'activo_id' => $pc1[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'H4',
            'descripcion' => 'Caída del sistema por fallo eléctrico o de software.',
            'activo_id' => $pc1[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'H5',
            'descripcion' => 'Rotura de elemento físico (Fuente de alimentación, memoriarAM, Placa base, etc.)',
            'activo_id' => $pc1[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'H6',
            'descripcion' => 'Pérdida de Información',
            'activo_id' => $pc1[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'H7',
            'descripcion' => 'Desastre Natural: Fuego, Agua, Eléctrico.',
            'activo_id' => $pc2[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'H8',
            'descripcion' => 'Difusión de Software dañino, virus, troyanos, etc.',
            'activo_id' => $pc2[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'H9',
            'descripcion' => 'Robo',
            'activo_id' => $pc2[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'H10',
            'descripcion' => 'Caída del sistema por fallo eléctrico o de software.',
            'activo_id' => $pc2[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'H11',
            'descripcion' => 'Rotura de elemento físico (Fuente de alimentación, memoriarAM, Placa base, etc.)',
            'activo_id' => $pc2[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'H12',
            'descripcion' => 'Robo, avería o pérdida física del teléfono',
            'activo_id' => $tel[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'H13',
            'descripcion' => 'Exfiltración de información',
            'activo_id' => $tel[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'H14',
            'descripcion' => 'Fallo en las comunicaciones',
            'activo_id' => $tel[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'H15',
            'descripcion' => 'Rotura o avería',
            'activo_id' => $imp[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'H16',
            'descripcion' => 'Falta de consumibles',
            'activo_id' => $imp[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'F1',
            'descripcion' => 'Daño Natural (fuego, agua, obras, etc.)',
            'activo_id' => $hab[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'F2',
            'descripcion' => 'Acceso no autorizado',
            'activo_id' => $hab[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'C1',
            'descripcion' => 'Caída del servicio, fallo en comunicaciones',
            'activo_id' => $inet[0]->id,
        ]);
        DB::table('amenazas')->insert([
            'id_amenaza' => 'C2',
            'descripcion' => 'Interceptación de la comunicación (Robo de Wifi, ataque Man in the Middle, etc.)',
            'activo_id' => $inet[0]->id,
        ]);

        //OBTENEMOS LOS IDENTIFICADORES QUE HA CREADO PARA LAS AMENAZAS
        $p1 = DB::table('amenazas')->where('id_amenaza','P1')->get();
        $p2 = DB::table('amenazas')->where('id_amenaza','P2')->get();
        $p3 = DB::table('amenazas')->where('id_amenaza','P3')->get();
        $p4 = DB::table('amenazas')->where('id_amenaza','P4')->get();
        $p5 = DB::table('amenazas')->where('id_amenaza','P5')->get();
        $p6 = DB::table('amenazas')->where('id_amenaza','P6')->get();
        $p7 = DB::table('amenazas')->where('id_amenaza','P7')->get();
        $p8 = DB::table('amenazas')->where('id_amenaza','P8')->get();
        $h1 = DB::table('amenazas')->where('id_amenaza','H1')->get();
        $h2 = DB::table('amenazas')->where('id_amenaza','H2')->get();
        $h3 = DB::table('amenazas')->where('id_amenaza','H3')->get();
        $h4 = DB::table('amenazas')->where('id_amenaza','H4')->get();
        $h5 = DB::table('amenazas')->where('id_amenaza','H5')->get();
        $h6 = DB::table('amenazas')->where('id_amenaza','H6')->get();
        $h7 = DB::table('amenazas')->where('id_amenaza','H7')->get();
        $h8 = DB::table('amenazas')->where('id_amenaza','H8')->get();
        $h9 = DB::table('amenazas')->where('id_amenaza','H9')->get();
        $h10 = DB::table('amenazas')->where('id_amenaza','H10')->get();
        $h11 = DB::table('amenazas')->where('id_amenaza','H11')->get();
        $h12 = DB::table('amenazas')->where('id_amenaza','H12')->get();
        $h13 = DB::table('amenazas')->where('id_amenaza','H13')->get();
        $h14 = DB::table('amenazas')->where('id_amenaza','H14')->get();
        $h15 = DB::table('amenazas')->where('id_amenaza','H15')->get();
        $h16 = DB::table('amenazas')->where('id_amenaza','H16')->get();
        $f1 = DB::table('amenazas')->where('id_amenaza','F1')->get();
        $f2 = DB::table('amenazas')->where('id_amenaza','F2')->get();
        $c1 = DB::table('amenazas')->where('id_amenaza','C1')->get();
        $c2 = DB::table('amenazas')->where('id_amenaza','C2')->get();


        //INSERTA VALORES PARA PRUEBA EN LA TABLA salvavulneras
        DB::table('salvavulneras')->insert([
            'tipo' => 'V',
            'descripcion' => 'Antivirus no actualizado',
            'amenaza_id' => $h2[0]->id,
        ]);

        DB::table('salvavulneras')->insert([
            'tipo' => 'V',
            'descripcion' => 'El usuario de trabajo es el Administrador',
            'amenaza_id' => $p4[0]->id,
        ]);

        DB::table('salvavulneras')->insert([
            'tipo' => 'V',
            'descripcion' => 'El usuario de trabajo es el Administrador',
            'amenaza_id' => $h8[0]->id,
        ]);
        DB::table('salvavulneras')->insert([
            'tipo' => 'V',
            'descripcion' => 'Sin contraseña, pin o patrón de acceso',
            'amenaza_id' => $h13[0]->id,
        ]);
        DB::table('salvavulneras')->insert([
            'tipo' => 'V',
            'descripcion' => 'No tiene extintores',
            'amenaza_id' => $f1[0]->id,
        ]);
        DB::table('salvavulneras')->insert([
            'tipo' => 'V',
            'descripcion' => 'Cerradura normal no segura',
            'amenaza_id' => $f2[0]->id,
        ]);
        DB::table('salvavulneras')->insert([
            'tipo' => 'V',
            'descripcion' => 'Alto consumo de consumibles',
            'amenaza_id' => $h16[0]->id,
        ]);
        DB::table('salvavulneras')->insert([
            'tipo' => 'V',
            'descripcion' => 'Los inyectores de tinta se pueden secar u obstruir',
            'amenaza_id' => $h15[0]->id,
        ]);
        DB::table('salvavulneras')->insert([
            'tipo' => 'V',
            'descripcion' => 'Clave por defecto delrouter Movistar',
            'amenaza_id' => $c2[0]->id,
        ]);
        DB::table('salvavulneras')->insert([
            'tipo' => 'S',
            'descripcion' => 'Firewall de Windows activo con políticas concretas',
            'amenaza_id' => $p4[0]->id,
        ]);
        DB::table('salvavulneras')->insert([
            'tipo' => 'S',
            'descripcion' => 'Firewall de Windows activo',
            'amenaza_id' => $h8[0]->id,
        ]);
        DB::table('salvavulneras')->insert([
            'tipo' => 'S',
            'descripcion' => 'Sistema de localización de Google activado',
            'amenaza_id' => $h12[0]->id,
        ]);
        DB::table('salvavulneras')->insert([
            'tipo' => 'S',
            'descripcion' => 'Sincronizado con la nube',
            'amenaza_id' => $h12[0]->id,
        ]);
        DB::table('salvavulneras')->insert([
            'tipo' => 'S',
            'descripcion' => 'Control de acceso en el edificio con cámara de seguridad comunitaria',
            'amenaza_id' => $f2[0]->id,
        ]);
        DB::table('salvavulneras')->insert([
            'tipo' => 'S',
            'descripcion' => 'Consumibles dereserva',
            'amenaza_id' => $h16[0]->id,
        ]);
        DB::table('salvavulneras')->insert([
            'tipo' => 'S',
            'descripcion' => 'Firewall interno',
            'amenaza_id' => $c2[0]->id,
        ]);
        
        //OBTENEMOS LOS IDENTIFICADORES QUE HA CREADO PARA LAS SALVAGUARDAS Y VULNERABILIDADES
        $sv1 = DB::table('salvavulneras')->where([['descripcion','Antivirus no actualizado'],['amenaza_id',$h2[0]->id]])->get();
        $sv2 = DB::table('salvavulneras')->where([['descripcion','El usuario de trabajo es el Administrador'],['amenaza_id',$p4[0]->id]])->get();
        $sv3 = DB::table('salvavulneras')->where([['descripcion','El usuario de trabajo es el Administrador'],['amenaza_id',$h8[0]->id]])->get();
        $sv4 = DB::table('salvavulneras')->where([['descripcion','Sin contraseña, pin o patrón de acceso'],['amenaza_id',$h13[0]->id]])->get();
        $sv5 = DB::table('salvavulneras')->where([['descripcion','No tiene extintores'],['amenaza_id',$f1[0]->id]])->get();
        $sv6 = DB::table('salvavulneras')->where([['descripcion','Cerradura normal no segura'],['amenaza_id',$f2[0]->id]])->get();
        $sv7 = DB::table('salvavulneras')->where([['descripcion','Alto consumo de consumibles'],['amenaza_id',$h16[0]->id]])->get();
        $sv8 = DB::table('salvavulneras')->where([['descripcion','Los inyectores de tinta se pueden secar u obstruir'],['amenaza_id',$h15[0]->id]])->get();
        $sv9 = DB::table('salvavulneras')->where([['descripcion','Clave por defecto delrouter Movistar'],['amenaza_id',$c2[0]->id]])->get();
        $sv10 = DB::table('salvavulneras')->where([['descripcion','Firewall de Windows activo con políticas concretas'],['amenaza_id',$p4[0]->id]])->get();
        $sv11= DB::table('salvavulneras')->where([['descripcion','Firewall de Windows activo'],['amenaza_id',$h8[0]->id]])->get();
        $sv12 = DB::table('salvavulneras')->where([['descripcion','Sistema de localización de Google activado'],['amenaza_id',$h12[0]->id]])->get();
        $sv13 = DB::table('salvavulneras')->where([['descripcion','Sincronizado con la nube'],['amenaza_id',$h12[0]->id]])->get();
        $sv14 = DB::table('salvavulneras')->where([['descripcion','Control de acceso en el edificio con cámara de seguridad comunitaria'],['amenaza_id',$f2[0]->id]])->get();
        $sv15 = DB::table('salvavulneras')->where([['descripcion','Consumibles dereserva'],['amenaza_id',$h16[0]->id]])->get();
        $sv16 = DB::table('salvavulneras')->where([['descripcion','Firewall interno'],['amenaza_id',$c2[0]->id]])->get();



        //INSERTA VALORES PARA PRUEBA EN LA TABLA RIESGOS
        DB::table('riesgos')->insert([
            'probabilidad' => '2',
            'impacto' => '2',
            'amenaza_id' => $p1[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '1',
            'impacto' => '3',
            'amenaza_id' => $p2[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '1',
            'impacto' => '2',
            'amenaza_id' => $p3[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '1',
            'impacto' => '3',
            'amenaza_id' => $p4[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '2',
            'impacto' => '2',
            'amenaza_id' => $p5[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '1',
            'impacto' => '3',
            'amenaza_id' => $p6[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '1',
            'impacto' => '2',
            'amenaza_id' => $p7[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '1',
            'impacto' => '3',
            'amenaza_id' => $p8[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '1',
            'impacto' => '3',
            'amenaza_id' => $h1[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '3',
            'impacto' => '3',
            'amenaza_id' => $h2[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '1',
            'impacto' => '3',
            'amenaza_id' => $h3[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '2',
            'impacto' => '2',
            'amenaza_id' => $h4[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '1',
            'impacto' => '3',
            'amenaza_id' => $h5[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '1',
            'impacto' => '3',
            'amenaza_id' => $h6[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '1',
            'impacto' => '3',
            'amenaza_id' => $h7[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '2',
            'impacto' => '2',
            'amenaza_id' => $h8[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '1',
            'impacto' => '2',
            'amenaza_id' => $h9[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '1',
            'impacto' => '2',
            'amenaza_id' => $h10[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '1',
            'impacto' => '3',
            'amenaza_id' => $h11[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '3',
            'impacto' => '2',
            'amenaza_id' => $h12[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '1',
            'impacto' => '3',
            'amenaza_id' => $h13[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '3',
            'impacto' => '1',
            'amenaza_id' => $h14[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '1',
            'impacto' => '1',
            'amenaza_id' => $h15[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '3',
            'impacto' => '1',
            'amenaza_id' => $h16[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '1',
            'impacto' => '3',
            'amenaza_id' => $f1[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '1',
            'impacto' => '2',
            'amenaza_id' => $f2[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '1',
            'impacto' => '1',
            'amenaza_id' => $c1[0]->id,
        ]);
        DB::table('riesgos')->insert([
            'probabilidad' => '1',
            'impacto' => '3',
            'amenaza_id' => $c2[0]->id,
        ]);


        //RECUPERAMOS LOS ID DE LOS RIESGOS
        $r1 = DB::table('riesgos')->where([['probabilidad','2'],['impacto','2'],['amenaza_id',$p1[0]->id]])->get();
        $r2 = DB::table('riesgos')->where([['probabilidad','1'],['impacto','3'],['amenaza_id',$p2[0]->id]])->get();
        $r3 = DB::table('riesgos')->where([['probabilidad','1'],['impacto','2'],['amenaza_id',$p3[0]->id]])->get();
        $r4 = DB::table('riesgos')->where([['probabilidad','1'],['impacto','3'],['amenaza_id',$p4[0]->id]])->get();
        $r5 = DB::table('riesgos')->where([['probabilidad','2'],['impacto','2'],['amenaza_id',$p5[0]->id]])->get();
        $r6 = DB::table('riesgos')->where([['probabilidad','1'],['impacto','3'],['amenaza_id',$p6[0]->id]])->get();
        $r7 = DB::table('riesgos')->where([['probabilidad','1'],['impacto','2'],['amenaza_id',$p7[0]->id]])->get();
        $r8 = DB::table('riesgos')->where([['probabilidad','1'],['impacto','3'],['amenaza_id',$p8[0]->id]])->get();
        $r9 = DB::table('riesgos')->where([['probabilidad','1'],['impacto','3'],['amenaza_id',$h1[0]->id]])->get();
        $r10 = DB::table('riesgos')->where([['probabilidad','3'],['impacto','3'],['amenaza_id',$h2[0]->id]])->get();
        $r11 = DB::table('riesgos')->where([['probabilidad','1'],['impacto','3'],['amenaza_id',$h3[0]->id]])->get();
        $r12 = DB::table('riesgos')->where([['probabilidad','2'],['impacto','2'],['amenaza_id',$h4[0]->id]])->get();
        $r13 = DB::table('riesgos')->where([['probabilidad','1'],['impacto','3'],['amenaza_id',$h5[0]->id]])->get();
        $r14 = DB::table('riesgos')->where([['probabilidad','1'],['impacto','3'],['amenaza_id',$h6[0]->id]])->get();
        $r15 = DB::table('riesgos')->where([['probabilidad','1'],['impacto','3'],['amenaza_id',$h7[0]->id]])->get();
        $r16 = DB::table('riesgos')->where([['probabilidad','2'],['impacto','2'],['amenaza_id',$h8[0]->id]])->get();
        $r17 = DB::table('riesgos')->where([['probabilidad','1'],['impacto','2'],['amenaza_id',$h9[0]->id]])->get();
        $r18 = DB::table('riesgos')->where([['probabilidad','1'],['impacto','2'],['amenaza_id',$h10[0]->id]])->get();
        $r19 = DB::table('riesgos')->where([['probabilidad','1'],['impacto','3'],['amenaza_id',$h11[0]->id]])->get();
        $r20 = DB::table('riesgos')->where([['probabilidad','3'],['impacto','2'],['amenaza_id',$h12[0]->id]])->get();
        $r21 = DB::table('riesgos')->where([['probabilidad','1'],['impacto','3'],['amenaza_id',$h13[0]->id]])->get();
        $r22 = DB::table('riesgos')->where([['probabilidad','3'],['impacto','1'],['amenaza_id',$h14[0]->id]])->get();
        $r23 = DB::table('riesgos')->where([['probabilidad','1'],['impacto','1'],['amenaza_id',$h15[0]->id]])->get();
        $r24 = DB::table('riesgos')->where([['probabilidad','3'],['impacto','1'],['amenaza_id',$h16[0]->id]])->get();
        $r25 = DB::table('riesgos')->where([['probabilidad','1'],['impacto','3'],['amenaza_id',$f1[0]->id]])->get();
        $r26 = DB::table('riesgos')->where([['probabilidad','1'],['impacto','2'],['amenaza_id',$f2[0]->id]])->get();
        $r27 = DB::table('riesgos')->where([['probabilidad','1'],['impacto','1'],['amenaza_id',$c1[0]->id]])->get();
        $r28 = DB::table('riesgos')->where([['probabilidad','1'],['impacto','3'],['amenaza_id',$c2[0]->id]])->get();


        //INSERTA VALORES PARA PRUEBA EN LA TABLA DECISIONS
        DB::table('decisions')->insert([
            'riesgo_id' => $r1[0]->id,
            'estrategia' => 'A',
            'descripcion' => 'Vamos a asumir el riesgo de que se pueda producir una baja por enfermedad',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r2[0]->id,
            'estrategia' => 'A',
            'descripcion' => 'No Especificado',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r3[0]->id,
            'estrategia' => 'A',
            'descripcion' => 'No Especificado',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r4[0]->id,
            'estrategia' => 'N',
            'descripcion' => 'Hemos decidido implantar una política de contraseñas robusta y una separación de privilegios. Los trabajadores arquitectos a partir de ahora iniciarán sesión con un usuario normal, y si tienen que instalar o ejecutar un programa con privilegios de administrador, se introducirá la clave de Administrador en ese caso concreto',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r5[0]->id,
            'estrategia' => 'A',
            'descripcion' => 'Vamos a asumirlo y no tratar de buscar posibles soluciones, porque un plan de salud sería mu caro.',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r6[0]->id,
            'estrategia' => 'N',
            'descripcion' => 'No Especificado',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r7[0]->id,
            'estrategia' => 'N',
            'descripcion' => 'No Especificado',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r8[0]->id,
            'estrategia' => 'Implantar',
            'descripcion' => 'Hemos decidido implantar una política de contraseñas robusta y una separación de privilegios. Los trabajadores arquitectos a partir de ahora iniciarán sesión con un usuario normal, y si tienen que instalar o ejecutar un programa con privilegios de administrador, se introducirá la clave de Administrador en ese caso concreto',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r9[0]->id,
            'estrategia' => 'N',
            'descripcion' => 'No Especificado',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r10[0]->id,
            'estrategia' => 'I',
            'descripcion' => 'Implantar una medida que dará solución al problema de ambos ordenadores, crearemos una tarea en Windows (Gestor de tareas) para que automáticamente cada lunes actualice de manera forzosa el antivirus. También actualizaremos los sistemas a una solución completa de gestión de amenazas, así en lugar de solo antivirus contrataremos una solución “Total” que incluya otros servicios, como firewall, protección contra Ransomware, control parental, gestor de contraseñas, etc. ',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r11[0]->id,
            'estrategia' => 'N',
            'descripcion' => 'No Especificado',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r12[0]->id,
            'estrategia' => 'I',
            'descripcion' => 'hemos decidido comprar un pequeño SAI (Sistema de Alimentación Ininterrumpida) para que, en el caso de corte de luz, podamos guardar los datos y no perder la información con la que estemos trabajando. Extender este sistema al resto de ordenadores, es demasiado costoso, así que hemos decidido cubrir solo lo esencial en este aspecto. El resto de vicisitudes las asumimos.',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r13[0]->id,
            'estrategia' => 'N',
            'descripcion' => 'No Especificado',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r14[0]->id,
            'estrategia' => 'T',
            'descripcion' => 'Vamos a contratar un sistema de copias de seguridad en la nube.',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r15[0]->id,
            'estrategia' => 'N',
            'descripcion' => 'No Especificado',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r16[0]->id,
            'estrategia' => 'I',
            'descripcion' => 'Implantar una medida que dará solución al problema de ambos ordenadores, crearemos una tarea en Windows (Gestor de tareas) para que automáticamente cada lunes actualice de manera forzosa el antivirus. También actualizaremos los sistemas a una solución completa de gestión de amenazas, así en lugar de solo antivirus contrataremos una solución “Total” que incluya otros servicios, como firewall, protección contra Ransomware, control parental, gestor de contraseñas, etc. ',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r17[0]->id,
            'estrategia' => 'N',
            'descripcion' => 'No Especificado',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r18[0]->id,
            'estrategia' => 'No Especificado',
            'descripcion' => 'No Especificado',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r19[0]->id,
            'estrategia' => 'N',
            'descripcion' => 'No Especificado',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r20[0]->id,
            'estrategia' => 'T',
            'descripcion' => 'Tendremos un dispositivo como auxiliar y todos los datos del terminal (contactos, imágenes, etc.) sincronizados en la nube con los servicios de Google (Gmail, Google Photos, etc.). En caso de pérdida, todos esos datos se sincronizarán con el nuevo terminal de manera inmediata',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r21[0]->id,
            'estrategia' => 'I',
            'descripcion' => 'Decidimos implantar un sistema de bloqueo automático propio del teléfono, protegido por un patrón.',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r22[0]->id,
            'estrategia' => 'N',
            'descripcion' => 'No Especificado',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r23[0]->id,
            'estrategia' => 'E',
            'descripcion' => 'Toda la documentación se llevará de manera digital. si hay que imprimir algo se hará en un servicio externo puntual',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r24[0]->id,
            'estrategia' => 'T',
            'descripcion' => 'Contratar un servicio de impresión bajo demanda (renting)',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r25[0]->id,
            'estrategia' => 'I',
            'descripcion' => 'Para paliar este riesgo vamos a implementar un sistema de copias de seguridad en la nube y vamos a comprar un extintor pequeño de polvo polivalente para apagar pequeños conatos de incendio',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r26[0]->id,
            'estrategia' => 'E',
            'descripcion' => 'Pondremos una llave electrónica biométrica o por RFID para el acceso al despacho',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r27[0]->id,
            'estrategia' => 'T',
            'descripcion' => 'Se usará el servicio de internet en el móvil contratado con otra compañia',
        ]);
        DB::table('decisions')->insert([
            'riesgo_id' => $r28[0]->id,
            'estrategia' => 'I',
            'descripcion' => 'Se comprará un firewall dedicado para proteger el acceso y las comunicaciones.',
        ]);


    }
}
