<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
  function __construct($f3)
  {
    parent::__construct($f3);
  }


  function beforeroute($f3) 
  {

  }

  function index($f3) 
  {
    $locals = array(
      'titulo' => 'Página de inicio',
      'mensaje' => '¡Bienvenido a mi aplicación!',
    );
    $this->render('home', $locals, 200);
  }
}

