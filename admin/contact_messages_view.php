includes/
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
                            <li><a href="contact_messages_view.php">
                                    Contact Messages</a>
                            </li>

                            <li class="active">List</li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->
                <!-- Content area -->
                <div class="content">

                    <!-- Basic datatable -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Contact Messages View</h5>
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

                            if (isset($_GET['msg'])) {
                            ?>
                            <div class="alert alert-success no-border">
                                <button type="button" class="close" data-dismiss="alert"><span>×</span><span
                                        class="sr-only">Close</span></button>
                                <span class="text-semibold"><?php echo $_GET['msg']; ?></span>
                            </div>
                            <?php } ?>
                            <table class="table datatable-basic table-bordered">
                                <thead>
                                    <tr>
                                        <th width=5%>SL.</th>
                                        <th width=15%>Name</th>
                                        <th width=15%>Email</th>
                                        <th width=15%>Subject</th>
                                        <th width=30%>Message</th>

                                        <th width=20% class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $select_query = "SELECT * FROM contact_messages WHERE active_status=1";
                                    $contact_messages_view = mysqli_query($db_con, $select_query);

                                    foreach ($contact_messages_view as $key => $contact_messages) {
                                    ?>


                                    <tr>
                                        <td><?php echo ++$key; ?></td>
                                        <td><?php echo $contact_messages['name']; ?></td>
                                        <td><?php echo $contact_messages['email']; ?></td>
                                        <td><?php echo $contact_messages['subject']; ?></td>
                                        <td><?php echo $contact_messages['message']; ?></td>


                                        <td class="text-center">
                                            <a
                                                href="contact_messages_update.php?contact_messages_id=<?php echo $contact_messages['id']; ?>"><i
                                                    class="icon-pencil7"></i></a>
                                            <a
                                                href="contact_messages_delete.php?contact_messages_id=<?php echo $contact_messages['id']; ?>"><i
                                                    class="icon-trash"></i></a>

                                        </td>
                                    </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
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