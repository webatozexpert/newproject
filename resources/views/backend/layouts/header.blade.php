

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" src="../../erps.ico" type="image/x-icon" />
  
  
  <link rel="shortcut icon" href="../../erps.ico" type="image/x-icon" />

  <title>Admin</title>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link href="{{asset('public/backend')}}/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{asset('public/backend')}}/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Ionicons -->
  <link href="{{asset('public/backend')}}/bower_components/Ionicons/css/ionicons.min.css" rel="stylesheet">
  <!-- Theme style -->
  <link href="{{asset('public/backend')}}/dist/css/AdminLTE.min.css" rel="stylesheet">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link href="{{asset('public/backend')}}/dist/css/skins/_all-skins.min.css" rel="stylesheet">

 

  <style type="text/css">
    .grid-views { overflow: auto;}
  </style>
 
    <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- jQuery 3 -->
<script src="{{asset('public/backend')}}/bower_components/jquery/dist/jquery.min.js"></script>
<style>
        .notifyjs-corner {
            z-index: 10000 !improtant
        }

    </style>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{asset('public/backend')}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
</head>
<!-- the fixed layout is not compatible with sidebar-mini -->
<body class="hold-transition skin-blue fixed sidebar-mini">

<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="{{route('home')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Allah</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Aver Fresh Limited</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="{{route('home')}}" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{(!empty(Auth::user()->image))?url('public/upload/user_images/'.Auth::user()->image):url('public/upload/no_imgae .png')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
  
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();" title="Sign-Out" class="btn btn-default btn-flat">
                  <span>Logout</span></a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
                </div>
                <div class="pull-right">
                   <a  href="{{route('profile.password.view')}}" title="Account Settings" class="btn btn-default btn-flat">Password Change</a>
                </div>
              </li>
            </ul>

            
          </li>
        </ul>
      </div>
    </nav>
  </header>
