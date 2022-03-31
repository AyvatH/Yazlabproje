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
                <a href="siskontrol" class="b-brand">
                    <div class="b-bg">
                    <i ><img src="{{url('images/logoo.png')}}" width="50px" height="50px"></i>
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
                                        <h5 class="m-b-10">Danışman Ekle</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="siskontrol"><i class="feather icon-home"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Danışman Ekle</h5>
                                        </div>
                                       @forelse ($bilgi as $key => $val)
                                        <input  type="hidden" class="form-control" name="kadd"  {{ $akey=$val ['id']}} placeholder="Kullanıcı Adı">

                                        {{-- @php
                                        dd($val['aktif_donem'])
                                    @endphp --}}
                                    @if ($val['aktif_donem']=="aktif")
                                    <input type="hidden" class="form-control"  {{ $veri=$val ['donem_adi']}} placeholder="1">
                                    <input type="hidden" class="form-control"  {{ $verii=$val ['id']}} placeholder="2">

                                    @else

                                    @endif
                            @empty
                            @endforelse
                            <form id="addCustomer"  class="form-group" method="POST" >
                                @csrf <!-- {{ csrf_field() }} -->
                                        <div class="card-body">
                                            <label for="exampleFormControlSelect1">Dönem</label>
                                                            <select  class="form-control" id="exampleFormControlSelect1">
                                                                <option>Seçiniz</option>
                                                                <option>{{ $veri}}</option>
                                                            </select>
                                            <hr>
                                            <input type="hidden" class="form-control" value="{{$verii}}" name="donem" id="donem" placeholder="Ad">
                                                        <div class="form-group">
                                                            <label for="exampleNameSurname">Ad</label>
                                                            <input type="text" class="form-control" name="ad" id="exampleNameSurname" placeholder="Ad">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleNameSurname">Soyad</label>
                                                            <input type="text" class="form-control" name="soyad" id="exampleNameSurname" placeholder="Soyad">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Mail Adresi</label>
                                                            <input type="email" class="form-control" name="eposta" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="@kocaeli.edu.tr">
                                                        </div>



                                                        <div class="col-sm-12">

                                                        </div>

                                                </div>
                                                <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label>Ünvan</label>
                                                            <input type="text" class="form-control" name="unvan" placeholder="Ünvan">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Sicil No</label>
                                                            <input type="text" class="form-control" name="sicilno" id="sicilno" placeholder="1834">
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Şifre</label>
                                                            <input type="password" class="form-control" name="sifre" id="exampleInputPassword1" placeholder="Şifre"><div class="form-group">

                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <button type="submit" class="btn btn-outline-primary" title="Projeyi Öner" data-toggle="tooltip">Kaydet ve Bilgileri Gönder</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                            <!-- [ Main Content ] end -->
                        </div>
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
