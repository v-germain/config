<?php
require('controller/frontend.php');
try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listConfig') {
            listConfig();
        }
        elseif ($_GET['action'] == 'processeur') {
            listCPU();
        }
        elseif ($_GET['action'] == 'alimentation') {
            listPSU();
        }
        elseif ($_GET['action'] == 'boitier') {
            listCase();
        }
        elseif ($_GET['action'] == 'carte graphique') {
            listGraph();
        }
        elseif ($_GET['action'] == 'carte mère') {
            listMB();
        }
        elseif ($_GET['action'] == 'disque dur') {
            listHD();
        }
        elseif ($_GET['action'] == 'mémoire') {
            listMemory();
        }
    }
    else {
        listConfig();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}

/*class Router {
    
    private $routes;

    function add_route($route, callable $closure) {
        $this->routes[$route] = $closure;
    }

    function execute() {
        $path = $_SERVER['PATH_INFO'];
        if(array_key_exists($path, $this->routes)) {
            $this->routes[$path]();
        } else {
            $this->routes['/']();
        }
    }
}

$router = new Router();

$router->add_route('/', function() {
    listConfig();
});

$router->add_route('/processeur' , function() {
    listCPU();
});

$router->execute();*/