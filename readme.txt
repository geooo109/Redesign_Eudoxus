What to do?

1)install mysql server
2)install apache2
3)install php 5
4)

sudo nano /etc/apache2/sites-available/000-default.conf

and change the following line to what you want:
DocumentRoot /var/www/html
Also do a

sudo nano /etc/apache2/apache2.conf
and find this

<Directory /var/www/html/>
Options Indexes FollowSymLinks
AllowOverride None
Require all granted
</Directory>
and change /var/www/html to your preferred directory

and save it.

After you saved your changes, just restart the apache2 webserver and you'll be done :)

sudo service apache2 restart

rememebr if change /var/www/html to a full path like /home/geooo109/Desktop/Redesign_Eudoxus
