<!DOCTYPE html>
<html>

<head>
    <title>
        <?php if (isset($page) && is_string($page)) {
            echo $page;
        } else {
            echo 'Dummy Brand';
        } ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content=<?php if (isset($pageTag) && is_string($pageTag)) {
        echo $pageTag;
    } else {
        echo 'desired tag';
    } ?> />
    <meta name="description" content=<?php if (isset($pageDesc) && is_string($pageDesc)) {
        echo $pageDesc;
    } else {
        echo 'desired description';
    } ?> />
    <link rel="shortcut icon" href="media/favicon.png" />
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="css/aos.css" rel="stylesheet" type="text/css">
    <link href="css/fancybox.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Navbar Start -->
    <header >
        <nav class="header1 navbar navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand" href="#">LOGO HERE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav1_menu mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Entrepreneurial Services
                            </a>
                            <!-- <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul> -->
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Corporations
                            </a>
                            <!-- <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul> -->
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Mega Projects
                            </a>
                            <!-- <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul> -->
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="header2">
            <nav class="navbar navbar-expand-lg ">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav2_menu">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><img src="images/Layer6.png"
                                        alt="">Lorem ipsum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><img src="images/Layer7.png" alt="">Lorem ipsum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><img src="images/Layer9.png" alt="">Lorem ipsum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><img src="images/Layer10.png" alt="">Lorem ipsum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><img src="images/Layer12.png" alt="">Lorem ipsum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><img src="images/Layer13.png" alt="">Lorem ipsum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><img src="images/Layer21.png" alt="">Lorem ipsum</a>
                            </li>
                        </ul>
                        <form class="d-flex gap-2 nav2_form" role="search">
                            <button class="btn btn-theme" type="submit">Login / Profile</button>
                            <button class="btn btn-theme" type="submit">App Store</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>


    <!-- navbar end -->

    <script>

    </script>