<?php
session_start();
$error=""; // Variabel untuk menyimpan pesan error
if (isset($_POST['add'])) {
	
    // Variabel username dan password
    $produkid=$_POST['id'];
    $quantity=$_POST['banyak'];
    $email=$_SESSION['login_user'];
    // Membangun koneksi ke database
    $connection = mysql_connect("localhost", "root", "");
    // Mencegah MySQL injection 
    // Seleksi Database
    $database="database market";
    $db = mysql_select_db($database);
    $query = mysql_query("select * from produk where produkID='$produkid'", $connection);
    $kolom=mysql_fetch_assoc($query);
    $harga=$kolom['harga'];
    $bykkode= mysql_query("select * from pesan where binary email='$email' AND NOT statusbayar='Berhasil'", $connection);
    $koloms=mysql_num_rows($bykkode);
    
    if($koloms==1)
    {
        $pesanrow=mysql_fetch_assoc($bykkode);
        $pesanid=$pesanrow['pesanID'];
        
    }
    else if(koloms==0)
    {
        $bykkode= mysql_query("select * from pesan", $connection);
        $bykrow = mysql_num_rows($bykkode);
        $kodebyk=1+$bykrow;
        $kode='OD';
        $byk= mysql_query("select * from orderdetail where pesanID='$pesanid'", $connection);
        if($byk<10)
            $pesanid=$kode.'00'.$kodebyk;
        else if($byk>=10)
            $pesanid=$kode.'0'.$kodebyk;
        $simpan = mysql_query("INSERT INTO pesan (pesanID,email) VALUES ('$pesanid','$email')");
    }
    $byk= mysql_query("select * from orderdetail where pesanID='$pesanid'", $connection);
    $row = mysql_num_rows($byk);
    $total=$harga*$quantity;
    if ($row>=1) {
        $simpan = mysql_query("INSERT INTO orderdetail VALUES('$pesanid','$produkid','$quantity','$total')");
        header("Location:../cart.php");
        $_SESSION['add_cart']=$pesanid; // Membuat Sesi/session
        mysql_close($connection); // Menutup koneksi
    } 
    else if($row==0){              
        $simpan = mysql_query("INSERT INTO orderdetail VALUES('$pesanid','$produkid','$quantity','$total')");
        header("Location:../cart.php");
        $_SESSION['add_cart']=$pesanid; // Membuat Sesi/session
        mysql_close($connection); // Menutup koneksi
    }
    
}
?>