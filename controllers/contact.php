<?php
session_start();

$heading = 'Contact Us';
$title = 'Contact Us!';

$comment = "";
$comment_err = false;

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
    } else {
        // comment is empty, send error
        $comment_err = true;
    }

    //var_dump($len);
    //die();
}

require "{$root}/views/contact.view.php";
