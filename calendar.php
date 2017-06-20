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
        <title>Fazer Agendamento - SaSINFRA</title>
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
        <!-- Begin page -->
        <div id="wrapper">

            <?php include 'partials/admin-topbar.php'; ?>
            <?php include 'partials/admin-leftbar.php'; ?>

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
                                    <h4 class="page-title">Calendar</h4>
                                    <ol class="breadcrumb p-0">
                                        <li>
                                            <a href="#">SaSINFRA</a>
                                        </li>
                                        <li>
                                            <a href="#">Agendamentos</a>
                                        </li>
                                        <li>
                                            Calendar
                                        </li>
                                    </ol>
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

        <!-- Jquery-Ui -->
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>

        <!-- BEGIN PAGE SCRIPTS -->
        <script src="assets/plugins/moment/moment.js"></script>
        <script src='assets/plugins/fullcalendar/dist/fullcalendar.min.js'></script>
        <script src='assets/plugins/fullcalendar/dist/lang/pt-br.js'></script>
        <script src="assets/pages/jquery.fullcalendar.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
    </body>
</html>
