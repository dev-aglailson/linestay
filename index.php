<?php

require __DIR__.'/vendor/autoload.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

use \App\Controller\Pages\Home;

echo Home::getHome();