#CiberPYME

CiberPYME ha sido creado como proyecto de Fin de Grado para la Universidad Isabel I de Burgos por mi. Lo presenté como parte de un proyecto más grande que implicaba una Guía para la creación de un Plan de Seguridad Informática en un entorno empresarial mediano o pequeño (autónomos, trabajadores, pymes, etc).

Para desarrollar el proyecto se ha usado el [frameword Laravel](https://github.com/laravel/laravel) por su robustez y facilidad de uso, además de por tener una curva de aprendizaje sencilla. El programa tiene la misma [licencia MIT](./LICENCIA.txt) que Laravel.

El proyecto ha sido desarrollado en dos meses, aprendiendo Laravel desde cero, asíq ue espero que contenga bugs y fallos facilmente solucionables. Además, una refactorización no le vendría mal.

##Características del programa

CiberPYME sirve para realizar un Análisis de Riesgos Sencillos basándonos en la metodología Magerit que edita el [Edita: © Ministerio de Hacienda y Administraciones Públicas](https://administracionelectronica.gob.es/pae_Home/pae_Documentacion/pae_Metodolog/pae_Magerit.html). Al ser una prueba de concepto me he tomado algunas licencias, sobretodo en el cálculo del peso de las salvaguardas y las vulnerabilidades (suman un nivel de riesgo o bajan un nivel de riesgo, en lugar de hacer cálculos más complicados).

![Pantalla principal de CiberPYME](./public/images/capturasprograma/inicioSP.png) 

La pantalla principal utiliza el sistema de login de Laravel.

El resto de pantallas se exlican en la página "Hacer un Tour", cuando la aplicación esté funcionando.

Un ejemplo del programa en funcionamiento puede verse (si no lo he eliminado) en: [CiberPYME]( https://ciberpyme.riispain.es/)


###Que se ha implementado hasta ahora:
- Gestión de usuarios y sus análisis de riesgos.
- Añadir y eliminar nuevos activos y amenazas usando DataTables.
- Añadir y eliminar Salvaguardas y Vulnerabilidades, y establecer riesgos y decisiones usando Colecciones de Laravel y otros sistemas de arrays.
- Verificación de que se introducen datos correctos en PHP. Lanza mensajes de error en caso de no poder guardar en base de datos, falten datos por introducir o estén los campos vacíos. Muestra mensajes de éxito si el guardado ha ido bien.
- Exportar en PDF datos de una tabla con PHP y Javascript.
- Resaltar las filas de una tabla que concuerdan con un índice de Riesgo. Se señalan en rojo en el Análisis de Riesgos.




#Instalación

Aquí está contenido todo el código fuente del proyecto en Laravel. Pero se puede instalar una copia completamente funcional en un servidor local XAMPP o en un 
Para instalar una copia del programa CiberPYME y ejecutarla en local se deben seguir los siguientes pasos, adaptándolos al entorno que se haya escogido.

1.- Crear un servidor local con XAMPP
2.- Subir la carpera ciberpyme a la carpeta HTDOCS de XAMPP
3.- Abrir la interfaz de MySQL y crear una nueva base de datos llamada "ciberpyme".
4.- Importar el archivo SQL en la base de datos a través de MySQL.
5.- Modificar los HTACCESS de la carpeta raiz y de la carpeta public para gestionar los redireccionamientos correspondientes del TOMCAT.
6.- Modificar el .env de la carpeta raiz de ciberpyme para reflejar los cambios correspondientes a la conexión con la base de datos y el entorno de desarrollo.

Se incluyen los ejemplos de HTACCESS y .env para un proyecto local y para un servidor en internet. Se pueden encontrar todos los archivos necesarios para la configuración y para la Base de Datos en la carpeta "Archivos de Configuración" de Github