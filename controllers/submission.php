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


$pdo = new PDO('sqlite:database/db.sqlite');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM Orders WHERE order_id = :order_id LIMIT 1";

$statement = $pdo->prepare($query);

$statement->execute([
    ':order_id' => $order_id,
]);

$pdo = null; // close

var_dump($statement->fetchAll(PDO::FETCH_ASSOC));

die();

$time_placed = $test_time;

$date = new DateTime("@$time_placed");
$date->setTimezone(new DateTimeZone("America/Indiana/Indianapolis"));
$human_time = $date->format("g:i");

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