<?php
session_start();
//var_dump($_SERVER['REQUEST_URI']);

$uri = explode("/", parse_url($_SERVER['REQUEST_URI'])['path']);

//dd($uri);

// array of routing mappings
$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/menu' => 'controllers/menu.php',
    '/gallery' => 'controllers/gallery.php',
    '/order' => 'controllers/order.php',
    '/submission' => 'controllers/submission.php',
];


// neat little trick I saw, only go to page if it exists in array
if (array_key_exists('/' . $uri[1], $routes)) {
    //dd($uri);

    if (isset($uri[2]) && strlen($uri[2]) > 0) {
        // has additional trailing uri
        //var_dump($uri);
        //die();
        
        if ($uri[1] == "submission") {
            // only submission API can have additional trailing uri
            var_dump("valid");
            die();
        } else {
            http_response_code(404);
            require 'views/404.php';
            die();
        }

    } else if (isset($uri[2]) && strlen($uri[2]) == 0) {
        //var_dump("single slash");

        // manually remove the trailing '/' (because it breaks routing)
        header('Location: ' . '/' . $uri[1]);
        die();
    } else {
        // normal routing, no other trailing uri

        //var_dump($uri[1]);
        //die();
        $path = "/" . $uri[1];

        require $routes[$path];
    }

    //dd($trailing_uri);

} else {
    http_response_code(404);
    require 'views/404.php';
    //print_r("Bad routing");
    //var_dump($_SERVER);
    //var_dump($_POST);
    die(); // necessary?
}
