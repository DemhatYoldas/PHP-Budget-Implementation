<?php 
session_start();
//header bir çok sayfamda oldundan dolayı sadece headera veri baglantı koymam yeterli ama login işlemi olsaydı  sayfa içersine manule eklemek zorunda kalacaktım  session_strat ve obb_start suan gerekli olmadından dolayı kullanma gereği duymadım 

require_once'netting/baglan.php';
?>

<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

    

    <link rel="stylesheet" type="text/css" href="css/icon/bootstrap-icons.css">

    <title>Gelir - Gider NE-BUTCE</title>
    <style type="text/css">
      body {
        overflow-x: hidden;
        overflow-y: hidden;
      }
    </style>
  </head>

  <!--navbar-->
  <nav class="navbar sticky-top navbar-expand-md navbar-light bg-light border">
    <div class="container justify-content-center">
      <a href="index.php" class="navbar-brand p-0"><b>NE-BÜTÇE</b></a>
    </div>
  </nav>
