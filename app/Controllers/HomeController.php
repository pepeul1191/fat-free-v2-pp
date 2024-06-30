<?php

namespace App\Controllers;

class HomeController
{
  function beforeroute($f3) 
  {

  }

  function index($f3) 
  {
    $smarty = $f3->get('smarty');
    $smarty->assign('titulo', 'Página de inicio');
    $smarty->assign('mensaje', '¡Bienvenido a mi aplicación!');
    echo $smarty->fetch('home.tpl');
  }
}

