<?php
require('db_connect.php');
$name = $_POST['name'];
$kcal_per_100g = (int)$_POST['kcal_per_100g'];
$price = (float)$_POST['price'];
$weight_g = (float)$_POST['weight_g'];
$kcal_per_g = $kcal_per_100g/100;
$total_kcal = $kcal_per_g * $weight_g;
$kcal_per_pln = $total_kcal / $price;

$stmt = $conn->prepare("INSERT INTO products (name, kcal_per_100g, price, weight_g, kcal_per_g, total_kcal, kcal_per_pln) VALUES (?,?,?,?,?,?,?)");
$stmt->bind_param("siddddd", $name, $kcal_per_100g, $price, $weight_g, $kcal_per_g, $total_kcal, $kcal_per_pln);

if($stmt->execute()){
    $stmt->close();
    header('Location: index.php');
    exit();
}else{
    echo "Error while inserting to database";
}

?>