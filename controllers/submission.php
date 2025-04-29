<?php
session_start();

$heading = 'Order Received!';
$title = 'Submitted';

$test_order = [
    "cone-type" => "normal",
    "flavor-type" => ["chocolate", "vanilla"],
    "topping" => ["cicada", "flower"]
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    var_dump($_REQUEST);
    die();

    if (!empty($_POST['contact-submit'])) {
        var_dump($_POST['contact-submit']);
        die();
        //dd($_POST['contact-submit']);
    } else {
        print_r("empty");
        die();
    }
}

require "{$root}/views/submission.view.php";