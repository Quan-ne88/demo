<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thương mại điện tử</title>
    <base href="http://localhost/assignment_PHP_4/">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- start #header -->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale font-size-12 text-black-50 m-0">Chào mừng bạn đến với website của chúng tôi</p>
            <div class="font-rale font-size-14">
                <a href="<?php echo $url = empty(setNameForUser()) ? "?mod=users&act=login" : "?mod=users&act=accounts" ?>" class="px-3 border-right border-left text-dark">
                    <?php echo $name = empty(setNameForUser()) ? "Đăng nhập" : "Xin chào bạn " . setNameForUser() ?>
                </a>
            </div>
        </div>

        <!-- Primary Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg" style="padding: 0 140px;">
            <a class="navbar-brand" href="?">
                <img src="admin/assets/img/logo1.jpg" alt="" style="width: 80px;" >
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item active">
                        <a class="nav-link" href="?">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?mod=products&act=main">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?mod=pages&act=detail&id=1">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?mod=pages&act=detail&id=2">Liên hệ</a>
                    </li>
                </ul>
                <form action="#" class="font-size-14 font-rale">
                    <a href="?mod=cart&act=main" class="py-2 rounded-pill color-primary-bg">
                        <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                        <span class="px-3 py-2 rounded-pill text-dark bg-light">
                            <?php
                            echo $totalOrders = empty($_SESSION['cart']['info']['num_order']) ? '0' : $_SESSION['cart']['info']['num_order'];
                            ?>
                        </span>
                    </a>
                </form>
            </div>
        </nav>
        <!-- !Primary Navigation -->

    </header>

    <!-- !start #header -->