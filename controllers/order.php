<?php
session_start();
require "{$root}/models/pricing.model.php";

$heading = 'Order';
$title = 'Order';
$cone_err = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //var_dump($_POST);
    //die();

    if (isset($_POST['cone-type'])) {
        // cone type is mandatory (but not set)
        $cone_err = true;
        var_dump($_POST['order-submit']);
        die();
        //dd($_POST['contact-submit']);
    }
}

require "{$root}/views/order.view.php";