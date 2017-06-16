<?php
session_start();
if (isset($_POST['save'])) {
    // Variabel username dan password
    $email=$_SESSION['forget_user'];
    $password=$_POST['password'];
    $confirm=$_POST['confirm'];
    // Membangun koneksi ke database
    $connection = mysql_connect("localhost", "root", "");
    // Mencegah MySQL injection 
    // Seleksi Database
    $database="database market";
    $db = mysql_select_db($database);
    $query = mysql_query("select * from akun where binary email='$email'", $connection);
    $rows = mysql_num_rows($query);
    if($password!=$confirm)
    {
        echo"<script>alert('Password wajib sama dengan Confirm Password !');history.go(-1);</script>";
        mysql_close($connection); // Menutup koneksi
    }
    else if(strlen($password)<=6)
    {
        echo"<script>alert('Password harus lebih dari 6 karakter !');history.go(-1);</script>";
        mysql_close($connection); // Menutup koneksi
    }
    else if($rows==1){              
        $simpan = mysql_query("UPDATE akun SET password='$password' where email='$email'");
        header("Location:finishrestore.php");
        $_SESSION['forget_nohp_user']=$email; // Membuat Sesi/session
        mysql_close($connection); // Menutup koneksi
    }
    
}
?>