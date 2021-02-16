<?php include 'layouts/main.php'; ?>
<?php
include('db.php');
$stmt = $pdo->query('SELECT * FROM post ORDER BY id DESC');
while ($row = $stmt->fetch()) {
    $id = $row->id;
    $title = $row->title;
    $category = $row->category;
    $body = $row->body; ?>

    <div class="card_item border rounded" style="background-color: #a4c3f5;">
        <div class="card_inner">
            <div class="card_top">
                <?php echo '<h4 style="text-align: center"> <b>' . $title;
                '</b> </h4>'  ?>
            </div>
            <div class="card_bottom">
                <div class="card_category">
                    <?php echo '<h3><span>' . $category;
                    '</span></h3>' ?>
                </div>
                <div class="card_info">
                    <p><?php echo '<p style="text-align:center">' . $body;
                        '</p>' ?>
                </div>
            </div>
            <?php echo  "<div class='btn-group'><a class='btn btn-primary' data-toggle='modal' data-target='#myModal_$id' href='#'><i class='fa fa-lg fa-edit'></i></a></div>
            <div id='myModal_$id' class='modal fade' role='dialog'>" ?>
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Feedback view</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="response.php?id=<?php echo $id; ?>" method="POST">
                            <div class="title-body">
                                <p><?php echo $body; ?></p>
                                <textarea class="form-control" name="response" id="response" rows="4" placeholder="Write your feedback here" required></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-default" value="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <br>

    </div>
<?php } ?>
















<?php include 'layouts/common_base.php'; ?>