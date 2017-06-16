<?php
include('Shopify_RegisterPage/sessionconfirm.php');

$connection = mysql_connect("localhost", "root", "");
// Seleksi Database
$database="database market";
$db = mysql_select_db($database);
$email=$_SESSION['login_user'];
$nama=mysql_query("select * from akun where email='$email'");
$column=mysql_fetch_assoc($nama);
$namauser=$column['nama'];
$bykkode= mysql_query("select * from pesan where binary email='$email'", $connection);
$koloms=mysql_num_rows($bykkode);
if($koloms>0)
{
    $pesanid=array();
    $status=array();
    $date=array();
    $benar=array();
    $byk1=0;
    while($pesanrow=mysql_fetch_assoc($bykkode))
    {
        $pesanid[$byk1]=$pesanrow['pesanID'];
        $status[$byk1]=$pesanrow['statusbayar'];
        $date[$byk1]=$pesanrow['tanggalpesan'];
        if($status[$byk1]==NULL)
            $benar[$byk1]=false;
        else
            $benar[$byk1]=true;
        $byk1++;
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .bgimg-1{
            margin-top:100px;
        }
        .profile1{
            margin-top:42px;
            width:100%;
            height:28px;
            text-align:center;
            font-size:16px;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Confirm User | Shopify</title>
    <link rel="icon" href="shopify_logo/favicon.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="cart.css">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" href="CSS_Frameworks/W3.CSS/w3.css">
    <link rel="stylesheet" href="HomePage.css">
    
</head>
<!--/head-->

<body>
    <header>
        <nav>
            <div class="w3-top">
                <ul class="w3-navbar w3-left-align w3-large">
                    <li class="w3-hide-small w3-right"><a href="" class="w3-hover-white">About</a></li>
                    <li class="w3-hide-medium w3-right w3-dropdown-hover dropdown-li">
                        <a href="" class="w3-hover-white" title="Profile"><?php echo $namauser; ?>&nbsp;<i class="fa fa-caret-down"></i></a>
                        <div class="w3-dropdown-content dropdown-color profile w3-card-4" style="right:78px">
                            <a href="Shopify_RegisterPage/editprofile.php" class="w3-hover-white ">Profile</a>
                            <a href="cart.php" class="w3-hover-white ">Cart</a>
                            <a href="confirmuser.php" class="w3-hover-white ">Konfirmasi</a>
                            <a href="Shopify_RegisterPage/logout.php" class="w3-hover-white ">Logout</a>
                        </div>
                    </li>
                    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
                        <a class="w3-hover-white w3-large" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
                    </li>
                    <li><a href="Shopify-HomePage.php" class="homecolor"><i class="fa fa-home w3-margin-right"></i>Confirm User</a></li>
                    <li class="w3-hide-small w3-dropdown-hover dropdown-li">
                        <a href="" class="w3-hover-white">Cari Barang</a>
                        <div class="w3-dropdown-content dropdown-color1 w3-card-4">
                            <form method="post" action="searchuser.php">
                            <label for="cari">Cari&#58;</label>
                            <input type="text" name="cari" id="cari" placeholder="Aku mau beli..." class="w3-round-medium" autocomplete="on">
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
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/makanan.php" title="Makanan">Makanan</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/mobil.php" title="Mobil">Mobil</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/helm.php" title="Helm">Helm</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/kacamata.php" title="Kacamata">Kacamata</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/minuman.php" title="Minuman">Minuman</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/motor.php" title="Motor">Motor</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/permen.php"  title="Permen">Permen</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/sepatu.php" title="Sepatu">Sepatu</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/handphone.php" title="Handphone">Handphone</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/laptop.php" title="Laptop">Laptop</a><br>
                                
                            </div>
                            <div class="w3-third w3-padding-small w3-padding-ver-64">
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/sepeda.php" title="Sepeda">Sepeda</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/jamtangan.php" title="Jam Tangan">Jam Tangan</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/televisi.php" title="Televisi">Televisi</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/aksesorishandphone.php" title="Aksesoris Handphone">Aksesoris Handphone</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/aksesoriskomputer.php" title="Aksesoris Komputer">Aksesoris Komputer</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/printer.php" title="Printer">Printer</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/kamera.php" title="Kamera">Kamera</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/perlengkapanolahraga.php" title="Perlengkapan Olahraga">Perlengkapan Olahraga</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/baju.php" title="Baju">Baju</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/celana.php" title="Celana">Celana</a><br>
                            </div>
                            <div class="w3-third w3-padding-small w3-padding-ver-64">
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/kipasangin.php" title="Kipas Angin">Kipas Angin</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/kulkas.php" title="Kulkas">Kulkas</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/peralatankecantikan.php" title="Peralatan Kecantikan">Peralatan Kecantikan</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/mainan.php" title="Mainan">Mainan</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/kartumemori.php" title="Kartu Memori">Kartu Memori</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/speaker.php" title="Speaker">Speaker</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/alattulis.php" title="Alat Tulis">Alat Tulis</a><br>
                                <a style="color:white" class="w3-hover-white" href="Shopify-KategoriUser/airconditioner.php" title="Air Conditioner">Air Conditioner</a><br>
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
    <!--/header-->
    <div class="w3-teal w3-hover-light-blue  profile1">
        <b class="w3-text-red">Konfirmasi Pembayaran <?php echo $login_session;?> telah dikirim!!!</b>
    </div>
    <section id="cart_items">
        <div class="container bgimg-1 ">
            <div class="heading">
                <h1 class="w3-center w3-teal w3-padding-small">Konfirmasi Pembayaran User</h1>
            </div>
        </div>
        
                <?php
                
                
                for($i=0;$i<$koloms;$i++)
                {?>
                    <div class="container">
                    <?php
                    $query = mysql_query("select * from orderdetail inner join produk on produk.produkID=orderdetail.produkID where binary pesanID='$pesanid[$i]'", $connection);
                    $num = mysql_num_rows($query);
                    $jumlah=0;
                    if ($num > 0 && $benar==true) {
                        // Array the ID's...
                        $produkrow= array($num);
                        $quantityrow= array($num);
                        $fotorow= array($num);
                        $hargarow= array($num);
                        $stokrow= array($num);
                        $namarow= array($num);
                        $kategorirow= array($num);
                        $byk=0;
                        while ($kolom_db = mysql_fetch_assoc($query)) {
                            $produkrow [$byk]=$kolom_db['produkID'];
                            $quantityrow[$byk]=$kolom_db['quantity'];
                            $fotorow[$byk]=$kolom_db['Foto'];
                            $hargarow[$byk]=$kolom_db['harga'];
                            $stokrow[$byk]=$kolom_db['stok'];
                            $namarow[$byk]=$kolom_db['namaproduk'];
                            $kategorirow[$byk]=$kolom_db['kategori'];
                            $totalrow[$byk]=$kolom_db['jumlahharga'];
                            $jumlah+=$totalrow[$byk];
                            $byk++;

                        }
                        if($jumlah<2000000)
                            $jumlah+=50000
                    
                        
                ?>
                <div class="w3-border w3-margin-bottom w3-padding-medium">
                <p>Tanggal Order : <?php echo $date[$i];?></p>
                <p>Total Bayar : <?php echo "Rp.".number_format($jumlah,0,",",".");?></p>
                <p>No Faktur : <?php echo $pesanid[$i];?></p>
                <?php
                if($status[$i]=="Pending")
                {
                ?>
                    <a onclick="document.getElementById('<?php echo $pesanid[$i];?>').style.display='block'" class="w3-round-large w3-btn w3-green w3-right w3-hover-light-green w3-hide-small w3-right login">Konfirmasi</a>
                        <div id="<?php echo $pesanid[$i];?>" class="w3-modal" >
                            <div class="w3-modal-content w3-card-8 w3-animate-zoom w3-round-large" style="max-width:500px">
                                <div class="w3-center">
                                    <span onclick="document.getElementById('<?php echo $pesanid[$i];?>').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright w3-round-medium" title="Tutup">&times;</span>
                                    <div class="w3-round-medium w3-container w3-blue w3-padding-4">
                                        <p style="font-size:22px;">Konfirmasi Pembayaran</p>
                                    </div>

                                </div>
                                <form class="w3-container" action="" method="post" enctype="multipart/form-data">
                                <div class="w3-section" >
                                    <p>Penerima:</p>
                                    <input type="radio" class="w3-margin-left" value="pertama" name="pilihan" id="pertama" required><label for="pertama" class="w3-text-cyan" >BCA Vincent 1264047227</label><br>
                                    <input type="radio" class="w3-margin-left" value="kedua" name="pilihan" id="kedua" required><label for="kedua" class="w3-text-teal">BNI Jefri 1065057117</label><br>
                                    <input type="radio" class="w3-margin-left" value="ketiga" name="pilihan" id="ketiga" required><label for="ketiga" class="w3-text-blue">BRI Steven Willington 1514048228</label><br>
                                    <input type="radio" class="w3-margin-left" value="keempat" name="pilihan" id="keempat" required><label for="keempat" class="w3-text-indigo w3-margin-bottom">Mandiri Christopher 1314047524</label><br>
                                    
                                    <input class="w3-round-small w3-input w3-border w3-margin-bottom" type="text" style="width:470px; float:left;" placeholder="Nama Bank Pengirim" name="namagivebank" autocomplete="off" required>

                                    <input class="w3-round-small w3-input w3-border w3-margin-bottom" type="text" placeholder="Nama Pengirim" name="namagive" style="width:470px;" autocomplete="off" required>
                                    <input class="w3-round-small w3-input w3-border w3-margin-bottom" type="text" style="width:470px; float:left;" placeholder="No Rekening Pengirim" name="norekgive" autocomplete="off" required>
                                    <input class="w3-round-small w3-input w3-border w3-margin-bottom" type="text" style="width:470px; float:left;" placeholder="No Faktur" name="nofak" autocomplete="off" required>
                                    <input class="w3-round-small w3-input w3-border w3-margin-bottom w3-margin-left" type="hidden" name="total" value="<?php echo $jumlah;?>">
                                    <label style="float:left" for="tglbyr">Tanggal Bayar :  </label>
                                        <select class="w3-left w3-round-small w3-input w3-border" name="date" id="date" style="width:100px" required>
                                            <option value="pilih">Date</option>
                                            <?php
                                                for($j=1;$j<32;$j++)
                                                {
                                                    ?>
                                                    <option value="<?php echo $j;?>"><?php echo $j;?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>

                                        <select class="w3-left w3-round-small w3-input w3-border w3-margin-left"  name="month" id="month" style="width:100px" required>
                                            <option value="pilih">Month</option>
                                            <?php
                                                for($j=1;$j<13;$j++)
                                                {
                                                    ?>
                                                    <option value="<?php echo $j;?>"><?php echo $j;?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>

                                        <select class="w3-left w3-round-small w3-input w3-border w3-margin-left" name="year" id="year" style="width:100px" required>
                                            <option value="pilih">Year</option>
                                            <?php
                                                for($j=2018;$j>2015;$j--)
                                                {
                                                    ?>
                                                    <option value="<?php echo $j;?>"><?php echo $j;?></option>
                                                    <?php
                                                }
                                            ?>

                                        </select>

                                    <input type="submit" name="confirm" class="w3-round-small w3-btn w3-section w3-green w3-hover-light-green login-1 w3-margin-right" style="width:223px;" value="Confirm">

                                    <a href="#" onclick="document.getElementById('<?php echo $pesanid[$i];?>').style.display='none'" class="w3-round-small w3-btn cancel w3-red w3-hover-pale-red" style="width:223px;" >Cancel</a>

                                </div>
                            </form>

                        </div>
                    </div>
                    <?php
                        }?>
                        <p>Status Bayar : <?php echo $status[$i];?></p>
                    <?php
                    }?>
                    <?php
                    
                    
                    if($num>0 && $benar!=true){?>
                    <div class="w3-border w3-margin-bottom w3-padding-medium">
                    <p class="w3-center">Konfirmasi User masih kosong</p>
                    <?php
                    }?>
                    </div>
                </div>
                <?php
                }?>
            </div>
                
                
            
                
        
            
            <div class="container">
                <a href="Shopify-HomePage.php" class="w3-margin-bottom w3-btn w3-red w3-left w3-hover-pale-red">Home</a>
                <a href="inforekadmin.php" class="w3-btn w3-red w3-right w3-hover-pale-red">Info Rek Admin</a>
            </div>
                   
            
        
    </section>
    <!--/#cart_items-->
    
    
    <!--/#do_action-->

    <footer id="footer">
        <!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>S</span>hopify</h2>
                            <p>Kepercayaan Anda adalah Prioritas Kami.</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe1.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe2.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe3.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="images/home/iframe4.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="images/home/map.png" alt="" />
                            <p>Kini Kami Hadir di Seluruh Dunia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Online Help</a></li>
                                <li><a href="">Contact Us</a></li>
                                <li><a href="">Order Status</a></li>
                                <li><a href="">Change Location</a></li>
                                <li><a href="">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">T-Shirt</a></li>
                                <li><a href="">Mens</a></li>
                                <li><a href="">Womens</a></li>
                                <li><a href="">Gift Cards</a></li>
                                <li><a href="">Shoes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Terms of Use</a></li>
                                <li><a href="">Privecy Policy</a></li>
                                <li><a href="">Refund Policy</a></li>
                                <li><a href="">Billing System</a></li>
                                <li><a href="">Ticket System</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Company Information</a></li>
                                <li><a href="">Careers</a></li>
                                <li><a href="">Store Location</a></li>
                                <li><a href="">Affillate Program</a></li>
                                <li><a href="">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" style="width:210px;" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from
                                    <br />our site and be updated your self...</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2016 Shopify Inc. All rights reserved.</p>
                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>

</html>