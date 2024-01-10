<?php
// connect to database pdo
$dbname = 'draft-shop';
$host = 'localhost';
$dbuser = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbuser, $password);
} catch (PDOException $e) {
    echo $e->getMessage();
}

require_once 'Product.php';
require_once 'Category.php';


$product = new Product(null, 'short', ['https://picsum.photos/200/300'], 15, 'quand il fait chaud', 10, new DateTime(), new DateTime(), 3);

$product->setPdo($pdo);

$product->create();
var_dump($product);

$product->setName('shorty')->setPrice(20)->setQuantity(5);
$product->update();
var_dump($product);




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job10</title>
</head>

<body>
    <h1>Job10</h1>
</body>

</html>