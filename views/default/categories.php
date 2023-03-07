<div style="padding-top:12px;padding-bottom:44px;">
    <?php for ($i = 0; $i < count($data); $i++) { ?>
        <div class="container-fluid">
            <div class="product-all">
                <?php $category_detail = "index.php?controller=product&action=category&id=" . $data[$i]['category']['id'];  ?>
                <a class='nav-link' href='<?php echo $category_detail; ?>'>
                    <h3 class='category-title'>
                        <span><?php echo $data[$i]['category']['name']; ?>
                            <i class='fa-solid fa-chevron-right mx-2'></i>
                        </span>
                    </h3>
                </a>
                <div class="product-container">
                    <?php for ($pIdx = 0; $pIdx < count($data[$i]["products"]); $pIdx++) {
                        $products = $data[$i]["products"];
                        require "views/default/product_item.php";
                    } ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>