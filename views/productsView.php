<?php
    require "models/ProductsModel.php";
    $newProducts = new Products();  
?>  

    <label class="label" for="product">Choose a product:</label>
    <div class="select mb-4">
        <select class=" name="product" id="product">
            <?php foreach ($newProducts->getAllProducts() as $product) { ?>
                <option value=<?= str_replace(" ","_",$product->getName()); ?>>
                    <?= ucfirst($product->getName()); ?>
                </option>
            <?php } ?>
        </select>
    </div>
    <button class="button is-block is-info" type="submit">Submit</button>
</form>
