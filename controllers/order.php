<?php
session_start();
require "{$root}/models/pricing.model.php";

$heading = 'Order';
$title = 'Order';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    var_dump($_REQUEST);
    die();

    if (!empty($_POST['order-submit'])) {
        var_dump($_POST['order-submit']);
        die();
        //dd($_POST['contact-submit']);
    } else {
        print_r("empty");
        die();
    }
}

require "{$root}/views/order.view.php";