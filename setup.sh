#!/bin/bash
# Instala las librerías de los vendors, y termina de setear el repositorio para
# trabajar en la rama de desarrollo (development).

echo -e "\nEstableciendo los permisos...\n"
rm -rf app/logs/ 2> /dev/null
rm -rf app/cache/ 2> /dev/null
mkdir app/logs
mkdir app/cache
sudo chmod +x app/console
sudo chmod -R 777 app/logs/
sudo chmod -R 777 app/cache/
echo -e "\nInstalando las librerías de la distribución Symfony 2 Standard Edition...\n"
php bin/vendors install
echo -e "\nCreando archivo que chequea configuración del servidor y requerimientos mínimos...\n"
ln -s -T ../app/check.php web/check.php
echo -e "\nCreando el archivo parameters.ini...\n"
cp app/config/parameters.ini.dist app/config/parameters.ini
echo -e "\nTareas iniciales terminadas\nEn caso de haber ocurrido algún error, vuelve a correr este script.\nMás información en el archivo README.md"
