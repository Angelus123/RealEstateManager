<?php

require_once "functions.php";

$ProductId= $_POST['id'] ?? null;
if (!$ProductId) {
    exit;
}

$pdo=new PDO('mysql:host=localhost;port=3306;dbname=ab_product_crud;','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->prepare('SELECT * FROM products WHERE ProductId = :ProductId');
$statement->bindValue(':ProductId', $ProductId);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);
echo json_encode( $product);



// $title = $product['title'];
// $description = $product['description'];
// $price = $product['price'];

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//     $title = $_POST['title'];
//     $description = $_POST['description'];
//     $price = $_POST['price'];

//     $image = $_FILES['image'] ?? null;
//     $imagePath = '';

//     if (!is_dir('images')) {
//         mkdir('images');
//     }

//     if ($image) {
//         if ($product['image']) {
//             unlink($product['image']);
//         }
//         $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
//         mkdir(dirname($imagePath));
//         move_uploaded_file($image['tmp_name'], $imagePath);
//     }

//     if (!$title) {
//         $errors[] = 'Product title is required';
//     }

//     if (!$price) {
//         $errors[] = 'Product price is required';
//     }

//     if (empty($errors)) {
//         $statement = $pdo->prepare("UPDATE products SET title = :title, 
//                                         image = :image, 
//                                         description = :description, 
//                                         price = :price WHERE id = :id");
//         $statement->bindValue(':title', $title);
//         $statement->bindValue(':image', $imagePath);
//         $statement->bindValue(':description', $description);
//         $statement->bindValue(':price', $price);
//         $statement->bindValue(':id', $id);

//         $statement->execute();
      
//     }

// }

?>
