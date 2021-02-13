<?php 

include 'db.php';
if (isset($_POST['submit'])) {

    $response = $_POST['response'];
    $idd = $_GET['id'];
    die($idd);

 if (empty($response)){
     $status="All fields must be filled";
     
 }else{
     $sql= "UPDATE response FROM post WHERE id=$id";

 }
}
?>