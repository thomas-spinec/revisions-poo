<?php
require_once 'Product.php';

$product = new Product(1, 'T-shirt noir', ['https://picsum.photos/200/300', 'https://picsum.photos/200/300'], 15, 'T-shirt coton de couleur noire', 10, new DateTime('2020-06-14'), new DateTime('2020-06-14'));



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job01</title>
</head>

<body>
    <h1>Job01</h1>

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
                <td><?= $product->getCreatedAt()->format('Y-m-d') ?></td>
                <td><?= $product->getUpdatedAt()->format('Y-m-d') ?></td>
            </tr>
        </tbody>
    </table>

</body>

</html>