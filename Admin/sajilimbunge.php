<?php

include('db.php');


//insert data
$status  = "";
if (isset($_POST['submit'])) {
    $firstname = $_POST['jinalakwanza'];
    $secondname = $_POST['jinalapili'];
    $lastname = $_POST['jinalamwisho'];
    $jimbo = $_POST['jimbo'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $chama = $_POST['chama'];
    $startingdate = $_POST['startingdate'];
    $finishingdate = $_POST['finishingdate'];
    $password = strtoupper($lastname);
    $role = "admin";


    if (
        empty($firstname) || empty($lastname) || empty($jimbo) || empty($gender) || empty($birthdate)
        || empty($email) || empty($telephone) || empty($chama) || empty($startingdate) || empty($finishingdate)
    ) {
        $status = "All fields are compulsory";
    } else {
        $sql = "INSERT INTO users(firstname, secondname, lastname,jimbo, gender, birthdate, email, telephone, chama, startingdate, finishingdate, password, role) VALUES (:firstname, :secondname, :lastname,:jimbo, :gender, :birthdate, :email, :telephone, :chama, :startingdate, :finishingdate, :password,:role) ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            "firstname" => $firstname, "secondname" => $secondname, "lastname" => $lastname, "jimbo" => $jimbo, "gender" => $gender, "birthdate" => $birthdate,
            "email" => $email, "telephone" => $telephone, "chama" => $chama, "startingdate" => $startingdate, "finishingdate" => $finishingdate, "password" => $password, "role" => $role
        ]);

        $_SESSION['success'] = "mbunge ameshasajiliwa";

        header("Location: /MPIS/Admin/index.php");
        exit();

        $status = "Your data was sent";
    }
}
