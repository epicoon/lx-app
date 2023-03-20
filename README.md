1. Run command `composer install`

2. Mount your DB by using local configuration:
    * Prepare a DB
    * Make sure in the common configuration `/lx/config/common.php` local config file path defined:
        ```php
        'localConfig' => '@site/config/main.php'
        ```
    * Create directory `config` and file `/config/main.php`
    * Customize component `dbConnector` in the local config file. An example of customizing is in the file `/lx/config/_local.example.php`

3. Run migrations:
    * enter a CLI - in the directory `lx` run command `php lx cli`
    * inside the CLI run command `model-update`

4. Create your admin user:
   * enter a CLI - in the directory `lx` run command `php lx cli`
   * inside the CLI run command `create-admin` and enter login and password

5. Set up a server. For example:
    ```
    server {
        charset utf-8;
        client_max_body_size 128M;
        listen 80;
        listen [::]:80;

        server_name lxapp;
        root /path/lxapp;
        index web/index.php;
 
        location / {
            try_files $uri $uri/ /web/index.php;
        }

        location ~ \.php$ {
            include /etc/nginx/fastcgi_params;
            fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
            fastcgi_pass unix:/var/run/php/phpX.X-fpm.sock;
        }
    }
    ```
    And update `hosts` file.
