<?php require_once 'header.php' ?>

<body class=" bg-light">

  <div class="container-fluid p-0 " id="home">

   <div class="row p-3">


    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <div class="col-md-12 mb-3 d-flex justify-content-center">
            <div class="d-flex justify-content-center">
              <h2>Rapor</h2>

            </div>
          </div>


          <?php 

          $sql=$db->prepare("SELECT income_categroy,COUNT(*),SUM(income_price) FROM income GROUP BY income_categroy;");
          $sql->execute();


          while($sqlCek=$sql->fetch(PDO::FETCH_ASSOC))
          {
            $income_categroy[$sqlCek['income_categroy']]=$sqlCek['SUM(income_price)'];
          }



          
          // echo "<pre>";
          // print_r($income_categroy);
          // echo "</pre>";

        



          ?>




          <div class="col-md-12 mb-3 d-flex justify-content-center">
           <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="income-report.php">GELİR</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active " aria-current="page" href="expenses-report.php">GİDER</a>
            </li>
          </ul>
        </div>


        <canvas id="myChart" width="400" height="400"></canvas>










      </div>
    </div>
  </div>



</div>


<?php require_once 'footer.php' ?>

  <script
  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
<script>
  const ctx = document.getElementById('myChart');
  const myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: [<?php 
        foreach ($income_categroy as $key => $value) {
          echo "'".$key."',";
        }
       ?>],
      datasets: [{
        label: '# of Votes',
        data: [<?php 
        foreach ($income_categroy as $key => $value) {
          echo "'".$value."',";
        }
       ?>],
        backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        ],

        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>