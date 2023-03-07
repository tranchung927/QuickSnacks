<div class="cart-container">
    <h3 class="txtBoldPrimary" style="font-size:32px;margin-bottom:32px">GIỎ HÀNG CỦA TÔI</h3>
    <?php if (empty($_SESSION['cart'])) { ?>
        <div class="d-flex flex-column justify-content-center align-items-center" style="min-height: 300px;margin: 0px auto;width: auto;max-width: 460px;">
            <span>Bạn chưa có sản phẩm nào trong giỏ hàng...</span>
        </div>

    <?php } else { ?>
        <div class="cart-content">
            <div class="cart-left-container">
                <?php for ($i = 0; $i < count($_SESSION['cart']); $i++) { ?>
                    <div class="box-shadow-primary cart-item-container d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <img src="<?php echo "public/images/products/" . $_SESSION['cart'][$i]['image'] ?>">
                            <div style="margin-left:16px;">
                                <h5 class="txtMediumPrimary"><?php echo $_SESSION['cart'][$i]['name'] ?></h5>
                                <a class="txtMediumPrimary" onclick="deleteCart(<?php echo $_SESSION['cart'][$i]['id'] ?>)" style="font-size:16px;">Xoá</a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center" style="gap:12px;margin-top:16px;">
                            <a onclick="cartDecrement(<?php echo $_SESSION['cart'][$i]['price'] ?>,<?php echo $i ?>)">
                                <i id='btnDecrement<?php echo $i ?>' class="fa-solid fa-circle-minus" style='<?php echo ($_SESSION['cart'][$i]['quantity'] <= 1) ? "font-size:36px;opacity:.2" : "font-size:36px;"; ?>'></i>
                            </a>
                            <span class="txtBoldPrimary" id='productQuantity<?php echo $i ?>'><?php echo $_SESSION['cart'][$i]['quantity'] ?></span>
                            <a onclick="cartIncrement(<?php echo $_SESSION['cart'][$i]['price'] ?>,<?php echo $i ?>)">
                                <i id='btnIncrement<?php echo $i ?>' class="fa-solid fa-circle-plus" style='<?php echo ($_SESSION['cart'][$i]['quantity'] >= 100) ? "font-size:36px;opacity:.2" : "font-size:36px;"; ?>'></i>
                            </a>
                            <span class="txtMediumPrimary" id='cartItemPrice<?php echo $i ?>'> <?php echo number_format($_SESSION['cart'][$i]['price'], 0, ',', '.') ?>₫</span>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="cart-right-container">
                <div class="cart-summary box-shadow-primary">
                    <?php
                    $totalAmount = array_reduce($_SESSION['cart'], function ($sum, $item) {
                        $sum += ($item['price'] * $item['quantity']);
                        return $sum;
                    }, 0);
                    ?>
                    <h4 class="txtMediumPrimary" style="font-size:24px;"><?php echo count($_SESSION['cart']) ?> MÓN</h4>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <h4 class="txtMediumPrimary" style="font-size:24px;">Địa chỉ nhận</h4>
                        <a class="txtMediumPrimary" onclick='editAddress()' data-bs-toggle='modal' data-bs-target='#applicationModal'>
                            <?php echo empty($address) ? "Add" : "Edit"; ?>
                        </a>
                    </div>
                    <?php if (isset($address)) { ?>
                        <?php echo $address["first_name"] . " " . $address["last_name"] . " | " . $address["phone"] ?><br>
                        <?php echo $address["address"] ?? "" ?><br>
                        <?php echo ($address["district"] ?? "") . ", " . ($address["city"] ?? "") ?>
                        </p>
                    <?php } ?>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <p class="txtPrimary" style="font-size:18px;">Tổng đơn hàng</p>
                        <p class="txtPrimary" style="font-size:18px;" id="cartSubtotal"> <?php echo number_format($totalAmount, 0, ',', '.') ?>₫</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="txtPrimary" style="font-size:18px;">Phí giao hàng</p>
                        <p class="txtPrimary" style="font-size:18px;" id="cartDeliveryCharge"><?php echo number_format($delivery_fee, 0, ',', '.') ?>₫</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h5 class="txtMediumPrimary">Tổng thanh toán</h5>
                        <h5 class="txtMediumPrimary" id="cartTotal"><?php echo number_format(($totalAmount + $delivery_fee), 0, ',', '.') ?>₫</h5>
                    </div>
                    <hr>
                    <button class="button-primary w-100 txtBoldPrimary" style="padding:16px 20px;color:white" id="btnCreateOrder">Xác nhận</button>
                </div>
            </div>
        </div>
    <?php } ?>
</div>