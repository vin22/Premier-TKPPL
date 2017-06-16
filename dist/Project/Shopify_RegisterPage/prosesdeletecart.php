<?php
session_start();
$error=""; // Variabel untuk menyimpan pesan error
if (isset($_POST['delete'])) {
	
    // Variabel username dan password
    $produkid=$_POST['id'];
    $pesanid=$_POST['pesanid'];
    $email=$_SESSION['login_user'];
    // Membangun koneksi ke database
    $connection = mysql_connect("localhost", "root", "");
    // Mencegah MySQL injection 
    // Seleksi Database
    $database="database market";
    $db = mysql_select_db($database);
    
    
    $byk= mysql_query("select * from orderdetail where pesanID='$pesanid' AND produkID='$produkid'", $connection);
    $row = mysql_num_rows($byk);
    if ($row==1) {
        $simpan = mysql_query("Delete from orderdetail where pesanID='$pesanid' AND produkID='$produkid'");
        header("Location:../finishcart.php");
        $_SESSION['delete_cart']=$pesanid; // Membuat Sesi/session
        mysql_close($connection); // Menutup koneksi
    } 
}
?>