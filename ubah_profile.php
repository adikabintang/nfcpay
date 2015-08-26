<?php
session_start();

$koneksi = mysql_connect( "localhost", "root", "");
	
mysql_select_db("nfc_pay",$koneksi);

isset($_SESSION['username']);
isset($_SESSION['enroll']);
isset($_SESSION['id']); 
isset($_SESSION['nama']);
isset($_SESSION['alamat']);
isset($_SESSION['saldo']);
isset($_SESSION['jumlah_transaksi']);
isset($_SESSION['waktu_join']);
	

if($_SESSION['enroll'] == 'customer')
{

if($_POST['passwordbaru']!=$_POST['repassword'])
{echo "password tidak match, go back 
		 <a href='profile.php'>    klik disini</a>...";}
		 
 else{

if ( empty($_POST['username']) || empty($_POST['repassword']) || empty($_POST['password']) || empty($_POST['passwordbaru']))
	{
		 echo "semua field harus diisi, go back
		 <a href='profile.php'>    klik disini</a>...";
	}
else{
//cek username yang sama
$query = mysql_fetch_array(mysql_query("SELECT password FROM data_user WHERE username='$_POST[username]'"));

	if($query){
	echo "password salah, go back
		 <a href='profile.php'>    klik disini</a>...";
	}
	
	else{

	//record ke tabel
	$record = mysql_query("INSERT INTO data_user SET 
        nama='$_POST[nama]', 
        username='$_POST[username]', 
        password='$_POST[passwordbaru]'"
						);
			if ($record){
			echo "Data telah diganti, go back<a
				href='profile.php'>    klik disini</a>...";
				
						}
				else{
					echo "Data gagal disimpan, go back<a
				href='profile.php'>    klik disini</a>... <br>";
					}

		}
}
 }
}

else
	{header("location:index.php");}
	?>