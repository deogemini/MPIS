<?php

include('db.php');

// //  INSERT DATA
$status  = "";
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $secondname = $_POST['secondname'];
    $lastname = $_POST['lastname'];
    $jimbo = $_POST['jimbo'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];


    if (empty($firstname) || empty($lastname) || empty($jimbo) || empty($gender) || empty($password)) {
        $status = "All fields are compulsory";
    } else {
        $sql = "INSERT INTO citizen(firstname, secondname, lastname, jimbo, gender, password) VALUES (:firstname,:secondname, :lastname, :jimbo, :gender, :password) ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["firstname" => $firstname, "secondname" => $secondname, "lastname" => $lastname, "jimbo" => $jimbo, "gender" => $gender, "password" => $password]);

        header("Location: login.php");
        exit();

        $status = "Your data was sent";
    }
}
