<div class="product-item box-shadow-primary" onclick="productDetail('<?php echo $products[$pIdx]['id'] ?>')">
    <a data-masp='<?php echo $products[$pIdx]['id'] ?>' data-bs-toggle='modal' data-bs-target='#applicationModal' class="productItem" style="text-decoration: none;">
        <div style="text-align: center;" class='product-img'>
            <img src='<?php echo "public/images/products/" . $products[$pIdx]["image"]; ?>'>
        </div>
        <div class="d-flex flex-column p-3" style="margin-bottom:76px;">
            <div class="d-flex gap-2 justify-content-between">
                <h5 class="product-name"><?php echo $products[$pIdx]["name"]; ?></h5>
                <h5 class="product-name"><?php echo number_format($products[$pIdx]["price"], 0, ',', '.') ?>₫</h5>
            </div>
            <h6 class="product-element"><?php echo $products[$pIdx]["element"]; ?></h6>
        </div>
    </a>
    <div class="product-action-container">
        <?php if (isset($_SESSION['user'])) { ?>
            <div class='d-flex gap-1 justify-content-between'>
                <a class='a-primary product-action' href="">
                    <button class='button-border product-action'>Customise</button>
                </a>
                <button class='button-primary product-action btnAddToCart' data-masp='<?php echo $products[$pIdx]["id"] . ",1" ?>'>Add</button>
            </div>
        <?php } else { ?>
            <button class='button-primary product-action btnAddToCart' data-masp='<?php echo $products[$pIdx]["id"] . ",1" ?>'>Add</button>
        <?php } ?>
    </div>
</div>