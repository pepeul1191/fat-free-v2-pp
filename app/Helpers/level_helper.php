<?php

function stylesheetsAdmin($staticURL)
{
  $stylesheets = [];
  switch ($_ENV['FF_ENVIRONMENT']) {
    case 'development': // development
      $stylesheets = [
        $staticURL . 'build/admin',
      ];
      break;
    case 'production': // production
      $stylesheets = [
        $staticURL . 'build/admin',
      ];
      break;
    default:
      break;
  }
  return $stylesheets;
}