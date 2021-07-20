<?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $error): ?>
            <div><?php echo $error ?></div>
  product      <?php endforeach; ?>
    </div>
<?php endif; ?>
<div class="form-container">
<form method="post" enctype="multipart/form-data">
    <?php if ($product['image']): ?>
        <img src="<?php echo $product['image'] ?>" class="product-img-view">
    <?php endif; ?>
    <div class="form-group">
        <label>Product Image</label><br>
        <input type="file" name="image">
    </div>
    <div class="form-group">
        <label>Product title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $title ?>">
    </div>
    <div class="form-group">
        <label>Product description</label>
        <textarea class="form-control" name="description"><?php echo $description ?></textarea>
    </div>

    <label>PRODUCT CATEGORY</label>
    
        <select class="form-select" aria-label="Default select example">
            <option selected>Select Category of product</option>
            <option value="1">Residantial</option>
            <option value="2">Commecial</option>
            <option value="3">Offices</option>
            <option value="3">Warehouse</option>
        </select> 
    <label>PRODUCT SUBCATEGORY</label>
    
    
        <select class="form-select" aria-label="Default select example">
            <option selected>Select size range of Product</option>
            <option value="1">20-40sqm</option>
            <option value="2">41-100sqm</option>
            <option value="3">101-500sqm</option>
        </select> 

        <select class="form-select" aria-label="Default select example">
            <option selected>Select price range of product</option>
            <option value="1">100$-300$</option>
            <option value="2">301$-500$</option>
            <option value="3">501$-800$</option>
            <option value="3">800$-10000$</option>
            <option value="3">10000$-10000$</option>
            <option value="3">800$-80000$</option>
            <option value="3">80000$- more</option>

        </select> 

        <select class="form-select" aria-label="Default select example">
            <option selected> Select location of product</option>
            <option value="1">Kimihurura</option>
            <option value="2">Nyamirambo</option>
            <option value="3">Remera</option>
            <option value="3">KACYIRU</option>
            <option value="3">Gikondo</option>  
        </select> 
    
       
    <div class="form-group">
        <label>Product price</label>
        <input type="number" step=".01" name="price" class="form-control" value="<?php echo $price ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>