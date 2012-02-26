# CodeIgniter REST

## Overview

This project is all about CodeIgniter RESTful services.

Setup:
-----

Copy project folder to localhost root as "agitcraft"

agitcraft/application/config/config.php ->

$config['base_url' = 'http://localhost/agitcraft/';

agitcraft/application/config/database.php ->

$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'root';
$db['default']['password'] = 'root';
$db['default']['database'] = 'agitcraft';

See it working:
--------------

http://localhost/agitcraft

API
---

getall: GET
http://localhost/agitcraft/index.php/api/visitors/getall/format/json

getsome: GET
http://localhost/agitcraft/index.php/api/visitors/getsome/limit/5/offset/0/format/json

get: GET
http://localhost/agitcraft/index.php/api/visitors/get/id/1/format/json

delete: DELETE verb -> Body name:value pairs...
http://localhost/agitcraft/index.php/api/visitors/delete/id/1/format/json

put: PUT verb -> Body name:value pairs...
http://localhost/agitcraft/index.php/api/visitors/put/format/json

post: POST verb -> Body name:value pairs...
http://localhost/agitcraft/index.php/api/visitors/post/format/json


## PHPMyAdmin Utility

CodeIgniter Models and CRUD Controllers Export for PHPMyAdmin

Drop this into:

file://localhost/Applications/MAMP/bin/phpMyAdmin/libraries/export/codeigniter.php
