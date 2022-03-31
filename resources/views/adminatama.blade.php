<!DOCTYPE html>
<html lang="en">

<head>
    <title>PTS</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

     <!-- Favicon icon -->
  <link rel="icon" href="{{url('images/favicon.ico')}}" type="image/x-icon">
  <!-- fontawesome icon -->
  <link rel="stylesheet" href="{{url('fonts/fontawesome/css/fontawesome-all.min.css')}}">
  <!-- animation css -->
  <link rel="stylesheet" href="{{url('css/animate.min.css')}}">
  <!-- vendor css -->
  <link rel="stylesheet" href="{{url('css/style.css')}}">

</head>

<body>
   <!-- [ Pre-loader ] start
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
   [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->

    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="siskontrol" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                     <span class="b-title">Sistem Yöneticisi</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Kontrol Paneli</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="siskontrol" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Kontrol Paneli</span></a>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="{{route("admin.atama.goster")}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Atama İşlemi</span></a>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Kayıt</label>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                        <a href="sisogrekle" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Öğrenci Kayıt</span></a>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                        <a href="sisdanekle" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Danışman Kayıt</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Dönem</label>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                        <a href="donemekle" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Dönem Ekleme</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Profil</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                            <a href="sisprofile" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Kişisel Bilgiler</span></a>
                        </li>




                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="siskontrol" class="b-brand">
                   <div class="b-bg">
                       <i class="feather icon-trending-up"></i>
                   </div>
                   <span class="b-title">Datta Able</span>
               </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">

            <ul class="navbar-nav ml-auto">
                <li>

                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="images/user/avatar-2.jpg" class="img-radius" alt="User-Profile-Image">
                               <span>{{ session()->get('yon')->unvan}}</span>
                                <a href="yoncikis" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">

                                <li><a href="sisprofile" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>

                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
                </li>
            </ul>
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
   <!-- [ breadcrumb ] end -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- [ Main Content ] start -->
            <div class="row">


                    <div class="card">
                        <div class="card-body">
                            <h5>Atama İşlemi</h5>
                            <hr>
                            <form action="{{ route('admin.atama') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div style="padding:10px">
                                  <label for="file">Atama İşlemini Başlat</label>

                                  <button type="submit" class="btn btn-outline-primary"   title="Atama İşlemini Başlat" data-toggle="tooltip">Atama İşlemini Başlat</button>

                              </form>
                            <hr>
                            <div class="col-sm-12">
                                <div class="card">

                                </div>
                            </div>

                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                            </div>
                            @endif








                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Required Js -->
<script src="{{url('js/pcoded.min.js')}}"></script>
<script src="{{url('js/vendor-all.min.js')}}"></script>
<script src="{{url('plugins/bootstrap/js/bootstrap.min.js')}}"></script>,


</div>
