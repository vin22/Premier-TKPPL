<?php
session_start();
$error=""; // Variabel untuk menyimpan pesan error
if (isset($_POST['submit'])) {
	if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Email or Password is invalid";
	}
	else
	{
        // Variabel username dan password
        $email=$_POST['email'];
        $fullname = $_POST['fullname'];
        $password=$_POST['password'];
        $confirm=$_POST['confirm'];
        $number=$_POST['number'];
        $jk=$_POST['jk'];
        $date=$_POST['date'];
        $month=$_POST['month'];
        $year=$_POST['year'];
        $tgllhr=$year."-".$month."-".$date;
        $address=$_POST['address'];
        // Membangun koneksi ke database
        $connection = mysql_connect("localhost", "root", "");
        // Mencegah MySQL injection 
        $email = stripslashes($email);
        $fullname=stripslashes($fullname);
        $password = stripslashes($password);
        
        $email = mysql_real_escape_string($email);
        $fullname=mysql_real_escape_string($fullname);
        $password = mysql_real_escape_string($password);
        // Seleksi Database
        $database="database market";
        $db = mysql_select_db($database);
        $status="User";
        $query = mysql_query("select * from akun where email='$email'", $connection);
        $rows = mysql_num_rows($query);
        $kodeno=substr($number,0,2);
            if ($rows==1) {
                
                echo"<script>alert('Email Sudah Terdaftar !');history.go(-1);</script>";
                mysql_close($connection); // Menutup koneksi
            } 
            else if(strlen($password)<=6)
            {
                echo"<script>alert('Password harus lebih dari 6 karakter !');history.go(-1);</script>";
                mysql_close($connection); // Menutup koneksi
            }
            else if(!is_numeric($number))
            {
                echo"<script>alert('No Hp wajib diisi dengan angka !');history.go(-1);</script>";
                mysql_close($connection); // Menutup koneksi
            }
            else if($password!=$confirm)
            {
                echo"<script>alert('Password wajib sama dengan Confirm Password !');history.go(-1);</script>";
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
            
            else if($kodeno==080)
            {
                echo"<script>alert('Tidak ada Angka dengan No Hp 080 !');history.go(-1);</script>";
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
            else if($rows==0){              
                $simpan = mysql_query("INSERT INTO akun(nama, email, password,nohp,alamat, tanggallahir, jeniskelamin,status) VALUES('$fullname','$email','$password','$number','$address','$tgllhr','$jk','$status')");
                header("Location:../sucacc.php");
                $_SESSION['register_user']=$fullname; // Membuat Sesi/session
                mysql_close($connection); // Menutup koneksi
            }
    }
}
?>