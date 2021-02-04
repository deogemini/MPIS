  </div>
</div>

<?php include 'layouts/footer.php' ?>
<script src="/MPIS/Assets/js/jquery.js"></script>
<script src="/MPIS/Assets/js/jquery.dataTables.min.js"></script>
<script src="/MPIS/Assets/js/dataTables.bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script  src="/MPIS/Assets/js/bootstrap.min.js"></script>
<script src="/MPIS/Assets/plugins/dist/js/select2.min.js"></script>
<script>
    $(function(){
      $('.js-example-basic-single').select2();
    });

    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>