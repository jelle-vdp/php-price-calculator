<div class="section">
    <p>If <?= ucwords(str_replace("_"," ", $_POST['customer'])); ?> wants to buy the <?= str_replace("_"," ", $_POST['product']); ?> the price is €XXX. There's a discount being applied. The original price was €<?= $allProducts->getSpecificPrice(str_replace("_"," ", $_POST['product'])) / 100; ?>.</p>
</div>