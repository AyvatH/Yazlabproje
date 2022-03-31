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
   <link rel="icon" href="{{url('images/logoo.png')}}" type="image/x-icon">
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
               <a href="dananasay" class="b-brand">
                   <div class="b-bg">
                   <i ><img src="{{url('images/logoo.png')}}" width="50px" height="50px"></i>
                   </div>
                   <span class="b-title">Danışman</span>
               </a>
               <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
           </div>
            <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Başvurular</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="danproje" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Proje Önerileri</span></a>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="danrapor" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Rapor Önerileri</span></a>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="dantez" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Tez Önerileri</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Öğrenci Listesi</label>
                    </li>
                    <li data-username="form elements advance componant validation masking wizard picker select" class="nav-item">
                        <a href="danogrlist" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Liste</span></a>
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
            <a href="giris" class="b-brand">
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
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">


                                <img src="images/user/avatar-2.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>{{ session()->get('dan')->ad.' '.session()->get('dan')->soyad }}</span>
                                <a href="dancikis" class="dud-logout" title="Çıkış">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="danprofil" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>

                            </ul>
                        </div>
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
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Öğrenci Listesi</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dananasay"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Öğrenci Listesi</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">

                            <!-- [ Hover-table ] start -->
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Öğrenci Listesi</h5>
                                    </div>
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Profil</th>
                                                        <th>Ad</th>
                                                        <th>Soyad</th>
                                                        <th>Numara</th>
                                                        <th>Sınıf</th>
                                                        <th>E-posta</th>

                                                    </tr>
                                                </thead>
                                                <tbody >
                                                    <input  type="hidden" class="form-control" name="danid" value="{{ session()->get('dan')->id}}"  >


                                                    @forelse ($bilgi2 as $key2 => $val2)
                                                    <input  type="hidden" class="form-control" name="kad"  {{ $akey2=$val2 ['id']}} placeholder="Kullanıcı Adı">

                                                    <tr>
                                                        <td><img class="rounded-circle" style="width:40px;" src="images/user/avatar-2.jpg" alt="activity-user"></td>
                                                        <td>{{  $val2 ['ad']}}</td>
                                                        <td>{{ $val2 ['soyad'] }}</td>
                                                         <td>{{ $val2 ["no"]}}</td>
                                                         <td>{{ $val2 ["sinif"]}}</td>
                                                         <td>{{ $val2 ["eposta"]}}</td>

                                    </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4">Veri bulunamadı</td>
                                        </tr>
                                        @endforelse


                                        </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ Hover-table ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Required Js -->
<script src="{{url('js/pcoded.min.js')}}"></script>
<script src="{{url('js/vendor-all.min.js')}}"></script>
<script src="{{url('plugins/bootstrap/js/bootstrap.min.js')}}"></script>


</body>
</html>
