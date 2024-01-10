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

// $category = new Category();
// $category->setPdo($pdo);
// $category->getrandomCateg();

$category = new Category();
$category->setPdo($pdo);
$category->setId(1);

$products = $category->getProducts();

var_dump($products);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job06</title>
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
    <h1>Job06</h1>

    <!-- <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>photos</th>
                <th>price</th>
                <th>description</th>
                <th>quantity</th>
                <th>createdAt</th>
                <th>updatedAt</th>
                <th>category_id</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $product->getId() ?></td>
                <td><?= $product->getName() ?></td>
                <td>
                    <?php foreach ($product->getPhotos() as $photo) : ?>
                        <img src="<?= $photo ?>" alt="">
                    <?php endforeach ?>
                </td>
                <td><?= $product->getPrice() ?></td>
                <td><?= $product->getDescription() ?></td>
                <td><?= $product->getQuantity() ?></td>
                <td><?= $product->getCreatedAt()->format('d-m-Y') ?></td>
                <td><?= $product->getUpdatedAt()->format('d-m-Y') ?></td>
                <td><?= $product->getId_category() ?></td>
            </tr>
        </tbody>
    </table> -->

</body>

</html>