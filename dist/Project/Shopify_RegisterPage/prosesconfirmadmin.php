<?php
session_start();
if (isset($_POST['confirm'])) {
    // Variabel username dan password
    $pesanid=$_POST['pesanid'];
    // Membangun koneksi ke database
    $connection = mysql_connect("localhost", "root", "");
    // Mencegah MySQL injection 
    // Seleksi Database
    $database="database market";
    $db = mysql_select_db($database);
    $query1 = mysql_query("select * from orderdetail where pesanID='$pesanid'", $connection);
    $num=mysql_num_rows($query1);
    if($num>0)
    {
        $produkid=array($num);
        $quantity=array($num);
        $byk=0;
        while($kolom1=mysql_fetch_assoc($query1))
        {
            $produkid[$byk]=$kolom1['produkID'];
            $quantity[$byk]=$kolom1['quantity'];
            $byk++;
        }
    }
    $query = mysql_query("select * from konfirmasi_bayar where pesanID='$pesanid'", $connection);
    $rows=mysql_num_rows($query);
    if($rows==1)
    {
        for($i=0;$i<$num;$i++)
        {
            $query2 = mysql_query("select * from produk where produkID='$produkid[$i]'", $connection);
            
            $row2=mysql_num_rows($query2);
            $kolom2=mysql_fetch_assoc($query2);
            $stok=$kolom2['stok'];
            $stokbarang=$stok-$quantity[$i];
            $simpan=mysql_query("update produk set stok='$stokbarang' where produkID='$produkid[$i]'");
        }
        $query3 = mysql_query("select * from pesan where pesanID='$pesanid'", $connection);
        $kolom3=mysql_fetch_assoc($query3);
        $status=$kolom3['statusbayar'];
        $status="Berhasil";
        $simpan3=mysql_query("update pesan set statusbayar='$status' where pesanID='$pesanid'");
        $delete=mysql_query("Delete from konfirmasi_bayar where pesanID='$pesanid'");
        header("location:../finishconfirmadmin.php");
        $_SESSION['confirm_admin']=$pesanid;
        mysql_close($connection); // Menutup koneksi
    }
    else if($rows==0)
    {
        echo"<script>alert('Error!');history.go(-1);</script>";
        mysql_close($connection); // Menutup koneksi
    }
}
else if(isset($_POST['unconfirm'])){
    // Variabel username dan password
    $pesanid=$_POST['pesanid'];
    // Membangun koneksi ke database
    $connection = mysql_connect("localhost", "root", "");
    // Mencegah MySQL injection 
    // Seleksi Database
    $database="database market";
    $db = mysql_select_db($database);
    
    $query = mysql_query("select * from konfirmasi_bayar where pesanID='$pesanid'", $connection);
    $rows=mysql_num_rows($query);
    $delete1=mysql_query("delete from pesan where pesanID='$pesanid'");
    $delete=mysql_query("Delete from konfirmasi_bayar where pesanID='$pesanid'");
    header("location:../finishconfirmadmin.php");
    $_SESSION['confirm_admin']=$pesanid;
    mysql_close($connection); // Menutup koneksi
}
?>