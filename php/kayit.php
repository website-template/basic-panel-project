 <?php
	$host="localhost";
	$db="sehiruni_db";
	$user="root";
	$pass="1111";
	$conn=@mysql_connect($host,$user,$pass) or die(header("Location:../baglanti-basarili.php"));
 
	mysql_select_db($db,$conn) or die(header("Location:../baglanti-basarisiz.php"));
	mysql_set_charset('latin5',$conn);
?>
    <?php 
		include("php/kayit.php");
		ob_start();
		session_start();
		
        if($_POST){
        
            $adsoyad       =    $_POST["adi_soyadi"];
            $k_adsoyad    =    $_POST["kullanici_adi_soyadi"];
			$email        =    $_POST["email_adresi"];
            $parola    =    $_POST["parola"];
            
            $ekle        =    mysql_query("insert into mezun (adi_soyadi,kullanici_adi_soyadi,email_adresi,parola) values ('$adsoyad','$k_adsoyad','$email','$parola')");;
            
            if($ekle){
                header("Location:../kayit-basarili.php");
				sleep(5);
				header("Location:../index.php");
            }else{
                header("Location:../kayit-basarisiz.php");
				sleep(5);
				header("Location:../kayit.php");
            }
        }
    ?>