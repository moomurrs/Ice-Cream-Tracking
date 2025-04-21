<?php
session_start();

$heading = 'Gallery';
$title = 'Gallery';

//var_dump($_SERVER['REQUEST_URI']);

require "{$root}/views/gallery.view.php";