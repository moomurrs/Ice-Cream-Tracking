<?php
session_start();

$heading = 'Order Received!';
$title = 'Submitted';

$test_order = [
    "cone-type" => "normal",
    "flavor-type" => ["chocolate", "vanilla"],
    "topping-type" => ["cicada", "flower"]
];
#$order = $test_order;
#$test_time = 1483228510;

$pdo = new PDO('sqlite:database/db.sqlite');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM Orders WHERE order_id = :order_id LIMIT 1";

$statement = $pdo->prepare($query);

$statement->execute([
    ':order_id' => $order_id,
]);

$pdo = null; // close

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

if (count($result) == 0) {
    // order not in database, error out
    http_response_code(404);
    require 'views/404.php';
    die();
}

$order = [
    "cone-type" => $result[0]['cone_type'],
    "flavor-type" => unserialize($result[0]['flavor_types']),
    "topping-type" => unserialize($result[0]['topping_types'])
];

$time_placed = $result[0]['epoch'];

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
