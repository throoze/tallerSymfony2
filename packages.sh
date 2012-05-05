#!/bin/bash


# Instalar un manejador de paquetes serio
sudo apt-get install aptitude

# Instalar paquetes de apache
sudo aptitude install apache2 apache2-mpm-prefork apache2-suexec apache2-threaded-dev apache2-utils apache2.2-bin apache2.2-common libapache-ruby1.8 libapache2-mod-auth-mysql libapache2-mod-dnssd libapache2-mod-perl2 libapache2-mod-php5 libapache2-mod-proxy-html libapache2-reload-perl

# Instalar paquetes de php
sudo aptitude install dh-make-php php-doc php-mdb2 php-mdb2-driver-sqlite php-pear php5 php5-adodb php5-cgi php5-cli php5-common php5-curl php5-dev php5-gd php5-intl php5-mcrypt php5-memcache php5-memcached php5-mysql php5-odbc php5-snmp php5-sqlite php5-suhosin php5-xcache php5-xdebug php5-xmlrpc php5-xsl

# Instalar paquetes de mysql
sudo aptitude install libdbd-mysql-perl liblua5.1-sql-mysql-2 liblua5.1-sql-mysql-dev libmysql-cil-dev libmysql6.1-cil libmysql6.4-cil libmysqlclient-dev libmysqlclient16 libmysqlclient16-dev libmysqlcppconn-dev libmysqlcppconn4 libmysqlcppconn5 libmysqld-dev libmysqld-pic libqt4-sql-mysql mysql-admin mysql-client mysql-client-5.1 mysql-client-core-5.1 mysql-common mysql-mmm-agent mysql-mmm-common mysql-mmm-monitor mysql-mmm-tools mysql-server mysql-server-5.1 mysql-server-core-5.1 mysqltuner

# Configurar el manejador de versiones GIT:
git config --global user.name $NAME         # Establece el nombre del autor de los commits
git config --global user.email $EMAIL       # Establece el email del autor de los commits
git config --global core.editor nano        # Establece el editor usado para escribir los commits
git config --global color.status always     # Configura a git para mostrar con colores la salida del comando 'git status'.
