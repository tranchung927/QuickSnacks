<nav class="navbar navbar-expand-lg bg-white fixed-top" id="header-navbar" style="height: 100px;">
    <div class="container-fluid bg-white">
        <a class="navbar-brand" href="index.php"><img src="public/images/ic_logo.svg" alt="Logo" style="height: 60px; width: auto;" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link-item nav-link-color-red" href="index.php?controller=product&action=categories">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-item" href="#">Promotion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-item" href="#">About</a>
                </li>
            </ul>
            <div>

            </div>
            <a class="nav-link position-relative" href="index.php?controller=order&action=cart" style="margin-right:24px;">
                <i class="fa-solid fa-cart-shopping navbar-right btn-lg"></i>
                <span id="cart_count" class="position-absolute top-0 start-10 translate-middle badge rounded-pill bg-danger">
                    <?php if (isset($_SESSION['cart'])) {
                        $total = array_reduce($_SESSION['cart'], function ($sum, $item) {
                            $sum += $item['quantity'];
                            return $sum;
                        }, 0);
                        echo $total;
                    } else echo "0"; ?>
                    <span class="visually-hidden">unread messages</span>
                </span>
            </a>
            <a class="nav-link" href='<?php if (empty($_SESSION["user"])) {
                                            echo "index.php?controller=index&action=signin";
                                        } else {
                                            echo "index.php?controller=user";
                                        } ?>'>
                <i class="fa-solid fa-user navbar-right btn-lg" style="margin:16px 0px;"></i>
            </a>
        </div>
    </div>
</nav>
<div id="header_separator"></div>