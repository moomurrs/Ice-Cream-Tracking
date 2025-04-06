<?php

require "utility/utility.php";

$heading = 'Home';
//var_dump($_SERVER['REQUEST_URI']);

$uri = parse_url($_SERVER['REQUEST_URI']);

//dd($uri);


if($uri['path'] == '/'){
    require "./views/index.view.php";
}

