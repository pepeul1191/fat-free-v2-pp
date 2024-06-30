<?php

$f3->route('GET  /', '\App\Controllers\HomeController->index');
$f3->route('GET  /level', '\App\Controllers\LevelController->index');
$f3->route('GET  /level/fetch-all', '\App\Controllers\LevelController->fetchAll');