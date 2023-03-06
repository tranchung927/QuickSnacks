<div class="cart-container">
    <h3>GIỎ HÀNG CỦA TÔI</h3>
    <div class="cart-content">
        <div class="cart-left-container">
            <?php for ($i = 0; $i < count($_SESSION['cart']); $i++) { ?>
                <div class="box-shadow-primary cart-item-container d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="<?php echo "public/images/products/" . $_SESSION['cart'][$i]['image'] ?>">
                        <div style="margin-left:16px;">
                            <h5><?php echo $_SESSION['cart'][$i]['name'] ?></h5>
                            <a href="">Xoá</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center" style="gap:12px;margin-top:16px;">
                        <a onclick="decrement(<?php echo $pro['price']?>)"><i id="btnDecrement" class="fa-solid fa-circle-minus disabled" style="font-size:36px;"></i></a>
                        <span class="txtBoldPrimary" id="productQuantity">1</span>
                        <a onclick="increment(<?php echo $pro['price']?>)"><i id="btnIncrement" class="fa-solid fa-circle-plus" style="font-size:36px;"></i></a>
                        <span>63.000đ</span>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="cart-right-container">
            <div class="cart-summary box-shadow-primary">
                <h4><?php echo count($_SESSION['cart']) ?> Món</h4>
                <hr>
                <div class="d-flex justify-content-between">
                    <p>Tổng đơn hàng</p>
                    <p>63.000đ</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Phí giao hàng</p>
                    <p>10.000đ</p>
                </div>
                <div class="d-flex justify-content-between">
                    <h5>Tổng thanh toán</h5>
                    <h5>73.000đ</h5>
                </div>
            </div>
        </div>
    </div>
</div>