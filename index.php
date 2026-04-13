<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calorie Cost Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require("db_connect.php");
$select_all = "SELECT * FROM products ORDER BY name";
$result =  $conn->query($select_all); 


echo'<table> 
<tr>
<th>ID</th>
<th>Name</th>
<th>Calories per 100g</th>
<th>Price</th>
<th>Weight[g]</th>
<th>Calories per gram</th>
<th>Total calories</th>
<th>Calories per PLN</th>
<th>Created at</th>
</tr>
';

while($row = $result->fetch_assoc()){
    $entry_id = $row['id'];
    echo'<tr>';

    echo'<td>' . $row['id'] . '</td>';
    echo'<td>' . $row['name'] . '</td>';
    echo'<td>' . $row['kcal_per_100g'] . '</td>';
    echo'<td>' . $row['price'] . '</td>';
    echo'<td>' . $row['weight_g'] . '</td>';
    echo'<td>' . $row['kcal_per_g'] . '</td>';
    echo'<td>' . $row['total_kcal'] . '</td>';
    echo'<td>' . $row['kcal_per_pln'] . '</td>';
    echo'<td>' . $row['created_at'] . '</td>';

    echo'<td>';
    echo'<form action="delete.php" method="POST">'; 
    echo'<input type="hidden" name="id" value="' . $row['id'] . '">'; 
    echo'<button type="submit" class="exit">x</button>';
    echo'</form>';
    echo'</td>';
    echo'</tr>';
}
echo'</table>';
?>
<form action="insert.php" method="post">

    NAME: <input type="text" id="name" name="name"> [char]
    <br>
    KCAL: <input type="number" id="kcal_per_100g" name="kcal_per_100g"> [int[kcal/100g]]
    <br>
    COST: <input type="number" id="price" name="price">[float[pln]]
    <br>
    WEIGHT: <input type="number" id="weight_g" name="weight_g">[float[g]]
    <br>
    <input type="submit" value="UPLOAD">
</form>


</body>
</html>