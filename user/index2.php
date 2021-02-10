<?php include 'layouts/main.php'; ?>

<?php
session_start();
if (isset($_SESSION["firstname"])) {
    echo '<p>Login Success, Welcome.. ' . $_SESSION["firstname"] . '</p>';
} else {
    header("location:login.php");
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <?php
            include 'db.php';
            if (isset($_SESSION["firstname"])) {
                $firstname = $_SESSION["firstname"];
                $sql = "SELECT jimbo FROM users WHERE firstname = '$firstname'";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(["firstname" => $firstname]);
                while ($row = $stmt->fetch())
                    echo '<h1> <b>Karibu Jimbo la .... </b><span style="text-transform:uppercase"> <b>' . $row->jimbo . "</span></b></h1>";
            }
            ?>
        </div>
        <div class="col-md-2">
            <form action="logout.php" method="POST">
                <button type="submit" class="btn btn-danger" name="logout">Logout here</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4" style="background-color: #a4c3f5;">
            <div class="wrapper">
                <h4><strong>Post your Compliment here</strong></h4>
                <form action="#posting.php" method="POST">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category" id="category" class="js-example-basic-single form-control" required>
                            <option value="maji">Maji</option>
                            <option value="ardhi">Ardhi</option>
                            <option value="kilimo">Kilimo</option>
                            <option value="afya">Afya</option>
                            <option value="elimu">Elimu</option>
                            <option value="biashara">Biashara</option>
                            <option value="miundombinu">miundombinu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="body">Description</label>
                        <textarea type="text" class="form-control" name="description" placeholder="write full decsription here" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="file">Upload attachement</label>
                        <input type="file" class="form-control" name="file">
                    </div>

                    <button type="submit" class="btn btn-light" name="submit">Post your Comment</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'layouts/common_base.php'; ?>