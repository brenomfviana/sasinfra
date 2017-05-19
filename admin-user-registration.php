<?php
    // Check login
    if (isset($_POST["username"]) &&
        isset($_POST["name"]) &&
        isset($_POST["password"])) {
        //
        echo("<h1 stile=\"color=#111\">PQP</h1>");
    }
?>

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
        <title>Cadastrar Usuário - SaSINFRA</title>
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
                                    <h4 class="page-title">Cadastrar Usuário</h4>
                                    <ol class="breadcrumb p-0">
                                        <li>
                                            SaSINFRA
                                        </li>
                                        <li>
                                            Usuários
                                        </li>
                                        <li class="active">
                                            Cadastrar Usuário
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-inline">
                                    <!-- LOGIN FORM -->
                                    <form role="form" method="post">
                                        <div class="form-group">
                                            <label class="control-label" for="f_name">Username</label>
                                            <input type="text" class="form-control input-text" id="f_username" placeholder="" maxlength="100" required="required">
                                        </div><br>
                                        <div class="form-group">
                                            <label class="control-label" for="f_name">Nome</label>
                                            <input type="text" class="form-control input-text" id="f_name" placeholder="" maxlength="100" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="f_email">Email</label>
                                            <input type="email" class="form-control input-text" id="f_email" placeholder="" maxlength="55" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="f_cpf">CPF</label>
                                            <input type="text" class="form-control input-text" id="f_cpf" placeholder="000.000.000-00" maxlength="12" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="f_phone">Telefone</label>
                                            <input type="text" class="form-control input-text" id="f_phone" placeholder="(DDD) 3000-0000" maxlength="12" required="required">
                                        </div>
                                        <h5 class="m-t-20 m-b-10 sheading">Data de Nascimento</h5>
                                        <!-- inline -->
                                        <div class="form-inline form-birthday">
                                            <label class="control-label" for="f_day">Dia</label>
                                            <select id="f_day" class="form-control" required="required">
                                                <option selected="selected" disabled="disabled" value=""></option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                                <option>13</option>
                                                <option>14</option>
                                                <option>15</option>
                                                <option>16</option>
                                                <option>17</option>
                                                <option>18</option>
                                                <option>19</option>
                                                <option>20</option>
                                                <option>21</option>
                                                <option>22</option>
                                                <option>23</option>
                                                <option>24</option>
                                                <option>25</option>
                                                <option>26</option>
                                                <option>27</option>
                                                <option>28</option>
                                                <option>29</option>
                                                <option>30</option>
                                                <option>31</option>
                                            </select>

                                            <label class="control-label" for="f_month">Mês</label>
                                            <select id="f_month" class="form-control" required="required">
                                                <option selected="selected" disabled="disabled" value=""></option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                            </select>

                                            <label class="control-label" for="f_year">Ano</label>
                                            <select id="f_year" class="form-control" required="required">
                                                <option selected="selected" disabled="disabled" value=""></option>
                                                <option>2000</option>
                                                <option>1999</option>
                                                <option>1998</option>
                                                <option>1997</option>
                                                <option>1996</option>
                                                <option>1995</option>
                                                <option>1994</option>
                                                <option>1993</option>
                                                <option>1992</option>
                                                <option>1991</option>
                                                <option>1990</option>
                                                <option>1989</option>
                                                <option>1988</option>
                                                <option>1987</option>
                                                <option>1986</option>
                                                <option>1985</option>
                                                <option>1984</option>
                                                <option>1983</option>
                                                <option>1982</option>
                                                <option>1981</option>
                                                <option>1980</option>
                                                <option>1979</option>
                                                <option>1978</option>
                                                <option>1977</option>
                                                <option>1976</option>
                                                <option>1975</option>
                                                <option>1974</option>
                                                <option>1973</option>
                                                <option>1972</option>
                                                <option>1971</option>
                                                <option>1970</option>
                                                <option>1969</option>
                                                <option>1968</option>
                                                <option>1967</option>
                                                <option>1966</option>
                                                <option>1965</option>
                                                <option>1964</option>
                                                <option>1963</option>
                                                <option>1962</option>
                                                <option>1961</option>
                                                <option>1960</option>
                                                <option>1959</option>
                                                <option>1958</option>
                                                <option>1957</option>
                                                <option>1956</option>
                                                <option>1955</option>
                                                <option>1954</option>
                                                <option>1953</option>
                                                <option>1952</option>
                                                <option>1951</option>
                                                <option>1950</option>
                                                <option>1949</option>
                                                <option>1948</option>
                                                <option>1947</option>
                                                <option>1946</option>
                                                <option>1945</option>
                                                <option>1944</option>
                                                <option>1943</option>
                                                <option>1942</option>
                                                <option>1941</option>
                                                <option>1940</option>
                                                <option>1939</option>
                                                <option>1938</option>
                                                <option>1937</option>
                                            </select>
                                        </div>
                                        <h5 class="m-t-20 m-b-10 sheading">Endereço</h5>
                                        <div class="form-group">
                                            <label class="control-label" for="f_cep">CEP</label>
                                            <input type="text" class="form-control input-text" id="f_cep" placeholder="" maxlength="15" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="f_address">Logradouro</label>
                                            <input type="text" class="form-control input-text" id="f_address" placeholder="" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="f_complement">Complemento</label>
                                            <input type="text" class="form-control input-text" id="f_complement" placeholder="" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="f_number">Número</label>
                                            <input type="text" class="form-control input-text" id="f_number" placeholder="" maxlength="6" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="f_neighborhood">Bairro</label>
                                            <input type="text" class="form-control input-text" id="f_neighborhood" placeholder="" maxlength="100" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="f_city">Cidade</label>
                                            <input type="text" class="form-control input-text" id="f_city" placeholder="" maxlength="40" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="f_state">Estado</label>
                                            <input type="text" class="form-control input-text" id="f_state" placeholder="" maxlength="25" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="f_country">País</label>
                                            <input type="text" class="form-control input-text" id="f_country" placeholder="" maxlength="25" required="required">
                                        </div><br>
                                        <div class="form-button">
                                            <input type="submit" class="btn sinfra-btn send m-t-20" value="Cadastrar">
                                        </div>
                                    </form>
                                </div>
							</div>
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
