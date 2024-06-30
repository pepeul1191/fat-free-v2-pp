<?php

namespace App\Controllers;
use App\Filters\BeforeAllFilter;

abstract class BaseController 
{
  function __construct($f3)
  {
    // PASS
    // session_start();
    $this->f3 = $f3;
  }

  function loadHelper($helper)
  {
    include_once BASE_PATH . '/app/Helpers/' . $helper . '_helper.php';
  }
  
  function beforeroute($f3) 
  {
    BeforeAllFilter::before($f3);
  }

  function render($template, $locals)
  {
    $smarty = $this->f3->get('smarty');
    foreach ($locals as $key => $value) {
      $smarty->assign($key, $value);
    }
    echo $smarty->fetch($template . '.tpl');
  }
}