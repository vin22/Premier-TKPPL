<?php
session_start();
$error=""; // Variabel untuk menyimpan pesan error
if (isset($_POST['save'])) {
    // Variabel username dan password
    $email=$_SESSION['login_user'];
    $fullname = $_POST['fullname'];
    $number=$_POST['number'];
    $jk=$_POST['jk'];
    $date=$_POST['tanggal'];
    $month=$_POST['bulan'];
    $year=$_POST['tahun'];
    $tgllhr=$year."-".$month."-".$date;
    list($thn,$bln,$tgl)=explode("-",$date);
    $address=$_POST['address'];
    // Membangun koneksi ke database
    $connection = mysql_connect("localhost", "root", "");
    // Mencegah MySQL injection 
    // Seleksi Database
    $database="database market";
    $db = mysql_select_db($database);
    $query = mysql_query("select * from akun where email='$email'", $connection);
    $rows = mysql_num_rows($query);
    
    if ($rows==0) {
        echo"<script>alert('Email Sudah Terdaftar !');history.go(-1);</script>";
        mysql_close($connection); // Menutup koneksi
    } 
    else if(!is_numeric($number))
    {
        echo"<script>alert('No Hp wajib diisi dengan angka !');history.go(-1);</script>";
        mysql_close($connection); // Menutup koneksi
    }
    else if(strlen($fullname)<=2)
    {
        echo"<script>alert('Nama wajib lebih dari 2 karakter !');history.go(-1);</script>";
        mysql_close($connection); // Menutup koneksi
    }
    else if(!strlen($number)>=9)
    {
        echo"<script>alert('No Hp wajib 9 angka atau lebih !');history.go(-1);</script>";
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
        $simpan = mysql_query("UPDATE akun SET nama='$fullname',nohp='$number',alamat='$address', tanggallahir='$tgllhr', jeniskelamin='$jk' where email='$email'");
        header("Location:../finishededitprofile.php");
        $_SESSION['edit_user']=$email; // Membuat Sesi/session
        mysql_close($connection); // Menutup koneksi
    }
    
}
?>