    <label class="label has-text-success-light" for="product">Choose a product:</label>
    <div class="select mb-4">
        <select name="product" id="product">
            <?php foreach ($newProducts->getAllProducts() as $product) { ?>
                <option value=<?= str_replace(" ","_",$product->getName()); ?>>
                    <?= ucfirst($product->getName()); ?>
                </option>
            <?php } ?>
        </select>
    </div>
    <button class="button is-block is-info" type="submit">Calculate the price</button>
</form>
