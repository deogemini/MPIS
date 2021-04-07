<?php

include('db.php');

// //  INSERT DATA
$status  = "";
if (isset($_POST['submit'])) {
    $jinalajimbo = $_POST['jinalajimbo'];
    $mkoa = $_POST['mkoa'];
    $halmashauri = $_POST['halmashauri'];
    $kata = $_POST['kata'];

    if (empty($jinalajimbo) || empty($mkoa) || empty($halmashauri) || empty($kata)) {
        $status = "All fields are compulsory";
    } else {
        $sql = "INSERT INTO jimbo(jinalajimbo, mkoa, halmashauri, kata) VALUES (:jinalajimbo,:mkoa, :halmashauri, :kata) ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(["jinalajimbo" => $jinalajimbo, "mkoa" => $mkoa, "halmashauri" => $halmashauri, "kata" => $kata]);

        $_SESSION['success'] = "Jimbo limeshasajiliwa";


        header("Location: /MPIS/Admin/index.php");
        exit();

        $status = "Your data was sent";
    }
}
