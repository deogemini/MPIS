<?php
session_start();
include "db.php";

if(isset($_POST['delete_jimbo'])){

$id = $_POST['delete_jimbo_id'];
$sql = "DELETE  FROM jimbo WHERE id = ? ";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

}
 ?>
