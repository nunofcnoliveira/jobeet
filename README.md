jobeet
======

/etc/hosts:
-----------
127.0.0.1       jobeet

Apache:
-------
	<VirtualHost *:80>
		ServerName jobeet
		DocumentRoot /var/www/tests/jobeet/web
		DirectoryIndex app.php
		ErrorLog /var/log/apache2/jobeet-error.log
		CustomLog /var/log/apache2/jobeet-access.log combined
		<Directory "/var/www/tests/jobeet/web">
			AllowOverride All
			Allow from All
		</Directory>
	</VirtualHost>

DB Setup:
---------

$ php app/console doctrine:database:drop --force  
$ php app/console doctrine:database:create  
$ php app/console doctrine:schema:update --force  
$ php app/console doctrine:fixtures:load


