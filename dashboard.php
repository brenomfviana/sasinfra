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
    <body class="fixed-left" onload="searchQuatitySchedules()">
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
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb p-0">
                                        <li>
                                            <a href="#">SaSINFRA</a>
                                        </li>
                                        <li>
                                            Dashboard
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="card-box tilebox-one">
                                    <i class=" icon-speech pull-xs-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase m-b-20">Agendamentos de Auditórios</h6>
                                    <!-- <h2 class="m-b-20" data-plugin="counterup" id="schedules1">  </h2> -->
                                    <h2 id="schedules1">  </h2>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="card-box tilebox-one">
                                    <i class="zmdi zmdi-car pull-xs-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase m-b-20">Agendamentos de Carros</h6>
                                    <!-- <h2 class="m-b-20" data-plugin="counterup" id="schedules2">  </h2> -->
                                    <h2 id="schedules2">  </h2>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="card-box tilebox-one">
                                    <i class="icon-people pull-xs-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase m-b-20">Clientes</h6>
                                    <!-- <h2 class="m-b-20" data-plugin="counterup" id="schedules3">  </h2> -->
                                    <h2 id="schedules3">  </h2>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xs-12 col-lg-12 col-xl-12">
                                <div class="card-box">

                                    <h4 class="header-title m-t-0 m-b-20">Estátísticas de Agendamentos</h4>

                                    <div class="text-xs-center">
                                        <ul class="list-inline chart-detail-list m-b-0">
                                            <li class="list-inline-item">
                                                <h6 style="color: #3db9dc;">CARROS</h6>
                                            </li>
                                            <li class="list-inline-item">
                                                <h6 style="color: #1bb99a;">AUDITÓRIOS</h6>
                                            </li>
                                        </ul>
                                    </div>

                                    <div id="morris-bar-stacked" style="height: 320px;"></div>

                        		</div>
                            </div>
                            <!-- end col-->
                        </div>
                        <!-- end row -->
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
        
        <script src="assets/js/jquery.min.js"></script>
            
            <script type="text/javascript" >
                
                //get the schedules at a external json file
                var json = (function () {
                    var json = null;
                    $.ajax({
                        'async': false,
                        'global': false,
                        'url': "./database/user_admin_schedules.json",
                        'dataType': "json",
                        'success': function (data) {
                            json = data;
                        }
                    });
                    return json;
                })();
                
                //get the schedules at a external json file
                var json2 = (function () {
                    var json2 = null;
                    $.ajax({
                        'async': false,
                        'global': false,
                        'url': "./database/users.json",
                        'dataType': "json",
                        'success': function (data) {
                            json2 = data;
                        }
                    });
                    return json2;
                })();
                
                function searchQuatitySchedules() {
                    var table_content = "";
                    var object = json;
                    var i = 0;
                    var quantity1 = 0, quantity2 = 0, quantity3 = 0;
                    
                    //alert(object.defaultEvents[0].className);
                    //alert(object.schedules[0].quantity);
                    
                    // Quantity of schedules.
                    while(i < object.defaultEvents.length) {
                        if(object.defaultEvents[i].className == "bg-danger") {
                            quantity1++;
                        } else if(object.defaultEvents[i].className == "bg-primary") {
                            quantity2++;
                        }
                           
                        i++;
                    }
                    
                    
                    document.getElementById("schedules1").textContent  = quantity1;
                    document.getElementById("schedules2").textContent  = quantity2;
                    
                    // Quantity of users.
                    var object2 = json2;
                    //alert(JSON.stringify(object2));
                    //alert(object2.users.length);
                    quantity3 = object2.users.length;
                    
                    document.getElementById("schedules3").textContent  = quantity3;
                    
                }
                
            </script>
        

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
