  <?php include 'layouts/main.php';
  include 'db.php';

  ?>
  <div>
  
    <table class="table table-bordered table-hover" id="oneshajimbo">
      <thead>
        <tr>
          <th>Namba</th>
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
        $sql = "SELECT * FROM jimbo";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        foreach ($result as $majimbo) {
          $majimbo->id;
          $majimbo->jinalajimbo;
          $majimbo->mkoa;
          $majimbo->wilaya;
          $majimbo->kata;


        ?>
          <tr>
            <td><?php echo $majimbo->id; ?></td>
            <td><?php echo $majimbo->jinalajimbo; ?></td>
            <td><?php echo $majimbo->mkoa; ?></td>
            <td><?php echo $majimbo->wilaya; ?></td>
            <td><?php echo $majimbo->kata; ?></td>
            <td><?php echo '<button type="button" class="btn btn-success btn-sm edit_jimbo_btn"><i class="fas fa-trash"></i>Edit</button>'; ?></td>
            <td><?php echo '<button type="button" class="btn btn-danger btn-sm deletebtn"><i class="fas fa-trash"></i>Delete</button>'; ?></td>
          </tr>
        <?php } ?>
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

    <div class="modal" tabindex="-1" role="dialog" id="deletemodal">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">FUTA JIMBO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST" action="delete_jimbo.php">
            <div class="modal-body">
              <h4>Are you sure you want to delete this?</h4>
            </div>
            <input type="hidden" name="delete_id" id="delete_id">
            <div class="modal-footer">
              <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">No!</button>
              <button type="submit" name="submit" value="submit" class="btn btn-secondary btn-danger btn-sm">Yes, Delete it</button>
            </div>
          </form>

        </div>
      </div>
    </div>
    <div class="modal" tabindex="-1" role="dialog" id="edit_jimbo_modal" style="width:auto;">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">BADILI JIMBO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="edit_jimbo.php" class="form-group">
            <div class="modal-body">
              <!-- <label for="">UPDATE THIS CATEGORY</label> -->
              <input type="hidden" name="edit_jimbo_id" id="edit_jimbo_id" class="form-control">
              <div class="row form-group">
                <label for="">JINA LA JIMBO</label>
                <input type="text" name="jinalajimbo" class="form-control" id="jinalajimbo" value="<?php echo $majimbo->jinalajimbo; ?>">
              </div>
              <div class="row form-group">
                <label for="">MKOA</label>
                <input type="text" name="mkoa" class="form-control" id="mkoa" style="width:100%;" value="<?php echo $majimbo->mkoa; ?>">
              </div>
              <div class="row form-group">
                <label for="">WILAYA</label>
                <input type="text" name="wilaya" class="form-control" id="wilaya" style="width:100%;" value="<?php echo $majimbo->wilaya; ?>">
              </div>
              <div class="row form-group">
                <label for="">KATA</label>
                <input type="text" name="kata" class="form-control" id="kata" style="width:100%;" value="<?php echo $majimbo->kata; ?>">
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
                <button type="submit" name="edit_jimbo" class="btn btn-secondary btn-success btn-sm">Save & Update</button>
              </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <?php include 'layouts/common_base.php'; ?>
