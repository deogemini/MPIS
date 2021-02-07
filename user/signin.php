<?php
session_start();
include('db.php');

$status = "";
if (isset($_POST["submit"])) {

    $firstname = $_POST['firstname'];
    $password = $_POST['password'];

    if (empty($firstname) || empty($password)) {
        $status = "All fields are compulsory";
    } else {
        $sql = "SELECT * FROM citizen WHERE firstname='$firstname' AND  password = '$password' LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["firstname" => $firstname, "password" => $password]);
        $count = $stmt->rowCount();
        if ($count == 1) {
            $_SESSION["firstname"] = $_POST["firstname"];
            header("Location: /MPIS/user/index2.php");
        } else {
            $message = 'failed';
            header("Location: /MPIS/user/login.php?text=$message");
        }




        exit();

        $status = "Your data was sent";
    }
}
