<?php
session_start();
if (isset($_POST['ok'])) {
    // Variabel username dan password
    $email=$_SESSION['forget_user'];
    $number=$_POST['number'];
    $date=$_POST['tanggal'];
    $month=$_POST['bulan'];
    $year=$_POST['tahun'];
    $tgllhr=$year."-".$month."-".$date;
    // Membangun koneksi ke database
    $connection = mysql_connect("localhost", "root", "");
    // Mencegah MySQL injection 
    $email = stripslashes($email);
    $email = mysql_real_escape_string($email);
    // Seleksi Database
    $database="database market";
    $db = mysql_select_db($database);
    $query = mysql_query("select * from akun where binary email='$email' AND nohp='$number' AND tanggallahir='$tgllhr'", $connection);
    $rows = mysql_num_rows($query);
    
    if($rows==0)
    {
        echo"<script>alert('No HP atau Tanggal Lahir Anda salah !');history.go(-1);</script>";
        mysql_close($connection); // Menutup koneksi
    }
    else if($month==2 && $date>=29)
    {
        echo"<script>alert('Tanggal Lahir Anda tidak valid !');history.go(-1);</script>";
        mysql_close($connection); // Menutup koneksi
    }
    else if($month==4 || $month==6 || $month==9 || $month==11 )
    {
        if($date==31)
        {
            echo"<script>alert('Tanggal Lahir Anda tidak valid !');history.go(-1);</script>";
            mysql_close($connection); // Menutup koneksi
        }
    }
    else if($rows==1){              
        header("location:isipassword.php");
        $_SESSION['forget_nohp_user']=$email; // Membuat Sesi/session
        mysql_close($connection); // Menutup koneksi
    }
    
}
?>