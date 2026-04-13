<?php
require('db_connect.php');

$id = $_POST['id'];

$stmt = $conn->prepare("DELETE FROM products WHERE id=?");
$stmt->bind_param("i", $id);

if($stmt->execute()){
    $stmt->close();
    header('Location: index.php');
    exit();
}else{
    echo "Error while deleting";
}
?>