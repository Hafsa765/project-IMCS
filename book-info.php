<?php
$aCss = [
    '//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css'
];
include('section/header.php');
?>
<?php
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
                            Book Info
                        </h3>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="tab-content">
                                    <div class="tab-pane show active p-4 cpt-0">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="book-info">
                                                <thead>
                                                    <tr>
                                                        <th class="th">S.no</th>
                                                        <th class="th">Name</th>
                                                        <th class="th">Author</th>
                                                        <th class="th">Return-Status</th>
                                                        <th class="th">Issue At</th>
                                                        <th class="th">Return At</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$aJs = [
    "//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js",
    HTTP_ASSETS . "js/pages/book-info.js"
];

include('section/footer.php');
?>