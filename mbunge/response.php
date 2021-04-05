<?php include 'layouts/main.php'; ?>
<?php

include 'db.php';
if (isset($_POST['submit'])) {
  $id = $_GET['id'];
  $response = $_POST['response'];

  //  if (empty($response)){
  //      $status="All fields must be filled";

  //  }else{
  $sql = 'UPDATE post SET response=:response WHERE id=:id';
  $stmt = $pdo->prepare($sql);
  $stmt->execute(["response" => $response, "id" => $id]);
  header("Location: view_comments.php");
}

?>

 <?php include 'layouts/common_base.php'; ?>