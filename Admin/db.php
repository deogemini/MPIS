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

}catch(PDOException $e){
    echo "DB Connection Failed:".$e->getMessage();
}
$pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
