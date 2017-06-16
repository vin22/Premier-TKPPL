<?php
session_start();
if(session_destroy()) // Menghapus Sessions
{
	header("Location: masuk.php"); // Langsung mengarah ke Home index.php
}
$_SESSION['login_user']=NULL;
?>