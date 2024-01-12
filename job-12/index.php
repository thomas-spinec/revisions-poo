<?php
// // connect to database pdo
// $dbname = 'draft-shop';
// $host = 'localhost';
// $dbuser = 'root';
// $password = '';

// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbuser, $password);
// } catch (PDOException $e) {
//     echo $e->getMessage();
// }

// require_once 'Product.php';
require_once 'Clothing.php';
require_once 'Electronic.php';
require_once 'Category.php';


$clothing = new Clothing();
$electronic = new Electronic();

// findOneById -------------------------
// $newClothing = $clothing->findOneById(1);
// $newElectronic = $electronic->findOneById(9);

// findAll -------------------------
// $newClothing = $clothing->findAll();
// $newElectronic = $electronic->findAll();

// create -------------------------
// $clothing->create();
// $electronic->create();

// update -------------------------
// $clothing->update();
// $electronic->update();


// var_dump($newClothing);
// var_dump($newElectronic);




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job12</title>
</head>

<body>
    <h1>Job12</h1>
</body>

</html>