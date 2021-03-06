<?php

require __DIR__ . '/vendor/System/App.php';
require __DIR__ . '/vendor/System/File.php';

use System\File;
use System\App;

$file = new File(__DIR__);
$app  = App::getInstance($file);
$app->run();
