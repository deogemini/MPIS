<?php

include('/dbconnection.php');

// //  INSERT DATA
$status  = "";
if (isset($_POST['submit'])) {
    $jimbo = $_GET['jimbo'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $body = $_POST['body'];


    if (empty($title) || empty($category) || empty($body)) {
        $status = "All fields are compulsory";
    } else {
        $sql = "INSERT INTO post(title, category, body, jimbo) VALUES (:title, :category, :body ,:jimbo)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["title" => $title, "category" => $category, "body" => $body, "jimbo" => $jimbo]);

        header("Location: index2.php");
        exit();

        $status = "Your data was sent";
    }
}
