
<?php include 'delivery_address_section.php'; ?>

<div class="cate">
    <?php for ($i = 0; $i < count($categories); $i++) { ?>
        <div class="container-fluid">
            <div class="cate-header d-flex my-4 like">
                <h3 class="category-title"><?php echo $categories[$i]['name'] ?><i class="fa-solid fa-chevron-right mx-2"></i></h3>
                <hr>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <?php for ($s = 0; $s < count($products); $s++) { ?>
                    <div class="cate-item col-sm-6 col-md-4 col-lg-3 col-xs-12 ">
                        <div class="card ptoduct-cart">
                            <a class="nav-link" href="index.php?controller=category&action=product&id=<?php $products[$s]['id'] ?>" > <img src="<?php echo $products[$s]["image"] ?>" class="card-img-top" alt=""></a>
                            <div class="card-body px-lg-4">
                                <div class="card-title d-flex justify-content-between ">
                                    <div class="cart-title-text flex-column"> 
                                        <h5 class="product-name"><?php echo $products[$s]["name"] ?></h5>
                                        <p class="product-element">1 banh trung</p>
                                    </div>
                                    <div class="cart-title-text"> 
                                        <h5 class="product-name"><?php echo $products[$s]["price"] ?></h5>
                                    </div>
                                </div>
                                <?php if ($isLogin) { ?>
                                    <div class='btn_button d-flex justify-content-between my-3 pb-2'>
                                        <button type='button' class='btn  btn-outline-dark rounded-pill px-md-2 button-primary' style='width:45%'><a class='nav-link text-decoration-none' href="index.php?controller=category&action=product&id=".<?php echo $products[$s]['id'] ?>>Tuỳ chỉnh</a></button> 
                                        <button type='button' class='btn btn-danger rounded-pill px-md-2 button-primary' style='width:45%'>Thêm</button>
                                    </div>

                                <?php } else { ?>
                                    <div class='d-flex justify-content-center bp-2'>
                                        <button type='button' class='btn btn-danger rounded-pill px-4 mt-2 button my-4 button-primary'>
                                            <a class='nav-link text-decoration-none' href="index.php?controller=category&action=product&id=".<?php $products[$s]['id'] ?>>
                                                Bắt đầu đặt hàng</a>
                                        </button>       
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</div>

<?php 
