<?php
$host = 'sql302.epizy.com';
$user = 'epiz_28262465';
$password = 'CDmYyyLjZ2Zlh7A';
$dbname = 'epiz_28262465_mpis';


try {

    //Set DSN (Data source name)
    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

    //create a PDO instance
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo "DB Connection Failed:" . $e->getMessage();
}
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
