//SQL SORGULARI

<?php 
    
//select işlemi tüm talo      
$sql=$db->prepare("SELECT * FROM TABLO_ADI");
$sql->execute();


 while( $sqlCek=$sql->fetch(PDO::FETCH_ASSOC))
 {
?>


<?php } ?>