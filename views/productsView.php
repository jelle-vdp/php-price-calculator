<?php

    require "models/ProductsModel.php";

    $newProducts = new Products();
    
?>


<?php foreach ($newProducts->getAllProducts() as $product) { ?>
    <input type="checkbox" id="<?= $product['name'];?>" name="<?= $product['name'];?>" value=<?= $product['name']; ?>>
    <label for="<?= $product['name'];?>"><?= $product['name'];?></label>
<?php } ?>
