<?php
session_start();

$heading = 'Contact Us';
$title = 'Contact Us!';

$comment = "";
$comment_err = false;

$show_toast = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // posted a comment, check if it's populated

    $len = strlen($_POST['text-input']);

    if ($len > 0) {
        // save to DB
        $category = $_POST['question-type'];
        $comment = $_POST['text-input'];
        //var_dump($comment);
        //var_dump($category);
        //die();

        $pdo = new PDO('sqlite:database/db.sqlite');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "INSERT into Contact (question_type, input, epoch)
        VALUES (:question_type, :input, :epoch)";

        $statement = $pdo->prepare($query);
        $new_order_id = uniqid();
        $statement->execute([
            ':question_type' => $category,
            ':input' => $comment,
            ':epoch' => time(),
        ]);

        $pdo = null; // close
        $show_toast = true;

        // re
        //header('Location: ' . '/contact');
        //die();

    } else {
        // comment is empty, send error
        $comment_err = true;
    }

}

require "{$root}/views/contact.view.php";
