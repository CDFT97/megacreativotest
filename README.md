# MegaCreativoTest
#### Version 0.0.1

Test FullStack.

## Requerimientos
Los requerimientos mínimos para el correcto funcionamiento de la aplicación son:

>>>
*   PHP 7.4 o superior
*   Laravael 8.* 
*   Extensión PHP BCMath 
*   Extensión PHP Ctype 
*   Extensión PHP Fileinfo 
*   Extensión PHP JSON 
*   Extensión PHP Mbstring 
*   Extensión PHP OpenSSL 
*   Extensión PHP PDO 
*   Extensión PHP Tokenizer 
*   Extensión PHP XML. 

>>>

## Instalación
#### Para la gestión de dependencias, la aplicación utiliza composer el cual debe estar instalado en el servidor en el que se coloque la aplicación. 

#### Una vez instalado y configurado el composer, se debe descargar el proyecto del repositorio de la siguiente forma:


>>> git clone https://gitlab.com/



#### Esto descargara la estructura base de la aplicación.Posteriormente se debe actualizar las dependencias de la herramienta para su correcto funcionamiento, para ello se debe ejecutar: 


>>> composer update 

#### Esto desargará todas las dependencias requeridas por la aplicación y generará todos los archivos de configuración correspondientes.

#### El siguiente paso es crear una base de datos llamada 'megacreativo' y el archivo .env que contendrá la configuración de acceso a la aplicación, base de datos, correo electrónico, etc. Para esto copiamos el archivo .env.example con el nombre .env y se modifican los valores de las variables de configuración de acuerdo al entorno de instalación en donde hayamos instalado la aplicación siendo el nombre de la base de datos megacreativo. 



#### El siguiente paso a realizar es la migración de la estructura de la base de datos, para lo cual se debe haber configurado correctamente el archivo .env (como se mencionó con anterioridad) 
#### La migración de la estructura de la base de datos y de los seeders se realiza con el comando


>>> php artisan migrate  --seed

