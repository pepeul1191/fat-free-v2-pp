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
// extra routes
$f3->route('GET /demo',
  function() {
    echo BASE_PATH;
    echo 'demo';
  }
);
// load configs
require_once 'routes.php';