<div class="container-fluid" id="category-content">
    <?php
    require 'views/default/products.php';
    ?>
</div>
<div class="container-fluid text-center" style="padding-bottom:32px;">
    <div class="row">
        <div class="col-sm-12">
            <button id="loadmoreBtn" onclick="loadmore(<?php echo $page?>)" class="button-primary" style="height:56px;width:200px">Tải thêm</button>
        </div>
    </div>
</div>