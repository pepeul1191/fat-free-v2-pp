<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Model;

class LevelController extends BaseController
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
      'titulo' => 'Gestión de Niveles',
      'mensaje' => '¡Bienvenido a Gestión de Niveles!',
    );
    $this->render('level/index', $locals, 200);
  }

  function fetchAll($f3)
  {
    // data
    $resp = [];
    $status = 200;
    // logic
    try {
      $rs = Model::factory('App\Models\Level', 'app')
        ->find_array();
      $resp = json_encode($rs);
    }catch (\Exception $e) {
      $status = 500;
      $resp = json_encode([
        'message' => 'ups',
        'error' => $e->getMessage(),
        'stack_trace' => var_export($e->getTrace(), true)
      ]);
    }
    // resp
    //http_response_code($status);
    echo $resp;
  }
}

