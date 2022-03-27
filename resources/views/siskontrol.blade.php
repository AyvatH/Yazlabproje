<!DOCTYPE html>
<html lang="en">

<head>
    <title>PTS</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
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
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="siskontrol" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                     <span class="b-title">KOU</span>
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
            <ul class="navbar-nav mr-auto">

            </ul>
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
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">

                                <!-- [ Hover-table ] start -->
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Öğrenci Durum Takip</h5>

                                            <label for="exampleFormControlSelect1">Dönem</label>
                                                            <select class="form-control" id="exampleFormControlSelect1">
                                                                <option>Seçiniz</option>
                                                                <option>2020-2021 Güz</option>
                                                                <option>2020-2021 Bahar</option>
                                                                <option>2021-2022 Güz</option>
                                                                <option>2021-2022 Bahar</option>
                                                            </select>
                                        </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-hover">

                                                    <thead>
                                                        <tr>
                                                            <th>Ad</th>
                                                            <th>Soyad</th>
                                                            <th>Öğrenci Numarası</th>
                                                            <th>Düzenle</th>
                                                            <th>Sil</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody >

                                                        @forelse ($bilgi as $key => $val)
                                                        <input  type="hidden" class="form-control" name="kadd"  {{ $akey=$val ['id']}} placeholder="Kullanıcı Adı">

                                                        <tr>
                                                            <td>{{  $val ['ad']}}</td>
                                                            <td>{{ $val ['soyad']}}</td>
                                                             <td>{{ $val ["no"]}}</td>
                                                            <td>
                                                                <a href="{{url("onayla/".$akey)}}" type="submit" class="label theme-bg text-white f-12">Düzenle</a>

                                                             </td>
                                                             <td>   <a href="{{url("sil/$akey")}}" type="submit" class="label theme-bg2 text-white f-12">Sil</a>
                                            </td></tr>
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




                                <!-- [ Hover-table ] start -->
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Danışman Durum Takip</h5>

                                            <label for="exampleFormControlSelect1">Dönem</label>
                                                            <select class="form-control" id="exampleFormControlSelect1">
                                                                <option>Seçiniz</option>
                                                                <option>2020-2021 Güz</option>
                                                                <option>2020-2021 Bahar</option>
                                                                <option>2021-2022 Güz</option>
                                                                <option>2021-2022 Bahar</option>
                                                            </select>
                                        </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>

                                                            <th>Ad</th>
                                                            <th>Soyad</th>
                                                            <th>Sicil No</th>
                                                            <th>Düzenle</th>
                                                            <th>Sil</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody >

                                                        @forelse ($bilgi2 as $key2 => $val2)
                                                        <input  type="hidden" class="form-control" name="kad"  {{ $akey2=$val2 ['id']}} placeholder="Kullanıcı Adı">

                                                        <tr>
                                                            <td>{{  $val2 ['ad']}}</td>
                                                            <td>{{ $val2 ['soyad'] }}</td>
                                                             <td>{{ $val2 ["sicilno"]}}</td>
                                                            <td>
                                                                <a href="{{url("duzenle/".$akey2)}}" type="submit" class="label theme-bg text-white f-12">Düzenle</a>

                                                             </td>
                                                             <td>   <a href="{{url("sil2/$akey2")}}" type="submit" class="label theme-bg2 text-white f-12">Sil</a>
                                            </td></tr>
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
                                <!-- [ Hover-table ] end -->                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->


<!-- Required Js -->
<script src="{{url('js/pcoded.min.js')}}"></script>
<script src="{{url('js/vendor-all.min.js')}}"></script>
<script src="{{url('plugins/bootstrap/js/bootstrap.min.js')}}"></script>

</body>
</html>
