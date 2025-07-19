# Example of vHost

### Setting VirtualHost
https://codeigniter.com/user_guide/installation/running.html#setting-virtualhost
``` apacheconf
<VirtualHost *:80>
    DocumentRoot "/opt/lamp/apache2/myproject/public"
    ServerName   myproject.local
    ErrorLog     "logs/myproject-error_log"
    CustomLog    "logs/myproject-access_log" common

    <Directory "/opt/lamp/apache2/myproject/public">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

### Using Alias
https://codeigniter.com/user_guide/installation/running.html#using-alias
``` apacheconf
Alias /myproject /opt/lamp/apache2/myproject/public
<Directory "/opt/lamp/apache2/myproject/public">
    AllowOverride All
    Require all granted
</Directory>
```
