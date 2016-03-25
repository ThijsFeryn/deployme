<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hello/{name}', function($name) use($app) {
    return 'Hello '.$app->escape($name);
});

$app->get('/', function()  {
    return "Hello from release ".basename(dirname(__DIR__)).PHP_EOL;
});

$app->run();
