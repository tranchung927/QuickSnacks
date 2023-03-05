<!--carousel -->
<div id="carouselBanners" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" id="headerSlide">
        <?php for ($i = 0; $i < count($banners); $i++) { ?>
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="<?php echo $banners[$i]["image"] ?> " alt="..." class="d-block" style="width:100%;object-fit:cover;object-position:center;">
            </div>
        <?php } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanners" data-bs-slide="prev">
        <div style="position:absolute;top:calc(50% - 28px);left:0;background-color:red;padding:1.0714285714rem;border-radius:4px 0 0 4px;transform:rotate(180deg)">
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselBanners" data-bs-slide="next">
        <div style="position:absolute;top:calc(50% - 28px);right:0;background-color:red;padding:1.0714285714rem;border-radius:4px 0 0 4px;">
            <i class="fa-solid fa-chevron-right"></i>
        </div>
    </button>
</div>

<!-- category -->
<div class="container-fluid">
    <div class="product-all">
        <h3 class="category-title"><span>Danh mục món ăn</span></h3>
        <div class="product-container">
            <?php for ($i = 0; $i < count($categories); $i++) { ?>
                <?php $category_detail = "index.php?controller=product&action=category&id=" . $categories[$i]['id']; ?>
                <div class="product-item box-shadow-primary">
                    <a class="nav-link" href='<?php echo $category_detail; ?>'>
                        <div style="text-align: center;" class='product-img'>
                            <img src='<?php echo "public/images/categories/" . $categories[$i]["image"]; ?>'>
                        </div>
                        <div class="d-flex" style="padding:12px;">
                            <a class="nav-link" href='<?php echo $category_detail; ?>'>
                                <h5 class="product-name m-0"><?php echo $categories[$i]["name"]; ?>
                                    <i class="fa-solid fa-chevron-right mx-2"></i>
                                </h5>
                            </a>
                        </div>
                </div>
            <?php } ?>
        </div>

    </div>
</div>

<?php
require 'views/default/products.php';
?>