<?php

$pdo = new PDO('sqlite:database/db.sqlite');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$test_id = "1234";
$test_cone = "normal";
$test_flavors = ["chocolate", "vanilla"];
$test_toppings = ["top1", "top2"];

function insert_into_db()
{
    global $pdo, $test_id, $test_flavors, $test_toppings, $test_cone;

    $query = "INSERT into Orders (order_id, cone_type, flavor_types, topping_types)
    VALUES (:order_id, :cone_type, :flavor_types, :topping_types)";

    $statement = $pdo->prepare($query);

    $statement->execute([
        ':order_id' => $test_id,
        ':cone_type' => $test_cone,
        ':flavor_types' => serialize($test_flavors),
        ':topping_types' => serialize($test_toppings),
    ]);
}

insert_into_db();

?>

<!DOCTYPE html>
<html>

<head>
    <title>test doc</title>
</head>

<body>
    test doc
</body>

</html>