<?php

require_once "../../functions.php";
$pdo = require_once '../../database.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location: index.php');
    exit;
}

$statement = $pdo->prepare('SELECT * FROM unews WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();
$unew = $statement->fetch(PDO::FETCH_ASSOC);


$title = $unew['title'];
$description = $unew['description'];
$price = $unew['price'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require_once '../../validate_unew.php';

    if (empty($errors)) {
        $statement = $pdo->prepare("UPDATE unews SET title = :title, 
                                        image = :image, 
                                        description = :description, 
                                        price = :price WHERE id = :id");
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':id', $id);

        $statement->execute();
        header('Location: index.php');
    }

}

?>
<?php require_once '../../views/partials/header.php'; ?>
<p>
    <a href="index.php" class="btn btn-secondary">Back to unews</a>
</p>
<h1>Update unew: <b><?php echo $unew['title'] ?></b></h1>


<?php require_once '../../views/unews/form.php' ?>

</body>
</html>