<?php include 'layouts/main.php';
include 'db.php';
$sql = "SELECT * FROM users WHERE role = 'mbunge' ";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$row = $stmt->fetchAll();
foreach($row as $rows){
$rows->id;
 $rows->firstname;
 $rows->secondname;
 $rows->lastname;
$rows->gender;
$rows->dateofbirth;
 $rows->email;
$rows->telephone;
$rows->chama;
 $rows->startingdate;
 $rows->finishingdate;
}


 ?>
<div>
<!--  -->

<!--  -->
  <table class="table table-bordered table-hover table-responsive" id="oneshambunge">
      <thead>
        <tr>
        <th>No.</th>
        <th>Jina la kwanza</th>
        <th>Jina la pili</th>
        <th>Jina la mwisho</th>
        <th>Gender</th>
        <th>Dob</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Chama</th>
        <th>Startingdate</th>
        <th>Finishingdate</th>
      </tr>
      </thead>
      <tbody>
    <tr>
        <td><?php echo $rows->id; ?></td>
        <td><?php echo $rows->firstname; ?></td>
        <td><?php echo $rows->secondname; ?></td>
        <td><?php echo $rows->lastname; ?></td>
        <td><?php echo $rows->jimbo; ?></td>
        <td><?php echo $rows->gender; ?></td>
        <td><?php echo $rows->birthdate; ?></td>
        <td><?php echo $rows->email; ?></td>
        <td><?php echo $rows->telephone; ?></td>
        <td><?php echo $rows->chama; ?></td>
        <td><?php echo $rows->startingdate; ?></td>
        <td><?php echo $rows->finishingdate; ?></td>
        <td><?php echo '<button type="button" class="btn btn-success btn-sm edit_mbunge_btn"><i class="fas fa-trash"></i>Edit</button>';?></td>
        <td><?php echo '<button type="button" class="btn btn-danger btn-sm delete_mbunge"><i class="fas fa-trash"></i>Delete</button>';?></td>
    </tr>

    </tbody>
    <tfoot>
      <tr>
        <th>No.</th>
        <th>Jina la kwanza</th>
        <th>Jina la pili</th>
        <th>Jina la mwisho</th>
        <th>Gender</th>
        <th>Dob</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Chama</th>
        <th>Startingdate</th>
        <th>Finishingdate</th>
      </tr>
    </tfoot>
</table>
</div>
<div class="modal" tabindex="-1" role="dialog" id="edit_mbunge_modal" style="width:auto;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">EDIT MBUNGE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="edit_mbunge.php" class="form-group">
      <div class="modal-body">
        <h4></h4>
      </div>
      <!-- <label for=""></label> -->
      <input type="hidden" name="edit_mbunge_id" id="edit_mbunge_id" class="form-control">
      <div  class="row form-group">
        <label for="">JINA KWANZA</label>
      <input type="text" name="jinalakwanza" class="form-control" id="jinalakwanza"  value="<?php echo $mbunge->jinalakwanza;?>">
    </div>
    <div  class="row form-group">
      <label for="">JINA LA PILI</label>
    <input type="text" name="jinalapili" class="form-control" id="jinalapili" style="width:100%;" value="<?php echo $mbunge->jinalapili;?>">
  </div>
  <div  class="row form-group">
    <label for="">JINA LA MWISHO</label>
  <input type="text" name="jinalamwisho" class="form-control" id="jinalamwisho" style="width:100%;" value="<?php echo $mbunge->jinalamwisho;?>">
</div>
<div  class="row form-group">
  <label for="">GENDER</label>
<input type="text" name="gender" class="form-control" id="gender" style="width:100%;" value="<?php echo $mbunge->gender;?>">
</div>
<div  class="row form-group">
  <label for="">DOB</label>
<input type="text" name="birthdate" class="form-control" id="dob"  value="<?php echo $mbunge->birthdate;?>">
</div>
<div  class="row form-group">
<label for="">EMAIL</label>
<input type="text" name="email" class="form-control" id="email" style="width:100%;" value="<?php echo $mbunge->email;?>">
</div>
<div  class="row form-group">
<label for="">TELPHONE</label>
<input type="text" name="telephone" class="form-control" id="telephone" style="width:100%;" value="<?php echo $mbunge->telephone;?>">
</div>
<div  class="row form-group">
<label for="">STARTINGDATE</label>
<input type="text" name="startingdate" class="form-control" id="startingdate" style="width:100%;" value="<?php echo $mbunge->startingdate;?>">
</div>
<div  class="row form-group">
<label for="">ENDINGDATE</label>
<input type="text" name="finishingdate" class="form-control" id="endingdate" style="width:100%;" value="<?php echo $mbunge->finishingdate;?>">
</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal" >Close</button>
        <button type="submit" name="edit_mbunge" class="btn btn-secondary btn-success btn-sm">Save & Update</button>
      </div>
    </form>

    </div>
  </div>
</div>


<?php include 'layouts/common_base.php'; ?>
