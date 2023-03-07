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
                        <span class="txtBoldPrimary">Constituents:</span>
                        <span class="txtPrimary"><?php echo $pro['element'] ?></span>
                    </div>
                    <div>
                        <span class="txtBoldPrimary">Calories:</span>
                        <span class="txtPrimary"><?php echo $pro['calorie'] ?></span>
                    </div>
                    <?php if (isset($pro['estimate_time']) && $pro['estimate_time'] > 0) { ?>
                        <div>
                            <span class="txtBoldPrimary">Estimated time:</span>
                            <span class="txtPrimary"><?php echo $pro['estimate_time'] ?> minute</span>
                        </div>
                    <?php } ?>
                    <div>
                        <span class="txtBoldPrimary">Desc:</span>
                        <span class="txtPrimary"><?php echo $pro['description'] ?></span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center" style="gap:12px;margin-top:16px;">
                        <a onclick="itemDecrement(<?php echo $pro['price'] ?>)"><i id="btnDecrement" class="fa-solid fa-circle-minus disabled" style="font-size:36px;"></i></a>
                        <span class="txtBoldPrimary" id="productQuantity">1</span>
                        <a onclick="itemIncrement(<?php echo $pro['price'] ?>)"><i id="btnIncrement" class="fa-solid fa-circle-plus" style="font-size:36px;"></i></a>
                        <button id="btnAddToCartDetail" class='button-primary' style="padding:12px 32px;margin-left:8px;" onclick="addToCartDetail(<?php echo $pro['id'] ?>)">
                            Add to Bucket (<?php echo number_format($pro['price'], 0, ',', '.') ?>₫)
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal-footer">
    <button type="button" class="button-border" data-bs-dismiss="modal" style="padding:12px 32px;">Close</button>
</div>