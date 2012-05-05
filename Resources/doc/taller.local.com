<VirtualHost *:80>
   ServerAdmin admin@taller.local.com
   DocumentRoot /srv/www/taller.local.com/public_html/
   ServerName taller.local.com
   ServerAlias *.taller.local.com
   ErrorLog /srv/www/taller.local.com/logs/error.log
   CustomLog /srv/www/taller.local.com/logs/access.log combined
   #CustomLog /srv/www/taller.local.com/logs/access.log common
   DirectoryIndex app_dev.php
   <Directory "/srv/www/taller.local.com/public_html/">
        Options Indexes FollowSymLinks
        Order Allow,Deny
        Allow from all
        AllowOverride all
        <IfModule mod_php5.c>
           php_admin_flag engine on
           php_admin_flag safe_mode off
           php_admin_value open_basedir none
        </ifModule>
   </Directory>
</VirtualHost>
