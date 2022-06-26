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
                            <li><a href="our_staff_view.php">Our Staff</a></li>

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
                            <h5 class="panel-title">Our Staff Create</h5>
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
                            <?php
                            require 'db_config.php';
                            $our_staff_id = $_GET['our_staff_id'];
                            $show_data = "SELECT * FROM our_staff WHERE id = {$our_staff_id}";
                            $update_query = mysqli_query($db_con, $show_data);
                            ?>
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
                                    <?php
                                    if (!empty($update_query)) {


                                        foreach ($update_query as $key => $our_staff) {

                                    ?>
                                    <input type="hidden" class="form-control" name="our_staff_id"
                                        value="<?php echo $our_staff['id']; ?>">


                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="staff_name">Staff Name</label>
                                        <div class="col-lg-10">
                                            <input name="staff_name" type="text" class="form-control" id="staff_name"
                                                value="<?php echo $our_staff['staff_name']; ?>">
                                        </div>
                                    </div>
                                    <?php
                                            require 'db_config.php';
                                            $option_select_query = "SELECT * FROM designations WHERE active_status=1";
                                            $designations_list = mysqli_query($db_con, $option_select_query);
                                            ?>
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="designation_id">Designation
                                            Name</label>
                                        <div class="col-lg-10">
                                            <select name="designation_id" class="form-control" id="designation_id">
                                                <option value="">Select Designation</option>
                                                <?php
                                                        if (!empty($designations_list)) {

                                                            foreach ($designations_list as $designation) {

                                                                if ($our_staff['designation_id'] == $designation['id']) {
                                                                    $selected = 'selected';
                                                                } else {
                                                                    $selected = '';
                                                                }
                                                                echo "<option {$selected} value='{$designation['id']}'>{$designation['designation_name']}</option>";
                                                            }
                                                        }

                                                        ?>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="staff_image">Staff Image</label>
                                        <div class="col-lg-10">
                                            <input name="staff_image" type="file" class="form-control" id="staff_image"
                                                value="<?php echo $our_staff['staff_image']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="twitter">Twitter</label>
                                        <div class="col-lg-10">
                                            <input name="twitter" type="text" class="form-control" id="twitter"
                                                value="<?php echo $our_staff['twitter']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="facebook">Facebook</label>
                                        <div class="col-lg-10">
                                            <input name="facebook" type="text" class="form-control" id="facebook"
                                                value="<?php echo $our_staff['facebook']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="linkdin">LinkdIn</label>
                                        <div class="col-lg-10">
                                            <input name="linkdin" type="text" class="form-control" id="linkdin"
                                                value="<?php echo $our_staff['linkdin']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="instagram">Instagram</label>
                                        <div class="col-lg-10">
                                            <input name="instagram" type="text" class="form-control" id="instagram"
                                                value="<?php echo $our_staff['instagram']; ?>">
                                        </div>
                                    </div>


                                    <?php }
                                    } ?>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary" name="update_our_staff">Update Data
                                    </button>
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