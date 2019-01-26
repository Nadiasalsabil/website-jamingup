<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Jamingup Studio</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ url("assetadmin/bootstrap/css/bootstrap.min.css") }}">
  <link rel="stylesheet" href="{{ url("assetadmin/plugins/jvectormap/jquery-jvectormap-1.2.2.css") }}">
  <link rel="stylesheet" href="{{ url("assetadmin/dist/css/AdminLTE.min.css") }}">
  <link rel="stylesheet" href="{{ url("assetadmin/dist/css/skins/_all-skins.min.css") }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>

  <body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
     <header class="main-header">
       <a href="index2.html" class="logo">
        <span class="logo-lg">Jamingup Studio</span>
      </a>
     <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
     <div class="navbar-custom-menu">
       </div>
  </nav>
</header>
 
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel"><br>
        <img src="{{ url("assetlogin/images/logo/logo1.png") }}" width="200px" height="80px" alt="User Image">
       </div>
     
      <ul class="sidebar-menu">
        <li class="header">JAMINGUP STUDIO</li>
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-tv"></i> <span><b>Master Data</b></span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
           <ul class="treeview-menu">
            <li><a href="{{url('anggota')}}"><i class="fa fa-circle-o"></i> Anggota </a></li>
          </ul>
          <li><a href=""><i class="glyphicon glyphicon-list-alt"></i><b>J.Artikel</b> </a></li>
          <li><a href=""><i class="glyphicon glyphicon-briefcase"></i><b>J.Dokumen</b> </a></li>
          <li><a href=""><i class="glyphicon glyphicon-paperclip"></i><b>J.Project</b> </a></li>
        </li>       
      </li>
  </section>
</aside>
  
  <div class="content-wrapper">
    <section class="content-header">
      </section>

<section class="content">
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>
          <div class="info-box-content"><br><br>
           <span class="info-box-text">Data Anggota</span>
          </div>
        </div>
      </div>
    
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="ion ion-ios-gear-outline"></i></span>
           <div class="info-box-content"><br><br>
              <span class="info-box-text">Data Artikel</span>
            </div>
        </div>
      </div>
  
    <div class="clearfix visible-sm-block"></div>
      <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-gear-outline"></i></span>
              <div class="info-box-content"><br><br>
            <span class="info-box-text">Data Project</span>
           </div>
          </div>
      </div>
       
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-gear-outline"></i></span>
          <div class="info-box-content"><br><br>
            <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                  Logout
                    </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </div>
      </div>
    </div>
  </div>

@yield('_title')

  <div class="box-footer">
        @yield('_content')
  </div>
</div>

<script src="{{ url("assetadmin/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
<script src="{{ url("assetadmin/bootstrap/js/bootstrap.min.js") }}"></script>
<script src="{{ url("assetadmin/plugins/fastclick/fastclick.js") }}"></script>
<script src="{{ url("assetadmin/dist/js/app.min.js") }}"></script>
<script src="{{ url("assetadmin/plugins/sparkline/jquery.sparkline.min.js") }}"></script>
<script src="{{ url("assetadmin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") }}"></script>
<script src="{{ url("assetadmin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js") }}"></script>
<script src="{{ url("assetadmin/plugins/slimScroll/jquery.slimscroll.min.js") }}"></script>
<script src="{{ url("assetadmin/plugins/chartjs/Chart.min.js") }}"></script>
<script src="{{ url("assetadmin/dist/js/pages/dashboard2.js") }}"></script>
<script src="{{ url("assetadmin/dist/js/demo.js") }}"></script>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>JamingupStudio</b> 
    </div>
    <strong>Copyright &copy; <strong>Jamingup Studio</strong> All rights
    reserved.
  </footer>
  
</body>
</html>







  
