<?php
$aCss = [
    'https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css'
];
include('section/header.php');
include('section/left_side.php');
?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

        <!-- Widgets -->
        <?php if (
            $userInfo('roll') == 'a' ||
            $userInfo('roll') == 'sa'
        ) : ?>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">Total Books</div>
                            <div class="number count-to" id="total-book" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">book</i>
                        </div>
                        <div class="content">
                            <div class="text">Isseed Books</div>
                            <div class="number" id="issued-book" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">refresh</i>
                        </div>
                        <div class="content">
                            <div class="text">R. Pending Book</div>
                            <div class="number count-to" id="pending-book" data-from="0" data-to="243" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Total Stud/Teach</div>
                            <div class="number count-to" id="total-stu" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endif;
        ?>
        <!-- #END# Widgets -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                        </div>
                    </div>
                    <div class="body">
                        <div id='calendar' class="p-cursor"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$aJs = [
    'https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js',
    HTTP_ASSETS . "js/pages/dashboard.js"
];
$aInJs = [];
if ($userInfo('roll') == 's') :
    $aInJs[] =  '
        Dashboard.getStuData();
    ';
else :
    $aInJs[] =  '
        Dashboard.getBookData();
        Dashboard.getDasData();
    ';
endif;
include('section/footer.php');
?>