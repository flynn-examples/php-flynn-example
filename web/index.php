<?php

require('../vendor/autoload.php');

$app = new \Slim\Slim();

$app->get('/', function () {
    echo "Hello from Flynn on port " . $_ENV["PORT"] . " from container " . gethostname();
});

$app->run();

?>
