<?php
// Membangun Koneksi dengan Server dengan nama server, user_id dan password sebagai parameter
$connection = mysql_connect("localhost", "root", "");
// Seleksi Database
$database="database market";
$db = mysql_select_db($database);
session_start();// Memulai Session
// Menyimpan Session
$user_check=$_SESSION['confirm_admin'];
$login_session =$user_check;
if(!isset($login_session)){
	mysql_close($connection); // Menutup koneksi
	header('Location:confirmadmin.php'); // Mengarahkan ke Home Page
}
?>