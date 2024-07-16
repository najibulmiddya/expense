<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title><?= $title ?></title>

    <!-- Fontfaces CSS-->

    <link href="<?= base_url('assets/css/font-face.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/font-awesome-4.7/css/font-awesome.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/font-awesome-5/css/fontawesome-all.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/mdi-font/css/material-design-iconic-font.min.css') ?>" rel="stylesheet" media="all">


    <!-- Bootstrap CSS-->
    <link href="<?= base_url('assets/vendor/bootstrap-4.1/bootstrap.min.css') ?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url('assets/vendor/animsition/animsition.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/wow/animate.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/css-hamburgers/hamburgers.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/slick/slick.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/select2/select2.min.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.css') ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('assets/css/theme.css') ?>" rel="stylesheet" media="all">

    <!-- bootstrap icon -->
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
</head>



<body class="animsition">
    <div class="page-wrapper">


        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?= base_url('assets/images/icon/logo.png') ?>" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <?php if ($_SESSION['loggedIn']['role'] == 'User') { ?>


                            <li class="<?php echo is_active('dashboard'); ?>">
                                <a class="js-arrow" href="<?= base_url('dashboard') ?>">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>


                            <li class="<?php echo is_active('expense'); ?>">
                                <a href="<?= base_url('expense') ?>">
                                    <i class="fas  fa-rupee"></i>Expense</a>
                            </li>
                            <li class="<?php echo is_active('reports'); ?>">
                                <a href="<?= base_url('reports') ?>">
                                    <i class="fas fa-chart-bar"></i>Reports</a>
                            </li>


                            <li id="reports_link">
                                <a href="<?= base_url('user/logout') ?>">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </li>

                        <?php } else { ?>
                            <li class="<?php echo is_active('category'); ?>">
                                <a href="<?= base_url('category') ?>">
                                    <i class="fas  fa-list-alt"></i>Category</a>
                            </li>
                            <li class="<?php echo is_active('users'); ?>">
                                <a href="<?= base_url('users') ?>">
                                    <i class="fas fa-user-md"></i>Users</a>
                            </li>

                        <?php } ?>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">

                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?= base_url('assets/images/icon/avatar-01.jpg') ?>" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?= $_SESSION['loggedIn']['name'] ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?= base_url('assets/images/icon/avatar-01.jpg') ?>" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?= $_SESSION['loggedIn']['name'] ?></a>
                                                    </h5>
                                                    <span class="email"><?= $_SESSION['loggedIn']['email'] ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>

                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?= base_url('user/logout') ?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <?= bs_alert() ?>