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
                            <li><a href="our_clients_view.php"> Our Clients</a></li>

                            <li class="active">View</li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->
                <!-- Content area -->
                <div class="content">

                    <!-- Basic datatable -->
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title">Our Clients View</h5>
                            <div class="heading-elements">
                                <ul class="icons-list">
                                    <li><a href="our_clients_create.php" class="btn btn-primary add-new">Add
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
                                        <th width=20%>Clients Name</th>
                                        <th width=20%>Designation Name</th>
                                        <th width=20%>Clients Image</th>
                                        <th width=15%>Clients Review</th>

                                        <th width=20% class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $select_query = "SELECT oc.id,oc.clients_name,dgn.designation_name,oc.client_image,oc.client_review FROM `our_clients` as oc INNER JOIN designations as dgn ON oc.designation_id = dgn.id WHERE oc.active_status= 1";
                                    $our_clients_view = mysqli_query($db_con, $select_query);
                                    if (!empty($our_clients_view)) {
                                        foreach ($our_clients_view as $key => $our_clients) {
                                    ?>

                                    <tr>
                                        <td><?php echo ++$key; ?></td>
                                        <td><?php echo $our_clients['clients_name']; ?></td>
                                        <td><?php echo $our_clients['designation_name']; ?></td>
                                        <td><img class=" img-responsive img-fluid" width='80' height='80'
                                                src="media/Our Clients Image/<?php echo $our_clients['client_image']; ?>"
                                                alt="Our Clients Image"></td>
                                        <td><?php echo $our_clients['client_review']; ?></td>

                                        <td class="text-center">
                                            <a
                                                href="our_clients_update.php?our_clients_id=<?php echo $our_clients['id']; ?>"><i
                                                    class="icon-pencil7"></i></a>
                                            <a
                                                href="our_clients_delete.php?our_clients_id=<?php echo $our_clients['id']; ?>"><i
                                                    class="icon-trash"></i></a>

                                        </td>
                                    </tr>
                                    <?php }
                                    } ?>

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
    <?php include "script.php"; ?>
</body>

</html>