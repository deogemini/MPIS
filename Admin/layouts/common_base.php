  </div>
  </div>

  <?php include 'layouts/Footer.php' ?>
  <script src="/MPIS/Assets/js/jquery.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css"/>
  <script  src="/MPIS/Assets/js/bootstrap.min.js"></script>
  <script src="/MPIS/Assets/plugins/dist/js/select2.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

  <script>
      $(function(){
        $('.js-example-basic-single').select2();
      });
      </script>
      <script>
      $(document).ready(function() {
        $('#oneshajimbo').DataTable();
    } );
  </script>
  <script>
  $(document).ready(function () {
    $('.edit_jimbo_btn').on('click', function() {
      $('#edit_jimbo_modal').modal('show');
      $tr  = $(this).closest('tr');
      var data = $tr.children("td").map(function() {
        return $(this).text();

      }).get();
      console.log(data);
      $('#edit_jimbo_id').val(data[0]);
      $('#jinalajimbo').val(date[1]);
      $('#mkoa').val(date[2]);
      $('#wilaya').val(date[3]);
      $('#kata').val(date[4]);
    });
  });
  </script>

<!-- DELETE MODAL -->
<script>
$(document).ready(function () {
  $('.deletebtn').on('click', function() {
    $('#deletemodal').modal('show');
    $tr  = $(this).closest('tr');
    var data = $tr.children("td").map(function() {
      return $(this).text();

    }).get();
    console.log(data);
    $('#delete_id').val(data[0]);
  });
});
</script>

<script>
$(document).ready(function () {
  $('.delete_mbunge_btn').on('click', function() {
    $('#delete_mbunge_modal').modal('show');
    $tr  = $(this).closest('tr');
    var data = $tr.children("td").map(function() {
      return $(this).text();

    }).get();
    console.log(data);
    $('#delete_mbunge_Id').val(data[0]);
  });
});
</script>

  <script>
  $(document).ready(function () {
    $('.edit_mbunge_btn').on('click', function() {
      $('#edit_mbunge_modal').modal('show');
      $tr  = $(this).closest('tr');
      var data = $tr.children("td").map(function() {
        return $(this).text();

      }).get();
      console.log(data);
      $('#edit_mbunge_id').val(data[0]);
      $('#jinalakwanza').val(date[1]);
      $('#jinalapili').val(date[2]);
      $('#jinalamwisho').val(date[3]);
      $('#gender').val(date[4]);
      $('#gender').val(data[5]);
      $('#dob').val(date[6]);
      $('#email').val(date[7]);
      $('#telephone').val(date[8]);
      $('#chama').val(date[9]);
      $('#startingdate').val(date[10]);
      $('#finishingdate').val(date[11]);
    });
  });
  </script>





  </body>
  </html>
