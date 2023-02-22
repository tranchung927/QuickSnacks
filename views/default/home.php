<div>
    <?php include 'delivery_address_section.php'; ?>
    <?php echo "Số lượng sản phẩm: ".count($products); ?>
    <?php echo '<br>'; ?>
    <?php echo "Số lượng danh mục: ".count($categories); ?>
    <?php echo '<br>'; ?>
    <?php echo '<a href="index.php?controller=cities">Cities</a>'; ?>
    <?php echo '<br>'; ?>
    <?php for ($i=0; $i < count($products); $i++){ ?>
    <a href='index.php?controller=product&action=showProduct&id=<?php echo $products[$i]['id'] ?>'><?php echo $products[$i]['name'] ?></a>
    <br>
    <?php } ?>
    
    <i class="fa-solid fa-user"></i>
</div>