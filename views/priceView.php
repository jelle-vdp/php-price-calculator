<div class="section">
    <p>If <?= ucwords(str_replace("_"," ", $_POST['customer'])); ?> wants to buy the <?= str_replace("_"," ", $_POST['product']); ?> the price is  <?php echo $discountedPrice?>. There's a discount being applied. The original price was €XXX.</p>
</div>