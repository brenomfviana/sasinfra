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
        <title>Login - SaSINFRA</title>
        <!-- Switchery css -->
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
        <!-- App CSS -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="fixed-left">
        <div class="client">
            <!-- Begin page -->
            <div id="wrapper">
                
                <!-- Top Bar Start -->
                <div class="topbar">
                    <nav class="navbar navbar-custom">
                        <div class="topbar-left">
                            <a href="index.html" class="logo"> <i class="zmdi zmdi-group-work icon-c-logo white"></i> <span class="white">SaSINFRA</span></a>
                        </div>
                    </nav>
                </div>
                <!-- Top Bar End -->
                
                
                
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-lg-12 col-xl-12 col-centered">
                                <div class="login">
                                    <div class="text-xs-center">
                                        <h4 class="header-title m-t-0 m-b-20">Login</h4>
                                        <h6 id="error">
                                            <?php
                                                // Check for error
                                                session_start();
                                                if (isset($_SESSION["ERROR"])) {
                                                    echo("Usuário não registrado." ."<br>");
                                                    echo("Se você não tiver cadastro "
                                                        . "<a href=\"admin-user-registration.php\">"
                                                        . "click aqui</a> para requisitar o cadastro.");
                                                }
                                            ?>
                                        </h6>
                                    </div>
                                    <div id="form" class="text-xs-center form-inline">
                                        <!-- LOGIN FORM -->
                                        <form id="login" action="login.php" onsubmit="login();" method="post" autocomplete="off">
                                            <div class="form-group">
                                                <label for="username"> Usuário: </label>
                                                <input type="text" class="form-control" name="username" id="username" required="required">
                                                <br>
                                            </div>
                                            <div class="form-group">
                                                <label for="password"> Senha: </label>
                                                <input type="password" class="form-control" name="password" id="password" required="required">
                                                <br>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <input type="submit" name="login" value="Entrar" class="btn sinfra-btn btn-primary" onclick="login()">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end col-->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container -->
                </div>
                <!-- END content -->
                
                
                
                <!-- Footer -->
                <footer class="footer text-right">
                    <span id="copyright">2017 © SaSINFRA</span>
                </footer>
            </div>
            <!-- END wrapper -->
            
        </div>
        
        <script src="assets/js/jquery.min.js"></script>
        
        <script type="text/javascript">
            // User login
            function login() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        var html = document.getElementsByTagName("HTML")[0];
                    } else if (this.status == 403 || this.status == 404) {
                        alert("Ocorreu um erro.\nO login não pode ser efetuado.");
                    }
                };
                xhttp.open("GET", "login.php", true);
                xhttp.send();
            }
            // Check session
            $(document).ready(function() {
                $.ajax(
                {
                    post: "GET",
                    url: "check-session.php"
                }).done(function() 
                {
                    // alert("asd");
                }).fail(function() 
                {
                    // alert("asds");
                });
            
            });
        </script>
    </body>
</html>
