
<?php
function get_total_all_records()
{
  include 'db.php';
  $sql = "SELECT * FROM jimbo";
  $statement = $pdo->query($sql);
  $result = $statement->fetch();
  return $result->rowCount();
}
?>
