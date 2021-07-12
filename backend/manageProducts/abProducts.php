<?php 
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=ab_product_crud;','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$statement = $pdo->prepare('SELECT* FROM products ORDER BY create_date DESC');
$statement -> execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);
echo json_encode( $products)
?>