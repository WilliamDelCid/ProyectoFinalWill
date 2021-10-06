<?php include 'layouts/header.php'; ?>
       
<?php include 'layouts/headerStyle.php'; ?>

    <body class="fixed-left">

    <?php include 'layouts/loader.php'; ?>

        <!-- Begin page -->
        <div id="wrapper">
          
        <?php include 'layouts/navbar.php'; ?>

            <!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">
                            <!-- Search input -->
                            <div class="search-wrap" id="search-wrap">
                                <div class="search-bar">
                                    <input class="search-input" type="search" placeholder="Search" />
                                    <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                        <i class="mdi mdi-close-circle"></i>
                                    </a>
                                </div>
                            </div>

                            <ul class="list-inline float-right mb-0">
                                <!-- Search -->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                                        <i class="mdi mdi-magnify noti-icon"></i>
                                    </a>
                                </li>
                                <!-- Fullscreen -->
                                <li class="list-inline-item dropdown notification-list hidden-xs-down">
                                    <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                        <i class="mdi mdi-fullscreen noti-icon"></i>
                                    </a>
                                </li>
                                <!-- language-->
                                <li class="list-inline-item dropdown notification-list hidden-xs-down">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect text-muted" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        English <img src="public/assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right language-switch">
                                        <a class="dropdown-item" href="#"><img src="public/assets/images/flags/germany_flag.jpg" alt="" height="16"/><span> German </span></a>
                                        <a class="dropdown-item" href="#"><img src="public/assets/images/flags/italy_flag.jpg" alt="" height="16"/><span> Italian </span></a>
                                        <a class="dropdown-item" href="#"><img src="public/assets/images/flags/french_flag.jpg" alt="" height="16"/><span> French </span></a>
                                        <a class="dropdown-item" href="#"><img src="public/assets/images/flags/spain_flag.jpg" alt="" height="16"/><span> Spanish </span></a>
                                        <a class="dropdown-item" href="#"><img src="public/assets/images/flags/russia_flag.jpg" alt="" height="16"/><span> Russian </span></a>
                                    </div>
                                </li>
                                <!-- notification-->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="ion-ios7-bell noti-icon"></i>
                                        <span class="badge badge-danger noti-icon-badge">3</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Notification (3)</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                            <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>

                                    </div>
                                </li>
                                <!-- User-->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="public/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success pull-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
                                    </div>
                                </li>
                            </ul>

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Chart Js</h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>
                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <!-- ==================
                         PAGE CONTENT START
                         ================== -->

                    <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Line Chart</h4>

                                            <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">86541</h5>
                                                    <p class="text-muted font-14">Activated</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">2541</h5>
                                                    <p class="text-muted font-14">Pending</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">102030</h5>
                                                    <p class="text-muted font-14">Deactivated</p>
                                                </li>
                                            </ul>

                                            <canvas id="lineChart" height="300"></canvas>

                                        </div>
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Bar Chart</h4>

                                            <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">2541</h5>
                                                    <p class="text-muted font-14">Activated</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">84845</h5>
                                                    <p class="text-muted font-14">Pending</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">12001</h5>
                                                    <p class="text-muted font-14">Deactivated</p>
                                                </li>
                                            </ul>

                                            <canvas id="bar" height="300"></canvas>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Pie Chart</h4>

                                            <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">2536</h5>
                                                    <p class="text-muted font-14">Activated</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">69421</h5>
                                                    <p class="text-muted font-14">Pending</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">89854</h5>
                                                    <p class="text-muted font-14">Deactivated</p>
                                                </li>
                                            </ul>

                                            <canvas id="pie" height="260"></canvas>

                                        </div>
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Donut Chart</h4>

                                            <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">9595</h5>
                                                    <p class="text-muted font-14">Activated</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">36524</h5>
                                                    <p class="text-muted font-14">Pending</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">62541</h5>
                                                    <p class="text-muted font-14">Deactivated</p>
                                                </li>
                                            </ul>

                                            <canvas id="doughnut" height="260"></canvas>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Polar Chart</h4>

                                            <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">4852</h5>
                                                    <p class="text-muted font-14">Activated</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">3652</h5>
                                                    <p class="text-muted font-14">Pending</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">85412</h5>
                                                    <p class="text-muted font-14">Deactivated</p>
                                                </li>
                                            </ul>

                                            <canvas id="polarArea" height="300"> </canvas>

                                        </div>
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Radar Chart</h4>

                                            <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">694</h5>
                                                    <p class="text-muted font-14">Activated</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">55210</h5>
                                                    <p class="text-muted font-14">Pending</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <h5 class="mb-0">489498</h5>
                                                    <p class="text-muted font-14">Deactivated</p>
                                                </li>
                                            </ul>

                                            <canvas id="radar" height="300"></canvas>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <?php include 'layouts/footer.php'; ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->

        <?php include 'layouts/footerScript.php'; ?>

        <!-- Chart JS -->
        <script src="public/plugins/chart.js/Chart.min.js"></script>
        <script src="public/assets/pages/chartjs.init.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>