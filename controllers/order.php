<?php
session_start();
require "{$root}/models/pricing.model.php";

$heading = 'Order';
$title = 'Order';
$cone_err = false;
$flavor_err = false;
$open = true;

$cone = '';
$flavors = '';
$toppings = '';

$hours = [5, 10];
$curr_time = time();
$date = new DateTime("@$curr_time");
$curr_hour = (int) $date->format("H");

if (5 < $curr_hour && $curr_hour < 10){
    $open = true;
} else {
    $open = false;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    var_dump($_POST);
    die();

    if (!isset($_POST['cone-type'])) {
        // cone type is mandatory (but not set)
        $cone_err = true;
    }

    if (!isset($_POST['flavor-type'])) {
        // cone type is mandatory (but not set)
        $flavor_err = true;
    }

    if (!$cone_err && !$flavor_err) {
        // no error, go to submission
        $cone = $_POST['cone-type'];
        $flavors = $_POST['flavor-type'];
        $toppings = $_POST['topping-type'];
        var_dump($_POST);
        die();
    }
}

require "{$root}/views/order.view.php";