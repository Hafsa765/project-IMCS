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
                            Search Books
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
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Book Title">
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
                                <div class="col-xs-12 sub-btn">
                                    <div class="col-xs-12 col-lg-4">
                                        <button class="btn btn-block bg-pink waves-effect" type="submit">Search</button>
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
    HTTP_ASSETS . "js/pages/book-search.js",
];
$sHtml =  '<div class="table-responsive">';
$sHtml .= '<table class="table table-bordered" id="book-info">';
$sHtml .= '<thead>';
$sHtml .= '<tr>';
$sHtml .= '<th class="th">S.no</th>';
$sHtml .= '<th class="th">Book-Name</th>';
$sHtml .= '<th class="th">Book-Auther</th>';
$sHtml .= '<th class="th">Book-Edition</th>';
$sHtml .= '</tr>';
$sHtml .= '</thead>';
$sHtml .= '<tbody>';
$sHtml .= '</tbody>';
$sHtml .= '</table>';
$sHtml .= '</div>;';
$a = [
    'header' => 'Book Info',
    'body' => $sHtml
];
include('model.php');
include('section/footer.php');
?>