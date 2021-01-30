<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'mpis';


try {
    
//Set DSN (Data source name)
$dsn = 'mysql:host='.$host .';dbname='.$dbname;

//create a PDO instance
$pdo = new PDO($dsn, $user, $password);
echo "Connection Successfull";
}catch(PDOException $e){
    echo "DB Connection Failed:".$e->getMessage();
}