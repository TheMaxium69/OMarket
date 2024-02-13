<?php
$host = "localhost";
$port = "3306";
$userDB = "root";
$passDB = "";
$Database = "prestashop";
$ConnectDB = mysqli_connect($host.":".$port, $userDB, $passDB, $Database);
try{
    $db = new PDO("mysql:host=localhost;dbname=" . $Database, $userDB, $passDB);
    $db->setAttribute(PDO::ERRMODE_EXCEPTION, 'ATTR_ERRMODE');
}catch(PDOEXeption $e){
    echo "Connection failed: " . $e->getMessage();
}
?>