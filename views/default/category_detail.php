<?php include 'delivery_address_section.php'; ?>
</style>
<div class="cate">
    <div class="container-fluid">
      <div class="cate-header d-flex my-4 like">
          <h3 class="category-title">Món Mới<i class="fa-solid fa-chevron-right mx-2"></i></h3>
        <hr>
      </div>
    </div>
     <div class="container-fluid">
       <div class="row">
          <?php for($s=0;$s<count($products);$s++){?>
           <div class="cate-item col-sm-6 col-md-4 col-lg-3 col-xs-12 ">
               <div class="card ptoduct-cart">
                      <a class="nav-link" href="index.php?controller=category&action=product&id=<?php $products[$s]['id']?>" > <img src="<?php echo $products[$s]["image"]?>" class="card-img-top" alt=""></a>
                   <div class="card-body px-lg-4">
                       <div class="card-title d-flex justify-content-between ">
                           <div class="cart-title-text flex-column"> 
                               <h5 class="product_name"><?php echo $products[$s]["name"]?></h5>
                            <p class="product_view">1 banh trung</p>
                           </div>
                            <div class="cart-title-text"> 
                                <h5 class="product_name"><?php echo $products[$s]["price"]?></h5>
                           </div>
                       </div>
                        <?php if($isLogin){ ?>
                       <div class='btn_button d-flex justify-content-between my-3 pb-2'>
                                       <button type='button' class='btn  btn-outline-dark rounded-pill px-md-2 button-primary btn_feature' style='width:45%'><a class='nav-link text-decoration-none' href="index.php?controller=category&action=product&id=".<?php echo $products[$s]['id']?>>Tuỳ chỉnh</a></button> 
                                                     <button type='button' class='btn btn-danger rounded-pill px-md-2 button-primary btn_feature' style='width:45%'>Thêm</button>
                                   </div>
                       
                        <?php }else { ?>
                       <div class='d-flex justify-content-center bp-2'>
                                                   <button type='button' class='btn btn-danger rounded-pill px-4 mt-2 button my-4 button-primary'>
                                                        <a class='nav-link text-decoration-none btn_feature' href="index.php?controller=category&action=product&id=".<?php $products[$s]['id']?>>
                                                       Bắt đầu đặt hàng</a>
                                                       </button>       
                                               </div>
                                               <?php } ?>
                   </div>
               </div>
           </div>
           <?php }?>
       </div>
   </div>
    
     <div class="container-fluid load-content">
       <div class="row">
          <?php for($s=0;$s<count($products);$s++){?>
           <div class="cate-item col-sm-6 col-md-4 col-lg-3 col-xs-12 ">
               <div class="card ptoduct-cart">
                      <a class="nav-link" href="index.php?controller=category&action=product&id=<?php $products[$s]['id']?>" > <img src="<?php echo $products[$s]["image"]?>" class="card-img-top" alt=""></a>
                   <div class="card-body px-lg-4">
                       <div class="card-title d-flex justify-content-between ">
                           <div class="cart-title-text flex-column"> 
                            <h5><?php echo $products[$s]["name"]?></h5>
                            <p class="text-secondary">1 banh trung</p>
                           </div>
                            <div class="cart-title-text"> 
                                <h5><?php echo $products[$s]["price"]?></h5>
                           </div>
                       </div>
                        <?php if($isLogin){ ?>
                       <div class='btn_button d-flex justify-content-between my-3 pb-4'>
                                       <button type='button' class='btn  btn-outline-dark rounded-pill px-md-2 button-primary' style='width:45%'><a class='nav-link text-decoration-none' href="index.php?controller=category&action=product&id=".<?php echo $products[$s]['id']?>>Tuỳ chỉnh</a></button> 
                                                     <button type='button' class='btn btn-danger rounded-pill px-md-2 button-primary' style='width:45%'>Thêm</button>
                                   </div>
                       
                        <?php }else { ?>
                       <div class='d-flex justify-content-center bp-4'>
                                                   <button type='button' class='btn btn-danger rounded-pill px-4 mt-2 button my-4 button-primary'>
                                                        <a class='nav-link text-decoration-none' href="index.php?controller=category&action=product&id=".<?php $products[$s]['id']?>>
                                                       Bắt đầu đặt hàng</a>
                                                       </button>       
                                               </div>
                                               <?php } ?>
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
    var load = document.querySelector(".load");
load.addEventListener("click",function() {
    return document.querySelector(".load-content").style.display = 'flex';
});
</script>