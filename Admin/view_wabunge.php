  <?php include 'layouts/main.php';
  include 'db.php'; ?>

  <div>
    <table class="table table-bordered table-hover table-responsive" id="oneshajimbo">
      <thead>
        <tr>
          <th>No.</th>
          <th>Jina la kwanza</th>
          <th>Jina la pili</th>
          <th>Jina la mwisho</th>
          <th>Jinsia</th>
          <th>Tarehe ya kuzaliwa</th>
          <th>Email</th>
          <th>Namba ya simu</th>
          <th>Chama</th>
          <th>Tarehe ya kuanza</th>
          <th>Tarehe ya kumaliza</th>
          <th>Jimbo</th>
          <th>Hariri</th>
          <th>Futa</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
          $sql = "SELECT * FROM users WHERE role = 'mbunge' ";
          $stmt = $pdo->query($sql);
          while ($row = $stmt->fetch()) {
            $id = $row->id;
            $firstname = $row->firstname;
            $secondname = $row->secondname;
            $lastname = $row->lastname;
            $gender =  $row->gender;
            $birthdate = $row->birthdate;
            $email = $row->email;
            $jimbo = $row->jimbo;
            $telephone = $row->telephone;
            $chama = $row->chama;
            $startingdate = $row->startingdate;
            $finishingdate = $row->finishingdate;
          ?>
            <td><?php echo $id; ?></td>
            <td><?php echo $firstname; ?></td>
            <td><?php echo $secondname; ?></td>
            <td><?php echo $lastname; ?></td>
            <td><?php echo $gender; ?></td>
            <td><?php echo $birthdate; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $telephone; ?></td>
            <td><?php echo $chama; ?></td>
            <td><?php echo $startingdate; ?></td>
            <td><?php echo $finishingdate; ?></td>
            <td><?php echo $jimbo; ?></td>
            <td><?php echo '<button type="button" class="btn btn-success btn-sm edit_mbunge_btn"><i class="fas fa-trash"></i>Edit</button>'; ?></td>
            <td><?php echo '<button type="button" class="btn btn-danger btn-sm delete_mbunge_btn"><i class="fas fa-trash"></i>Delete</button>'; ?></td>
        </tr>
      <?php } ?>
      </tbody>

    </table>
  </div>




  <div class="modal" tabindex="-1" role="dialog" id="delete_mbunge_modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">FUTA MBUNGE</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" action="delete_mbunge.php">
          <div class="modal-body">
            <h4>Are you sure you want to delete this?</h4>
          </div>
          <input type="hidden" name="delete_mbunge_Id" id="delete_mbunge_Id">
          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">No!</button>
            <button type="submit" name="delete_mbunge" class="btn btn-secondary btn-danger btn-sm">Yes, Delete it</button>
          </div>
        </form>
      </div>
    </div>
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

        <div class="modal-body">
          <form method="post" action="edit_mbunge.php?id=<?php echo $id; ?>" class="form-group">
            <!-- <label for=""></label> -->
            <input type="hidden" name="edit_mbunge_id" id="edit_mbunge_id" class="form-control">
            <div class="row form-group">
              <label for="">JINA KWANZA</label>
              <input type="text" name="firstname" class="form-control" id="firstname" value="<?php echo $firstname; ?>">
            </div>
            <div class="row form-group">
              <label for="">JINA LA PILI</label>
              <input type="text" name="secondname" class="form-control" id="secondname" style="width:100%;" value="<?php echo $secondname; ?>">
            </div>
            <div class="row form-group">
              <label for="">JINA LA MWISHO</label>
              <input type="text" name="lastname" class="form-control" id="lastname" style="width:100%;" value="<?php echo $lastname; ?>">
            </div>
            <div class="row form-group">
              <label for="">GENDER</label>
              <input type="text" name="gender" class="form-control" id="gender" style="width:100%;" value="<?php echo $gender; ?>">
            </div>
            <div class="row form-group">
              <label for="">DOB</label>
              <input type="text" name="birthdate" class="form-control" id="dob" value="<?php echo $birthdate; ?>">
            </div>
            <div class="row form-group">
              <label for="">JIMBO</label>
              <input type="text" name="jimbo" class="form-control" id="jimbo" value="<?php echo $jimbo; ?>">
            </div>
            <div class="row form-group">
              <label for="">EMAIL</label>
              <input type="text" name="email" class="form-control" id="email" style="width:100%;" value="<?php echo $email; ?>">
            </div>
            <div class="row form-group">
              <label for="">TELPHONE</label>
              <input type="text" name="telephone" class="form-control" id="telephone" style="width:100%;" value="<?php echo $telephone; ?>">
            </div>
            <div class="row form-group">
              <label for="">STARTINGDATE</label>
              <input type="text" name="startingdate" class="form-control" id="startingdate" style="width:100%;" value="<?php echo $startingdate; ?>">
            </div>
            <div class="row form-group">
              <label for="">ENDINGDATE</label>
              <input type="text" name="finishingdate" class="form-control" id="endingdate" style="width:100%;" value="<?php echo $finishingdate; ?>">
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
              <button type="submit" name="edit_mbunge" class="btn btn-secondary btn-success btn-sm">Save & Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <?php include 'layouts/common_base.php'; ?>