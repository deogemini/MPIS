<?php
session_start();
include "db.php";

if(isset($_POST['edit_mbunge'])){
  //from pop up modal
$id = $_POST['edit_mbunge_id'];

$firstname= $_POST['firstname'];
$secondname = $_POST['secondname'];
$lastname = $_POST['lastname'];
$jimbo = $_POST['jimbo'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$chama = $_POST['startingdate'];
$staringdate = $_POST['startingdate'];
$finishingdate = $_POST['finishingdate'];



$sql = "UPDATE users SET firstname = ?, secondname = ?, lastname = ?, jimbo = ? , gender = ?,birthdate = ?,email = ?, telephone = ?, chama = ?,startingdate = ?, finishingdate = ?
WHERE id   = ?";
$stmt = $pdo->prepare($sql);
$results = $stmt->execute([$firstname,$secondname,$lastname,$jimbo,$gender,$birthdate,$email,$telephone,$chama,$staringdate,$finishingdate,$id]);


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
