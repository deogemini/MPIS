<?php 

include ('db.php');

// //  INSERT DATA
$status  = "";
if(isset($_POST['submit'])){
    $jinalajimbo = $_POST['jinalajimbo'];
    $mkoa = $_POST['mkoa'];
    $wilaya = $_POST['wilaya'];
    $kata = $_POST['kata'];

    if(empty($jinalajimbo) || empty($mkoa) || empty($wilaya) || empty($kata)) {
        $status = "All fields are compulsory";
    } else {
        $sql = "INSERT INTO jimbo(jinalajimbo, mkoa, wilaya, kata) VALUES (:jinalajimbo,:mkoa, :wilaya, :kata) ";
        $stmt = $pdo -> prepare($sql);
        $stmt -> execute(["jinalajimbo" => $jinalajimbo, "mkoa" => $mkoa, "wilaya" => $wilaya, "kata" => $kata ]);

        $_SESSION['success']="Jimbo limeshasajiliwa";	


        header("Location: /MPIS/Admin/index.php");
        exit();

        $status = "Your data was sent";
        
    }
    
    
}
