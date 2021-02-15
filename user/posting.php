<?php

include('db.php');

// //  INSERT DATA
$status  = "";
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $body = $_POST['body'];


    if (empty($title) || empty($category) || empty($body)) {
        $status = "All fields are compulsory";
    } else {
        $sql = "INSERT INTO post(title, category, body) VALUES (:title, :category, :body)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["title" => $title, "category" => $category, "body" => $body]);

        header("Location: index2.php");
        exit();

        $status = "Your data was sent";
    }
}
