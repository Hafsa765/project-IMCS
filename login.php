<!DOCTYPE html>
<html>
<?php
include('config/constant.php');
include('helper/common_helper.php');
if (isUserLogin()) {
    header("Location: " . BASE_URL . "index.php");
}
?>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In </title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo HTTP_ASSETS ?>favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo HTTP_ASSETS ?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo HTTP_ASSETS ?>plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo HTTP_ASSETS ?>plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo HTTP_ASSETS ?>css/style.css" rel="stylesheet">
    <link href="<?php echo HTTP_ASSETS ?>css/custom.css" rel="stylesheet">
    <link href="<?php echo HTTP_ASSETS ?>css/helper.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">IMCS Digital Library</a>
            <small>enchanced with QR code and Clearance Certificate</small>
        </div>
        <div class="card">
            <div class="body">
                <ul>
                    <li class="title active" trg="#sign_in" class="active">Login</li>
                    <li class="title" trg="#sign_up">Register</li>
                </ul>
                <form id="sign_in" act="signIn" class="li-content active" method="POST">
                    <div class="msg">Sign in to start your account</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div>
                        <a href="<?php echo BASE_URL ?>forgot-password.php">
                            <p>forgot password?</p>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                </form>
                <form id="sign_up" act="signUp" class="li-content" method="POST">
                    <div class="msg">Register a new account</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="user_name" placeholder="Name" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">announcement</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="roll_no" placeholder="Roll Number" required>
                        </div>
                        <!-- <div class="">
                            <select class="w-100 p-7" name="roll" id="">
                                <option value="">---Select Roll---</option>
                                <option value="t">Teacher</option>
                                <option value="s">Student</option>
                            </select>
                        </div> -->
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm_pass" minlength="6" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN UP</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?php echo HTTP_ASSETS ?>plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo HTTP_ASSETS ?>plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo HTTP_ASSETS ?>plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo HTTP_ASSETS ?>plugins/jquery-validation/jquery.validate.js"></script>
    <!-- sweet alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Custom Js -->
    <script src="<?php echo HTTP_ASSETS ?>js/admin.js"></script>
    <script src="<?php echo HTTP_ASSETS ?>js/pages/login.js"></script>
    <script src="<?php echo HTTP_ASSETS ?>js/script.js"></script>
</body>

</html>