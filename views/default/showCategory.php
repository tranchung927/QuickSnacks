<?php include 'delivery_address_section.php'; ?>
<style>
    .load-content {
    display: none;
}
</style>
<div class="cate" style="margin: 0 100px;">
    <div class="container-fluid">
      <div class="cate-header d-flex my-4 like">
        <h3>mon moi<i class="fa-solid fa-chevron-right mx-2"></i></h3>
        <hr>
      </div>
    </div>
    <div class="container-fluid">
        <div class="row">
           <?php for($s=0;$s<count($products);$s++){?>
            <div class="cate-item col-sm-6 col-md-3 col-xs-12 ">
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
     <div class="container-fluid load-content">
        <div class="row">
           <?php for($s=0;$s<count($products);$s++){?>
            <div class="cate-item col-sm-6 col-md-3 col-xs-12 ">
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
    <div class="btn d-flex justify-content-center ">
        <button type="button" class="btn btn-danger rounded-pill px-4 text-center load">Tải thêm</button>
    </div>
    
</div>
<script>
    var load = document.queryselector('.load');
    load.addEventListener("click",function() {
    return document.querySelector(".load-content").style.display = 'flex';
});
</script>
<?php 
