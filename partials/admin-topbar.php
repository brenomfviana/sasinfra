<!-- Top Bar Start -->
<div class="topbar">
    
    <!-- LOGO -->
    <div class="topbar-left">
        <a href="dashboard.php" class="logo" id="logo-tour">
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
        </ul>

        <ul class="nav navbar-nav pull-right">
            <li class="nav-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img src="assets/images/users/avatar-1.jpg" alt="user" class="img-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-arrow profile-dropdown " aria-labelledby="Preview">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="text-overflow"><small>Bem-vindo, <?php echo $_COOKIE["username"];?>!</small> </h5>
                    </div>

                    <!-- item-->
                    <a href="javascript:leave();" class="dropdown-item notify-item"> 
                        <i class="zmdi zmdi-power"></i> <span>Sair</span>
                    </a>

                </div>
            </li>

        </ul>

    </nav>
    
    <script type="text/javascript">
        function leave(){
           // delete the cookie by changing your values.
           document.cookie = "username=; usertype=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
           document.cookie = "path=index.php";
           // redirecting the page.  
           window.location.href = "index.php";
        }
    </script>
    
</div>
<!-- Top Bar End -->
