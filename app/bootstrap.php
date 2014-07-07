<?php
$config = new Phalcon\Config\Adapter\Ini(__DIR__ . '/../app/config/config.ini');

$loader = new \Phalcon\Loader();

$loader->registerDirs(
    [
        __DIR__ . '/lib/'
    ]
)->register();

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
        return new \Phalcon\Db\Adapter\Pdo\Mysql([
            "host" => $config->database->host,
            "username" => $config->database->username,
            "password" => $config->database->password,
            "dbname" => $config->database->dbname,
            "charset" => $config->database->charset,
        ]);
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
            [
                ".volt" => 'volt'
            ]
        );
        return $view;
    }
);

$di->set(
    'volt',
    function ($view, $di) {
        $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);
        $volt->setOptions(
            [
                "compiledPath" => "../cache/volt/"
            ]
        );
        return $volt;
    },
    true
);

$di->set(
    'router',
    function () {
        require __DIR__ . '/routes.php';
        return $router;
    }
);