<?php

use ORM;

Orm::configure('sqlite:' . BASE_PATH . DS . 'db'. DS . 'app.db', null, 'app');
//Orm::configure('username', $_ENV['DB_USER']);
//Orm::configure('password', $_ENV['DB_PASS']);
// Configuración adicional
Orm::configure('return_result_sets', true);
//Orm::configure('driver_options', [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);
Orm::configure('error_mode', PDO::ERRMODE_WARNING);
Orm::configure('logging', true);
