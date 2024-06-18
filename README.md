**Instalar nuestro aplicativo**  

Clonamos el repositorio en nuestro equipo mediante el comando git clone https://github.com/jorge-egg/PruebaInfodec.git  

Para instalar el aplicativo debemos contar con NodeJs y Composer previamente instalados en nuestro Equipo.  

Una vez en nuestra carpeta del proyecto, abrimos una ventana de comandos en la raiz de nuesto aplicativo y ejecutamos los siguientes comandos  

npm install esto para instalar todos los modulos y dependencias de nuestro aplicativo.  

Posteriormente ejecutamos el comando Composer install para instalar los servicios del FrameWork y php artisan dump-autoload  

Una ves configurado esto, configuramos nuestra base de datos, OJO MUY IMPORTANTE dentro de nuestro File System, en nuestra carpeta Database encontramos la Base de datos con todos los registros necesarios para su correcto funcionamiento. Es importante Importar esa base de datos dentro de nuestro motor de base de datos en mi caso utilice MySQL (Workbench).

**Pasos para Crear bd**  

*-1 Vamos a nuestro Localhost y en las bases de datos creamos una nueva ingresamos el nombre pruebaInfodec, una vez creada buscamos donde dice Importar y seleccionamos el archivo pruebaInfodec.sql. Si se desea iportar la base de datos mediante los scripts, ejecute en consola el comando php artisan migrate:refresh --seed

**Ejecutar nuestro Aplicativo**  

Una vez lista la instalación de nuestro aplicativo, vamos a abrir nuestra consola de comandos y ejecutamos Php artisan serve esto lanzará nuestro Aplicativo de forma virtual, esto estará corriendo en el puerto 8000, es decir Localhost:8000

Para iniciar seccion ingrese con las sigientes credenciales:
**usuario:** 1193248110
**contraseña:** 123456789  

**Contenido del aplicativo**  

Se entrega aplicativo completo, con las tres pantallas respectivas, el cambio de idioma de español a alemán, implementacion de APIs para consulta del clima de la ciudad destino y el cambio de moneda con su tasa de cambio.


**FIn**  

Posteriormente procedo a informar que contiene este aplicativo  

-API de consula del clima openweathermap y conversion de moneda currencylayer.  
-Diseño y estructura totalmete CSS, unicamente en el dashboard admin Utilizando ADMINLTE3 y bootstrap.  
