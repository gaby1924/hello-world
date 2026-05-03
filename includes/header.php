<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="/shopping_cart/assets/css/style.css">
</head>
<body>

<header>
    <h2>My Shopping Cart</h2>
    <nav>
        <a href="index.php?page=home">Home</a> |
        <a href="index.php?page=catalog">Catalog</a> |
        <a href="index.php?page=cart">Cart</a> |
        <a href="index.php?page=checkout">Checkout</a>
</nav>
    <hr>
</header>
