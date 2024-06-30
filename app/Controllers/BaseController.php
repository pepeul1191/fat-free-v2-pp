<?php

namespace App\Controllers;

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
    
  }

  function beforeroute($f3) 
  {

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