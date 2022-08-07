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
                            Profile
                        </h3>
                        <?php
                        if (!$userInfo('is_completed')) :
                        ?>
                            <button type="button" class="btn btn-default waves-effect f-right m-r-20" data-toggle="modal" data-target="#defaultModal">Scan your QR code</button>
                        <?php endif; ?>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="col-xs-12 m-0">
                                    <label for="name">Name</label>
                                </div>
                                <div class="col-xs-12 m-0">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="name" class="form-control" disabled placeholder="name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="col-xs-12 m-0">
                                    <label for="name">E-mail</label>
                                </div>
                                <div class="col-xs-12 m-0">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="email" id="email" class="form-control" disabled placeholder="email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if ($userInfo('roll') == 's') : ?>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="col-xs-12 m-0">
                                        <label for="name">Roll Number</label>
                                    </div>
                                    <div class="col-xs-12 m-0">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="roll_no" class="form-control" disabled placeholder="Roll Number">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="col-xs-12 m-0">
                                        <label for="name">QR code</label>
                                    </div>
                                    <div class="col-xs-12 m-0">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" id="qr_code" class="form-control" disabled placeholder="QR-code">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$aJs = [
    HTTP_ASSETS . "js/pages/profile.js",
];
if (!$userInfo('is_completed')) :
    include('qr-code-modal.php');
endif;
include('section/footer.php');
?>