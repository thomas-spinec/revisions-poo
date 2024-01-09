<?php
require_once 'Product.php';
require_once 'Category.php';

$category1 = new Category(1, 'T-shirt', 'T-shirt coton', new DateTime('2020-06-14'), new DateTime('2020-06-14'));
$category2 = new Category(2, 'Pantalon', 'Pantalon en jean', new DateTime('2020-06-14'), new DateTime('2020-06-14'));


$product = new Product(1, 'T-shirt noir', ['https://picsum.photos/200/300'], 15, 'T-shirt coton de couleur noire', 10, new DateTime('2020-06-14'), new DateTime('2020-06-14'), 1);

$productNull = new Product();
var_dump($productNull);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job03</title>
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
    <h1>Job03</h1>

    <table>
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
                <td><?= $product->getCategory_id() ?></td>
            </tr>
        </tbody>
    </table>

</body>

</html>