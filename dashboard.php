<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <!-- App Favicon -->
        <link rel="icon" href="assets/images/icon.png">
        <!-- App title -->
        <title>Dashboard - SaSINFRA</title>
        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">
        <!-- Switchery css -->
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
        <!-- App CSS -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <!-- Modernizr js -->
        <script src="assets/js/modernizr.min.js"></script>
    </head>
    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.php" class="logo">
                        <i class="zmdi zmdi-group-work icon-c-logo white"></i>
                        <span class="white">SaSINFRA</span></a>
                </div>


                <nav class="navbar navbar-custom">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
                        </li>
                        <li class="nav-item hidden-mobile">
                            <form role="search" class="app-search">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav pull-right">
                        <li class="nav-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="zmdi zmdi-notifications-none noti-icon"></i>
                                <!--<span class="noti-icon-badge"></span>-->
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="label label-danger pull-xs-right">0</span>Notificações</small></h5>
                                </div>

                                <!-- item
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                    <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1min ago</small></p>
                                </a>

                                <!-- item
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">1min ago</small></p>
                                </a>

                                <!-- item
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1min ago</small></p>
                                </a>

                                <!-- All-->
                                <a href="pages/notifications.php" class="dropdown-item notify-item notify-all">
                                    Ver Tudo
                                </a>

                            </div>
                        </li>


                        <li class="nav-item dropdown notification-list">
                            <a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);">
                                <i class="zmdi zmdi-format-subject noti-icon"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-1.jpg" alt="user" class="img-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Bem-vindo!</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-account-circle"></i> <span>Perfil</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-settings"></i> <span>Configurações</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-power"></i> <span>Sair</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title">Navegação</li>

                            <li class="has_sub">
                                <a href="dashboard.php" class="waves-effect"><span class="label label-pill label-primary pull-xs-right">1</span><i class="zmdi zmdi-view-dashboard"></i><span> Dashboard </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-calendar"></i> <span> Agendamentos </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="pages/scheduling/scheduling-registration.php">Cadastrar novo tipo</a></li>
                                    <li><a href="pages/scheduling/admin-scheduling.php">Listar agendamentos</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi ion-person"></i><span> Usuários </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="pages/user/user-registration.php">Cadastrar usuário</a></li>
                                    <li><a href="pages/user/admin-search-user.php">Buscar usuários</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="calendar.php" class="waves-effect"><span class="label label-pill label-primary pull-xs-right"></span><i class="zmdi zmdi-calendar-check"></i><span> Calendário </span> </a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb p-0">
                                        <li>
                                            <a href="#">SaSINFRA</a>
                                        </li>
                                        <li class="active">
                                            Dashboard
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->





                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-layers pull-xs-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase m-b-20">Orders</h6>
                                    <h2 class="m-b-20" data-plugin="counterup">1,587</h2>
                                    <span class="label label-success"> +11% </span> <span class="text-muted">From previous period</span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-paypal pull-xs-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase m-b-20">Revenue</h6>
                                    <h2 class="m-b-20">$<span data-plugin="counterup">46,782</span></h2>
                                    <span class="label label-danger"> -29% </span> <span class="text-muted">From previous period</span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-chart pull-xs-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase m-b-20">Average Price</h6>
                                    <h2 class="m-b-20">$<span data-plugin="counterup">15.9</span></h2>
                                    <span class="label label-pink"> 0% </span> <span class="text-muted">From previous period</span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-rocket pull-xs-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase m-b-20">Product Sold</h6>
                                    <h2 class="m-b-20" data-plugin="counterup">1,890</h2>
                                    <span class="label label-warning"> +89% </span> <span class="text-muted">Last year</span>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xs-12 col-lg-12 col-xl-8">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0 m-b-20">Sales Statistics</h4>

                                    <div class="text-xs-center">
                                        <ul class="list-inline chart-detail-list m-b-0">
                                            <li class="list-inline-item">
                                                <h6 style="color: #3db9dc;"><i class="zmdi zmdi-circle-o m-r-5"></i>Series A</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 style="color: #1bb99a;"><i class="zmdi zmdi-triangle-up m-r-5"></i>Series B</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 style="color: #818a91;"><i class="zmdi zmdi-square-o m-r-5"></i>Series C</h6>
                                            </li>
                                        </ul>
                                    </div>

                                    <div id="morris-bar-stacked" style="height: 320px;"></div>

                        		</div>
                            </div><!-- end col-->

                            <div class="col-xs-12 col-lg-12 col-xl-4">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0 m-b-30">Trends Monthly</h4>

                                    <div class="text-xs-center m-b-20">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" class="btn btn-sm btn-secondary">Today</button>
                                            <button type="button" class="btn btn-sm btn-secondary">This Week</button>
                                            <button type="button" class="btn btn-sm btn-secondary">Last Week</button>
                                        </div>
                                    </div>

                                    <div id="morris-donut-example" style="height: 263px;"></div>

                                    <div class="text-xs-center">
                                        <ul class="list-inline chart-detail-list m-b-0">
                                            <li class="list-inline-item">
                                                <h6 style="color: #3db9dc;"><i class="zmdi zmdi-circle-o m-r-5"></i>English</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 style="color: #1bb99a;"><i class="zmdi zmdi-triangle-up m-r-5"></i>Italian</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 style="color: #818a91;"><i class="zmdi zmdi-square-o m-r-5"></i>French</h6>
                                            </li>
                                        </ul>
                                    </div>

                        		</div>
                            </div><!-- end col-->


                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xs-12 col-lg-12 col-xl-7">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="card-box">
                                            <h4 class="header-title m-t-0 m-b-20">Inbox</h4>

                                            <div class="inbox-widget nicescroll" style="height: 320px;">
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="img-circle" alt=""></div>
                                                        <p class="inbox-item-author">Chadengle</p>
                                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                                        <p class="inbox-item-date">13:40 PM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="img-circle" alt=""></div>
                                                        <p class="inbox-item-author">Tomaslau</p>
                                                        <p class="inbox-item-text">I've finished it! See you so...</p>
                                                        <p class="inbox-item-date">13:34 PM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="img-circle" alt=""></div>
                                                        <p class="inbox-item-author">Stillnotdavid</p>
                                                        <p class="inbox-item-text">This theme is awesome!</p>
                                                        <p class="inbox-item-date">13:17 PM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="img-circle" alt=""></div>
                                                        <p class="inbox-item-author">Kurafire</p>
                                                        <p class="inbox-item-text">Nice to meet you</p>
                                                        <p class="inbox-item-date">12:20 PM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="img-circle" alt=""></div>
                                                        <p class="inbox-item-author">Shahedk</p>
                                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                                        <p class="inbox-item-date">10:15 AM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg" class="img-circle" alt=""></div>
                                                        <p class="inbox-item-author">Adhamdannaway</p>
                                                        <p class="inbox-item-text">This theme is awesome!</p>
                                                        <p class="inbox-item-date">9:56 AM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-8.jpg" class="img-circle" alt=""></div>
                                                        <p class="inbox-item-author">Arashasghari</p>
                                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                                        <p class="inbox-item-date">10:15 AM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="assets/images/users/avatar-9.jpg" class="img-circle" alt=""></div>
                                                        <p class="inbox-item-author">Joshaustin</p>
                                                        <p class="inbox-item-text">I've finished it! See you so...</p>
                                                        <p class="inbox-item-date">9:56 AM</p>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-6">
                                        <div class="card-box">
                                            <h4 class="header-title m-t-0 m-b-20">Sales Statistics</h4>

                                            <p class="font-600 m-b-5">iMacs <span class="text-danger pull-right"><b>79%</b></span></p>
                                            <progress class="progress progress-striped progress-xs progress-danger m-b-0" value="79" max="100">79%
                                            </progress>
                                        </div>

                                        <div class="card-box">
                                            <h4 class="header-title m-t-0 m-b-20">Monthly Sales</h4>

                                            <p class="font-600 m-b-5">Macbooks <span class="text-success pull-right"><b>30%</b></span></p>
                                            <progress class="progress progress-striped progress-xs progress-success m-b-0" value="30" max="100">30%
                                            </progress>
                                        </div>

                                        <div class="card-box">
                                            <h4 class="header-title m-t-0 m-b-20">Daily Sales</h4>

                                            <p class="font-600 m-b-5">Mobiles <span class="text-warning pull-right"><b>50%</b></span></p>
                                            <progress class="progress progress-striped progress-xs progress-warning m-b-0" value="50" max="100">50%
                                            </progress>
                                        </div>

                                    </div>

                                </div>
                            </div><!-- end col-->

                            <div class="col-xs-12 col-lg-12 col-xl-5">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0 m-b-30">Top Contracts</h4>

                                    <div class="table-responsive">
                                        <table class="table table-bordered m-b-0">
                                            <thead>
                                                <tr>
                                                    <th>Company</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="text-muted">Apple Technology</th>
                                                    <td>20/02/2014</td>
                                                    <td>19/02/2020</td>
                                                    <td><span class="label label-success">Paid</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Envato Pty Ltd.</th>
                                                    <td>20/02/2014</td>
                                                    <td>19/02/2020</td>
                                                    <td><span class="label label-danger">Unpaid</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="text-muted">Dribbble LLC.</th>
                                                    <td>20/02/2014</td>
                                                    <td>19/02/2020</td>
                                                    <td><span class="label label-success">Paid</span></td>
                                                </tr>
                                            <tr>
                                                    <th class="text-muted">Adobe Family</th>
                                                    <td>20/02/2014</td>
                                                    <td>19/02/2020</td>
                                                    <td><span class="label label-success">Paid</span></td>
                                                </tr>
                                            <tr>
                                                    <th class="text-muted">Apple Technology</th>
                                                    <td>20/02/2014</td>
                                                    <td>19/02/2020</td>
                                                    <td><span class="label label-danger">Unpaid</span></td>
                                                </tr>
                                            <tr>
                                                    <th class="text-muted">Envato Pty Ltd.</th>
                                                    <td>20/02/2014</td>
                                                    <td>19/02/2020</td>
                                                    <td><span class="label label-success">Paid</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>


                        		</div>
                            </div><!-- end col-->


                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

            </div>
            <!-- End content-page -->


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
            
            

            <footer class="footer text-right">
                2016 © SaSINFRA.
            </footer>
        </div>
        <!-- END wrapper -->


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>

        <!--Morris Chart-->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- Counter Up  -->
        <script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <!-- Page specific js -->
        <script src="assets/pages/jquery.dashboard.js"></script>
    </body>
</html>
