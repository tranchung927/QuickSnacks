<div class="container-fluid" style="padding-top:12px;">
    <div class="product-all">
        <h3 class='category-title'><span><?php echo $category["name"] ?? "" ?></span></h3>
        <div class="product-container" id="category-content">
            <?php for ($pIdx = 0; $pIdx < count($products ?? array()); $pIdx++) {
                require "views/default/product_item.php";
            } ?>
        </div>
    </div>
</div>
<div class="container-fluid text-center" style="padding-bottom:32px;">
    <div class="row">
        <div class="col-sm-12">
            <span id="pageTemp" style="visibility: hidden;">1</span>
            <button id="loadmoreBtn" onclick="loadmore()" class="button-primary" style="height:56px;width:200px">Load More</button>
        </div>
    </div>
</div>