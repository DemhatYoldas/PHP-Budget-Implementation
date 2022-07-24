<?php 
require_once 'header.php'; 
?>


  <body>
    <div class="container-fluid p-0">
      <div id="slider_id" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

          <?php 
          
          $sql=$db->prepare("SELECT * FROM slider");
          $sql->execute();

          //fetch ilgili satırı çeker  fetch all bütün hepsini çeker , fetch_assoc tüm verileri tanımladımız değişkene sqlCek atıyor  

          //$sqlCek=$sql->fetch(PDO::FETCH_ASSOC);

          //   echo "<pre>" amacı diziyi bize göstermesi
         // echo "<pre>";
        // print_r bir dizinin tüm satırlarını yazdırır içersine değişkeni verdimizde sonucu elde edicez 
       //   print_r($sqlCek);
      //    echo "</pre>";


    //while dongüsüyle teker teker ekranda dondürüyoruz burda 
         while( $sqlCek=$sql->fetch(PDO::FETCH_ASSOC))
          {
          ?>

          <!--burda da slider if dongüsü yaptık sql order 1 ise active değilse boş olmasını istedik-->

          <div class="carousel-item <?= ($sqlCek['slider_image_order']==1) ? 'active' : '' ?>">
            <img src="image/slider/<?php echo $sqlCek['slider_image']; ?>" alt="slide 01">
          </div>
        <?php } ?>

        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#slider_id" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#slider_id" data-bs-slide="prev">
        <span class="carousel-control-next-icon"></span>
      </button>
      

    </div>

<?php require_once 'footer.php'; ?>

   