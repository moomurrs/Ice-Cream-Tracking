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
date_default_timezone_set('America/Indiana/Indianapolis');
$hours = [
    6 ,  # opening PM time
    11 + 12, # closing PM time
];
$curr_time = time();
$date = new DateTime("@$curr_time");
$date->setTimezone(new DateTimeZone("America/Indiana/Indianapolis"));
$curr_hour = (int) $date->format("H"); // will be in 24h


$open = $hours[0] <= $curr_hour && $curr_hour < $hours[1];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


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
        $curr_time = time();

        $pdo = new PDO('sqlite:database/db.sqlite');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "INSERT into Orders (order_id, cone_type, flavor_types, topping_types, epoch)
        VALUES (:order_id, :cone_type, :flavor_types, :topping_types, :epoch)";

        $statement = $pdo->prepare($query);
        $new_order_id = uniqid();
        $statement->execute([
            ':order_id' => $new_order_id,
            ':cone_type' => $cone,
            ':flavor_types' => serialize($flavors),
            ':topping_types' => serialize($toppings),
            ':epoch' => $curr_time,
        ]);

        $pdo = null; // close

        // go to submission screen with order_id as URI
        header('Location: ' . '/submission/' . $new_order_id);
        die();
    }

    //echo 'rendering error';
}

require "{$root}/views/order.view.php";
