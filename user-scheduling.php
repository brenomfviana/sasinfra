<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="O sistema de agendamento de carros e auditório da SINFRA">
        <meta name="author" content="SaSINFRA">
        <!-- Icon -->
        <link rel="icon" href="assets/images/icon.png">
        <!-- App title -->
        <title>Agendamento - SaSINFRA</title>
        <!-- Switchery css -->
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
        <!--calendar css-->
        <link href="assets/plugins/fullcalendar/dist/fullcalendar.css" rel="stylesheet" />
        <!-- App CSS -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <!-- Modernizr js -->
        <script src="assets/js/modernizr.min.js"></script>
    </head>
    <body class="fixed-left">
        <div class="client">
            <div id="wrapper-page">
                <!-- Top Bar Start -->
                <div class="topbar">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="user-scheduling.php" class="logo">
                        <i class="zmdi zmdi-group-work icon-c-logo white"></i>
                        <span class="white">SaSINFRA</span></a>
                    </div>


                    <nav class="navbar navbar-custom">
                        <ul class="nav navbar-nav pull-right">
                            
                            <li class="nav-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="assets/images/users/avatar-1.jpg" alt="user" class="img-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow profile-dropdown " aria-labelledby="Preview">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="text-overflow"><small>Bem-vindo, <?php echo $_COOKIE["username"];?>!</small> </h5>
                                    </div>
                                    <!-- item-->
                                    <a href="javascript:leave();" class="dropdown-item notify-item"> 
                                        <i class="zmdi zmdi-power"> </i> <span>Sair</span> 
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Top Bar End -->

                <!-- ============================================================== -->
                <!-- Start right Content here -->
                <!-- ============================================================== -->

                <div class="content-page">
                    <!-- Start content -->
                    <div class="content">
                        <!-- Start container -->
                        <div class="container">
                            <!-- Start row -->
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="page-title-box">
                                        <h4 class="page-title">Fazer agendamento</h4>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card-box">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div id="calendar"></div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                    <!-- BEGIN MODAL -->
                                    <div class="modal fade none-border" id="event-modal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h5 class="modal-title">Adicione um agendamento</h5>
                                                </div>
                                                <div class="modal-body p-20">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Fechar</button>
                                                    <button type="button" class="btn btn-success save-event waves-effect waves-light">Criar agendamento</button>
                                                    <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END MODAL -->
                                </div>
                                <!-- end col-12 -->
                            </div>
                            <!-- end row -->
                            <input type="hidden" name="username" id="username" value="<?php echo $_COOKIE["username"];?>"></input>
                            <input type="hidden" name="usertype" id="usertype" value="<?php echo $_COOKIE["usertype"];?>"></input>
                        </div>
                        <!-- container -->
                    </div>
                    <!-- content -->
                </div>
                <!-- End content-page -->

                <!-- ============================================================== -->
                <!-- End Right content here -->
                <!-- ============================================================== -->

                <footer class="footer text-right">
                    2017 © SaSINFRA.
                </footer>
            </div>
            <!-- END wrapper -->
        </div>
    
        <script type="text/javascript">
            function leave(){
               // delete the cookie by changing your values.
               document.cookie = "username=; usertype=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
               document.cookie = "path=index.php";
               // redirecting the page.   
               window.location.href = "index.php";
            }
        </script>
        
        <script>
            var resizefunc = [];
        </script>
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/tether.min.js"></script>
        <!-- Tether for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <!-- Jquery-Ui -->
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- BEGIN PAGE SCRIPTS -->
        <script src="assets/plugins/moment/moment.js"></script>
        <script src='assets/plugins/fullcalendar/dist/fullcalendar.js'></script>
        <script src='assets/plugins/fullcalendar/dist/lang/pt-br.js'></script>
        <script src="assets/pages/jquery.fullcalendar.js"></script>
        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
    </body>
</html>
