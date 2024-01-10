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

$product = new Product();
$product->setPdo($pdo);
$result = $product->findAll();

var_dump($result);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job08</title>
    <style>
        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        img {
            width: 100px;
        }

        th {
            background-color: lightgrey;
        }



        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Job08</h1>
</body>

</html>