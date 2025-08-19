<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset ('admin/css/app.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset ('admin/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset ('admin/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset ('admin/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href="{{ asset ('admin/img/favicon.ico')}}" />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
         
       
          <li class="dropdown">  
            <a href="auth-login.html" class="dropdown-item has-icon text-danger"> 
                <i  style="font-size: 30px;" class="fas fa-sign-out-alt"></i>
            </a>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="{{ asset ('admin/img/logo.png')}}" class="header-logo" /> <span
                class="logo-name">Otika</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="briefcase"></i><span>Tables</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="widget-chart.html">Chart Widgets</a></li>
                <li><a class="nav-link" href="widget-data.html">Data Widgets</a></li>
              </ul>
            </li>
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
         
        
            <h3>Welcome to AdminPanel</h3>
         
        
        </section>
       
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">Templateshub</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ asset ('admin/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{ asset ('admin/bundles/apexcharts/apexcharts.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{ asset ('admin/js/page/index.min.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{ asset ('admin/js/scripts.min.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset ('admin/js/custom.js')}}"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>