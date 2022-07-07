<?php

    require "models/ProductsModel.php";

    $newProducts = new Products();
    
?>

<form method="POST">
<label for="products">Choose a product:</label>
  <select name="product" id="product">
        <?php foreach ($newProducts->getAllProducts() as $product) { ?>
            <input type="checkbox" value=<?= $product['name']; ?>>
                <?= $product['name']; ?>
        </input>
        <?php } ?>
  </select>
  <button type="submit">Submit</button>
</form>