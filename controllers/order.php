<?php
session_start();
require "{$root}/models/pricing.model.php";


$heading = 'Order';
$title = 'Order';


require "{$root}/views/order.view.php";