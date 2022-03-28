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
                   <span class="b-title">Ana Sayfa</span>
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
                                        <h5 class="m-b-10">Öğrenci Kişisel Bilgileri</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="ograna"><i class="feather icon-home"></i></a></li>

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

                                        </div>
                                        <div class="card-body">
                                            <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                                            <h5>Profil Fotoğrafı</h5>
                                            <hr>

                                                  <label for="dosya">Lütfen Fotoğraf Ekleyiniz</label>
                                                  <br>
                                                  <img   src={{ session()->get('ogr')->foto}} width="120px" height="120px" class="img-radius" alt="User-Profile-Image">

                                                  @php
                                                   // dd (session()->get('ogr')->foto);
                                                  @endphp
                                                  <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" value={{ session()->get('ogr')->id}}>
                                                    <input type="file" name="file" class="btn btn-square btn-light"  class="form-control" accept=".png,.jpg">
                                                    <button type="submit" class="btn btn-square btn-dark">Fotoğrafımı Kaydet</button>




                                                    @if ($message = Session::get('success'))
                                                    <div class="alert alert-success alert-block">
                                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                    @endif

                                                    @if (count($errors) > 0)
                                                    <div class="alert alert-danger">
                                                        <strong>Uyarı!</strong> Tüm belgeleri eksiksiz atınız.
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>

                                                    </div>

                                                    @endif
                                                  {{-- <input type="file" class="btn btn-square btn-light" name="dosya"  accept=".png,.jpg,.ımg">
                                                  <button type="button" class="btn btn-square btn-dark">Fotoğrafımı Kaydet</button> --}}
                                                </div>
                                              </form>

                                            <hr>
                                            <hr>

                                                <div class="col-md-6">

                                                    <form>
                                                        <div class="form-group">
                                                            <label for="exampleNameSurname">Ad</label>
                                                            <input type="text" class="form-control" value= "{{session()->get('ogr')->ad}}" readonly id="exampleNameSurname" placeholder="Ad-Soyad">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleNameSurname">Soyad</label>
                                                            <input type="text" class="form-control" value= "{{session()->get('ogr')->soyad}}" readonly id="exampleNameSurname" placeholder="Ad-Soyad">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Öğrenci Mail Adresi</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" value= "{{session()->get('ogr')->eposta}}" readonly aria-describedby="emailHelp" placeholder="@kocaeli.edu.tr">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Öğrenci Numarası</label>
                                                            <input type="text" class="form-control" id="examplestudentid" value= "{{session()->get('ogr')->no}}" readonly placeholder="Öğrenci Numarası">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="examplefaculty">Fakülte</label>
                                                            <input type="text" class="form-control" id="exampleFaculty" value= "{{session()->get('ogr')->fak}}" readonly aria-describedby="emailHelp" placeholder="Fakülte">
                                                        </div>

                                                    </form>
                                                </div>
                                                <div class="col-md-6">
                                                    <form>
                                                        <div class="form-group">
                                                            <label>Bölüm</label>
                                                            <input type="text" class="form-control" value= "{{session()->get('ogr')->bolum}}" readonly placeholder="Bölüm">
                                                        </div>
                                                        <div class="form-group">


                                                            <div class="form-group">
                                                                <label for="examplefaculty">Telefon Numarası</label>
                                                                <input type="text" class="form-control" value= "{{session()->get('ogr')->tel}}" readonly id="examplephone" aria-describedby="emailHelp" placeholder="+9005000000000">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="exampleDanisman">Danışman</label>
                                                            <input type="text" class="form-control" value= "{{$title->ad." ".$title->soyad}}" readonly id="exampleDanisman" aria-describedby="emailHelp" placeholder="Ad-Soyad">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleDanisman">Danışman EMAIL</label>
                                                            <input type="text" class="form-control" id="exampleDanisman" value= "{{$title->eposta}}" readonly aria-describedby="emailHelp" placeholder="@kocaeli.edu.tr">
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

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

   <!-- Required Js -->
   <script src="{{url('js/pcoded.min.js')}}"></script>
   <script src="{{url('js/vendor-all.min.js')}}"></script>
   <script src="{{url('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
