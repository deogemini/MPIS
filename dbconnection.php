<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["password"];
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
    echo ("please");
} catch (PDOException $e) {
    echo "DB Connection Failed:" . $e->getMessage();
}
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
