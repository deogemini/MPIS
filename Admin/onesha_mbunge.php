<?php include 'layouts/main.php'; ?>
<div>

  <table class="table table-bordered table-hover" id="oneshajimbo">
      <thead>
        <tr>
        <th>No.</th>
        <th>JINA LA KWANZA</th>
        <th>JINA LA PILI</th>
        <th>JINA LA MWISHO</th>
        <th>GENDER</th>
        <th>DOB</th>
        <th>EMAIL</th>
        <th>TELEPHONE</th>
        <th>CHAMA</th>
        <th>STARTINGDATE</th>
        <th>FINISHINGDATE</th>
        <th>Kata</th>
      </tr>
      </thead>
      <tbody>
        <?php
        include 'db.php';
    $data = $pdo->query("SELECT * FROM mbunge")->fetchAll();
    foreach ($data as $row) {
    ?>
    <tr>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->jinalakwanza; ?></td>
        <td><?php echo $row->jinalapili; ?></td>
        <td><?php echo $row->jinalamwisho; ?></td>
        <td><?php echo $row->gender; ?></td>
        <td><?php echo $row->birthdate; ?></td>
        <td><?php echo $row->email; ?></td>
        <td><?php echo $row->telephone; ?></td>
        <td><?php echo $row->chama; ?></td>
        <td><?php echo $row->startingdate; ?></td>
        <td><?php echo $row->finishingdate; ?></td>
    </tr>
    <?php
}
?>

    </tbody>
    <tfoot>
      <tr>
        <th>No.</th>
        <th>JINA LA KWANZA</th>
        <th>JINA LA PILI</th>
        <th>JINA LA MWISHO</th>
        <th>GENDER</th>
        <th>DOB</th>
        <th>EMAIL</th>
        <th>TELEPHONE</th>
        <th>CHAMA</th>
        <th>STARTINGDATE</th>
        <th>FINISHINGDATE</th>
      </tr>
    </tfoot>
</table>




<?php include 'layouts/common_base.php'; ?>
<script>
$(document).ready(function () {
  $('.edit_jimbo').on('click', function() {
    $('#edit_jimbo_modal').modal('show');
    $tr  = $(this).closest('tr');
    var data = $tr.children("td").map(function() {
      return $(this).text();

    }).get();
    console.log(data);
    $('#edit_nominee_id').val(data[0]);
    $('#full_name').val(data[1]);
    $('#nominee_category').val(date[2]);
    $('#nominee_year').val(date[3]);
  });
});
</script>
