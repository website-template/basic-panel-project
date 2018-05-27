<?php 

include("baglanti.php");
ob_start();
session_start();
 
$kadi = $_POST['user'];
$sifre = $_POST['passwd'];
 
$sql_check = mysql_query("select * from mezun where kullanici_adi_soyadi='".$user."' and parola='".$passwd."' ") or die(mysql_error());
 
if(mysql_num_rows($sql_check))  {
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $user;
    $_SESSION["pass"] = $passwd;
    header("Location:index.php");
}
else {
	if($user=="root" or $passwd=="1234") {
		header("Location:../giris-basarili.php");

    else if($user=="" or $passwd=="") {
		header("Location:../giris-bos.php");
	}
    else {
		header("Location:../giris-basarisiz.php");
    }
}
 
ob_end_flush();
?>