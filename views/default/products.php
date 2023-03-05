<div class="container-fluid" <?php if (isset($category) || isset($data["category"])) {
                                    echo 'style="padding-top:12px;"';
                                } ?>>
    <div class="product-all">
        <?php
        if (isset($category) || isset($data["category"])) {
            echo "<h3 class='category-title'><span>" . ($category["name"] ?: $data["category"]["name"]) . "</span></h3>";
        }
        ?>
        <div class="product-container">
            <?php for ($pIdx = 0; $pIdx < count($products ?: $data["products"]); $pIdx++) {
                require "views/default/product_item.php";
            } ?>
        </div>
    </div>
</div>