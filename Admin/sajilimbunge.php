<?php 

include ('db.php');


//insert data
$status  = "";
if(isset($_POST['submit'])){
    $jinalakwanza = $_POST['jinalakwanza'];
    $jinalapili = $_POST['jinalapili'];
    $jinalamwisho = $_POST['jinalamwisho'];
    $jimbo = $_POST['jimbo'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $chama=$_POST['chama'];
    $startingdate = $_POST['startingdate'];
    $finishingdate = $_POST['finishingdate'];
    $password = password_hash(strtoupper($jinalamwisho),PASSWORD_DEFAULT);
  

     if(empty($jinalakwanza) || empty($jinalamwisho) || empty($jimbo) || empty($gender) || empty($birthdate) 
     || empty($email) || empty($telephone) || empty($chama) || empty($startingdate)|| empty($finishingdate)) {
        $status = "All fields are compulsory";
    } else {
        $sql = "INSERT INTO mbunge(jinalakwanza, jinalapili, jinalamwisho,jimbo, gender, birthdate, email, telephone, chama, startingdate, finishingdate, password) VALUES (:jinalakwanza, :jinalapili, :jinalamwisho,:jimbo, :gender, :birthdate, :email, :telephone, :chama, :startingdate, :finishingdate, :password) ";
        $stmt = $pdo -> prepare($sql);
        $stmt -> execute(["jinalakwanza" => $jinalakwanza, "jinalapili" => $jinalapili, "jinalamwisho" => $jinalamwisho, "jimbo" => $jimbo, "gender" => $gender, "birthdate" => $birthdate,
        "email" => $email, "telephone" => $telephone, "chama"=> $chama, "startingdate"=> $startingdate, "finishingdate"=>$finishingdate, "password"=>$password ]);
        
        $_SESSION['success']="mbunge ameshasajiliwa";	
        
        header("Location: /MPIS/Admin/index.php");
        exit();

        $status = "Your data was sent";
        
    }
    
    
}
