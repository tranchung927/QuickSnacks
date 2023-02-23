
<div class="cate">
     <?php for($i=0;$i<count($cateTitle);$i++){?>
    <div class="container-fluid">
      <div class="cate-header d-flex my-4 like">
        <h3><?php echo $cateTitle[$i]['name']?><i class="fa-solid fa-chevron-right mx-2"></i></h3>
        <hr>
      </div>
    </div>
    <div class="container-fluid">
        <div class="row">
           <?php for($s=0;$s<count($products);$s++){?>
            <div class="cate-item col-sm-6 col-md-4 col-xs-12 ">
                <div class="card">
                    <img src="<?php echo $products[$s]["image"]?>" class="card-img-top" alt="">
                    <div class="card-body p-lg-4">
                        <div class="card-title d-flex justify-content-between">
                            <h5><?php echo $products[$s]["name"]?></h5>
                            <h5><?php echo $products[$s]["price"]?></h5>
                        </div>
                        <div class="card-text my-2 mx-2"><?php echo $products[$s]["name"]?></div>       
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-danger rounded-pill px-4">Bắt đầu đặt hàng</button>       
                        </div>                 
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
     <?php } ?>
</div>