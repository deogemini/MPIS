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
        $sql = "SELECT * FROM citizen WHERE firstname='firstname' AND  password = 'password'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["firstname" => $firstname, "password" => $password]);
        $count = $stmt->rowCount();
        if ($count < 1) {
            $_SESSION["firstname"] = $_POST["firstname"];
            $_SESSION["password"] = $_POST["password"];
            header("Location: /MPIS/user/index2.php");
        } else {
            $message = '<label> Wrong Data </label>';
        }




        exit();

        $status = "Your data was sent";
    }
}
