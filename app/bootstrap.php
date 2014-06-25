<?php
/**
 *
 */
$config = new Phalcon\Config\Adapter\Ini(__DIR__ . '/../app/config/config.ini');

$di->set(
    'view',
    function () {
        $view = new \Phalcon\Mvc\View();
        $view->setViewsDir('../app/views/');
        return $view;
    }
);

$di->set(
    'db',
    function () use ($config) {
        return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
            "host" => $config->database->host,
            "username" => $config->database->username,
            "password" => $config->database->password,
            "dbname" => $config->database->dbname
        ));
    }
);

$di->set(
    'session',
    function () {
        $session = new Phalcon\Session\Adapter\Files();
        $session->start();
        return $session;
    }
);

$di->set(
    'view',
    function () use ($config) {
        $view = new \Phalcon\Mvc\View();
        $view->setViewsDir(__DIR__ . '/views/');
        $view->registerEngines(
            array(
                ".volt" => 'volt'
            )
        );
        return $view;
    }
);

$di->set(
    'volt',
    function ($view, $di) {
        $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);
        $volt->setOptions(
            array(
                "compiledPath" => "../cache/volt/"
            )
        );
        return $volt;
    },
    true
);