<?php include 'layouts/main.php'; ?>
<h3 style="text-align: center;"> view and replay the compliments</h3>
<?php
include('db.php');
$stmt = $pdo->query('SELECT * FROM post');
while ($row = $stmt->fetch()) {
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
            <div class="btn-group"><a class='btn btn-primary' data-toggle='modal' data-target='#myModal' href='#'><i class="fa fa-lg fa-edit"></i></a></div>
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Feedback view</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="title-body">

                                <textarea class="form-control" name="response" id="response" rows="4" placeholder="Write your feedback here"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <br>


    <?php } ?>

















    <?php include 'layouts/common_base.php'; ?>