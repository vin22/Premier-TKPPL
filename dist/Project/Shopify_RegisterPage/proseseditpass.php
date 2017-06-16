<?php
session_start();
$error=""; // Variabel untuk menyimpan pesan error
if (isset($_POST['save'])) {
    // Variabel username dan password
    $email=$_SESSION['login_user'];
    $current=$_POST['current'];
    $password=$_POST['password'];
    $confirm=$_POST['confirm'];
    // Membangun koneksi ke database
    $connection = mysql_connect("localhost", "root", "");
    // Mencegah MySQL injection 
    // Seleksi Database
    $database="database market";
    $db = mysql_select_db($database);
    $query = mysql_query("select * from akun where email='$email' AND password='$current'", $connection);
    $rows = mysql_num_rows($query);
    
    if($password!=$confirm)
    {
        $error= "Confirm Password wajib sama dengan New Password!!!";
        mysql_close($connection); // Menutup koneksi
    }
    else if(strlen($password)<=6)
    {
        $error= "New Password harus lebih dari 6 karakter!!!";
        mysql_close($connection); // Menutup koneksi
    }
    else if($current==$password)
    {
        $error="New Password wajib berbeda dari Current Password!!!";
    }
    else if($rows==1){              
        $simpan = mysql_query("UPDATE akun SET password='$password' where email='$email' AND password='$current'");
        header("Location:../finisheditpass.php");
        $_SESSION['edit_pass_user']=$email; // Membuat Sesi/session
        mysql_close($connection); // Menutup koneksi
    }
    
}
?>