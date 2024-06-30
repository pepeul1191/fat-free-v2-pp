<?php

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
  define('DS', '\\');
} else {
  define('DS', '/');
}
define('BASE_PATH', dirname(__DIR__));
// timezone
date_default_timezone_set('America/Lima');