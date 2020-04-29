<?php

session_start();
ob_start();


if(($_POST["user"]=="B181210010") and ($_POST["pass"]=="123456"))
{

$_SESSION["login"] = "true";
$_SESSION["user"] = "B181210010";
$_SESSION["pass"] = "123456";

echo "Hosgeldiniz B181210010. Giriş basarili. Anasayfaya yonlendiriliyorsunuz. Lütfen bekleyin..";
header("Refresh:2; url=Anasayfa.html");

}
if(($_POST["user"]!="B181210010") and ($_POST["pass"]!="123456"))
{
echo "Kullanici adi veya sifre yanlis.";
header("Refresh: 2; url=index.php");
}

if(($_POST["user"]=="") and ($_POST["pass"]==""))
{
    echo "Kullanici adi veya sifre bos birakilmamalidir";
    header("Refresh: 2; url=index.php");
}

ob_end_flush();
?>