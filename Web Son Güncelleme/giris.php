<?php

session_start();
ob_start();


if(($_POST["user"]=="B181210010@ogr.sakarya.edu.tr") && ($_POST["pass"]=="123456"))
{

$_SESSION["login"] = "true";
$_SESSION["user"] = "B181210010@ogr.sakarya.edu.tr";
$_SESSION["pass"] = "123456";

echo "Hosgeldiniz. Giriş basarili. Anasayfaya yonlendiriliyorsunuz. Lütfen bekleyin..";
header("Refresh:2; url=Anasayfa.html");

}
elseif(($_POST["user"]=="") && ($_POST["pass"]==""))
{
echo "Kullanici adi veya sifre bos birakilamaz.";
header("Refresh: 2; url=Giris.html");
}
else
{
echo "Kullanici adi veya sifre yanlis.";
header("Refresh: 2; url=Giris.html");
}


ob_end_flush();
?>