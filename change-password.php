<?php
include('section/header.php');
include('section/left_side.php');
?>
<section class="content">
    <div class="container-fluid">
        <!-- <div class="block-header">
            <h2>DASHBOARD</h2>
        </div> -->
        <!-- #END# Widgets -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <!-- <div class="row clearfix"> -->
                        <h3 class="m-0 d-inline-block">
                            Change Password
                        </h3>
                    </div>
                    <div class="body">
                        <form action="">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="col-xs-12 m-0">
                                        <label for="curr_pass">Current Password</label>
                                    </div>
                                    <div class="col-xs-12 m-0">
                                        <div class="form-group">
                                            <div class="form-line eye-box">
                                                <input type="password" id="curr_pass" class="form-control" required name="curr_pass" placeholder="Current Password">
                                                <i class="material-icons eye">visibility</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="col-xs-12 m-0">
                                        <label for="new_pass">New Password</label>
                                    </div>
                                    <div class="col-xs-12 m-0">
                                        <div class="form-group">
                                            <div class="form-line eye-box">
                                                <input type="password" id="new_pass" class="form-control" required name="new_pass" placeholder="New Password">
                                                <i class="material-icons eye">visibility</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="col-xs-12 m-0">
                                        <label for="re_pass">Re-type Password</label>
                                    </div>
                                    <div class="col-xs-12 m-0">
                                        <div class="form-group">
                                            <div class="form-line eye-box">
                                                <input type="password" id="re_pass" class="form-control" required name="re_pass" placeholder="Re-type Password">
                                                <i class="material-icons eye">visibility</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 sub-btn">
                                    <div class="col-xs-12 col-lg-4">
                                        <button class="btn btn-block bg-pink waves-effect" type="submit">Change Password</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$aJs = [
    HTTP_ASSETS . "js/pages/change-password.js",
];
include('camera-modal.php');
include('section/footer.php');
?>