<div class="modal-header">
    <h5 class="modal-title product-detail-name" id="applicationModalLabel"><?php echo $pro['name'] ?></h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div>
                    <div class="product-detail-image">
                        <img src='<?php echo "public/images/products/" . $pro["image"]; ?>'>
                    </div>
                    <div style="margin-top:16px;">
                        <span class="txtBoldPrimary">Thành phần:</span>
                        <span class="txtPrimary"><?php echo $pro['element'] ?></span>
                    </div>
                    <div>
                        <span class="txtBoldPrimary">Lượng calo:</span>
                        <span class="txtPrimary"><?php echo $pro['calorie'] ?></span>
                    </div>
                    <div>
                        <span class="txtBoldPrimary">Mô tả:</span>
                        <span class="txtPrimary"><?php echo $pro['description'] ?></span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center" style="gap:12px;margin-top:16px;">
                        <a onclick="decrement(<?php echo $pro['price']?>)"><i id="btnDecrement" class="fa-solid fa-circle-minus disabled" style="font-size:36px;"></i></a>
                        <span class="txtBoldPrimary" id="productQuantity">1</span>
                        <a onclick="increment(<?php echo $pro['price']?>)"><i id="btnIncrement" class="fa-solid fa-circle-plus" style="font-size:36px;"></i></a>
                        <button id="btnAddToCartDetail" class='button-primary' style="padding:12px 32px;margin-left:8px;" onclick="addToCartDetail(<?php echo $pro['id']?>)">
                            Thêm vào giỏ (<?php echo number_format($pro['price'], 0, ',', '.') ?>₫)
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</div>