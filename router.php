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
    //'/submission' => 'controllers/submission.php', no direct endpoint access
];


// neat little trick I saw, only go to page if it exists in array
if (array_key_exists('/' . $uri[1], $routes)) {
    //dd($uri);

    if (isset($uri[2]) && strlen($uri[2]) > 0) {

        var_dump(value: "not empty");
        $submission_id = $uri[2];
        dd($submission_id);


    } else if (isset($uri[2]) && strlen($uri[2]) == 0) {
        //var_dump("single slash");

        // manually remove the trailing '/' (because it breaks routing)
        header('Location: ' . '/' . $uri[1]);
        die();
    } else {
        //var_dump("empty");

        //var_dump($uri[1]);
        //die();
        $path = "/" . $uri[1];

        //var_dump($path);

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
