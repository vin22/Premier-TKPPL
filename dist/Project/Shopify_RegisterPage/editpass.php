<?php
include('proseseditpass.php'); // Memasuk-kan skrip Login 
if(isset($_SESSION['edit_pass_user'])){
    header("location:../finisheditpass.php");
}
if(isset($_POST['change']))
{
    // Membangun koneksi ke database
    $connection = mysql_connect("localhost", "root", "");
    // Seleksi Database
    $database="database market";
    $db = mysql_select_db($database);
    $email=$_SESSION['login_user'];
    $query = mysql_query("select * from akun where email='$email'", $connection);
    $kolom_db=mysql_fetch_assoc($query);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Editing Password &#124; Shopify</title>
    <style>
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
            width: 80px;
            height: 80px;
            margin-top: 5px;
            border-radius:100%;
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
    <link rel="stylesheet" href="register.css">
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
    <header>
        <div class="head">
            <div class="head-1">
                <div class="logo"><img src="../shopify_logo/Shopify-Logo(FirstLayout).png" alt="shopify-logo"></div>
            </div>
            <div class="head-2">
                <h5>EDITING PASSWORD IN SHOPIFY</h5>
                <a href="editprofile.php">Back</a>
            </div>
        </div>
    </header>
    <main>
        <div class="left-side">
            <div class="left-side2">
                <a class="w3-pale-blue w3-btn w3-hover-light-blue" href=""><img src="../shopify_logo/shopify-partner.png" alt="fb-logo" style="height: 30px;"></a>
                <a class="w3-pale-red w3-btn w3-hover-red" href=""><img src="../shopify_logo/shopify-faded.png" alt="google-logo" style="height:26px;"></a>
                <a class="w3-purple w3-btn w3-hover-deep-purple" href=""><img src="../shopify_logo/Shopify-Logo(FirstLayout).png" alt="yahoo-logo" style="height:25px;"></a>
            </div>
        </div>
        <div class="right-side">
            <div class="right-side2">
                <form action="" method="post">
                     <input type="password" name="current" id="current" placeholder="Current Password" required >
                    <input type="password" name="password" id="password" placeholder="New Password"  required>
                    <input type="password" name="confirm" id="confirm"  placeholder="Confirm Password" required>
                    <span style="color:red">
                        <?php
                        if(!empty($error))
                            echo "<br/>".$error."<br/>";
                        ?>
                    </span>
                    <input type="submit" class="w3-btn blue w3-hover-pale-blue" name="save" id="save" value="Save Password">
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
                    <a href="../Shopify-HomePage.php"><img class="logo4 w3-dark-grey" src="../shopify_logo/shopifylink.png" alt="shopify"></a>
                </div>
            </div>
            <br>
            <div class="w3-bottombar w3-border-gray">
            </div>
        </div>
    </footer>
</body>
</html>