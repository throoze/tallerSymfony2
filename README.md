Proyecto Taller de Symfony 2
============================

Bienvenido al repositorio proyecto `Taller de Symfony 2`.

Este proyecto corre en PHP 5.3 sobre el framework [Symfony 2](http://symfony.com/).

El objetivo de este taller es dar a conocer al participante la filosofía de Symfony 2,
así como los patrones de diseño, las técnicas de desarrollo y el funcionamiento 
del framework, mediante el desarrollo de un proyecto pequeño, el cual irá evolucionando
en la medida y la dirección que los participantes decidan.

> Para lograr el objetivo, es escencial la participación activa en el taller, así como el
> compromiso de los participantes de continuar y alimentar el proyecto entre cada sesión.
    
> Nota:
> 
> Este archivo ha sido escrito usando el lenguaje de markup **Markdown**. Para
> visualizarlo correctamente, hágalo en algún visor que soporte este lenguaje,
> como por ejemplo el de [github](https://github.com/throoze/tallerSymfony2).

********************************************************************************

Tabla de Contenidos:
-----------------------

- 1) [Documentación](https://github.com/throoze/tallerSymfony2#1-documentaci%C3%B3n)
- 2) [Instalación del proyecto](https://github.com/throoze/tallerSymfony2#2-instalaci%C3%B3n-del-proyecto)
- >>>> 2.a) [Clone este repositorio](https://github.com/throoze/tallerSymfony2#a-clone-este-repositorio)
- >>>> 2.b) [Instale los paquetes necesarios para el correcto funcionamiento](https://github.com/throoze/tallerSymfony2#b-instale-los-paquetes-necesarios-para-el-correcto-funcionamiento)
- >>>> 2.c) [Corra el script setup.sh](https://github.com/throoze/tallerSymfony2#c-corra-el-script-setupsh)
- >>>> 2.d) [Configure el servidor web (apache2) para servir su proyecto en un virtualhost](https://github.com/throoze/tallerSymfony2#d-configure-el-servidor-web-apache2-para-servir-su-proyecto-en-un-virtualhost)
- >>>> 2.e) [Checkee su configuración de php y symfony](https://github.com/throoze/tallerSymfony2#e-checkee-su-configuraci%C3%B3n-de-php-y-symfony)
- >>>> 2.f) [Actualize su archivo parameters.ini](https://github.com/throoze/tallerSymfony2#f-actualize-su-archivo-parametersini)
- >>>> 2.g) [Empieza el desarrollo](https://github.com/throoze/tallerSymfony2#g-empieza-el-desarrollo)
- 3) [Colaboraciones](https://github.com/throoze/tallerSymfony2#3-colaboraciones)
- 4) [Otras Consideraciones](https://github.com/throoze/tallerSymfony2#4-otras-consideraciones)
- 5) [Licencia](https://github.com/throoze/tallerSymfony2#5-licencia)

1) Documentación:
-----------------

En este mismo archivo, podrá encontrar información sobre la instalación

En cada sesión, utilizaremos algunos recursos, la mayoría de la 
[documentación oficial](http://symfony.com/doc/current/index.html) de Symfony 2.

En cada sesión se agregarán los recursos utilizados a este repositorio, y podrán
ser accedidos desde aqui:

- [1ra Sesión](https://github.com/throoze/tallerSymfony2/blob/master/Resources/doc/sesion1.md) (Viernes 04-05-2012)

> **Nota**:
> 
> Las instrucciones aqui detalladas son válidas para una instalación en un entorno
> Debian/Ubuntu Linux. El proceso de instalación en Windows o Mac OsX es similar,
> aunque la instalación de las dependencias puede variar. Como siempre, [Google](http://www.google.com/)
> es nuestro amigo! En la web hay montones de tutoriales sobre la instalación de
> Symfony 2 en esas plataformas.
> 
> Para este taller, recomiendo la plataforma Debian/Ubuntu Linux, dado que provee
> muchas facilidades para el desarrollador.
    
> **Nota**:
> 
> Como es convención, en toda la documentación aqui proveída, se utilizará el símbolo
> `$` para denotar el _prompt_ con privilegios de usuario **regular**, y el símbolo `#` para
> denotar el _prompt_ con privilegios de usuario **root**. Por ejemplo.:
> 
>    `$ esto es un comando ejecutado por un usuario regular`
> 
>    `# esto es un comando ejecutado por el usuario root`
> 
> Dichos comandos deben ejecutarse en una terminal.

> **Nota**:
> 
> Las instrucciones a continuación suponen que la carpeta del proyecto (`tallerSymfony2`)
> está alojada en la ruta absoluta `/home/usuario/proyectos`. Sustituya esta ruta
> según su caso en particular.
    
> **Nota**:
> 
> Sustituya `taller.local.com`, tanto en el nombre de archivos y carpetas, como
> en el contenido de los archivos, por cualquier otro nombre que usted quiera
> darle a su página. estes el nombre que se utilizará en el _browser_ para acceder
> a la aplicación.

[arriba](https://github.com/throoze/tallerSymfony2#proyecto-taller-de-symfony-2)

2) Instalación del proyecto:
--------------------------------------------------

En las siguientes líneas encontrará instrucciones detalladas para instalar el
proyecto en su computadora personal. Para agilizar las instalaciones, se han creado
ciertos scripts que automatizan muchas de las tareas iniciales, las cuales se repetirán
para cada nuevo proyecto en Symfony, y que cada colaborador del proyecto tendrá que repetir.

Si usted desea conocer a fondo cuales son estas tareas, puede leer el código de los
scripts, o referirse a la [documentación oficial](http://symfony.com/doc/current/book/installation.html)
al respecto.

Para instalar el nuevo proyecto del taller de Symfony 2, siga los siguientes pasos:

### a) Clone este repositorio.

Para poder clonarlo, usted debe tener instalada la herramienta de control de versiones
[git](http://progit.org/). Si no lo tiene, instálelo usando el comando:

    $ sudo aptitude install git

Note que para poder clonar y colaborar en este repositorio usted debe tener los
permisos necesarios. Para ello, si no tiene una cuenta en
[github](https://github.com/), cree una [nueva cuenta](https://github.com/signup/free),
y cargue su **Llave Pública de SSH** en github ([aqui](http://help.github.com/linux-set-up-git/)
encontrará información al respecto).

Luego, corre el siguiente comando:

    $ cd /ruta/a/la/carpeta/padre/de/la/carpeta/de/tu/proyecto
    $ git clone git@github.com:throoze/tallerSymfony2.git

Esto creará un nuevo directorio (llamado tallerSymfony2) con el contenido del
proyecto en el directorio de la ruta proveida al comando `cd`.

[arriba](https://github.com/throoze/tallerSymfony2#proyecto-taller-de-symfony-2)

### b) Instale los paquetes necesarios para el correcto funcionamiento:

Se incluye un script llamado [`packages.sh`](https://github.com/throoze/tallerSymfony2/blob/master/packages.sh)
el cual se encarga de instalar los paquetes necesarios. Si desea conocer la lista
detallada, examine el mencionado archivo. Para ejecutarlo, otórguele permisos de
ejecución y córralo:

    $ cd tallerSymfony2
    $ chmod +x packages.sh
    $ chmod +x setup.sh

Luego, corra el script `packages.sh` con el comando:

    $ ./packages.sh

[arriba](https://github.com/throoze/tallerSymfony2#proyecto-taller-de-symfony-2)

### c) Corra el script `setup.sh`:

y ejecute el script de configuración inicial:

    $ ./setup.sh

Note que este script instala las librerías de la distribución standar de Symfony
2, por lo cual deberá asegurarse de que los repositorios se clonan exitosamente.
Esté atento a cualquier salida de error, y si la instalación de éstas librerías
(vendors) falla, vuelva a correr el script hasta que no fallen.

[arriba](https://github.com/throoze/tallerSymfony2#proyecto-taller-de-symfony-2)

### Configure el repositorio local con un nuevo repositorio remoto (opcional):

**Los participantes del taller deben ejecutar este paso obligatorioamente**. Si
usted quiere tomar este repositorio como base para un proyecto suyo, independiente
de este, ejecute los pasos a continuación. En caso contrario, salte asta el literal
`d)`.

    $ rm -r .git
    $ git init
    $ git add .
    $ git commit -m "Inicializado el repositorio"
    $ git remote add <dirección del repositorio remoto independiente>
    
> **Nota**:
> 
> Crear un repositorio remoto es bastante sencillo en github. Lea su
> [material de ayuda](http://help.github.com/create-a-repo/).

[arriba](https://github.com/throoze/tallerSymfony2#proyecto-taller-de-symfony-2)

### d) Configure el servidor web (apache2) para servir su proyecto en un virtualhost:

La manera óptima de mantener varios proyectos web en un mismo _host_ es mediante
_virtualhosts_. A continuación explicaremos su configuración sin mucho detalle.
[Profundizar en ella](http://www.google.com/) es tarea del lector.

##### Copie el archivo de ejemplo en la configuracion de virtualhosts de apache:

    $ sudo cp Resources/doc/taller.local.com /etc/apache2/sites-available/

##### Cree el directorio root que servirá la aplicación:

    $ sudo mkdir -p /srv/www/taller.local.com/logs
    $ sudo ln -s -T /home/usuario/proyectos/tallerSymfony2/web public_html

##### Edite el archivo _hosts_:

    $ sudo gedit /etc/hosts

El archivo debe verse algo asi:

    127.0.0.1       localhost
    127.0.0.1       hostname
    
    # The following lines are desirable for IPv6 capable hosts
    ::1     ip6-localhost ip6-loopback
    fe00::0 ip6-localnet
    ff00::0 ip6-mcastprefix
    ff02::1 ip6-allnodes
    ff02::2 ip6-allrouters

Edítelo, agregando lo siguiente:

    127.0.0.1       localhost
    127.0.0.1       hostname
    127.0.0.1       www.taller.local.com       taller.local.com
    
    # The following lines are desirable for IPv6 capable hosts
    ::1     ip6-localhost ip6-loopback
    fe00::0 ip6-localnet
    ff00::0 ip6-mcastprefix
    ff02::1 ip6-allnodes
    ff02::2 ip6-allrouters

##### Reinicie el servidor apache 2:

    $ sudo /etc/init.d/apache2 restart
    
Debe obtener una salida parecida a esta:

     * Restarting web server apache2
     apache2: Could not reliably determine the server's fully qualified domain name,
     using 127.0.0.1 for ServerName... waiting .
     apache2: Could not reliably determine the server's fully qualified domain name,
     using 127.0.0.1 for ServerName
     [ OK ]

##### Pruebe la configuración:

En un _browser_, coloque la dirección `http://taller.local.com/`. Deberá obtener una
página con los estilos de Symfony 2.

[arriba](https://github.com/throoze/tallerSymfony2#proyecto-taller-de-symfony-2)

### e) Checkee su configuración de php y symfony:

Para ello, corra el archivo de checkeo tanto en la terminal:

    $ php app/check.php

Como desde el browser, por ejemplo:

    http://taller.local.com/check.php

Corrija aquellos errores y warnings arrojados por el script `check.php`, tomando
en cuenta que se utilizan archivos `php.ini` diferentes para la corrida de la
terminal y del browser. El script le informará de cual archivo `php.ini` se está
usando.

[arriba](https://github.com/throoze/tallerSymfony2#proyecto-taller-de-symfony-2)

### f) Actualize su archivo `parameters.ini`:

Abra el archivo `app/config/parameters.ini` y establezca los valores correspondientes
a su DBMS y a su configuración particular. Ejemplo:

    [parameters]
    ;; DataBase:
        database_driver   = pdo_mysql
        database_host     = localhost
        database_port     =
        database_name     = symfony
        database_user     = root
        database_password =
    ;; Mailer:
        mailer_transport  = smtp
        mailer_host       = localhost
        mailer_user       =
        mailer_password   =
    ;; Misc:
        locale            = en
        secret            = ThisTokenIsNotSoSecretChangeIt

[arriba](https://github.com/throoze/tallerSymfony2#proyecto-taller-de-symfony-2)

### g) Empieza el desarrollo:

Una vez completados los pasos anteriores con éxito, usted está listo para empezar
a desarrollar, o colaborar con el desarrollo. A los participantes del taller, les
recomiendo leer las [**Otras Consideraciones**](https://github.com/throoze/tallerSymfony2#4-otras-consideraciones)
acerca del curso.

[arriba](https://github.com/throoze/tallerSymfony2#proyecto-taller-de-symfony-2)

3) Colaboraciones:
------------------

Para todo aquel que quiera colaborar con este proyecto, les pido que lo hagan 
después del **8 de Junio de 2012**, para dar tiempo a que ya el producto del taller se
haya desarrollado. Una vez pasada esa fecha, todo aquel que quisiera contribuir
con código, estilos, o cualquier otra cosa, es totalmente bienvenido a hacerlo.

[arriba](https://github.com/throoze/tallerSymfony2#proyecto-taller-de-symfony-2)

4) Otras Consideraciones:
-------------------------

1. Les recomiendo a los participantes del taller que mantengan dos copias de este
   repositorio. Una para convertirlo en su proyecto personal, y otra para tener el
   código desarrollado por mi durante las clases. Esto les permitirá tener código
   de ejemplo actualizado para ser usado en su proyecto personal, evaluar el código
   del curso y contribuir a su mejoramiento, entre otras cosas.
2. Hacer las tareas es importante para el buen desarrollo del taller, y para su propio
   aprendizaje. De todos modos, no son obligatorias. Yo también estudio y trabajo y se
   que manejar el tiempo propio puede llegar a ser una tarea bastante complicada. Aún
   asi, es necesario cierto nivel de compromiso con el taller para que el aprendizaje
   sea efectivo.
3. Yo soy super fan del software libre. La comunidad del software libre crece y mejora
   gracias a que sus miembros comparten ideas y codigo, lo que nos permite no tener que
   empezar de cero nunca, sino siempre tener una base, cada vez más robusta, sobre la
   cual continuar el desarrollo. Aún así, con la finalidad de aprender, conviene que
   cada quien escriba su propio código. Compartir ideas es super enriquecedor, pero
   asegúrense de hacerlo despues de al menos haber intentado aproximarse al problema por
   ustedes mismos. Yo no voy a andar vigilando si el código es el mismo, pero mi
   recomendación, de nuevo, es que cada quien escriba su propio código.
4. Yo, por supuesto, puedo decir una que otra burrada de vez en cuando jejeje así que por
   favor, les ruego, que me paren y me corrijan en el momento, para evitar que el grupo se
   vaya con ideas erróneas.
5. **Gracias a todos por su interés y asistencia!** Esto para mí es un experimento, y 
   quisiera fomentar el que se siga haciendo, cada vez con temas nuevos. Ya hay algunas
   iniciativas afines, y sé que podremos trabajar juntos para ello. Sean ustedes mismos
   multiplicadores de esta iniciativa! Si saben algo que creen que es interesante, novedoso,
   o que les guste mucho, les invito a que lo hablen conmigo a ver como creamos los medios
   para hacer un nuevo taller, o curso, o coloquio, o charla... Estamos trabajando para crear
   una estructura que lo facilite. Cuando tenga más información y esté mas concreto, les
   hablaré más al respecto.

[arriba](https://github.com/throoze/tallerSymfony2#proyecto-taller-de-symfony-2)

5) Licencia:
------------

Lea la licencia en [LICENSE](https://github.com/throoze/tallerSymfony2/blob/master/LICENSE).

[arriba](https://github.com/throoze/tallerSymfony2#proyecto-taller-de-symfony-2)
