<?php
$sizes = ['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL', 'XXXXL'];
$availableSizes = array_filter($sizes, function() { return rand(0, 1); });
?>
<?php if (!empty($availableSizes)) { ?>
<div class="ProductCard-variants">
    <span class="ProductCard-variantLabel">Zvolte velikost:</span>
    <div class="ProductCard-variantList">
        <?php foreach ($availableSizes as $size) { ?>
            <a href="#size-<?= $size ?>" class="ProductCard-variantItem"><?= $size ?></a>
        <?php } ?>
    </div>
</div>
<?php } ?>
