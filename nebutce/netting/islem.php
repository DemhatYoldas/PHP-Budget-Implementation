<?php
session_start();
//veritabanı baglantısı yapıyoruz
require_once'baglan.php';

echo "<pre>";
print_r($_POST);
echo "</pre>";


if (isset($_POST['expenses_add'])) {
   

$sql_expenses=$db->prepare("INSERT INTO expenses SET
 expenses_price=:expenses_price,
 expenses_categroy=:expenses_categroy,
 expenses_date=:expenses_date
 ");

$sql_insert=$sql_expenses->execute(
 [
  'expenses_price'=> $_POST['expenses_price'],
  'expenses_categroy'=> $_POST['expenses_categroy'],
  'expenses_date'=> $_POST['expenses_date'] ]);

if ($sql_insert) {
 $_SESSION['sql_expenses_insert']="ok";
  header("Location:../expenses-add.php"); 
 exit;
}else
{
   $_SESSION['sql_expenses_insert']="no";
    header("Location:../expenses-add.php"); 
    exit;
}



}if (isset($_POST['income_add'])) {
  


$sql_income=$db->prepare("INSERT INTO income SET
 income_price=:income_price,
 income_categroy=:income_categroy,
 income_date=:income_date
 ");

$sql_insert=$sql_income->execute(
 [
  'income_price'=> $_POST['income_price'],
  'income_categroy'=> $_POST['income_categroy'],
  'income_date'=> $_POST['income_date']
 ]
);

//sql_insert ile sql_insert==1 aynıdır unutma !
//header aslında bir yönlendirme aracıdır ve header sonunda mutlaka exit kullanılmalı php sunu yapılandırma ayarları  ve lınux da aynı değil yönlendirme de sorun yaşayabiliriz! 

//bir klasör içerisinden çıkmak için " ../ "dememiz yeterli

//?durum=ok bir GET değeri !

//sesion kullanma sebebimiz üst url de durum=ok yamasını istemedim den dolayı 

//session'la suan bir durum tasıyoruz 

if ($sql_insert) {
 $_SESSION['sql_income_insert']="ok";
  header("Location:../income-add.php"); 
 exit;
}else
{
   $_SESSION['sql_income_insert']="no";
	 header("Location:../income-add.php"); 
    exit;
}


//sesion kullanacağımdan dolayı bunu yorum satıran  aldım 
//if ($sql_insert) {

//  header("Location:../income-add.php?durum=ok"); 

//}else
//{
//    header("Location:../income-add.php?durum=no"); 
//}


}