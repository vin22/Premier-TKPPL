<?php
session_start();
if (isset($_POST['submit'])) {
    // Variabel username dan password
    $email=$_POST['email'];
    // Membangun koneksi ke database
    $connection = mysql_connect("localhost", "root", "");
    // Mencegah MySQL injection 
    $email = stripslashes($email);
    $email = mysql_real_escape_string($email);
    // Seleksi Database
    $database="database market";
    $db = mysql_select_db($database);
    $query = mysql_query("select * from akun where binary email='$email' AND status='User'", $connection);
    $rows = mysql_num_rows($query);
    $query1 = mysql_query("select * from akun where binary email='$email' AND status='Admin'", $connection);
    $rows1 = mysql_num_rows($query1);
    if($rows1==1){
        echo"<script>alert('Email Admin tidak dapat menggunakan fitur ini !');history.go(-1);</script>";
        mysql_close($connection); // Menutup koneksi
    }
    else if($rows==0)
    {
        echo"<script>alert('Email Anda Belum Terdaftar !');history.go(-1);</script>";
        mysql_close($connection); // Menutup koneksi
    }
    else if($rows==1){              
        header("location:isinohp.php");
        $_SESSION['forget_user']=$email; // Membuat Sesi/session
        mysql_close($connection); // Menutup koneksi
    }
    
}
?>