<?php
include('Shopify_RegisterPage/sessionadmin.php');
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Selamat Datang di Shopify - Situs Jual Beli Online Mudah Dan Hemat &#9679; Shopify &#9679;</title>
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Lato-Regular", sans-serif;
        }
        
        body,
        html {
            height: 100%;
            color: #777;
            line-height: 1.8;
        }
        /* Create a Parallax Effect */
        .bgimg-1 {
            opacity: 0.9;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .bgimg-2,
        .bgimg-3,
        .bgimg-4 {
            opacity: 0.7;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        /* First image (Logo. Full height) */
        
        .bgimg-1 {
            background-image: url('shopify_logo/Wallpaper/Layout1.jpg');
            min-height: 100%;
        }
        /* Second image (Portfolio) */
        
        .bgimg-2 {
            background-image: url("shopify_logo/Wallpaper/Layout2.jpg");
            min-height: 400px;
        }
        /* Third image (Contact) */
        
        .bgimg-3 {
            background-image: url("shopify_logo/Wallpaper/Layout3.jpg");
            min-height: 400px;
        }
        
        .bgimg-4 {
            background-image: url("shopify_logo/Wallpaper/Layout4.jpg");
            min-height: 400px;
        }
        /* Adjust the position of the parallax image text */
        
        .w3-display-middle {
            bottom: 45%;
        }
        
        .w3-wide {
            letter-spacing: 10px;
        }
        
        .w3-hover-opacity {
            cursor: pointer;
        }
        
        .logo {
            float: left;
            width: 140px;
            height: 50px;
            margin-top: 5px;
        }
        
        .logo1 {
            float: left;
            margin-left: 7px;
            height: 60px;
        }
        
        .logo2 {
            float: left;
            border-radius: 100%;
            height: 30px;
            width: 30px;
            cursor: pointer;
            margin-right: 5px;
        }
        
        .satu {
            background: url('shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat;
        }
        
        .dua {
            background: url('shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat -33px 0px;
        }
        
        .tiga {
            background: url('shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat -65px 0px;
        }
        
        .empat {
            background: url('shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat -98px 0px;
        }
        
        .lima {
            background: url('shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat -129px 0px;
        }
        
        .enam {
            background: url('shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat -160px 0px;
        }
        
        .tujuh {
            background: url('shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat -193px 0px;
        }
        
        .shop {
            margin-left: 50px;
            width: 80px;
            height: 80px;
            border-radius: 100%;
        }
        
        .w3-col p {
            font-size: 10px;
        }
        
        .one {
            background: url('shopify_logo/icon/home.png') no-repeat -5px -10px;
        }
        
        .two {
            background: url('shopify_logo/icon/home.png') no-repeat -5px -110px;
        }
        
        .three {
            background: url('shopify_logo/icon/home.png') no-repeat -5px -205px;
        }
        
        .four {
            background: url('shopify_logo/icon/home.png') no-repeat -9px -300px;
        }
        
        .five {
            background: url('shopify_logo/icon/home.png') no-repeat -5px -400px;
        }
        
        .six {
            background: url('shopify_logo/icon/home.png') no-repeat -5px -496px;
        }
    </style>
    <link rel="icon" href="shopify_logo/favicon.png">
    <link rel="stylesheet" href="HomePage.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS_Frameworks/W3.CSS/w3.css">
    <!-- Bootstrap -->
     <link rel="stylesheet" href="CSS_Frameworks/bootstrap-3.3.6-dist/css/bootstrap.css">
    <link rel="stylesheet" href="CSS_Frameworks/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <script src="CSS_Frameworks/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <!-- KICKSTART -->
    <script src="CSS_Frameworks/HTML-KickStart-master/js/jquery.min.js"></script>
    <script src="CSS_Frameworks/HTML-KickStart-master/js/kickstart.js"></script>
    <link rel="stylesheet" href="CSS_Frameworks/HTML-KickStart-master/css/kickstart.css" media="all" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- KICKSTART -->
</head>

<body>
    <!-- Navigation Bar -->
    <header>
        <nav>
            <div class="w3-top">
                <ul class="w3-navbar w3-left-align w3-large ">
                    
                    <li class="w3-hide-small w3-right"><a href="#" class="w3-hover-white">About</a></li>
                    <li class="w3-hide-medium w3-right w3-dropdown-hover dropdown-li">
                        <a href="#" class="w3-hover-white" title="Profile"><?php echo $login_session; ?>&nbsp;<i class="fa fa-caret-down"></i></a>
                        <div class="w3-dropdown-content dropdown-color profile w3-card-4" style="right:78px">
                            <a href="product.php" class="w3-hover-white ">Product</a>
                            <a href="confirmadmin.php" class="w3-hover-white ">Confirm</a>
                            <a href="Shopify_RegisterPage/logout.php" class="w3-hover-white ">Logout</a>
                        </div>
                    </li>
                    
                        
                    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
                        <a class="w3-hover-white w3-large" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
                    </li>
                    <li><a href="Shopify-HomePage.php" class="homecolor"><i class="fa fa-home w3-margin-right"></i>Shopify</a></li>
                    <li class="w3-hide-small w3-dropdown-hover dropdown-li">
                        <a href="" class="w3-hover-white">Cari Barang</a>
                        <div class="w3-dropdown-content dropdown-color1 w3-card-4">
                            <form method="post" action="searchadmin.php">
                            <label for="cari">Cari&#58;</label>
                            <input type="text" name="cari" id="cari" placeholder="Aku mau beli..." autocomplete="on">
                            </form>
                        </div>
                    </li>
                    <li class="w3-hide-small" onclick="w3_open()"><a class="w3-hover-white" href="javascript:void(0)" >Kategori Barang <i class="fa fa-caret-down"></i></a></li>
                    <li class="w3-hide-small">
                        <div class="center-logo"><img src="shopify_logo/icon-shopify-hire.png" alt="ctr-logo"></div>
                    </li>
                    <nav class="w3-dropnav-content w3-card-4" style="display:none" id="myDropnav">
                        <div class="w3-container">
                        </div>
                        <div class="w3-container w3-margin w3-padding-ver-64">
                            <div class="w3-third w3-padding-small w3-padding-ver-64">
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/makanan.php" title="Makanan">Makanan</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/mobil.php" title="Mobil">Mobil</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/helm.php" title="Helm">Helm</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/kacamata.php" title="Kacamata">Kacamata</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/minuman.php" title="Minuman">Minuman</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/motor.php" title="Motor">Motor</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/permen.php"  title="Permen">Permen</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/sepatu.php" title="Sepatu">Sepatu</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/handphone.php" title="Handphone">Handphone</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/laptop.php" title="Laptop">Laptop</a><br>
                                
                            </div>
                            <div class="w3-third w3-padding-small w3-padding-ver-64">
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/sepeda.php" title="Sepeda">Sepeda</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/jamtangan.php" title="Jam Tangan">Jam Tangan</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/televisi.php" title="Televisi">Televisi</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/aksesorishandphone.php" title="Aksesoris Handphone">Aksesoris Handphone</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/aksesoriskomputer.php" title="Aksesoris Komputer">Aksesoris Komputer</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/printer.php" title="Printer">Printer</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/kamera.php" title="Kamera">Kamera</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/perlengkapanolahraga.php" title="Perlengkapan Olahraga">Perlengkapan Olahraga</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/baju.php" title="Baju">Baju</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/celana.php" title="Celana">Celana</a><br>
                            </div>
                            <div class="w3-third w3-padding-small w3-padding-ver-64">
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/kipasangin.php" title="Kipas Angin">Kipas Angin</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/kulkas.php" title="Kulkas">Kulkas</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/peralatankecantikan.php" title="Peralatan Kecantikan">Peralatan Kecantikan</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/mainan.php" title="Mainan">Mainan</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/kartumemori.php" title="Kartu Memori">Kartu Memori</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/speaker.php" title="Speaker">Speaker</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/alattulis.php" title="Alat Tulis">Alat Tulis</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriAdmin/airconditioner.php" title="Air Conditioner">Air Conditioner</a><br>
                            </div>
                      </div>
                      
                    </nav>
                    <script>
                    var x = document.getElementById("myDropnav");
                    function w3_open() {
                        if (x.className.indexOf("w3-show") == -1) {
                            x.className += " w3-show";
                        } else {
                            x.className = x.className.replace(" w3-show", "");
                        }
                    }
                    function w3_close() {
                        x.className = x.className.replace(" w3-show", "");
                    }
                    </script>
                </ul>
            </div>
        </nav>
    </header>
    <!-- First Layout ( Logo Shopify ) -->
    <div class="bgimg-1 w3-display-container">
        <div class="w3-display-middle">
            <a href="Shopify-HomePage.php"><span class="w3-center w3-animate-opacity shopify-logo"><img src="shopify_logo/Shopify-Logo(FirstLayout).png" alt="Shopify-Logo"></span></a>
        </div>
    </div>

    <!-- Container (About Section) -->
    <div class="w3-content w3-container w3-padding-64" id="about">
        <h4>Daftar Barang Terbaru</h4>
        <!-- Slideshow -->
        <ul class="slideshow">
            <li><img src="shopify_logo/Slide_Show/SlideG.png" alt="ShopifyPromo-G" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide1.png" alt="ShopifyPromo-1" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide2.png" alt="ShopifyPromo-2" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide3.png" alt="ShopifyPromo-3" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide4.png" alt="ShopifyPromo-4" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide5.png" alt="ShopifyPromo-5" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide6.png" alt="ShopifyPromo-6" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide7.png" alt="ShopifyPromo-7" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide8.png" alt="ShopifyPromo-8" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide9.png" alt="ShopifyPromo-9" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide10.png" alt="ShopifyPromo-10" /></li>
            <li><img src="shopify_logo/Slide_Show/Slide11.png" alt="ShopifyPromo-11" /></li>
        </ul>
    </div>

    <!-- Second Parallax Image with "Everyone can buy it." Text -->
    <div class="bgimg-2 w3-display-container parallax">
        <div class="w3-display-middle">
            <span class="w3-xxlarge w3-wide">Everyone can buy it.</span>
        </div>
    </div>

    <!-- Container (Portfolio Section) -->
    <div class="w3-content w3-container w3-padding-64">
        <div class="row">
            <h4>Promo Hari Ini</h4>
            <div class="col-sm-2 col-md-3">
                <div class="thumbnail">
                    <a href="#"><img src="images/Promo/promo1.jpg" alt="Promo"></a>
                </div>
            </div>
            <div class="col-sm-2 col-md-3">
                <div class="thumbnail">
                    <a href="#"><img src="images/Promo/promo2.jpg" alt="Promo"></a>
                </div>
            </div>
            <div class="col-sm-2 col-md-3">
                <div class="thumbnail">
                    <a href="#"><img src="images/Promo/promo3.jpg" alt="Promo"></a>
                </div>
            </div>
            <div class="col-sm-2 col-md-3">
                <div class="thumbnail">
                    <a href="#"><img src="images/Promo/promo4.jpg" alt="Promo"></a>
                </div>
            </div>
            <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="w3-xxlarge w3-center">Data Penjualan Barang di Shopify Tahun 2006 - 2012</h2>
                        <hr>
                    </div>
                </div>
                <!-- /. ROW  -->
                

                <div class="row">


                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Bar Chart Example
                            </div>
                            <div class="panel-body">
                                <div id="morris-bar-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Area Chart Example
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /. ROW  -->
                <div class="row">

                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Donut Chart Example
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Line Chart Example
                            </div>
                            <div class="panel-body">
                                <div id="morris-line-chart"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /. ROW  -->
            
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="w3-xxlarge w3-center">Barang Terpopuler 2016 di Shopify</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Advanced Tables
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>Trident</td>
                                                <td>Internet Explorer 4.0</td>
                                                <td>Win 95+</td>
                                                <td class="center">4</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="even gradeC">
                                                <td>Trident</td>
                                                <td>Internet Explorer 5.0</td>
                                                <td>Win 95+</td>
                                                <td class="center">5</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>Trident</td>
                                                <td>Internet Explorer 5.5</td>
                                                <td>Win 95+</td>
                                                <td class="center">5.5</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="even gradeA">
                                                <td>Trident</td>
                                                <td>Internet Explorer 6</td>
                                                <td>Win 98+</td>
                                                <td class="center">6</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>Trident</td>
                                                <td>Internet Explorer 7</td>
                                                <td>Win XP SP2+</td>
                                                <td class="center">7</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="even gradeA">
                                                <td>Trident</td>
                                                <td>AOL browser (AOL desktop)</td>
                                                <td>Win XP</td>
                                                <td class="center">6</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Firefox 1.0</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.7</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Firefox 1.5</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Firefox 2.0</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Firefox 3.0</td>
                                                <td>Win 2k+ / OSX.3+</td>
                                                <td class="center">1.9</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Camino 1.0</td>
                                                <td>OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Camino 1.5</td>
                                                <td>OSX.3+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Netscape 7.2</td>
                                                <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                <td class="center">1.7</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Netscape Browser 8</td>
                                                <td>Win 98SE+</td>
                                                <td class="center">1.7</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Netscape Navigator 9</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.0</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.1</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.1</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.2</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.2</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.3</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.3</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.4</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.4</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.5</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.5</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.6</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">1.6</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.7</td>
                                                <td>Win 98+ / OSX.1+</td>
                                                <td class="center">1.7</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Mozilla 1.8</td>
                                                <td>Win 98+ / OSX.1+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Seamonkey 1.1</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Gecko</td>
                                                <td>Epiphany 2.20</td>
                                                <td>Gnome</td>
                                                <td class="center">1.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>Safari 1.2</td>
                                                <td>OSX.3</td>
                                                <td class="center">125.5</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>Safari 1.3</td>
                                                <td>OSX.3</td>
                                                <td class="center">312.8</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>Safari 2.0</td>
                                                <td>OSX.4+</td>
                                                <td class="center">419.3</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>Safari 3.0</td>
                                                <td>OSX.4+</td>
                                                <td class="center">522.1</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>OmniWeb 5.5</td>
                                                <td>OSX.4+</td>
                                                <td class="center">420</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>iPod Touch / iPhone</td>
                                                <td>iPod</td>
                                                <td class="center">420.1</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Webkit</td>
                                                <td>S60</td>
                                                <td>S60</td>
                                                <td class="center">413</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 7.0</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 7.5</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 8.0</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 8.5</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 9.0</td>
                                                <td>Win 95+ / OSX.3+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 9.2</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera 9.5</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Opera for Wii</td>
                                                <td>Wii</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Nokia N800</td>
                                                <td>N800</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Presto</td>
                                                <td>Nintendo DS browser</td>
                                                <td>Nintendo DS</td>
                                                <td class="center">8.5</td>
                                                <td class="center">C/A<sup>1</sup>
                                                </td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>KHTML</td>
                                                <td>Konqureror 3.1</td>
                                                <td>KDE 3.1</td>
                                                <td class="center">3.1</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>KHTML</td>
                                                <td>Konqureror 3.3</td>
                                                <td>KDE 3.3</td>
                                                <td class="center">3.3</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>KHTML</td>
                                                <td>Konqureror 3.5</td>
                                                <td>KDE 3.5</td>
                                                <td class="center">3.5</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>Tasman</td>
                                                <td>Internet Explorer 4.5</td>
                                                <td>Mac OS 8-9</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>Tasman</td>
                                                <td>Internet Explorer 5.1</td>
                                                <td>Mac OS 7.6-9</td>
                                                <td class="center">1</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>Tasman</td>
                                                <td>Internet Explorer 5.2</td>
                                                <td>Mac OS 8-X</td>
                                                <td class="center">1</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Misc</td>
                                                <td>NetFront 3.1</td>
                                                <td>Embedded devices</td>
                                                <td class="center">-</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeA">
                                                <td>Misc</td>
                                                <td>NetFront 3.4</td>
                                                <td>Embedded devices</td>
                                                <td class="center">-</td>
                                                <td class="center">A</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>Misc</td>
                                                <td>Dillo 0.8</td>
                                                <td>Embedded devices</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>Misc</td>
                                                <td>Links</td>
                                                <td>Text only</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="gradeX">
                                                <td>Misc</td>
                                                <td>Lynx</td>
                                                <td>Text only</td>
                                                <td class="center">-</td>
                                                <td class="center">X</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>Misc</td>
                                                <td>IE Mobile</td>
                                                <td>Windows Mobile 6</td>
                                                <td class="center">-</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeC">
                                                <td>Misc</td>
                                                <td>PSP browser</td>
                                                <td>PSP</td>
                                                <td class="center">-</td>
                                                <td class="center">C</td>
                                            </tr>
                                            <tr class="gradeU">
                                                <td>Other browsers</td>
                                                <td>All others</td>
                                                <td>-</td>
                                                <td class="center">-</td>
                                                <td class="center">U</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6">
                        <!--   Kitchen Sink -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Kitchen Sink
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End  Kitchen Sink -->
                    </div>
                    <div class="col-md-6">
                        <!--   Basic Table  -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Basic Table
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End  Basic Table  -->
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6">
                        <!--    Striped Rows Table  -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Striped Rows Table
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--  End  Striped Rows Table  -->
                    </div>
                    <div class="col-md-6">
                        <!--    Bordered Table  -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Bordered Table
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive table-bordered">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--  End  Bordered Table  -->
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-6">
                        <!--    Hover Rows  -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Hover Rows
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- End  Hover Rows  -->
                    </div>
                    <div class="col-md-6">
                        <!--    Context Classes  -->
                        <div class="panel panel-default">

                            <div class="panel-heading">
                                Context Classes
                            </div>

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="success">
                                                <td>1</td>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr class="info">
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr class="warning">
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                            <tr class="danger">
                                                <td>4</td>
                                                <td>John</td>
                                                <td>Smith</td>
                                                <td>@jsmith</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--  end  Context Classes  -->
                    </div>
                </div>
                
            
            
        </div>

    </div>
    <!-- /. PAGE INNER  -->
    
    <div class="w3-content w3-container w3-padding-64" id="endofpage">

    </div>


    <!-- Kembali ke atas -->
    <a href="#" class="scrollToTop" title="Kembali ke atas"></a>
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 4000) {
                    $('.scrollToTop').fadeIn();
                } else {
                    $('.scrollToTop').fadeOut();
                }
            });
            $('.scrollToTop').click(function () {
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        });
    </script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="js/morris/raphael-2.1.0.min.js"></script>
    <script src="js/morris/morris.js"></script>
    
    <script src="js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="js/dataTables/jquery.dataTables.js"></script>
    <script src="js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
    <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script>
    <footer>
        <div class="w3-container w3-sand w3-padding-32">
            <div class="w3-row">
                <div class="container">
                    <div class="w3-col m2 w3-center">
                        <div class="shop one"></div>
                        <h6>Aman</h6>
                        <p class="w3-padding-0">Payment system Shopify menjamin keamanan uang Anda dalam bertransaksi.</p>
                    </div>
                    <div class="w3-col m2 w3-center">
                        <div class="shop two"></div>
                        <h6>Mudah</h6>
                        <p class="w3-padding-0">Shopify menyediakan berbagai metode pembayaran untuk bertransaksi</p>
                    </div>
                    <div class="w3-col m2 w3-center">
                        <div class="shop three"></div>
                        <h6>Responsif</h6>
                        <p class="w3-padding-0">CS Shopify siap membantu Anda melalui e-mail, media sosial dan call center </p>
                    </div>
                    <div class="w3-col m2 w3-center">
                        <div class="shop four"></div>
                        <h6>Jasa pengiriman</h6>
                        <p class="w3-padding-0">Shopify menyediakan berbagai pilihan jasa pengiriman dengan jangkauan nasional</p>
                    </div>
                    <div class="w3-col m2 w3-center">
                        <div class="shop five"></div>
                        <h6>Manfaat Penjual</h6>
                        <p class="w3-padding-0">Dapatkan keuntungan seperti akses ke komunitas Shopify serta tips dan trik berjualan online</p>
                    </div>
                    <div class="w3-col m2 w3-center">
                        <div class="shop six"></div>
                        <h6>Akses dari Mobile</h6>
                        <p class="w3-padding-0">Download aplikasi Shopify di Android dan iOS. Nikmati kemudahan jual beli dari gadget Anda</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w3-container w3-dark-grey w3-padding-32">
            <div class="w3-row">
                <div class="w3-container w3-quarter">
                    <h5 class="w3-bottombar w3-border-green">Shopify</h5>
                    <a href="" class="w3-dark-grey">About us</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Contact us</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Blog</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Carier</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Hot News</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Terms and Conditions</a>
                    <br/>
                </div>
                <div class="w3-container w3-quarter">
                    <h5 class="w3-bottombar w3-border-red">Customer</h5>
                    <a href="" class="w3-dark-grey">How to shop</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Payment</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Shopping tips</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Hot Items</a>
                    <br/>
                </div>
                <div class="w3-container w3-quarter">
                    <h5 class="w3-bottombar w3-border-orange">Seller</h5>
                    <a href="" class="w3-dark-grey">How to sell</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Profit Selling</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Selling tips</a>
                    <br/>
                    <a href="" class="w3-dark-grey">Seller Center</a>
                    <br/>
                </div>
                <div class="w3-container w3-quarter">
                    <h5 class="w3-bottombar w3-border-blue">Download our application in</h5>
                    <a href=""><img class="logo" src="shopify_logo/icon/google-play-logo.png"></a>
                    <a href=""><img class="logo1" src="shopify_logo/icon/app_store.png"></a>
                    <a href="http://www.facebook.com">
                        <div class="logo2 satu"></div>
                    </a>
                    <a href="http://www.twitter.com">
                        <div class="logo2 dua"></div>
                    </a>
                    <a href="http://www.youtube.com">
                        <div class="logo2 tiga"></div>
                    </a>
                    <a href="http://www.plus.google.com/collections/featured">
                        <div class="logo2 empat"></div>
                    </a>
                    <a href="http://www.instagram.com">
                        <div class="logo2 lima"></div>
                    </a>
                    <a href="http://www.play.google.com/store">
                        <div class="logo2 enam"></div>
                    </a>
                    <a href="http://www.apple.com/itunes">
                        <div class="logo2 tujuh"></div>
                    </a>
                </div>
                <div class="right">
                    <img class="logo" src="shopify_logo/Shopify-Logo(FirstLayout).png" alt="shopify">
                </div>
            </div>
            <div class="w3-bottombar w3-border-gray">
            </div>
        </div>
    </footer>
</body>

</html>