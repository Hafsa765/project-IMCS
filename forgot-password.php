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
            <a href="javascript:void(0);">Admin<b>BSB</b></a>
            <small>Admin BootStrap Based - Material Design</small>
        </div>
        <div class="card">
            <div class="body">
                <ul>
                    <li class="title active w-100" class="active">Your Email</li>
                </ul>
                <form id="sign_in" class="li-content active" method="POST">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">Reset Password</button>
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
    <script src="<?php echo HTTP_ASSETS ?>js/script.js"></script>
    <script>
        $(document).on('submit', 'form', function(e) {
            e.preventDefault();
            let self = $(this);
            self.find('button[type="submit"]').addClass('disabled');
            if ($('input[name="email"]').val() == '') {
                Toast.fire({
                    icon: 'error',
                    title: 'Email is required'
                });
            }
            let oFormData = self.serializeArray()
            oFormData.push({
                name: 'req',
                value: 'resetPassword'
            });
            $.ajax({
                type: 'POST',
                url: api_url + 'Pu.php',
                dataType: 'json',
                data: oFormData,
                success: function(r) {
                    self.find('button[type="submit"]').removeClass('disabled');
                    if (r.success) {
                        Toast.fire({
                            icon: 'success',
                            title: 'Your password has been reset. kindly check your provided email.'
                        });
                        setTimeout(function() {
                            window.location.href = base_url + 'login.php';
                        }, 2000);
                    } else {
                        Toast.fire({
                            icon: 'error',
                            title: r.msg
                        });
                    }
                }
            });
        });
    </script>
</body>

</html>