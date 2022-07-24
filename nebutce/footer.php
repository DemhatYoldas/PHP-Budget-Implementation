 <footer>
      <nav class="navbar fixed-bottom navbar-light bg-light p-0 m-0">
        <div class="container p-0">
          <div class="btn-group col-12">
            <a href="index.php" class="btn btn-outline-secondary btn-lg active">
             <i class="bi bi-house" style="font-size: 2rem;"></i>
           </a>
           <a href="income-expense.php" class="btn btn-outline-secondary btn-lg">
            <i class="bi bi-arrow-down-up" style="font-size: 2rem;"></i>
          </a>
          <a href="income-report.php" class="btn btn-outline-secondary btn-lg">
            <i class="bi bi-cash" style="font-size: 2rem;"></i>
          </a>
          <a href="about.php" class="btn btn-outline-secondary btn-lg">
            <i class="bi bi-info" style="font-size: 2rem;"></i>
          </a>
        </div>
      </div>
    </nav>
  </footer>
 




         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 





          <!-- Option 1: Bootstrap Bundle with Popper -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

          <script type="text/javascript">
            $(function() {
             $('#datepicker').datepicker({
              format: 'dd/mm/yyyy'

            });
           });
         </script>


         <script type="text/javascript">
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
  .forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
</body>
</html>