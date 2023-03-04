<nav class="navbar navbar-expand-lg bg-white fixed-top" id="header-navbar" style="height: 100px;">
    <div class="container-fluid bg-white">
        <a class="navbar-brand" href="index.php"><img src="public/images/ic_logo.svg" alt="Logo" style="height: 60px; width: auto;" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link-item nav-link-color-red" href="#">Thực đơn</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-item" href="#">Khuyến mãi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-item" href="#">Giới thiệu</a>
                </li>
            </ul>
            <div>

            </div>
            <a class="nav-link position-relative" href="#" style="margin-right: 16px;">
                <i class="fa-solid fa-cart-shopping navbar-right btn-lg"></i>
                <span class="position-absolute top-0 start-10 translate-middle badge rounded-pill bg-danger">
                <?php if (isset($_SESSION['cart'])) {
                        echo count($_SESSION['cart']);
                    } else echo "0"; ?>
                    <span class="visually-hidden">unread messages</span>
                </span>
            </a>
            <a class="nav-link" href="index.php?controller=home&action=signin"><i class="fa-solid fa-user navbar-right btn-lg"></i></a>
        </div>
    </div>
</nav>
<div id="header_separator"></div>