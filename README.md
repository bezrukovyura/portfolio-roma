# Portfolio Roma

### Need
* create portfolio
* install plugin WP - "Advanced Custom Fields"



//for template https://wp-kama.ru/function/get_posts



### apache\conf\extra\httpd-vhosts.conf

<VirtualHost *:80>
    DocumentRoot C:/Users/Bezrukov/Desktop/code/portfolio-roma
    ServerName roma.loc
    <Directory C:/Users/Bezrukov/Desktop/code/portfolio-roma>
        Options Indexes FollowSymLinks MultiViews Includes ExecCGI
        AllowOverride All
        Order Allow,Deny
        Allow from all
        Require all granted
    </Directory>
</VirtualHost>