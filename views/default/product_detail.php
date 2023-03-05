<div class="product cate d-md-flex text-center justify-content-md-around">
    <?php for($i=0;$i<count($products);$i++) { ?>
    <img src="./public/images/MON MOI 1.png" class="">
    <div class="product_content d-flex flex-column my-4">
        <h3 class=" text-md-center product-name"><?php echo $products[$i]['name'] ?></h3>
        <p class="text-md-center product-element">1 bánh trứng</p>
        <div class="quantity d-flex justify-content-center align-items-center my-4">
            <button class="border border-0 bg-body"><i class="fa-solid fa-circle-minus minus" onclick="min()"></i></button>
            <span class="mx-4 btn_feature" id="quantity">1</span>
            <button class="border border-0 bg-body"><i class="fa-solid fa-circle-plus plus" onclick="max()"></i></button>
            <!--login logout-->
            <?php if ($isLogin) { ?>
                <div class='btn_button d-flex justify-content-between mx-4 pb-2'>
                    <button type='button' class='btn btn-danger rounded-pill px-4 button-primary'>
                        <a class='nav-link text-decoration-none' href="index.php?controller=category&action=product&id=".<?php $products[$s]['id'] ?>>
                            Them</a>
                    </button>       

                </div>
            <?php } else { ?>
                <div class='d-flex justify-content-center mx-4 pb-2'>
                    <button type='button' class='btn btn-danger rounded-pill px-4 button-primary'>
                        <a class='nav-link text-decoration-none' href="index.php?controller=category&action=product&id=".<?php $products[$s]['id'] ?>>
                            Them</a>
                    </button>            
                </div>
            <?php } ?>
        </div>
       <?php } ?>
    </div>
</div>
<script>
var i =1;
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