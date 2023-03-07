<footer id="footer" class="text-center text-lg-start">

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start pt-4">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto">
          <!-- Links -->
          <h6 class="footer-menu-title">Our Food</h6>
          <ul class="footer-menu">
            <li><a href="index.php?controller=product&action=category&id=-1" class="footer-menu-item">New Products</a></li>
            <?php
            require_once("vendor/Model.php");
            require_once("models/CategoryModel.php");
            $md = new CategoryModel;
            $data = $md->getAll();
            for ($i = 0; $i < count($data); $i++) {
            ?>
              <li><a href='index.php?controller=product&action=category&id=<?php echo $data[$i]["id"]?>' class="footer-menu-item"><?php echo $data[$i]['name'] ?></a></li>
            <?php } ?>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto">
          <!-- Links -->
          <h6 class="footer-menu-title">About QuickSnacks</h6>
          <ul class="footer-menu">
            <li><a href="#!" class="footer-menu-item">Promotion News</a></li>
            <li><a href="#!" class="footer-menu-item">QuickSnacks NEWS</a></li>
            <li><a href="#!" class="footer-menu-item">QuickSnacks Jobs </a></li>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto">
          <!-- Links -->
          <h6 class="footer-menu-title">Contact Us</h6>
          <ul class="footer-menu">
            <li><a href="#!" class="footer-menu-item"><i class="fas fa-home mr-3"></i> 285 Đội Cấn, Ba Đình, Hà Nội</a></li>
            <li><a href="#!" class="footer-menu-item"><i class="fas fa-envelope mr-3"></i> quicksnacks@gmail.com</a></li>
            <li><a href="#!" class="footer-menu-item"><i class="fas fa-phone mr-3"></i> + 01 234 567 88</a></li>
            <li><a href="#!" class="footer-menu-item"><i class="fas fa-print mr-3"></i> + 01 234 567 89</a></li>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto">
          <!-- Links -->
          <h6 class="footer-menu-title">Download App</h6>
          <p><a href="#!"><img class="mobile-app" src="public/images/logo_appstore.png" alt="appstore" /></a></p>
          <p><a href="#!"><img class="mobile-app" src="public/images/logo_playstore.png" alt="playstore" /></a></p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-5">
    <a id="copyright" href="index.php">Copyright © 2023 QuickSnacks Vietnam</a>
  </div>
  <!-- Copyright -->
</footer>