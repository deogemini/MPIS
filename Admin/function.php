<?php
function get_total_all_records()
{
 include 'db.php';
 $statement = $pdo->prepare("SELECT * FROM jimbo");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}

?>
