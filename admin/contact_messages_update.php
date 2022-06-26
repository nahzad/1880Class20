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
                            <li><a href="contact_messages_view.php">
                                    Contact Messages</a>
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
                            <h5 class="panel-title">Contact Messages Update</h5>
                            <div class="heading-elements">
                                <ul class="icons-view">
                                    <li><a href="contact_messages_create.php" class="btn btn-primary add-new">Add
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
                            $contact_messages_id = $_GET['contact_messages_id'];
                            $show_data = "SELECT * FROM contact_messages WHERE id = {$contact_messages_id}";
                            $update_query = mysqli_query($db_con, $show_data);
                            ?>
                            <form class="form-horizontal mt-10" action="contact_messages_control.php" method="POST">
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


                                        foreach ($update_query as $key => $contact_messages) {


                                    ?>
                                    <input type="hidden" class="form-control" name="contact_messages_id"
                                        value="<?php echo $contact_messages['id']; ?>">

                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="name">Name</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="<?php echo $contact_messages['name']; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="email">Email</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="email" name="email"
                                                value="<?php echo $contact_messages['email']; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="subject">Subject</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="subject" name="subject"
                                                value="<?php echo $contact_messages['subject']; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="message">Message</label>
                                        <div class="col-lg-10">
                                            <textarea rows="5" cols="5" class="form-control"
                                                placeholder="Your Messages Here " id="message"
                                                name="message"><?php echo $contact_messages['message']; ?></textarea>
                                        </div>
                                    </div>

                                    <?php }
                                    } ?>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary" name="update_contact_messages">Update
                                        Data
                                    </button>
                                    <a href="contact_messages_view.php" class="btn btn-info">Back To List</a>
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