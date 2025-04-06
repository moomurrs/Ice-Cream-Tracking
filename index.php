<?php

require "utility/utility.php";

$heading = 'Home';
//var_dump($_SERVER['REQUEST_URI']);

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//dd($uri);

// array of routing mappings
$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
];

//var_dump($uri);
//var_dump('<hr>');
//var_dump($routes);
//var_dump('<hr>');


// neat little trick I saw, only go to page if it exists in array
if(array_key_exists($uri, $routes)){
    require $routes[$uri];
} else{
    http_response_code(404);
    require 'views/404.php';
    die(); // necessary?
}
