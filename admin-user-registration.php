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
                                        <li>
                                            Cadastrar Usuário
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="card-box">

                                
                            <div class="form-inline page-box">
                                <!-- LOGIN FORM -->
                                <form role="form" method="post" action="user-registration.php" onsubmit="register()">
                                    <h5 class="m-t-20 m-b-10 sheading">Dados de Login</h5>
                                    <div class="form-group">
                                        <label class="control-label" for="f_name">Login*</label>
                                        <input type="text" class="form-control input-text" id="f_username" name="f_username" placeholder="" maxlength="100" required="required" onKeyUp="userPress()">
                                        <span id="userValue"></span>
                                        <p>Mínimo 4 caracteres e máximo 16.</p>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="f_password">Senha*</label>
                                        <input type="password" class="form-control input-text" id="f_password" name="f_password" placeholder="" maxlength="100" required="required" onKeyUp="passPress()">
                                        <span id="passValue"></span>
                                        <p>Mínimo 6 caracteres sendo todos alpha-numéricos.</p>
                                    </div>
                                    <div class="form-inline">
                                        <h5 class="m-t-20 m-b-10 sheading">Dados Pessoais</h5>
                                        <input type="radio" id="f_client" name="f_usertype" value="client" class="radio" checked> <label id="f_client_label">Cliente</label>
                                        <input type="radio" id="f_admin" name="f_usertype" value="admin" class="radio"> <label>Administrador</label><br>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="f_name">Nome*</label>
                                        <input type="text" class="form-control input-text" id="f_name" name="f_name" placeholder="" maxlength="100" required="required" onKeyUp="namePress()">
                                        <span id="nameValue"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="f_email">Email*</label>
                                        <input type="email" class="form-control input-text" id="f_email" name="f_email" placeholder="seuEmail@exemplo.com" maxlength="55" required="required" onKeyUp="emailPress()">
                                        <span id="emailValue"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="f_cpf">CPF*</label>
                                        <input type="text" class="form-control input-text" id="f_cpf" name="f_cpf" placeholder="000.000.000-00" maxlength="14" required="required" onKeyUp="cpfPress()" OnKeyPress="formatar('###.###.###-##', this)">
                                        <span id="cpfValue"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="f_phone">Telefone*</label>
                                        <input type="text" class="form-control input-text" id="f_phone" name="f_phone" placeholder="DDD 3000-0000" maxlength="13" required="required" onKeyUp="telPress()" OnKeyPress="formatar('## #####-####', this)">
                                        <span id="telValue"></span>
                                    </div>
                                    <p class="m-t-20 m-b-10 sheading"><strong>Data de Nascimento</strong></p>
                                    <!-- inline -->
                                    <div class="form-inline form-birthday">
                                        <label class="control-label" for="f_day">Dia*</label>
                                        <select id="f_day" name="f_day" class="form-control" required="required" onchange="diaPress()">
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

                                        <label class="control-label" for="f_month">Mês*</label>
                                        <select id="f_month" name="f_month" class="form-control" required="required" onchange="diaPress()">
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

                                        <label class="control-label" for="f_year">Ano*</label>
                                        <select id="f_year" name="f_year" class="form-control" required="required" onchange="diaPress()">
                                            <option selected="selected" disabled="disabled" value=""></option>
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
                                        <span id="diaValue"></span>
                                    </div>
                                    <p class="m-t-30 m-b-10 sheading"><strong>Endereço</strong></p>
                                    <div class="form-group">
                                        <label class="control-label" for="f_cep">CEP*</label>
                                        <input type="text" class="form-control input-text" id="f_cep" name="f_cep" placeholder="" maxlength="9" required="required" onKeyUp="cepPress()"  OnKeyPress="formatar('#####-###', this)">
                                        <span id="cepValue"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="f_address">Logradouro*</label>
                                        <input type="text" class="form-control input-text" id="f_address" name="f_address" placeholder="" required="required"onKeyUp="logPress()">
                                        <span id="logValue"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="f_complement">Complemento</label>
                                        <input type="text" class="form-control input-text" id="f_complement" name="f_complement" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="f_number">Número*</label>
                                        <input type="text" class="form-control input-text" id="f_number" name="f_number" placeholder="" maxlength="5" required="required"onKeyUp="numPress()">
                                        <span id="numValue"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="f_neighborhood">Bairro*</label>
                                        <input type="text" class="form-control input-text" id="f_neighborhood" name="f_neighborhood" placeholder="" maxlength="100" required="required" onKeyUp="baiPress()">
                                        <span id="baiValue"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="f_city">Cidade*</label>
                                        <input type="text" class="form-control input-text" id="f_city" name="f_city" placeholder="" maxlength="40" required="required" onKeyUp="cidPress()">
                                        <span id="cidValue"></span>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="f_state">Estado*</label>
                                        <input type="text" class="form-control input-text" id="f_state" name="f_state" value="Rio Grande do Norte" maxlength="25" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="f_country">País*</label>
                                        <input type="text" class="form-control input-text" id="f_country" name="f_country" value="Brasil" maxlength="25" disabled>
                                    </div><br>
                                    <div class="form-button">
                                        <input type="submit" id="signin" class="btn sinfra-btn send m-t-20" value="Cadastrar" onclick="register()">
                                        <br/>
                                        <span>Todos os campos marcados com * são obrigatórios!</span>
                                    </div>
                                </form>
                                
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
        <script src="assets/js/signinValidation.js"></script>
        <script src="assets/pages/jquery.dashboard.js"></script>
        
        <!-- User register -->
        <script type="text/javascript">
            // User registration
            function register() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        var html = document.getElementsByTagName("HTML")[0];
                        alert ("entrou");
                    } else if (this.status == 403){
                        alert ("error 403");
                        window.location.pathname = '/pages-403.php';
                        
                    } else if( this.status == 404) {
                        alert ("error 404");
                        window.location.pathname = '/pages-404.php';
                    }
                };
                xhttp.open("POST", "user-registration.php", true);
                xhttp.send();
            }
        </script>
    </body>
</html>
