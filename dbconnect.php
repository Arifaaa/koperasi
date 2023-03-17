<?php 

$host = "localhost";
$user = "root";
$psw = "";
$db = "tokooceana";

$conn = mysqli_connect($host, $user, $psw);

if ($conn){
	$mokka = mysqli_select_db($conn,$db);
	//echo "Selamat Anda Terhubung ke Database";
	if (!$mokka){
		echo "Maaf Anda Tidak Terhubung ke Database";
	}
}else{
	echo "Coba Lagi";
}

 ?>