<?php
include('../Shopify_RegisterPage/loginorder.php'); // Memasuk-kan skrip Login 
if(isset($_SESSION['login_user'])){
    header("location: ../Shopify-SecondPage/OrderUser.php");
}
else if(isset($_SESSION['login_admin'])){
    header("location: ../profileadmin.php");
}
$connection = mysql_connect("localhost", "root", "");
// Seleksi Database
$database="database market";
$db = mysql_select_db($database);
$produkid=$_POST['id'];
$query = mysql_query("select * from produk where produkID='$produkid'", $connection);
$kolom_db=mysql_fetch_assoc($query);

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
        .logo3 {
            float: left;
            width: 140px;
            height: 50px;
            margin-top: 5px;
        }
        .logo4 {
            float: right;
            width: 140px;
            height: 50px;
            margin-top: 10px;
            margin-right:20px;
            border-radius:5px;
        }
        .satu {
            background: url('../shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat;
        }

        .dua {
            background: url('../shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat -33px 0px;
        }

        .tiga {
            background: url('../shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat -65px 0px;
        }

        .empat {
            background: url('../shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat -98px 0px;
        }

        .lima {
            background: url('../shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat -129px 0px;
        }

        .enam {
            background: url('../shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat -160px 0px;
        }

        .tujuh {
            background: url('../shopify_logo/icon/ico-social-networks-v2.jpg') no-repeat -193px 0px;
        }
    </style>
    <link rel="icon" href="../shopify_logo/favicon.png">
    <link rel="stylesheet" href="Phone.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS_Frameworks/W3.CSS/w3.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../CSS_Frameworks/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <script src="../CSS_Frameworks/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <!-- KICKSTART -->
    <script src="../CSS_Frameworks/HTML-KickStart-master/js/jquery.min.js"></script>
    <script src="../CSS_Frameworks/HTML-KickStart-master/js/kickstart.js"></script>
    <link rel="stylesheet" href="../CSS_Frameworks/HTML-KickStart-master/css/kickstart.css" media="all" />
    <!-- KICKSTART -->
</head>

<body>
    <!-- Navigation Bar -->
    <header>
        <nav>
            <div class="w3-top">
                <ul class="w3-navbar w3-left-align w3-large">
                    <li onclick="document.getElementById('id01').style.display='block'" class="w3-hover-white w3-hide-small w3-right login">Masuk</li>
                    <div id="id01" class="w3-modal">
                        <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
                            <div class="w3-center">
                                <br>
                                <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Tutup">&times;</span>
                                <img src="../shopify_logo/Avatar/login_avatar.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
                            </div>
                            <form class="w3-container" action="" method="post">
                                <div class="w3-section">
                                    <label><b>Email</b></label>
                                    <input class="w3-input w3-border w3-margin-bottom" type="email" autocomplete="off" placeholder="Email" name="email" required>
                                    <label><b>Password</b></label>
                                    <input type="hidden" name="id" value="<?php echo $produkid;?>">
                                    <input class="w3-input w3-border" type="password" placeholder="Password" name="password" required>
                                    <input type="submit" name="submit" class="w3-btn w3-section blue login-1" value="Login">
                                    <input type="checkbox" name="check" id="check">
                                    <label for="check" style="font-size:14px; color:gray; cursor:pointer;">Remember me</label>
                                </div>
                            </form>
                            <div class="w3-container w3-border-top w3-padding-11">
                                <a href="#" onclick="document.getElementById('id01').style.display='none'" class="w3-btn cancel">Cancel</a>
                                <span class="w3-right w3-padding w3-hide-small">Forgot <a href="../Shopify_RegisterPage/forget.php">password?</a></span>
                            </div>
                        </div>
                    </div>
                    <li class="w3-hide-small w3-right"><a href="../Shopify_RegisterPage/register.php" class="w3-hover-white">Daftar</a></li>
                    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
                        <a class="w3-hover-white w3-large" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
                    </li>
                    <li><a href="../Shopify-HomePage.php" class="homecolor w3-hover-white"><i class="fa fa-home w3-margin-right"></i>Shopify</a></li>
                    <li class="w3-hide-small w3-dropdown-hover dropdown-li">
                        <a href="" class="w3-hover-white">Cari Barang</a>
                        <div class="w3-dropdown-content dropdown-color1 w3-card-4">
                            <form method="post" action="../search.php">
                            <label for="cari">Cari&#58;</label>
                            <input type="text" name="cari" id="cari" placeholder="Aku mau beli..." autocomplete="on">
                            </form>
                        </div>
                    </li>
                    <li class="w3-hide-small" onclick="w3_open()"><a class="w3-hover-white" href="javascript:void(0)" >Kategori Barang <i class="fa fa-caret-down"></i></a></li>
                    <li class="w3-hide-small">
                        <div class="center-logo"><img src="../shopify_logo/icon-shopify-hire.png" alt="ctr-logo"></div>
                    </li>
                    <nav class="w3-dropnav-content w3-card-4" style="display:none" id="myDropnav">
                        <div class="w3-container">
                        </div>
                        <div class="w3-container w3-margin w3-padding-ver-64">
                            <div class="w3-third w3-padding-small w3-padding-ver-64">
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/makanan.php" title="Makanan">Makanan</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/mobil.php" title="Mobil">Mobil</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/helm.php" title="Helm">Helm</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/kacamata.php" title="Kacamata">Kacamata</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/minuman.php" title="Minuman">Minuman</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/motor.php" title="Motor">Motor</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/permen.php"  title="Permen">Permen</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/sepatu.php" title="Sepatu">Sepatu</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/handphone.php" title="Handphone">Handphone</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/laptop.php" title="Laptop">Laptop</a><br>
                                
                            </div>
                            <div class="w3-third w3-padding-small w3-padding-ver-64">
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/sepeda.php" title="Sepeda">Sepeda</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/jamtangan.php" title="Jam Tangan">Jam Tangan</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/televisi.php" title="Televisi">Televisi</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/aksesorishandphone.php" title="Aksesoris Handphone">Aksesoris Handphone</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/aksesoriskomputer.php" title="Aksesoris Komputer">Aksesoris Komputer</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/printer.php" title="Printer">Printer</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/kamera.php" title="Kamera">Kamera</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/perlengkapanolahraga.php" title="Perlengkapan Olahraga">Perlengkapan Olahraga</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/baju.php" title="Baju">Baju</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/celana.php" title="Celana">Celana</a><br>
                            </div>
                            <div class="w3-third w3-padding-small w3-padding-ver-64">
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/kipasangin.php" title="Kipas Angin">Kipas Angin</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/kulkas.php" title="Kulkas">Kulkas</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/peralatankecantikan.php" title="Peralatan Kecantikan">Peralatan Kecantikan</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/mainan.php" title="Mainan">Mainan</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/kartumemori.php" title="Kartu Memori">Kartu Memori</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/speaker.php" title="Speaker">Speaker</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/alattulis.php" title="Alat Tulis">Alat Tulis</a><br>
                                <a style="color:white" class="w3-hover-white" href="../Shopify-Kategori/airconditioner.php" title="Air Conditioner">Air Conditioner</a><br>
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
    <main>
        <div class="card">
            <div class="left-side">
                <div class="img">
                    <?php
                    $kat=$kolom_db['kategori'];
                    $kat=str_replace(' ','',$kat);
                    ?>
                    <?php echo "<img src=../$kat/".$kolom_db['Foto'].">";?>
                    
                </div>
                <p class="w3-red w3-center w3-btn" style="width:225px">Stok : <?php echo $kolom_db['stok'];?> Produk</p>
                <h2 class="w3-blue w3-center w3-small w3-btn"  style="width:225px"><?php echo "Rp.".number_format($kolom_db['harga'],0,",",".");?></h2>
            </div>
            <div class="right-side">
                <h4 class="w3-center"><?php echo $kolom_db['namaproduk'];?></h4>
                <p class="w3-border-bottom">Spesifikasi :<br><?php echo $kolom_db['spesifikasi'];?></p>
                <p>Deskripsi : <br><?php echo $kolom_db['deskripsi'];?></p>
                <form action="../Shopify_RegisterPage/masukorder.php" method="post">
                    <input type="number" name="banyak" min="1" max="<?php echo $kolom_db['stok'];?>" style="width:150px;" placeholder="Banyak Produk" required>
                    <input type="hidden" name="id" value="<?php echo $produkid;?>">
                    <?php
                    if($kolom_db['stok']==0)
                    {?>
                        <input type="submit" class="w3-btn" name="add" value="Add Cart" disabled>
                    <?php
                    }
                    else if($kolom_db['stok']>0)
                    {?>
                        <input type="submit" name="add" value="Add Cart">
                    <?php
                    }?>
                </form>
                
            </div>
        </div>
    </main>
    <footer>
                <br>
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
                    <a href=""><img class="logo3" src="../shopify_logo/icon/google-play-logo.png"></a>
                    <a href=""><img class="logo1" src="../shopify_logo/icon/app_store.png"></a>
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
                    <a href="../Shopify-HomePage.php"><img class="logo4 w3-dark-grey" src="../shopify_logo/shopifylogo.jpg" alt="shopify"></a>
                </div>
            </div>
            <br>
            <div class="w3-bottombar w3-border-gray">
            </div>
        </div>
    </footer>
</body>

</html>