<!DOCTYPE html>
<html lang="en">

<?php

include 'includes/head_source.php';
require 'includes/db_config.php';

?>

<body>

    <?php include "includes/main_nav.php"; ?>


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
                                    <ul class="icons-list">
                                        <li>
                                            <a href="#"><i class="icon-cog3"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /user menu -->
                    <?php include "includes/navigation.php"; ?>

                </div>
            </div>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header">
                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li><a href="service_view.php"><i class="icon-hammer-wrench position-left"></i>
                                    Services</a>
                            </li>

                            <li class="active">Update</li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->
                <!-- Content area -->
                <div class="content">

                    <!-- Basic datatable -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Service Update</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a href="service_create.php" class="btn btn-primary add-new">Add
                                            New</a></li>
                                    <!-- <li><a data-action="collapse"></a></li>
                                    <li><a data-action="reload"></a></li>
                                    <li><a data-action="close"></a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body">
                            <?php
                            require 'includes/db_config.php';
                            $service_id = $_GET['service_id'];
                            $show_service_view = "SELECT * FROM services WHERE id = {$service_id}";
                            $service_update_qry = mysqli_query($db_con, $show_service_view);
                            ?>
                            <form class="form-horizontal mt-10" action="service_control.php" method="POST">
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
                                    <?php
                                    if (!empty($service_update_qry)) {


                                        foreach ($service_update_qry as $service) {


                                    ?>
                                    <input type="hidden" class="form-control" name="service_id"
                                        value="<?php echo $service['id']; ?>">


                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="service_name">Service Name</label>
                                        <div class="col-lg-10">
                                            <input name="service_name" type="text" class="form-control"
                                                id="service_name" value="<?php echo $service['service_name']; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="service_details">Service
                                            Details</label>
                                        <div class="col-lg-10">
                                            <textarea name="service_details" rows="5" cols="5" class="form-control"
                                                placeholder="Your Messages Here "
                                                id="service_details"><?php echo $service['service_details']; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="icon_name">Icon Name</label>
                                        <div class="col-lg-10">
                                            <input name="icon_name" type="text" class="form-control" id="icon_name"
                                                value="<?php echo $service['icon_name']; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="design_status">Design Status</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="design_status"
                                                name="design_status" value="<?php echo $service['design_status']; ?>">
                                        </div>
                                    </div>

                                    <?php }
                                    } ?>
                                </fieldset>
                                <div class="text-right">
                                    <input type="submit" class="btn btn-primary" name="update_service"
                                        value="Update Service">

                                    <a href="service_view.php" class="btn btn-info">Back To View</a>
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
    <?php include "includes/script.php"; ?>
</body>

</html>