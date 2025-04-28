<?php
session_start();
require "{$root}/models/pricing.model.php";

$heading = 'Order';
$title = 'Order';
$cone_err = false;
$flavor_err = false;

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
}

require "{$root}/views/order.view.php";