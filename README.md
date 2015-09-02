# wHelper

#Install

	Configure DB with username and password on /application/config/database.php lines 52 and 53

	Import to DB wHelper.sql

#Configure Rewrite mod
	sudo a2enmod rewrite
	
	sudo gedit 000-default.conf

	<VirtualHost *:80>
		ServerAdmin webmaster@localhost
		DocumentRoot /var/www/html

		ErrorLog ${APACHE_LOG_DIR}/error.log
		CustomLog ${APACHE_LOG_DIR}/access.log combined

		<Directory /var/www/>
			Options Indexes FollowSymLinks MultiViews
			AllowOverride All
			Order allow,deny
			allow from all
		</Directory>
	</VirtualHost>

	sudo service apache2 restart
	
#Use
	http://xxx/whelper/public_html/

#Getting Data in JSON format
	First, Login. Make POST with "user" and "pass" http://xxx/whelper/public_html/front
		
	Second, Get full data: http://xxx/whelper/public_html/panel/get/0/json

	/get/0/json (0 get all data. 1 get only childrens of parent 1 etc.)
