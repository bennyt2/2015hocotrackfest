<?php

$app = require __DIR__ . '/../app/app.php';
require_once __DIR__.'/../src/controller.php';
$app['debug'] = true;
$app->run();