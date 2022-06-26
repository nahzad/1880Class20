<!DOCTYPE html>
<html lang="en">
<?php
include 'head_source.php';
require 'db_config.php';
?>

<body>

    <?php include "main_nav.php"; ?>
    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <div class="sidebar sidebar-main">
                <div class="sidebar-content">

                    <!-- User menu -->
                    <div class="sidebar-user">
                        <div class="category-content">
                            <div class="media">
                                <a href="#" class="media-left"><img src="assets/images/placeholder.jpg"
                                        class="img-circle img-sm" alt=""></a>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">Victoria Baker</span>
                                    <div class="text-size-mini text-muted">
                                        <i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
                                    </div>
                                </div>

                                <div class="media-right media-middle">
                                    <ul class="icons-view">
                                        <li>
                                            <a href="#"><i class="icon-cog3"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /user menu -->
                    <?php include "navigation.php"; ?>

                </div>
            </div>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header">
                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li><a href="our_staff_view.php"><i class="icon-users4 position-left"></i> Our Staff</a>
                            </li>

                            <li class="active">Create</li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->
                <!-- Content area -->
                <div class="content">

                    <!-- Basic datatable -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-staff_name">Our Staff Create</h5>
                            <div class="heading-elements">
                                <ul class="icons-view">
                                    <li><a href="our_staff_create.php" class="btn btn-primary add-new">Add
                                            New</a></li>
                                    <!-- <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal mt-10" action="our_staff_control.php" method="POST"
                                enctype="multipart/form-data">
                                <fieldset class="content-group">
                                    <?php

                                    if (isset($_GET['msg'])) {
                                    ?>
                                    <div class="alert alert-success no-border">
                                        <button type="button" class="close" data-dismiss="alert"><span>×</span><span
                                                class="sr-only">Close</span></button>
                                        <span class="text-semibold"><?php echo $_GET['msg']; ?></span>
                                    </div>
                                    <?php } ?>


                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="staff_name">Staff Name</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="staff_name" name="staff_name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="designation_id">Designation
                                            ID</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="designation_id"
                                                name="designation_id">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="staff_image">Staff Image</label>
                                        <div class="col-lg-10">
                                            <input name="staff_image" type="file" class="form-control" id="staff_image">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="twitter">Twitter</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="twitter" name="twitter">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="facebook">Facebook</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="facebook" name="facebook">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="linkdin">LinkdIn</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="linkdin" name="linkdin">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="instagram">Instagram</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="instagram" name="instagram">
                                        </div>
                                    </div>

                                </fieldset>
                                <div class="text-right">
                                    <input type="submit" value="Save Data" name="save_our_staff"
                                        class="btn btn-primary">

                                    <a href="our_staff_view.php" class="btn btn-info">Back To List</a>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- /basic datatable -->

                    <!-- Footer -->
                    <div class="footer text-muted">
                        &copy; 2015. <a href="#">Limitless Web App Kit</a>
                    </div>
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->
    <?php include "script.php"; ?>
</body>

</html>