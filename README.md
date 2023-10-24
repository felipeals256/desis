# Requisitos
Para iniciar el proyecto es necesario tener instalado Docker y Docker-Compose o utilice Docker Desktop en windows<br>
Este proyecto fue creado con:<br>
-Docker version 20.10.12, build e91ed57<br>
-docker-compose version 1.29.2, build unknown<br>

Si no lo tiene instalado Docker, visite para instalarlo en Ubuntu o en Windows (wsl): https://guias.donweb.com/como-instalar-y-usar-docker-compose-en-ubuntu-20-04/?ad_campaign=18509269851&ad_content=&pcprovider=google&gclid=CjwKCAjw1t2pBhAFEiwA_-A-NDj998NZB3foznkXFHxmN4Rm5r70kbdej4CGPMMO7s770rTC2MJfFxoCaDsQAvD_BwE

# Levantar
<b>Opción A</b>
Para ejecutar el proyecto posicionese con la consola en la raiz del proyecto y ejecute docker-compose up -d
<br>
<b>Opción B</b>
Si la opción A no le resulta cargue la carpeta /desis_form en un servidor nginx, apache y ejecute /desis-form/mysql-init/query/query.sql en la base de datos. Considere cambiar las credenciales en /desis_form/app/env/Connect.php
<br>
<br>
<b>Si necesita conectarse a la base de datos use las credenciales:
<br> user: mysql
<br> pass: test
<br> host: localhost
<br> bdd: bdd
<br> port: 3307  (Usamos 3307 para no tener conflictos con instalaciones locales)
</b>

# Ficha Técnica
-mysql:5.7 <br>
-php:7.3<br>
-apache<br>

# Distribución:

__/db_data&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; Volumen de datos de la base de datos<br>
__/desis_form&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; Aplicación PHP<br>
______________/assets&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Archivos js&nbsp; <br>
______________/app&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Archivos de la aplicación<br>
__/.gitignore	<br>							
__/docker-compose.yaml<br>
__/Dockerfile<br>



# Funcionamiento:
<h3>Descripción general</h3>
Al momento de levantar el contenedor (docker-compose up -d), cuando la imagen no existe, cargará los maestros en la base de datos ejecutando /mysql-init/query/query.sql
<br>
Cuando un endopint envía una solicitud HTTP a /desis_form/app/route.php este procesa dicha solicitud y la deriva al controlador que se envía en los argumentos de la url. <br>Por ejemplo action="/app/route.php?controller=FormularioController@create" será derivado a  /desis_app/app/controller/FormularioController.php y buscará la función  create() dentro del controlador.
<br><br><br><br>
En desis_form/app/env se encuentran los archivos que orquestan el funcionamiento de la aplicación, es decir, una especie de framework donde:
<br>Connect(): Es la clase encargada de hacer la conexión.
<br>Model(): Es la clase maestra la cual será heredada para obtener sus funciones save(), all(), where(), etc.
<br>Request(): Es la clase capaz de erutar y disponibilizar json de ser necesario.
<br><br><br><br>
En desis_form/app/model se encuentran los maestros.
<br>En desis_form/app/controller se encuentran los controladores.
