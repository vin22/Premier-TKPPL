<?php
session_start();
$error=""; // Variabel untuk menyimpan pesan error
if (isset($_POST['edit'])) {
	
    // Variabel username dan password
    $nama = $_POST['nama'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];
    $deskripsi=$_POST['deskripsi'];
    $spesifikasi=$_POST['spesifikasi'];
    $fileName = $_FILES['image']['name'];
    $id=$_POST['idedit'];
    // Membangun koneksi ke database
    $connection = mysql_connect("localhost", "root", "");
    // Mencegah MySQL injection 
    // Seleksi Database
    $database="database market";
    $db = mysql_select_db($database);
    $query = mysql_query("select * from produk where produkID='$id'", $connection);
    $rows = mysql_num_rows($query);
    
    if ($stok<0) {
        echo"<script>alert('Stok Product wajib 0 atau lebih !');history.go(-1);</script>";
        mysql_close($connection); // Menutup koneksi
    } 
    else if($rows==1){ 
        if(empty($fileName))
        {
            $simpan = mysql_query("Update produk SET namaproduk='$nama',stok='$stok',harga='$harga',deskripsi='$deskripsi',spesifikasi='$spesifikasi' where produkID='$id'");
            header("Location:../finisheditproduct.php");
            $_SESSION['edit_product']=$nama; // Membuat Sesi/session
            mysql_close($connection); // Menutup koneksi
        }
        else
        {
            $simpan = mysql_query("Update produk SET namaproduk='$nama',stok='$stok',harga='$harga',deskripsi='$deskripsi',spesifikasi='$spesifikasi',Foto='$fileName' where produkID='$id'");
            move_uploaded_file($_FILES['image']['tmp_name'], "../image/".$_FILES['image']['name']);
            header("Location:../finisheditproduct.php");
            $_SESSION['edit_product']=$nama; // Membuat Sesi/session
            mysql_close($connection); // Menutup koneksi
        }
    }
    
}
?>