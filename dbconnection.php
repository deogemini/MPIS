<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["us-cdbr-east-03.cleardb.com"];
$cleardb_username = $cleardb_url["b5219994ac6ae0"];
$cleardb_password = $cleardb_url["1a530010"];
$cleardb_db = substr($cleardb_url["path"], 1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
//$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
try {

    //Set DSN (Data source name)
    $dsn = 'mysql:host=' . $cleardb_server . ';dbname=' . $cleardb_db;

    //create a PDO instance
    $pdo = new PDO($dsn, $cleardb_username, $cleardb_password);
} catch (PDOException $e) {
    echo "DB Connection Failed:" . $e->getMessage();
}
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
