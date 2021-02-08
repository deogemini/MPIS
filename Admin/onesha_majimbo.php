<?php include 'layouts/main.php';
include 'db.php';
 ?>
<div>
<!-- modal -->
<?php

$jimbo = $pdo->query("SELECT * FROM jimbo")->fetchAll();
foreach ($jimbo as $row_jimbo) {
  $row_jimbo->id;
  $row_jimbo->jinalajimbo;
  $row_jimbo->mkoa;
  $row_jimbo->wilaya;
  $row_jimbo->kata;
}

 ?>
<div class="modal" tabindex="-1" role="dialog" id="edit_jimbo_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">UPDATE NOMINEE DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="edit_jimbo.php" >
      <div class="modal-body">
        <h4></h4>
      </div>
      <!-- <label for="">UPDATE THIS CATEGORY</label> -->
      <input type="hidden" name="edit_jimbo_id" id="edit_jimbo_id" class="form-control">
      <div  class="row form-group">
        <label for="">JINA LA JIMBO</label>
      <input type="text" name="jinalajimbo" class="form-control" id="jinalajimbo" style="width:100%;" value="<?php echo $row_jimbo->jinalajimbo;?>">
    </div>
    <div  class="row form-group">
      <label for="">MKOA</label>
    <input type="text" name="mkoa" class="form-control" id="mkoa" style="width:100%;" value="<?php echo $row_jimbo->mkoa;?>">
  </div>
  <div  class="row form-group">
    <label for="">WILAYA</label>
  <input type="text" name="wilaya" class="form-control" id="wilaya" style="width:100%;" value="<?php echo $row_jimbo->wilaya;?>">
</div>
<div  class="row form-group">
  <label for="">KATA</label>
<input type="text" name="kata" class="form-control" id="kata" style="width:100%;" value="<?php echo $row_jimbo->kata;?>">
</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" >Close</button>
        <button type="submit" name="edit_jimbo" class="btn btn-secondary btn-success btn-sm">Save & Update</button>
      </div>
    </form>

    </div>
  </div>
</div>
<!-- end modal -->
  <table class="table table-bordered table-hover" id="oneshajimbo">
      <thead>
        <tr>
        <th>No.</th>
        <th>Jina La Jimbo</th>
        <th>Mkoa</th>
        <th>Wilaya</th>
        <th>Kata</th>
        <th>Badili</th>
        <th>Futa</th>
      </tr>
      </thead>
      <tbody>
        <?php

    $data = $pdo->query("SELECT * FROM jimbo")->fetchAll();
    foreach ($data as $row) {
    ?>
    <tr>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->jinalajimbo; ?></td>
        <td><?php echo $row->mkoa; ?></td>
        <td><?php echo $row->wilaya; ?></td>
        <td><?php echo $row->kata; ?></td>
        <td><?php echo '<button type="button" class="btn btn-success btn-sm edit_jimbo_btn"><i class="fas fa-trash"></i>Edit</button>';?></td>
        <td><?php echo '<button type="button" class="btn btn-danger btn-sm delete_nominee"><i class="fas fa-trash"></i>Delete</button>';?></td>
    </tr>
    <?php
}
?>

    </tbody>
    <tfoot>
      <tr>
        <th>No.</th>
        <th>Jina La Jimbo</th>
        <th>Mkoa</th>
        <th>Wilaya</th>
        <th>Kata</th>
        <th>Badili</th>
        <th>Futa</th>
      </tr>
    </tfoot>
</table>




<?php include 'layouts/common_base.php'; ?>
