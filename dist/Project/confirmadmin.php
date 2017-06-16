<?php
session_start();
$connection = mysql_connect("localhost", "root", "");
// Seleksi Database
$database="database market";
$db = mysql_select_db($database);
$email=$_SESSION['login_admin'];
$query= mysql_query("select * from konfirmasi_bayar where binary email='$email'", $connection);
$num = mysql_num_rows($query);
$query1 = mysql_query("select pesan.email, pesan.tanggalpesan from pesan inner join konfirmasi_bayar on konfirmasi_bayar.pesanID=pesan.pesanID where binary konfirmasi_bayar.email='$email'", $connection);
$num1 = mysql_num_rows($query1);
if($num1 > 0){
    $emailuser=array($num1);
    $tglorder=array($num1);
    $byk1=0;
    
    while($kolom_db1=mysql_fetch_assoc($query1))
    {
        $emailuser[$byk1]=$kolom_db1['email'];
        $tglorder[$byk1]=$kolom_db1['tanggalpesan'];
        $byk1++;
    }
}

if ($num > 0) {
    // Array the ID's...
    $pesanid=array($num);
    $namapenerima=array($num);
    $namapengirim=array($num);
    $rekpenerima=array($num);
    $rekpengirim=array($num);
    $tglbyr=array($num);
    $jumlah=array($num);
    $byk=0;
    while ($kolom_db = mysql_fetch_assoc($query)) {
        $pesanid[$byk]=$kolom_db['pesanID'];
        $namapenerima[$byk]=$kolom_db['nama_penerima'];
        $namapengirim[$byk]=$kolom_db['nama_pengirim'];
        $rekpenerima[$byk]=$kolom_db['no_rek_penerima'];
        $rekpengirim[$byk]=$kolom_db['no_rek_pengirim'];
        $tglbyr[$byk]=$kolom_db['tanggal_bayar'];
        $jumlah[$byk]=$kolom_db['totalbayar'];
        $byk++;
        
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
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Confirm Admin | Shopify</title>
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
                    <li class="w3-hide-small w3-right"><a href="Shopify_RegisterPage/logout.php" class="w3-hover-white ">Logout</a></li>
                    <li onclick="document.getElementById('id01').style.display='block'" class="w3-hover-white w3-hide-small w3-right login">Add Product</li>
                    <div id="id01" class="w3-modal">
                        <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
                            <div class="w3-center">
                                <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-12 w3-display-topright" title="Tutup">&times;</span>
                                <div class="w3-container w3-blue w3-padding-8 ">
                                    <p style="font-size:22px;">Add Product</p>
                                </div>
                                            
                            </div>
                            <form class="w3-container w3-border-top" action="Shopify_RegisterPage/prosesaddproduct.php" method="post" enctype="multipart/form-data">
                                <div class="w3-section">
                                    <input class="w3-round-medium w3-input w3-border w3-margin-bottom w3-left" type="text" placeholder="Nama Produk" name="nama" style="width:300px;" required>
                                    <input id="uploadImage" type="file" name="image" style="float:left; width:130px;" class="w3-round-medium w3-padding-medium" onchange="PreviewImage();">
                                    <input class="w3-round-medium w3-input w3-border w3-margin-bottom" type="number" min="0" style="width:150px; clear:both; float:left;" placeholder="Stok Produk" name="stok" required>
                                    <select name="kategori" style="width:150px; height:45px; float:left;" class="w3-round-medium w3-white w3-input w3-border w3-margin-bottom" required>
                                        <option value="pilih">Kategori</option>
                                        <option value="makanan">Makanan</option>
                                        <option value="mobil">Mobil</option>
                                        <option value="helm">Helm</option>
                                        <option value="kacamata">Kacamata</option>
                                        <option value="minuman">Minuman</option>
                                        <option value="motor">Motor</option>
                                        <option value="permen">Permen</option>
                                        <option value="sepatu">Sepatu</option>
                                        <option value="handphone">Handphone</option>
                                        <option value="laptop">Laptop</option>
                                        <option value="sepeda">Sepeda</option>
                                        <option value="jam tangan">Jam Tangan</option>
                                        <option value="televisi">Televisi</option>
                                        <option value="aksesoris handphone">Aksesoris Handphone</option>
                                        <option value="aksesoris komputer">Aksesoris Komputer</option>
                                        <option value="printer">Printer</option>
                                        <option value="kamera">Kamera</option>
                                        <option value="perlengkapan olahraga">Perlengkapan Olahraga</option>
                                        <option value="baju">Baju</option>
                                        <option value="celana">Celana</option>
                                        <option value="kipas angin">Kipas Angin</option>
                                        <option value="kulkas">Kulkas</option>
                                        <option value="peralatan kecantikan">Peralatan Kecantikan</option>
                                        <option value="mainan">Mainan</option>
                                        <option value="kartu memori">Kartu Memori</option>
                                        <option value="speaker">Speaker</option>
                                        <option value="alat tulis">Alat Tulis</option>
                                        <option value="air conditioner">Air Conditioner</option>
                                    </select>
                                    
                                    <input class="w3-round-medium w3-input w3-border w3-margin-bottom" type="text" style="width:300px; float:left;" placeholder="Harga Produk" name="harga" required>
                                    
                                    <textarea class="w3-round-medium w3-white w3-input w3-border w3-margin-bottom" placeholder="Deskripsi" name="deskripsi" style="height:95px; clear:both" required></textarea>
                                    
                                    <textarea class="w3-round-medium w3-white w3-input w3-border w3-margin-bottom" placeholder="Spesifikasi" name="spesifikasi" style="height:95px;" required></textarea>
                                    
                                    <input type="submit" name="add" class="w3-btn w3-section w3-green w3-round-medium w3-hover-light-green w3-margin-right" style="width:270px;" value="Add Product">
                                    <a href="#" onclick="document.getElementById('id01').style.display='none'" class="w3-btn cancel w3-hover-pale-red" style="width:270px;" >Cancel</a>
                                </div>
                            </form>
                            
                        </div>
                    </div>     
                    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
                        <a class="w3-hover-white w3-large" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
                    </li>
                    <li><a href="Shopify-HomePage.php" class="homecolor"><i class="fa fa-home w3-margin-right"></i>Confirm Admin</a></li>
                    <li class="w3-hide-small w3-dropdown-hover dropdown-li">
                        <a href="" class="w3-hover-white">Cari Barang</a>
                        <div class="w3-dropdown-content dropdown-color1 w3-card-4">
                            <form method="post" action="searchadmin.php">
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
    <!--/header-->

    <section id="cart_items">
        <div class="container bgimg-1 ">
            <div class="heading">
                <h1 class="w3-center w3-teal w3-padding-small">Konfirmasi Pembayaran</h1>
            </div>
                
                <?php
                if($num==0)
                {
                ?>
                <div class="w3-container">
                    <div class="w3-border w3-margin-bottom w3-padding-medium">
                    <h5 class="w3-center w3-sand">Konfirmasi Pembayaran saat ini masih kosong!</h5>
                    </div>
                </div>
                
                <div class="container">
                <?php
                }
                
                for($i=0;$i<$num;$i++)
                {
                    
                ?>
                <div class="w3-border w3-margin-bottom w3-padding-medium">
                <p>Tanggal Order : <?php echo $tglorder[$i];?></p>
                <p>Tanggal Bayar : <?php echo $tglbyr[$i];?></p>
                <p>Email User    : <?php echo $emailuser[$i];?></p>
                
                <a onclick="document.getElementById('<?php echo $pesanid[$i];?>').style.display='block'" class="w3-round-large w3-btn w3-green w3-right w3-hover-light-green w3-hide-small w3-right login">Lihat Konfirmasi</a>
                    <div id="<?php echo $pesanid[$i];?>" class="w3-modal" >
                        <div class="w3-modal-content w3-card-8 w3-animate-zoom w3-round-large" style="max-width:500px">
                            <div class="w3-center">
                                <span onclick="document.getElementById('<?php echo $pesanid[$i];?>').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright w3-round-large" title="Tutup">&times;</span>
                                <div class="w3-round-large w3-container w3-blue w3-padding-4">
                                    <p style="font-size:22px;">Konfirmasi Pembayaran</p>
                                </div>
                                            
                            </div>
                            <form class="w3-container" action="Shopify_RegisterPage/prosesconfirmadmin.php" method="post" enctype="multipart/form-data">
                            <div class="w3-section" >              
                                <label class="w3-padding-medium" style="height:51px" for="namaget">Nama Penerima :</label>
                                <input class="w3-round-small w3-input w3-border w3-margin-bottom w3-right" type="text" placeholder="Nama Penerima" name="namaget" value="<?php echo $namapenerima[$i];?>" style="width:210px" autocomplete="off" disabled>
                                <label class="w3-padding-medium" style="height:51px" for="norekget">No Rekening Penerima :</label>
                                <input class="w3-round-small w3-input w3-border w3-margin-bottom w3-right" type="text" style="clear:both; width:210px; " placeholder="No Rekening Penerima" name="norekget" value="<?php echo $rekpenerima[$i];?>" autocomplete="off" disabled>
                                <label class="w3-padding-medium" style="height:51px" for="namagive">Nama Pengirim :</label>
                                <input class="w3-round-small w3-input w3-border w3-margin-bottom w3-right" type="text" placeholder="Nama Pengirim" name="namagive" style="width:210px;" value="<?php echo $namapengirim[$i];?>" autocomplete="off" disabled>
                                <label class="w3-padding-medium" style="height:51px" for="norekgive">No Rekening Pengirim :</label>
                                <input class="w3-round-small w3-input w3-border w3-margin-bottom w3-right" type="text" style="width:210px;" placeholder="No Rekening Pengirim" name="norekgive" value="<?php echo $rekpengirim[$i];?>" autocomplete="off" disabled>
                                <label class="w3-padding-medium" style="height:51px" for="nofak">No Faktur :</label>
                                <input class="w3-round-small w3-input w3-border w3-margin-bottom w3-right" type="text" style="width:210px;" placeholder="No Faktur" name="nofak" value="<?php echo $pesanid[$i];?>" autocomplete="off" disabled>
                                <input type="hidden" name="pesanid" id="pesanid" value="<?php echo $pesanid[$i];?>">
                                <label class="w3-padding-medium" style="height:51px" for="total">Total Bayar :</label>
                                <input class="w3-round-small w3-input w3-border w3-margin-bottom w3-right" type="text" style="width:210px;" placeholder="Total Bayar" value="<?php echo "Rp.".number_format($jumlah[$i],0,",",".");?>" name="total"  autocomplete="off" disabled>
                                <label class="w3-padding-medium" style="height:51px" for="tglbyr">Tanggal Bayar :</label>
                                <input type="text" name="tglbyr" class="w3-input w3-border w3-right w3-round-small" style="width:210px; height:40px" id="tglbyr" value="<?php echo $tglorder[$i];?>" disabled><br>
                                <label class="w3-right" for="setuju" style="font-size:12px">User telah membayar dan data konfirmasi telah benar atau tidak</label>
                                <input type="radio" class="w3-margin-left w3-padding-medium w3-left" name="setuju" id="setuju" value="setuju" required>
                                
                                
                                <input type="submit" name="confirm" class="w3-btn w3-section w3-green w3-hover-light-green login-1 w3-margin-right w3-left" style="width:218px;" value="Confirm">
                                <input type="submit" name="unconfirm" class="w3-btn w3-section w3-red w3-hover-pale-red w3-left login-1 w3-margin-right" style="width:218px;" value="Unconfirm">

                            </div>
                        </form>
                    </div>
                </div>
                <p>Total Bayar : <?php echo "Rp.".number_format($jumlah[$i],0,",",".");?></p>
                
                </div>
                <?php
                }
                ?>
                
            </div>           
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