<?php

//Rekam ke database
//Koneksi ke server Mysql
mysql_connect("localhost","root","");
mysql_select_db("nfc_pay");

if($_POST['password']!=$_POST['Repassword'])
{echo "password tidak match, silakan regis ulang
		 <a href='registrasi.php'>    klik disini</a>...";}
		 
 else{

if (empty($_POST['nama']) || empty($_POST['username']) || empty($_POST['id']) || empty($_POST['password']) || empty($_POST['alamat']) || empty($_POST['email']))
	{
		 echo "semua field harus diisi, silakan regis ulang
		 <a href='registrasi.php'>    klik disini</a>...";
	}
else{
//cek username yang sama
$query = mysql_fetch_array(mysql_query("SELECT username FROM data_user WHERE username='$_POST[username]'"));

	if($query){
	echo "username telah digunakan, silakan regis ulang
		 <a href='registrasi.php'>    klik disini</a>...";
	}
	
	else{

	//record ke tabel
	$record = mysql_query("INSERT INTO data_user SET 
        nama='$_POST[nama]', 
        username='$_POST[username]', 
        password='$_POST[password]', 
        id='$_POST[id]',
		alamat='$_POST[alamat]',
		email='$_POST[email]'"
						);
			if ($record){
			echo "Data telah tersimpan, silakan login<a
				href='index.php'>    klik disini</a>...";
				
						}
				else{
					echo "Data gagal disimpan <br>";
					}

		}
}
 }
?>



