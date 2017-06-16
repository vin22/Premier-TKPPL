<?php
include('prosesdaftar.php'); // Memasuk-kan skrip Login 
if(isset($_SESSION['register_user'])){
    header("location:../sucacc.php");
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Register &#124; Shopify</title>
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
                <h5>REGISTER FOR FREE IN SHOPIFY</h5>
                <p>Already have an account? Sign in <a href="masuk.php">here</a></p>
            </div>
        </div>
    </header>
    <main>
        <div class="left-side">
            <div class="left-side2">
                <a class="w3-btn w3-hover-indigo" href="https://www.facebook.com/"><img src="../shopify_logo/Sosmed/fb-logo.png" alt="fb-logo" style="height: 26px;">Register With Facebook</a>
                <a class="w3-btn w3-hover-red" href="https://plus.google.com/"><img src="../shopify_logo/Sosmed/GPlus-logo.png" alt="google-logo" style="height:25px;">Register With Google</a>
                <a class="w3-btn w3-hover-purple" href="https://www.yahoo.com/"><img src="../shopify_logo/Sosmed/yahoo-logo.png" alt="yahoo-logo" style="height:24px;">Register With Yahoo!</a>
            </div>
        </div>
        <div class="right-side">
            <div class="right-side2">
                <form action="" method="post">
                    <input type="text" name="fullname" id="fullname" placeholder="Full Name"  autocomplete="off" required>
                    <input type="email" name="email" id="email" placeholder="Email Address" autocomplete="off" required>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <input type="password" name="confirm" id="confirm" placeholder="Confirm Password" required>
                    <input type="text" name="number" id="number" placeholder="Mobile Phone Number" autocomplete="off" maxlength="12" required>
                    <input type="text" name="address" id="address" autocomplete="off" placeholder="Address" required>
                    <div class="gender">
                        <!-- Radio -->
                        <input type="radio" name="jk" id="radio1" value="L"required />
                        <label for="radio1" class="inline p1">Male</label>
                        <input type="radio" name="jk" id="radio2" value="P" required />
                        <label for="radio2" class="inline">Female</label>
                    </div>
                    <p class="birth">Date of Birth</p>
                    <div class="calendar">
                        <select name="date" id="date" required>
                            <option value="pilih">Date</option>
                            <?php
                                for($i=1;$i<32;$i++)
                                {
                                    ?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                    <?php
                                }
                            ?>
                        </select>

                        <select name="month" id="month" required>
                            <option value="pilih">Month</option>
                            <?php
                                for($i=1;$i<13;$i++)
                                {
                                    ?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                    <?php
                                }
                            ?>
                        </select>

                        <select name="year" id="year" required>
                            <option value="pilih">Year</option>
                            <?php
                                for($i=2016-17;$i>1945;$i--)
                                {
                                    ?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                    <?php
                                }
                            ?>
                            
                        </select>
                    </div>
                    <p class="note">By clicking Register Account, I confirm I have agreed to <a href="#">Terms &amp; Condition</a>, and <a href="#">Security Privacy</a> of Shopify.</p>
                    
                    <input type="submit" name="submit" id="submit" value="Register Account">
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