<?php
session_start();
?>
<?php include 'delivery_address_section.php'; ?>

<!--carousel -->
<div id="carouselBanners" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" id="headerSlide">
        <?php for ($i = 0; $i < count($banners); $i++) { ?>
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="<?php echo $banners[$i]["image"] ?> " alt="..." style="width:100%;object-fit:cover">
            </div>
        <?php } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanners" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselBanners" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- category -->
<div class="cate">
    <div class="container-fluid">
        <div class="cate-header d-flex my-4">
            <h3 class="category-title">Danh mục món ăn</h3>
            <hr>
        </div>
        <div class="container-fluid">
            <div class="row">
                <?php for ($i = 0; $i < count($categories); $i++) { ?>
                    <div class="cate-item col-sm-6 col-md-4 col-lg-3 col-xs-12">
                        <div class="card">
                            <a href="index.php?controller=category&action=category_detail&id=<?php echo $categories[$i]['id'] ?>"><img src="<?php echo $categories[$i]["image"] ?>" class="card-img-top" alt=""></a>
                            <div class="card-body p-lg-2">
                                <a class="nav-link" href="index.php?controller=category&action=category_detail&id=<?php echo $categories[$i]['id'] ?>">
                                    <h5 class="product-name m-0"><?php echo $categories[$i]["name"] ?><i class="fa-solid fa-chevron-right mx-2"></i></h5>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="cate">
    <div class="container-fluid">
        <div class="cate-header d-flex my-4 like">
            <h3 class="category-title">Có thể bạn sẽ thích món này</h3>
            <hr>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <?php for ($i = 0; $i < count($products); $i++) { ?>
                <div class="cate-item col-sm-6 col-md-4 col-lg-3 col-xs-12 ">
                    <div class="card ptoduct-cart">
                        <a class="nav-link" href="index.php?controller=category&action=product&id=<?php $products[$i]['id'] ?>"> <img src="<?php echo $products[$i]["image"] ?>" class="card-img-top" alt=""></a>
                        <div class="card-body px-lg-4">
                            <div class="card-title d-flex justify-content-between ">
                                <div class="cart-title-text flex-column">
                                    <h5 class="product-name"><?php echo $products[$i]["name"] ?></h5>
                                    <p class="product-element"><?php echo $products[$i]["element"] ?></p>
                                </div>
                                <div class="cart-title-text">
                                    <h5 class="product-name"><?php echo $products[$i]["price"] ?></h5>
                                </div>
                            </div>
                            <?php if ($isLogin) { ?>
                                <div class='btn_button d-flex justify-content-between my-3 pb-2'>
                                    <button type='button' class='btn  btn-outline-dark rounded-pill px-md-2 button-primary btn_feature' style='width:45%'><a class='nav-link text-decoration-none' href="index.php?controller=category&action=product&id=" .<?php echo $products[$s]['id'] ?>>Tuỳ chỉnh</a></button>
                                    <button type='button' class='btn btn-danger rounded-pill px-md-2 button-primary btn_feature' style='width:45%'>Thêm</button>
                                </div>
                            <?php } else { ?>
                                <div class='d-flex justify-content-center bp-2'>
                                    <button type='button' class='btn btn-danger rounded-pill px-4 mt-2 button my-4 button-primary'>
                                        <a class='nav-link text-decoration-none btn_feature' href="">Bắt đầu đặt hàng</a>
                                    </button>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>