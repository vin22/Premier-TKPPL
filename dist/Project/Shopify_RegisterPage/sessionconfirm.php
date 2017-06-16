<?php
// Membangun Koneksi dengan Server dengan nama server, user_id dan password sebagai parameter
$connection = mysql_connect("localhost", "root", "");
// Seleksi Database
$database="database market";
$db = mysql_select_db($database);
session_start();// Memulai Session
// Menyimpan Session
$user_check=$_SESSION['confirm_user'];
// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
$ses_sql=mysql_query("select * from konfirmasi_bayar where pesanID='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['pesanID'];
if(!isset($login_session)){
	mysql_close($connection); // Menutup koneksi
	header('Location:confirmuser.php'); // Mengarahkan ke Home Page
}
?>