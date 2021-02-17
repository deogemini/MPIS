<?php
session_start();
include("db.php");

$status = " ";
if (isset($_POST["submit"])) {

    $firstname = $_POST['firstname'];
    $password = $_POST['password'];

    if (empty($firstname) || empty($password)) {
        $status = "All fields are compulsory";
    } else {
        $sql = "SELECT role FROM users WHERE firstname='$firstname' AND  password = '$password' LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["firstname" => $firstname, "password" => $password]);
        $count = $stmt->rowCount();
        if ($count) {
            $row = $stmt->fetch();
            $role = $row->role;

            if ($role == "mbunge") {
                $_SESSION['firstname'] = $firstname;
                header("Location: /MPIS/mbunge/index.php");
            } else if ($role == "citizen") {
               
                $_SESSION['firstname'] = $firstname;
                header("Location: /MPIS/user/index2.php");
            } else if ($role == "superadmin") {
                header("Location:/MPIS/Admin/index.php");
            }
        } else {
            header("Location: /MPIS/user/login.php?text=$message");
        }
    }
}
