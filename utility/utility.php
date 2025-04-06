<?php

$root = $_SERVER['DOCUMENT_ROOT'];

function dd($val){
    echo "<pre>";
    var_dump($val);
    echo "</pre>";
    die();
}
