<!DOCTYPE html>
<html lang="en">
<html lang="en">

<?php


include 'head_source.php';

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
                                        class="img-circle img-sm" alt="" /></a>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">Victoria Baker</span>
                                    <div class="text-size-mini text-muted">
                                        <i class="icon-pin text-size-small"></i> &nbsp;Santa
                                        Ana, CA
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

                    <?php include "navigation.php" ?>
                </div>
            </div>
            <!-- /main sidebar -->

            <!-- Main content -->
            <div class="content-wrapper">
                <!-- Page header -->
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4>
                                <i class="icon-arrow-left52 position-left"></i>
                                <span class="text-semibold">Home</span> - Dashboard
                            </h4>
                        </div>

                        <div class="heading-elements">
                            <div class="heading-btn-group">
                                <a href="#" class="btn btn-link btn-float has-text"><i
                                        class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                                <a href="#" class="btn btn-link btn-float has-text"><i
                                        class="icon-calculator text-primary"></i>
                                    <span>Invoices</span></a>
                                <a href="#" class="btn btn-link btn-float has-text"><i
                                        class="icon-calendar5 text-primary"></i>
                                    <span>Schedule</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li>
                                <a href="index.php"><i class="icon-home2 position-left"></i> Home</a>
                            </li>
                            <li class="active">Dashboard</li>
                        </ul>

                        <ul class="breadcrumb-elements">
                            <li>
                                <a href="#"><i class="icon-comment-discussion position-left"></i>
                                    Support</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-gear position-left"></i>
                                    Settings
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="#"><i class="icon-user-lock"></i> Account security</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-statistics"></i> Analytics</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="icon-accessibility"></i> Accessibility</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#"><i class="icon-gear"></i> All settings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">
                    <!-- Main charts -->
                    <div class="row">
                        <div class="col-lg-7">
                            <!-- Traffic sources -->
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h6 class="panel-title">Traffic sources</h6>
                                    <div class="heading-elements">
                                        <form class="heading-form" action="#">
                                            <div class="form-group">
                                                <label
                                                    class="checkbox-inline checkbox-switchery checkbox-right switchery-xs">
                                                    <input type="checkbox" class="switch" checked="checked" />
                                                    Live update:
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <ul class="list-inline text-center">
                                                <li>
                                                    <a href="#"
                                                        class="btn border-teal text-teal btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i
                                                            class="icon-plus3"></i></a>
                                                </li>
                                                <li class="text-left">
                                                    <div class="text-semibold">New visitors</div>
                                                    <div class="text-muted">2,349 avg</div>
                                                </li>
                                            </ul>

                                            <div class="col-lg-10 col-lg-offset-1">
                                                <div class="content-group" id="new-visitors"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <ul class="list-inline text-center">
                                                <li>
                                                    <a href="#"
                                                        class="btn border-warning-400 text-warning-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i
                                                            class="icon-watch2"></i></a>
                                                </li>
                                                <li class="text-left">
                                                    <div class="text-semibold">New sessions</div>
                                                    <div class="text-muted">08:20 avg</div>
                                                </li>
                                            </ul>

                                            <div class="col-lg-10 col-lg-offset-1">
                                                <div class="content-group" id="new-sessions"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <ul class="list-inline text-center">
                                                <li>
                                                    <a href="#"
                                                        class="btn border-indigo-400 text-indigo-400 btn-flat btn-rounded btn-icon btn-xs valign-text-bottom"><i
                                                            class="icon-people"></i></a>
                                                </li>
                                                <li class="text-left">
                                                    <div class="text-semibold">Total online</div>
                                                    <div class="text-muted">
                                                        <span class="status-mark border-success position-left"></span>
                                                        5,378 avg
                                                    </div>
                                                </li>
                                            </ul>

                                            <div class="col-lg-10 col-lg-offset-1">
                                                <div class="content-group" id="total-online"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="position-relative" id="traffic-sources"></div>
                            </div>
                            <!-- /traffic sources -->
                        </div>



                        <!-- Footer -->
                        <div class="footer text-muted">
                            &copy; 2015. <a href="#">Limitless Web App Kit</a> by
                            <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
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

</html>