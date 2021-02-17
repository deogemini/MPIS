<?php
session_start();
include "db.php";
if(isset($_POST['delete_mbunge'])){
$id = $_POST['delete_mbunge_Id'];
$sql = "DELETE  FROM users WHERE id = ? ";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
 header("Location:view_wabunge.php");

}
?>
