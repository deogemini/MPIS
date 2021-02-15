<?php
session_start();
include "db.php";

if(isset($_POST['edit_jimbo'])){
  //from pop up modal
$id = $_POST['edit_jimbo_id'];
$jimbo = $_POST['jinalajimbo'];
$mkoa = $_POST['mkoa'];
$wilaya = $_POST['wilaya'];
$kata = $_POST['kata'];



$sql = "UPDATE jimbo SET jinalajimbo = ?, mkoa = ?, wilaya = ?, kata = ? WHERE id   = ?";
$stmt = $pdo->prepare($sql);
$results = $stmt->execute([$jimbo,$mkoa,$wilaya,$kata,$id]);


    // if($results){
    //   $_SESSION['success_edit'] = "
    // <script>
    // Swal.fire({
    //   position: 'top-end',
    //   icon: 'success',
    //   title: 'Data Has Been Updated',
    //   showConfirmButton: false,
    // })
    // </script>";
    // header("Location:view_jimbo.php");
    //
    // }else{
    // //   $_SESSION['not_success_edit'] = "
    // // <script>
    // // Swal.fire({
    // //   position: 'top-end',
    // //   icon: 'error',
    // //   title: 'Not Updated',
    // //   showConfirmButton: false,
    // //
    // // })
    // // </script>";
    // //echo mysqli_error($pdo);
    // //header("Location:view_jimbo.php");
    //
    // }
}
 ?>
