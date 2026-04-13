<?php
$config = require 'config.php';

try{
    $conn = new mysqli(
        $config['db_host'],
        $config['db_user'],
        $config['db_pass'],
        $config['db_name']
    );
} catch (Exception $e){
    die("Connection failed: " . $conn->connect_error);
}

?>