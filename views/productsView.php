<?php

    require "models/ProductsModel.php";

    $newProducts = new Products();
    
?>


<label for="product">Choose a product:</label>
<select name="product" id="product">
    <?php foreach ($newProducts->getAllProducts() as $product) { ?>
        <option value=<?= $product['name']; ?>>
            <?= $product['name']; ?>
        </option>
    <?php } ?>
  </select>
