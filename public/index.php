<?php
error_reporting(E_ALL);

try {
    $di = new Phalcon\DI\FactoryDefault();

    $loader = new \Phalcon\Loader();
    $loader->registerDirs(
        array(
            '../app/controllers/',
            '../app/models/'
        )
    )->register();

    include __DIR__ . '/../app/bootstrap.php';

    $application = new \Phalcon\Mvc\Application($di);
    echo $application->handle()->getContent();
} catch (\Phalcon\Exception $e) {
    echo "PhalconException: ", $e->getMessage();
}