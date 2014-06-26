<?php

$router = new Phalcon\Mvc\Router();

$router->add("/", array(
        'controller' => 'index',
        'action' => 'index',
    ));

$router->add("/banks/", array(
        'controller' => 'banks',
        'action' => 'list',
    ));

$router->add("/banks/([A-z\-0-9]{4})", array(
        'controller' => 'show',
        'action' => 'list',
    ));

