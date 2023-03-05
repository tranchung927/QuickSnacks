<div class="container-fluid">
    <div class="row">
        <div class="myBucket ">
            <h4 class="category-title my-4 cate">GIỎ HÀNG CỦA TÔI</h4>
            <div class="d-lg-flex justify-content-between cate">
                <div class="col-lg-6 col-sm-12 col-md-10">
                    <?php for ($i = 0; $i < count($orders); $i++) { ?>
                        <div class="orderProduct  mb-4 rounded-4 p-4 flex-column flex-md-row">
                            <img src="<?php echo $orders[$i]['image'] ?>" class="card-img-top" style="width: 30%;">
                            <div class="orderDes mx-4 flex-grow-1">
                                <h5 class="product-name"><?php echo $orders[$i]['name'] ?></h5>
                                <a href="#" class="product-element text-decoration-none">View Details</a>
                                <div class="feature mt-3">
                                    <a href="#" class="text-dark me-2 btn_feature">Edit</a>
                                    <a href="#" class="text-dark btn_feature">Remove</a>
                                </div>
                            </div>
                            <div class="orderQuantity d-flex justify-content-around flex-grow-1">
                                <div class="quantity d-flex justify-content-center align-items-center my-4">
                                    <button class="border border-0 bg-body"><i class="fa-solid fa-circle-minus minus" onclick="min()"></i></button>
                                    <span class="mx-4 btn_feature" id="quantity">1</span>
                                    <button class="border border-0 bg-body"><i class="fa-solid fa-circle-plus plus" onclick="max()"></i></button>
                                    <span class="mx-4 btn_feature"><?php echo $orders[$i]['price'] ?></span>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!--món gợi ý    -->
                    <div class="rounded-4 bg-dark p-4">
                        <h4 class="category-title mb-4 text-white">Sẽ Ngon Hơn Khi Thưởng Thức Cùng</h4>
                        <div class="orderProduct flex-column flex-md-row">
                            <?php for ($i = 0; $i < count($products); $i++) { ?>
                                <div class="product_suggest col-md-3 col-sm-12 mb-2 mb-md-0 mx-2">
                                    <img src="<?php echo $products[$i]['image'] ?>" class="card-img-top rounded-2 img_product_suggest">
                                    <div class="product_suggest_info">
                                        <h5 class="product-name"><?php echo $products[$i]['name'] ?></h5>
                                        <p class="product-name"><?php echo $products[$i]['price'] ?></p>
                                    </div>
                                    <button class="border border-0 product_suggest_btn">
                                        <i class="fa-solid fa-circle-plus plus"></i></button>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-sm-10 col-lg-4">
                    <div class="box_receipt rounded-4 my-4">
                        <h4 class="category-title">1 Món</h4>
                        <hr>
                        <div class="box_receipt_info">
                            <div class="d-flex justify-content-between">
                                <p class="btn_feature">Tổng đơn hàng</p>
                                <p class="btn_feature">63000đ</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="btn_feature">Phí giao hàng</p>
                                <p class="btn_feature">10000đ</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h5 class="product-name">Tổng thanh toán<h5>
                                        <h5 class="product-name">73000đ</h5>
                            </div>
                            <button type='button' class='btn btn-danger rounded-pill button-primary w-100 align-items-center d-flex justify-content-between py-2'>
                                <p class="m-0 ms-2 btn_feature">Thanh toán
                                <p>
                                <p class="m-0 ms-2 btn_feature">73000d</p>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var i = 1;

    function min() {
        if (i > 1) {
            i--;
            document.getElementById("quantity").innerHTML = i;
        }
    }

    function max() {
        if (i <= 99) {
            i++;
            document.getElementById("quantity").innerHTML = i;
        }
    }
</script>