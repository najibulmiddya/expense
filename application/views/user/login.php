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
    <title>LOGIN</title>


    <link href="<?= base_url('assets/vendor/bootstrap-4.1/bootstrap.min.css') ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('assets/css/theme.css') ?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?= base_url('assets/images/icon/logo.png') ?>" alt="CoolAdmin">
                            </a>
                        </div>

                        <?= bs_alert() ?>

                        <div class="login-form">
                            <form action="<?= base_url('user/index') ?>" method="post">

                                <div class="form-group">
                                    <label>User Name</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" value="<?php echo set_value('email') ?>">
                                    <?php echo form_error('email', '<div class="error text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                    <?php echo form_error('password', '<div class="error text-danger">', '</div>') ?>
                                </div>

                                <div class="login-checkbox float-fight">
                                    <label>

                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>

                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Login</button>

                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="<?=base_url('user/signup')?>">Sign Up Here</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url('assets/vendor/jquery-3.2.1.min.js') ?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url('assets/vendor/bootstrap-4.1/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap-4.1/bootstrap.min.js') ?>"></script>

    <!-- Main JS-->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>
<!-- end document-->