<?php
session_start();
$error=""; // Variabel untuk menyimpan pesan error
if (isset($_POST['addbon'])) {
	
    // Variabel username dan password
    $pesanid=$_POST['id'];
    $email=$_SESSION['login_user'];
    // Membangun koneksi ke database
    $connection = mysql_connect("localhost", "root", "");
    // Mencegah MySQL injection 
    // Seleksi Database
    $database="database market";
    $db = mysql_select_db($database);
    
    $query=mysql_query("select * from pesan where pesanID='$pesanid' AND email='$email' AND statusbayar=''", $connection);
    $rows=mysql_num_rows($query);
    if($rows==1)
    {
        
        $status="Pending";
        $date=date('Y-m-d');
        $simpan = mysql_query("Update pesan Set tanggalpesan='$date',statusbayar='$status' where pesanID='$pesanid' AND email='$email'");
        header("Location:../bon.php");
        $_SESSION['add_bon']=$pesanid; // Membuat Sesi/session
        mysql_close($connection); // Menutup koneksi
    }
    else
    {
        header("Location:../bon.php");
        $_SESSION['add_bon']=$pesanid; // Membuat Sesi/session
        mysql_close($connection); // Menutup koneksi
    }
}
?>