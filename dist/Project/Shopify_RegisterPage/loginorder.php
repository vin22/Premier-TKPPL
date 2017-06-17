<?php
session_start(); // Memulai Session
$error=""; // Variabel untuk menyimpan pesan error
if (isset($_POST['submit'])) {
	if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Email or Password is invalid";
	}
	else
	{
		// Variabel username dan password
		$email=$_POST['email'];
		$password=$_POST['password'];
		// Membangun koneksi ke database
		$connection = mysql_connect("localhost", "root", "");
		// Mencegah MySQL injection 
		// Seleksi Database
        $database="database market";
		$db = mysql_select_db($database);
		// SQL query untuk memeriksa apakah karyawan terdapat di database?
		$query = mysql_query("select * from akun where binary email='$email' AND  binary password='$password'", $connection);
		$rows = mysql_num_rows($query);
        $kolom_db=mysql_fetch_assoc($query);
        $status=$kolom_db['status'];
        $produkid=$_POST['id'];
            if ($rows == 1) {
                if($status=="User")
                {
                    $_SESSION['login_user']=$email; // Membuat Sesi/session
                    $_SESSION['id_order']=$produkid;
                    header("location: ../Shopify-SecondPage/OrderUser.php"); // Mengarahkan ke halaman profil
                    mysql_close($connection); // Menutup koneksi
                }
                else if($status=="Admin")
                {
                    $_SESSION['login_admin']=$email; // Membuat Sesi/session
                    header("location: ../profileadmin.php"); // Mengarahkan ke halaman profil
                    mysql_close($connection); // Menutup koneksi
                }
            } 
            
            else {
                $querye=mysql_query("select * from akun where email='$email'", $connection);
                $rowe=mysql_num_rows($querye);
                if($rowe==1){
                    echo"<script>alert('Password Anda salah !');history.go(-1);</script>";
                    mysql_close($connection); // Menutup koneksi
                }
                else{
                    echo"<script>alert('Email Anda belum terdaftar !');history.go(-1);</script>";
                    mysql_close($connection); // Menutup koneksi
                }
            }
        
	}
}
?>