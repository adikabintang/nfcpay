<?php	 
	$username=$_POST["username"];
	$password=$_POST["password"];
	

	$koneksi = mysql_connect( "localhost", "root", "");
	
	mysql_select_db("nfc_pay",$koneksi);

	$query = mysql_query("SELECT * FROM data_user WHERE username='$username' and password='$password'",$koneksi);
	
	$hasil = mysql_num_rows($query);

	while($row=mysql_fetch_array($query)){
		$nama = $row['nama'];
		$username = $row['username'];
		$password=$row['password'];
		$id = $row['id'];
		$alamat = $row['alamat'];
		$email = $row['email'];
		$saldo = $row['saldo'];
		$jumlah_transaksi = $row['jumlah_transaksi'];
		$waktu_join = $row['waktu_join'];
		$enroll = $row['enroll'];
		
	}

	if ($hasil==1){
	
	if($enroll==admin) {
    session_start();
	$_SESSION['nama'] = $nama;
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['id'] = $id;
	$_SESSION['alamat'] = $alamat;
	$_SESSION['email'] = $email;
	$_SESSION['saldo'] = $saldo;
	$_SESSION['jumlah_transaksi'] = $jumlah_transaksi;
	$_SESSION['waktu_join'] = $waktu_join;
	$_SESSION['enroll'] = $enroll;

	header ("location:HomepageAdm.php");
	}
	if($enroll==customer) {
	session_start();
	$_SESSION['nama'] = $nama;
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['id'] = $id;
	$_SESSION['alamat'] = $alamat;
	$_SESSION['email'] = $email;
	$_SESSION['saldo'] = $saldo;
	$_SESSION['jumlah_transaksi'] = $jumlah_transaksi;
	$_SESSION['waktu_join'] = $waktu_join;
	$_SESSION['enroll'] = $enroll;

	header ("location:Homepage.php");
	}
}
else {
header ("location:error.html");
}

?>















