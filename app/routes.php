<?php

$router = new Phalcon\Mvc\Router();

$router->add("/", array(
    'controller' => 'index',
    'action' => 'index',
));

$router->add("/banks/", array(
    'controller' => 'bank',
    'action' => 'index',
));

$router->add("/banks/map/", array(
    'controller' => 'show',
    'action' => 'map',
));

$router->add("/banks/([A-z\-0-9]{4})", array(
    'controller' => 'show',
    'action' => 'item',
));

$router->add("/banks/([A-z\-0-9]{4})", array(
    'controller' => 'show',
    'action' => 'item',
));

$router->add("/credits/", array(
    'controller' => 'credit',
    'action' => 'index',
));

$router->add("/credits/search/", array(
    'controller' => 'credit',
    'action' => 'search',
));

$router->add("/credits/search/([A-z\-0-9]{4})/", array(
    'controller' => 'credit',
    'action' => 'item',
));