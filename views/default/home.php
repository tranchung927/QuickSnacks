 <?php include 'delivery_address_section.php'; ?>
<!--carousel -->
<?php?>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
     <div class="carousel-inner">
       <?php for($s=0;$s<count($banner);$s++) { ?>
           <div class="carousel-item active" data-bs-interval="10000">
               <img src="<?php echo $banner[$s]["image"] ?> " class="d-block w-100" alt="...">
           </div>
       <?php }?>  
     </div>
     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="visually-hidden">Next</span>
     </button>
   </div>

 <!-- category -->
      <div class="cate">
        <div class="container-fluid">
          <div class="cate-header d-flex my-4">
            <h3>Danh mục món ăn</h3>
            <hr>
          </div>
          <div class="container-fluid">
            <div class="row">
                <?php for($s=0;$s<count($categories);$s++){?>
                    <div class="cate-item col-sm-6 col-md-4 col-xs-12">
                  <div class="card">
                    <img src="<?php echo $categories[$s]["image"]?>" class="card-img-top" alt="">
                    <div class="card-body p-lg-4">
                         <a class="nav-link" href="#"><?php echo $categories[$s]["name"]?><i class="fa-solid fa-chevron-right mx-2"></i></a>

                    </div>
                  </div>
                </div>
                <?php }?>
            </div>
          </div>
        </div>
      </div> 

 <!-- gợi ý -->
 
 <div class="cate">
    <div class="container-fluid">
      <div class="cate-header d-flex my-4 like">
        <h3>Có thể bạn sẽ thích món này</h3>
        <hr>
      </div>
    </div>
    <div class="container-fluid">
        <div class="row">
           <?php for($s=0;$s<count($productsLike);$s++){?>
            <div class="cate-item col-sm-6 col-md-4 col-xs-12 ">
                <div class="card">
                    <img src="<?php echo $productsLike[$s]["image"]?>" class="card-img-top" alt="">
                    <div class="card-body p-lg-4">
                        <div class="card-title d-flex justify-content-between">
                            <h5><?php echo $productsLike[$s]["name"]?></h5>
                            <h5><?php echo $productsLike[$s]["price"]?></h5>
                        </div>
                        <div class="card-text my-2 mx-2"><?php echo $productsLike[$s]["name"]?></div>       
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-danger rounded-pill px-4">Bắt đầu đặt hàng</button>       
                        </div>
                                        
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>