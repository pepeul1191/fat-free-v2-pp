<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Random;

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
      //'titulo' => 'Página de inicio',
      'mensaje' => '¡Bienvenido a mi aplicación!',
      'random' => Random::lowerStringNumber(20),
    );
    $this->render('home/index', $locals, 200);
  }

  function list($f3)
  {
    echo 'listar';
  }
}

