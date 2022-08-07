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
                            Add Books
                        </h3>
                    </div>
                    <div class="body">
                        <form action="">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="col-xs-12 m-0">
                                        <label for="name">Book Title</label>
                                    </div>
                                    <div class="col-xs-12 m-0">
                                        <div class="form-group mb-10">
                                            <div class="form-line">
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Book Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="col-xs-12 m-0">
                                        <label for="name">Book Count</label>
                                    </div>
                                    <div class="col-xs-12 m-0">
                                        <div class="form-group mb-10">
                                            <div class="form-line">
                                                <input type="number" id="count" name="count" class="form-control" placeholder="Book Count">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="col-xs-12 m-0">
                                        <label for="name">Book Edition</label>
                                    </div>
                                    <div class="col-xs-12 m-0">
                                        <div class="form-group mb-10">
                                            <div class="form-line">
                                                <input type="text" id="edition" name="edition" class="form-control" placeholder="Book Edition">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="col-xs-12 m-0">
                                        <label for="name">Book Author</label>
                                    </div>
                                    <div class="col-xs-12 m-0">
                                        <div class="form-group mb-10">
                                            <div class="form-line">
                                                <input type="name" id="author" name="author" class="form-control" placeholder="Book Auther">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="col-xs-12 m-0">
                                        <label for="name">Book QR code</label>
                                    </div>
                                    <div class="col-xs-12 m-0">
                                        <div class="form-group mb-10">
                                            <div class="form-line">
                                                <input type="number" id="qr_code" name="qr_code" class="form-control" readonly placeholder="Book QR code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 m-0">
                                        <span class="cur-pointer bar-code" data-toggle="modal" data-target="#defaultModal">Scan Book Bar-code</span>
                                    </div>
                                </div>
                                <div class="col-xs-12 sub-btn">
                                    <div class="col-xs-12 col-lg-4">
                                        <button class="btn btn-block bg-pink waves-effect" type="submit">Save</button>
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
    HTTP_ASSETS . "js/pages/book-add.js",
    'https://cdnjs.cloudflare.com/ajax/libs/quagga/0.12.1/quagga.min.js'
];
include('bar-code-modal.php');
include('section/footer.php');
?>