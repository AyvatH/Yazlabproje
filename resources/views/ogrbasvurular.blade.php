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
               <a href="ograna" class="b-brand">
                <div class="b-bg">
                <i ><img src="{{url('images/logoo.png')}}" width="50px" height="50px"></i>
                </div>
                   <span class="b-title">Öğrenci</span>
               </a>
               <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
           </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Öğrenci Profili</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="ogrprofil" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Öğrenci Bilgileri</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Danışmana Sor</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="ogrproje" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Proje Öner</span></a>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="ogrrapor" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Rapor Öner</span></a>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="ogrtez" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Tez Öner</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Başvurularım</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="ogrbasvurular" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-plus"></i></span><span class="pcoded-mtext">Öğrenci Başvurular</span></a>
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
            <a href="indexogrenci" class="b-brand">
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
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="images/user/avatar-2.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>{{ session()->get('ogr')->ad.' '.session()->get('ogr')->soyad }}</span>
                                <a href="ogrcikis" class="dud-logout" title="Çıkış">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="ogrprofil" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>

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
                                        <h5 class="m-b-10">Başvuru Listesi</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dananasay"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Başvurularım</a></li>
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
                                        <h5>Öğrenci Proje Başvuruları</h5>
                                    </div>
                                    <li><a href="ogrproje" class="dropdown-item"><i class="feather icon-plus"></i>Yeni Proje Öner</a></li>
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>

                                                        <th>Ad</th>
                                                        <th>Soyad</th>
                                                        <th>Numara</th>
                                                        <th>Başvuru Türü</th>
                                                        <th>Başvuru Durumu</th>
                                                    </tr>
                                                </thead>
                                                <tbody >

                                                    @forelse ($bilgi as $key => $val)
                                                    <input  type="hidden" class="form-control" name="kad"  {{ $akey=$val ['id']}} placeholder="Kullanıcı Adı">
                                                    {{-- @php
                                                    dd($bilgi2);
                                                @endphp --}}
                                                    <tr>
                                                        <td>{{  session()->get('ogr')->ad}}</td>
                                                        <td>{{ session()->get('ogr')->soyad }}</td>
                                                        <td>{{ session()->get('ogr')->no }}</td>
                                                         <td>{{ $veri}}</td>
                                                         <td>{{ $val ["durum"]}}</td>
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
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Öğrenci Rapor Başvuruları</h5>
                                    </div>
                                    <li><a href="ogrrapor" class="dropdown-item"><i class="feather icon-plus"></i>Yeni Rapor Öner</a></li>
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>

                                                        <th>Ad</th>
                                                        <th>Soyad</th>
                                                        <th>Numara</th>
                                                        <th>Başvuru Türü</th>
                                                        <th>Başvuru Durumu</th>
                                                    </tr>
                                                </thead>
                                                <tbody >

                                                    @forelse ($bilgi2 as $key2 => $val2)
                                                    <input  type="hidden" class="form-control" name="kad"  {{ $akey2=$val2 ['id']}} placeholder="Kullanıcı Adı">

                                                    <tr>
                                                        <td>{{  session()->get('ogr')->ad}}</td>
                                                        <td>{{ session()->get('ogr')->soyad }}</td>
                                                        <td>{{ session()->get('ogr')->no }}</td>
                                                         <td>{{ $veri2}}</td>
                                                         <td>{{ $val2 ["durum"]}}</td>
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
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Öğrenci Tez Başvuruları</h5>
                                    </div>
                                    <li><a href="ogrtez" class="dropdown-item"><i class="feather icon-plus"></i>Yeni Tez Öner</a></li>
                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>

                                                        <th>Ad</th>
                                                        <th>Soyad</th>
                                                        <th>Numara</th>
                                                        <th>Başvuru Türü</th>
                                                        <th>Başvuru Durumu</th>
                                                    </tr>
                                                </thead>
                                                <tbody >

                                                    @forelse ($bilgi3 as $key3 => $val3)
                                                    <input  type="hidden" class="form-control" name="kad"  {{ $akey3=$val3 ['id']}} placeholder="Kullanıcı Adı">

                                                    <tr>
                                                        <td>{{  session()->get('ogr')->ad}}</td>
                                                        <td>{{ session()->get('ogr')->soyad }}</td>
                                                        <td>{{ session()->get('ogr')->no }}</td>
                                                         <td>{{ $veri3}}</td>
                                                         <td>{{ $val3 ["durum"]}}</td>
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
    <script src="{{url('js/pcoded.min.js')}}"></script>
    <script src="{{url('js/vendor-all.min.js')}}"></script>
    <script src="{{url('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
