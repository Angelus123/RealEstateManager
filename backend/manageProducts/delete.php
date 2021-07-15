<?php
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=ab_product_crud;','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$create_date = $_POST['create_date'] ?? null;
// echo '<pre>';
//     var_dump($_POST);
// echo '<pre>';
// echo 'izere';
echo $create_date;
if (!$create_date) {  
    exit;
}

$statement = $pdo->prepare('DELETE FROM products WHERE create_date = :create_date');
$statement->bindValue(':create_date', $create_date);
echo $create_date;
$statement->execute();