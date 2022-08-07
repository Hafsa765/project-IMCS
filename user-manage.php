<?php
$aCss = [
    '//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css'
];
$aInCss = [];
$aInCss[] = '
    form input{
        background-color: #efebeb;
        padding: 10px;
        width: 100%;
    }
';
include('section/header.php');
?>
<?php
include('section/left_side.php');
?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h3 class="m-0 d-inline-block mb-20">
                            Mange Users
                        </h3>
                        <div class="d-inline-block f-right user-csv">
                            <a href="<?php echo HTTP_ASSETS ?>download/user.csv" download>Download CSV Sample</a>
                            <a id="upload-csv">Upload CSV</a>
                        </div>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="tab-content">
                                    <div class="tab-pane show active p-4 cpt-0">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="user-mange">
                                                <thead>
                                                    <tr>
                                                        <th class="th">S.no</th>
                                                        <th class="th">Name</th>
                                                        <th class="th">Email</th>
                                                        <th class="th">Roll no</th>
                                                        <th class="th">Roll</th>
                                                        <th class="th">Action</th>
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
    HTTP_ASSETS . "js/pages/user-manage.js"
];
$sHtml =  '<div class="">';
$sHtml .=  '<form enctype="multipart/form-data">';
$sHtml .=  '<div class="col-xs-12 m-0">';
$sHtml .=  '<div class="form-group mb-10">';
$sHtml .=  '<div class="form-line">';
$sHtml .=  '<input type="file" id="csv" name="csv">';
$sHtml .=  '</div>';
$sHtml .=  '</div>';
$sHtml .=  '</div>';
$sHtml .=  '<div class="col-xs-12 sub-btn">';
$sHtml .=  '<div class="col-xs-12 col-lg-4">';
$sHtml .=  '<button class="btn btn-block bg-pink waves-effect" type="submit">Upload</button>';
$sHtml .=  '</div>';
$sHtml .=  '</div>';
$sHtml .=  '</form>';
$sHtml .= '</div>;';
$a = [
    'header' => 'Upload CSV',
    'body' => $sHtml
];
include('model.php');
include('section/footer.php');
?>