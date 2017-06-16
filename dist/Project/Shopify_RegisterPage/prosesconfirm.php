<?php
session_start();
if (isset($_POST['confirm'])) {
    // Variabel username dan password
    $bankpengirim=$_POST['namagivebank'];
    $pengirim=$_POST['namagive'];
    $rekpengirim=$_POST['norekgive'];
    $pesanid=$_POST['nofak'];
    $pilihan=$_POST['pilihan'];
    $date=$_POST['date'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    $total=$_POST['total'];
    $tglbyr=$year."-".$month."-".$date;
    $emailuser=$_SESSION['login_user'];
    // Membangun koneksi ke database
    $connection = mysql_connect("localhost", "root", "");
    // Mencegah MySQL injection 
    // Seleksi Database
    $database="database market";
    $db = mysql_select_db($database);
    $query4=mysql_query("select * from pesan where email='$emailuser'");
    $row4=mysql_num_rows($query4);
    if($row4>0)
    {
        $byk4=0;
        $pesanid4=array($row4);
        while($kolom4=mysql_fetch_assoc($query4))
        {
            $pesanid4[$byk4]=$kolom4['pesanID'];
            $byk4++;
        }
    }
    $benar=false;
    for($x=0;$x<$row4;$x++)
    {
        if($pesanid==$pesanid4[$x])
            $benar=true;
    }
    $query = mysql_query("select * from konfirmasi_bayar where pesanID='$pesanid'", $connection);
    $rows=mysql_num_rows($query);
    $rekpengirim=str_replace(' ','',$rekpengirim);
    
    if($pilihan=="pertama"){
        $penerima="vincent";
        $rekpenerima="1264047227";
        $email="limvin@yahoo.co.id";
    }
        
    else if($pilihan=="kedua")
    {
        $penerima="jefri";
        $rekpenerima="1065057117";    
        $email="jefri@email.com";
    }
        
    else if($pilihan=="ketiga")
    {
        $penerima="steven willington"; 
        $rekpenerima="1514048228";
        $email="steven_will@gmail.com";
    }
    else if($pilihan=="keempat")
    {
        $penerima="christopher";
        $rekpenerima="1314047524";
        $email="christopher@hotmail.com";
    }  
    if(!empty($email))
    {
        if($benar==true)
        {
            if($rows==0){
                $simpan=mysql_query("INSERT INTO konfirmasi_bayar VALUES('NULL','$pesanid','$email','$penerima','$pengirim','$rekpenerima','$rekpengirim','$tglbyr','$total')");
                $bayar=mysql_query("update pesan SET statusbayar='Proses' where pesanID='$pesanid'");
                header("Location:../finishconfirmuser.php");
                $_SESSION['confirm_user']=$pesanid; // Membuat Sesi/session
                mysql_close($connection); // Menutup koneksi
            }
        }
        else
        {
            echo"<script>alert('No Faktur Anda salah!');history.go(-1);</script>";
            mysql_close($connection); // Menutup koneksi
        }
    }
    else
    {
        echo"<script>alert('Bagian Penerima masih salah!');history.go(-1);</script>";
        mysql_close($connection); // Menutup koneksi
    }
}
?>