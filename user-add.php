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
                            Add User
                        </h3>
                    </div>
                    <div class="body">
                        <form action="">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="col-xs-12 m-0">
                                        <label for="name">Name</label>
                                    </div>
                                    <div class="col-xs-12 m-0">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input required type="text" id="user_name" name="user_name" class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="col-xs-12 m-0">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="col-xs-12 m-0">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input required type="text" name="email" id="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="col-xs-12 m-0">
                                        <label for="curr_pass">Password</label>
                                    </div>
                                    <div class="col-xs-12 m-0">
                                        <div class="form-group">
                                            <div class="form-line eye-box">
                                                <input type="password" id="password" class="form-control" required name="password" placeholder="Password">
                                                <i class="material-icons eye">visibility</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-xs-12 col-sm-6">
                                    <div class="col-xs-12 m-0">
                                        <label for="curr_pass">Roll</label>
                                    </div>
                                    <div class="col-xs-12 m-0">
                                        <div class="form-group">
                                            <div class="">
                                                <select required class="w-100 p-7" name="roll" id="">
                                                    <option value="">---Select Roll---</option>
                                                    <option value="l">Librarian</option>
                                                    <option value="sa">Sub-Admin</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
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
    HTTP_ASSETS . "js/pages/user-add.js",
];
include('section/footer.php');
?>