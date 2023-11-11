<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>E-commerce Store!</h1>

<?php
// Sample product data (in a real-world scenario, this would come from a database)
$products = [
    ['id' => 1, 'name' => 'Product A', 'price' => 20.99],
    ['id' => 2, 'name' => 'Product B', 'price' => 30.49],
    ['id' => 3, 'name' => 'Product C', 'price' => 15.99],
];

// Display the product catalog
foreach ($products as $product) {
    echo '<div class="product">';
    echo '<h3>' . $product['name'] . '</h3>';
    echo '<p>Price: $' . $product['price'] . '</p>';
    echo '<a href="add_to_cart.php?id=' . $product['id'] . '">Add to Cart</a>';
    echo '</div>';
}
?>
</body>
</html>

