<?php
session_start();

$heading = 'Menu';
$title = 'Menu';

//var_dump($_SERVER['REQUEST_URI']);

require "{$root}/views/menu.view.php";