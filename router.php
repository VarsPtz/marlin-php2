<?php

    class Route {

        protected $routes = [
            "/" => 'homepage.php',
            "/about" => 'about.php',
            "/create" => 'create.php',
            "/store" => 'store.php',
            "/404" => '404.php'
        ];

        public function __construct($routes)
        {
            $this->routes = $routes;
        }


        public function getRoute($incoming_uri){
            $route = $incoming_uri;

            if(array_key_exists($route, $this->routes)) {
                return $this->routes[$route];
            } else {
                return $this->routes[404];
            }
        }
    }

?>


