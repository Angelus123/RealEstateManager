<?php

require_once "../../functions.php";
$pdo = require_once '../../database.php';

$keyword = $_GET['search'] ?? null;

if ($keyword) {
    $statement = $pdo->prepare('SELECT * FROM products WHERE title like :keyword ORDER BY create_date DESC');
    $statement->bindValue(":keyword", "%$keyword%");
} else {
    $statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
}
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);


?>

<?php require"config.php" ?>
<?php require_once '../../views/partials/header.php'; ?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
        <ul class="navbar-nav">
        <li class="nav-item"><a href="http://localhost/api"><img src ="../../../Asset/img/logo1.png" alt ="logo" width="200px" height="50px"/></a></li>
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/api/#/home"><?php echo $lang['home'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/api/#/about"><?php echo $lang['about'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/api/#/contact"><?php echo $lang['contact'] ?></a>
            </li>
            <li class="nav-link" >  
            <div id="google_translate_element"></div> 
   
    </li>
        </ul>
    </nav>

  
<script type="text/javascript"> 
function googleTranslateElementInit() { 
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element'); 
} 
</script> 
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 

    <form action="" method="get" style="width:70%; margin:40px auto 20px auto">
        <div class="input-group mb-3">
        <input type="text" name="search" class="form-control" placeholder="Search" value="<?php echo $keyword ?>">
        <div class="input-group-append">
            <button class="btn"style="background-color:#c5c5c570;" type="submit">Search</button>
        </div>
        </div>
    </form>

<table class="table"  style=" box-shadow:10px 10px 10px 10px gray;width:80%; background-color:#c5c5c570;  margin:40px auto 20px auto">
    <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Create Date</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $i => $product) { ?>
        <tr>
            <th scope="row"><?php echo $i + 1 ?></th>
            <td>
                <?php if ($product['image']): ?>
                    
                    <img src="../../product_crud/products/public/<?php echo $product['image'] ?>" alt="<?php echo $product['title'] ?>" class="product-img">
                <?php endif; ?>
               
            </td>
            <td><?php echo $product['title'] ?></td>
            <td><?php echo $product['price'] ?></td>
            <td><?php echo $product['create_date'] ?></td>
            <td>
                <a href="localhost/api/" class="btn btn-sm btn-outline-primary"><?php echo $lang['readMore'] ?></a>
                
            </td>
        </tr>
    <?php } ?>
    </tbody>


    
</table>


<div class="footer"> 


    <div style="text-align:center color:white"><a href="search.php?lang=en"><?php echo $lang['lang_en'] ?></a>
        | <a href="search.php?lang=fr"><?php echo $lang['lang_fr'] ?></a>
        
        | <a href="search.php?lang=kiny"><?php echo $lang['lang_kiny'] ?></a>
    </div></div>