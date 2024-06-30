<?php
use Smarty\Smarty;
// global variables
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
  define('DS', '\\');
} else {
  define('DS', '/');
}
define('BASE_PATH', dirname(__DIR__));
// run app
$f3 = \Base::instance();
// smarty views
$smarty = new Smarty();
$smarty->setTemplateDir(BASE_PATH . DS . 'views' . DS);
$smarty->setCompileDir(BASE_PATH . DS . 'views' . DS . 'tmp' . DS);
$smarty->setCacheDir(BASE_PATH . DS . 'views' . DS . 'cache' . DS);
$f3->set('smarty', $smarty);
// folders

// extra routes
$f3->route('GET /demo',
  function() {
    echo BASE_PATH;
    echo 'demo';
  }
);
$f3->set('ONERROR', function($f3) {
  // Verifica el tipo de error
  switch ($f3->get('ERROR.code')) {
  case 404:
    $smarty = $f3->get('smarty');
    echo $smarty->fetch('error.tpl');
    break;
  default:
    // Otros casos de errores, manejar de acuerdo a tus necesidades
    echo 'Error ' . $f3->get('ERROR.code') . ': ' . $f3->get('ERROR.text');
  }
});
// load configs
require_once 'database.php';
require_once 'routes.php';