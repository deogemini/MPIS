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
    $role = "citizen";


    if (empty($firstname) || empty($lastname) || empty($jimbo) || empty($gender) || empty($password)) {
        $status = "All fields are compulsory";
    } else {
        $sql = "INSERT INTO users(firstname, secondname, lastname, jimbo, gender, password, role) VALUES (:firstname,:secondname, :lastname, :jimbo, :gender, :password, :role) ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["firstname" => $firstname, "secondname" => $secondname, "lastname" => $lastname, "jimbo" => $jimbo, "gender" => $gender, "password" => $password, "role" => $role]);

        header("Location: login.php");
        exit();

        $status = "Your data was sent";
    }
}
