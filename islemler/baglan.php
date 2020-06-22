<?php 
$host="localhost"; //Host adınızı girin varsayılan olarak Localhost
$veritabani_ismi="ihsanke1_domaintakip"; //Veritabanı İsminiz
$kullanici_adi="ihsanke1_domaintakip"; //Veritabanı kullanıcı adınız
$sifre="qtlKEJQeTdb)"; //Kullanıcı şifreniz

try {
	$db=new PDO("mysql:host=$host;dbname=$veritabani_ismi;charset=utf8",$kullanici_adi,$sifre);
	//echo "veritabanı bağlantısı başarılı";
}

catch (PDOExpception $e) {
	echo $e->getMessage();
}
?>
