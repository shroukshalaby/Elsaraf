<!DOCTYPE html>
<html>
<head>
    <link href="https://backstrap.net/https://backstrap.net/vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="https://backstrap.net/https://backstrap.net/vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="https://backstrap.net/https://backstrap.net/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://backstrap.net/https://backstrap.net/vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link href="https://backstrap.net/css/style.css" rel="stylesheet">
    <link href="https://backstrap.net/https://backstrap.net/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    @stack('head')
</head>
<body class="app aside-menu-fixed sidebar-lg-show  pace-done">

    <div class="main">
            <header class="app-header bg-dark border-0 navbar">
                <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show"><span class="navbar-toggler-icon"></span></button>
                <ul class="nav navbar-nav d-md-down-none">
                <li class="nav-item px-3"><a class="nav-link" href="#"><img src="/elsarafTemplate/img/logos/whiteLogo.png" width="100"/></a></li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown"><a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-avatar" src="https://backstrap.net/img/avatars/6.jpg" alt="admin@bootstrapmaster.com"></a>
                    <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header"><strong>Account</strong></div><a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="badge badge-info">42</span></a><a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success">42</span></a><a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="badge badge-danger">42</span></a><a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span class="badge badge-warning">42</span></a>
                    <div class="dropdown-header"><strong>Settings</strong></div><a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a><a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a><a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="badge badge-secondary">42</span></a><a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a><a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
                    </div>
                </li>
                </ul>
                <button class="navbar-toggler aside-menu-toggler d-lg-none mr-3" type="button" data-toggle="aside-menu-show"><span class="navbar-toggler-icon"></span></button>
            </header>
            <div class="app-body" style="height:100vh;">
                <div class="sidebar sidebar-pills" style="background: #eceff3;">
                <nav class="sidebar-nav ps">
                    <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="index.html"><i class="nav-icon la la-lg la-dashboard"></i> Dashboard</a></li>
                    <li class="nav-item nav-dropdown"><a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-lg la-star"></i> Merchant Info</a>
                        <ul class="nav-dropdown-items">
                        <li class="nav-item"><a class="nav-link" href=""> Requests<span class="badge badge-danger">NEW</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="">Pending</a></li>
                        <li class="nav-item"><a class="nav-link" href=""> Refused </a></li>
                        <li class="nav-item"><a class="nav-link" href=""> Accepted</a></li>
                        <li class="nav-item"><a class="nav-link" href=""> Help</a></li>
                        <li class="nav-item"><a class="nav-link" href=""> Emergency Team</a></li>
                        <li class="nav-item"><a class="nav-link" href=""> Integration Team</a></li>
                        </ul>
                    </li>
                    </ul>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></nav>
                </div>
                <main class="main">
                @yield('content')
                </main>
            </div>
            <footer class="app-footer bg-dark">
                <div class="text-center w-100"><a href="http://backstrap.net">Powered by Elsaraf</a><span>&nbsp;© 2020</span></div>
            </footer>
        </div>
    </div>
      <!-- CoreUI and necessary plugins-->
      <script src="https://backstrap.net/vendors/jquery/js/jquery.min.js"></script>
      <script src="https://backstrap.net/vendors/popper.js/js/popper.min.js"></script>
      <script src="https://backstrap.net/vendors/bootstrap/js/bootstrap.min.js"></script>
      <script src="https://backstrap.net/vendors/pace-progress/js/pace.min.js"></script>
      <script src="https://backstrap.net/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
      <script src="https://backstrap.net/vendors/@coreui/coreui/js/coreui.min.js"></script>
      <script src="https://backstrap.net/vendors/pnotify/js/Pnotify.js"></script>
      <script src="https://backstrap.net/vendors/pnotify/js/PnotifyButtons.js"></script>
      <script src="https://backstrap.net/vendors/pnotify/js/PnotifyConfirm.js"></script>
      <script src="https://backstrap.net/vendors/pnotify/js/PnotifyMobile.js"></script>
      <script src="https://backstrap.net/vendors/pnotify/js/PnotifyNonBlock.js"></script>
      <script src="https://backstrap.net/vendors/chart.js/js/Chart.min.js"></script>
      <script src="https://backstrap.net/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js"></script>
      <script src="<body class="app aside-menu-fixed sidebar-lg-show  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
</body>
</html>
