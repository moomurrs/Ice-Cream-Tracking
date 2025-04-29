<?php
session_start();



$heading = 'Order Received!';
$title = 'Submitted';

$test_order = [
    "cone-type" => "normal",
    "flavor-type" => ["chocolate", "vanilla"],
    "topping-type" => ["cicada", "flower"]
];

$order = $test_order;


$test_time = 1483228510;
$time_epoch = $test_time;

$date = new DateTime("@$time_epoch");
$date->setTimezone(new DateTimeZone("America/Indiana/Indianapolis"));
$human_time = $date->format("H:i:s");


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