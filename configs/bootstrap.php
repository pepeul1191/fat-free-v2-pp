<?php

$f3 = \Base::instance();
$f3->route('GET /',
  function() {
    echo 'Hello, world fatfree!';
  }
);