<?php
session_start();
$error=""; // Variabel untuk menyimpan pesan error
if (isset($_POST['delete'])) {
    // Membangun koneksi ke database
    $connection = mysql_connect("localhost", "root", "");
    // Mencegah MySQL injection 
    // Seleksi Database
    $database="database market";
    $db = mysql_select_db($database);
    $id=$_POST['id'];
    $query = mysql_query("select * from produk where binary produkID='$id'", $connection);
    $rows = mysql_num_rows($query);
    $kolom_db=mysql_fetch_assoc($query);
    $nama=$kolom_db['namaproduk'];
    if($rows==1){              
        $simpan = mysql_query("delete from produk where binary produkID='$id'");
        header("Location:../finishdeleteproduct.php");
        $_SESSION['delete_product']=$nama; // Membuat Sesi/session
        mysql_close($connection); // Menutup koneksi
    }
    
}
?>