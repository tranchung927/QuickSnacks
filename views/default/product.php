<?php
session_start();
?>
<?php include 'delivery_address_section.php'; ?>

  <div class="product cate d-md-flex text-center justify-content-md-around">
      <img src="./public/images/MON MOI 1.png" class="productr_img">
        <div class="product_content d-flex flex-column my-4">
            <h3 class=" text-md-center">1 Bánh Trứng</h3>
            <p class="text-md-center text-secondary">1 bánh trứng</p>
            <div class="quantity d-flex justify-content-center align-items-center my-4">
                <button class="border border-0 bg-body"><i class="fa-solid fa-circle-minus minus" onclick="min()"></i></button>
                <span class="mx-4" id="quantity">1</span>
                <button class="border border-0 bg-body"><i class="fa-solid fa-circle-plus plus" onclick="max()"></i></button>
                <!--login logout-->
       

                       <?php 
                            if(isset($_SESSION['login']['username'])){
                                 echo  "<div class='d-flex justify-content-center pb-2 mx-4'>
                                                   <button type='button' class='btn btn-danger rounded-pill px-4 mt-2 button' style='width:120px'><a class='nav-link text-decoration-none' href='index.php?controller=category&action=product&id=<?php echo $products[$s]['id'] ?>Them</a></button>       
                                               </div>";
                            }
                        ?>
            </div>
        </div>
    </div>
 
   
 
<script>
      var i = 1;
    function min() { 
       if(i>1) {
           i--;
            document.getElementById("quantity").innerHTML = i;
       }
    }
    function max() {
        if(i<=99){
             i++;
            document.getElementById("quantity").innerHTML = i;
        } 
    }
</script>