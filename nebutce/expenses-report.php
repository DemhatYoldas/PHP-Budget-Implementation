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

          $sql=$db->prepare("SELECT 
           expenses_categroy,COUNT(*),
           SUM(expenses_price) FROM 
           expenses GROUP BY expenses_categroy;");
          $sql->execute();


          while($sqlCek=$sql->fetch(PDO::FETCH_ASSOC))
          {
            $expenses_categroy[$sqlCek['expenses_categroy']]=$sqlCek['SUM(expenses_price)'];
          }



          
          // echo "<pre>";
          // print_r($expenses_categroy);
          // echo "</pre>";

        



          ?>





            <div class="col-md-12 mb-3 d-flex justify-content-center">
             <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="expenses-report.php">GELİR</a>
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
        foreach ($expenses_categroy as $key => $value) {
          echo "'".$key."',";
        }
       ?>],
      datasets: [{
        label: '# of Votes',
        data: [<?php 
        foreach ($expenses_categroy as $key => $value) {
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







<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
</body>
</html>