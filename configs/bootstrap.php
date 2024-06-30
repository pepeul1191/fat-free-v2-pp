<?php

$f3 = \Base::instance();

$f3->route('GET /demo',
  function() {
    echo 'demo';
  }
);

require_once 'routes.php';