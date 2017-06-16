<?php
session_start();
$error=""; // Variabel untuk menyimpan pesan error
if (isset($_POST['add'])) {
	
    // Variabel username dan password
    $nama = $_POST['nama'];
    $kategori=$_POST['kategori'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];
    $deskripsi=$_POST['deskripsi'];
    $spesifikasi=$_POST['spesifikasi'];
    $fileName = $_FILES['image']['name'];
    // Membangun koneksi ke database
    $connection = mysql_connect("localhost", "root", "");
    // Mencegah MySQL injection 
    // Seleksi Database
    $database="database market";
    $db = mysql_select_db($database);
    $query = mysql_query("select * from produk where namaproduk='$nama'", $connection);
    $rows = mysql_num_rows($query);
    $byk= mysql_query("select * from produk where kategori='$kategori'", $connection);
    $bykrow = mysql_num_rows($byk);
    $kodebyk=1+$bykrow;
    if($kategori=='makanan')
    {
        $kode='MA';
        $kodeproduk=$kode.'00'.$kodebyk;
    }
    else if($kategori=='mobil')
    {
        $kode='MBL';
        $kodeproduk=$kode.'0'.$kodebyk;
    }
    else if($kategori=='helm')
    {
        $kode='HE';
        $kodeproduk=$kode.'00'.$kodebyk;
    }
    else if($kategori=='kacamata')
    {
        $kode='KA';
        $kodeproduk=$kode.'00'.$kodebyk;
    }
    else if($kategori=='minuman')
    {
        $kode='MI';
        $kodeproduk=$kode.'00'.$kodebyk;
    }
    else if($kategori=='motor')
    {
        $kode='MTR';
        $kodeproduk=$kode.'0'.$kodebyk;
    }
    else if($kategori=='permen')
    {
        $kode='PE';
        $kodeproduk=$kode.'00'.$kodebyk;
    }
    else if($kategori=='sepatu')
    {
        $kode='SU';
        $kodeproduk=$kode.'00'.$kodebyk;
    }
    else if($kategori=='handphone')
    {
        $kode='HA';
        $kodeproduk=$kode.'00'.$kodebyk;
    }
    else if($kategori=='laptop')
    {
        $kode='LA';
        $kodeproduk=$kode.'00'.$kodebyk;
    }
    else if($kategori=='sepeda')
    {
        $kode='SPD';
        $kodeproduk=$kode.'0'.$kodebyk;
    }
    else if($kategori=='jam tangan')
    {
        $kode='JAM';
        $kodeproduk=$kode.'0'.$kodebyk;
    }
    else if($kategori=='televisi')
    {
        $kode='TV';
        $kodeproduk=$kode.'00'.$kodebyk;
    }
    else if($kategori=='aksesoris handphone')
    {
        $kode='AH';
        $kodeproduk=$kode.'00'.$kodebyk;
    }
    else if($kategori=='aksesoris komputer')
    {
        $kode='AK';
        $kodeproduk=$kode.'00'.$kodebyk;
    }
    else if($kategori=='printer')
    {
        $kode='PRI';
        $kodeproduk=$kode.'0'.$kodebyk;
    }
    else if($kategori=='kamera')
    {
        $kode='CAM';
        $kodeproduk=$kode.'0'.$kodebyk;
    }
    else if($kategori=='perlengkapan olahraga')
    {
        $kode='PO';
        $kodeproduk=$kode.'00'.$kodebyk;
    }
    else if($kategori=='baju')
    {
        $kode='BAJ';
        $kodeproduk=$kode.'0'.$kodebyk;
    }
    else if($kategori=='celana')
    {
        $kode='CLN';
        $kodeproduk=$kode.'0'.$kodebyk;
    }
    else if($kategori=='kipas angin')
    {
        $kode='FAN';
        $kodeproduk=$kode.'0'.$kodebyk;
    }
    else if($kategori=='kulkas')
    {
        $kode='KUL';
        $kodeproduk=$kode.'0'.$kodebyk;
    }
    else if($kategori=='peralatan kecantikan')
    {
        $kode='KEC';
        $kodeproduk=$kode.'0'.$kodebyk;
    }
    else if($kategori=='mainan')
    {
        $kode='TOY';
        $kodeproduk=$kode.'0'.$kodebyk;
    }
    else if($kategori=='kartu memori')
    {
        $kode='MCA';
        $kodeproduk=$kode.'0'.$kodebyk;
    }
    else if($kategori=='speaker')
    {
        $kode='SPE';
        $kodeproduk=$kode.'0'.$kodebyk;
    }
    else if($kategori=='alat tulis')
    {
        $kode='ATU';
        $kodeproduk=$kode.'0'.$kodebyk;
    }
    else if($kategori=='air conditioner')
    {
        $kode='AC';
        $kodeproduk=$kode.'00'.$kodebyk;
    }
    else if(kategori=='pilih')
    {
        echo"<script>alert('Kategori Produk belum diinput !');history.go(-1);</script>";
        mysql_close($connection); // Menutup koneksi
    }
    if ($rows==1) {
        echo"<script>alert('Product Sudah Terdaftar !');history.go(-1);</script>";
        mysql_close($connection); // Menutup koneksi
    } 
    else if($rows==0){              
        $simpan = mysql_query("INSERT INTO produk VALUES('$kodeproduk','$nama','$kategori','$stok','$harga','$deskripsi','$spesifikasi','$fileName')");
        move_uploaded_file($_FILES['image']['tmp_name'], "../image/".$_FILES['image']['name']);
        header("Location:../finishaddproduct.php");
        $_SESSION['add_product']=$nama; // Membuat Sesi/session
        mysql_close($connection); // Menutup koneksi
    }
    
}
?>