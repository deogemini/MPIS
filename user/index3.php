<?php include 'layouts/main.php'; ?>
<?php
session_start();
if (isset($_SESSION["firstname"])) {
    echo '<p>Login Success, Welcome.. ' . $_SESSION["firstname"] . '</p>';
} else {
    header("location:login.php");
}
?>
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
                echo '<h1> <b>Karibu Mbunge Jimbo la .... </b><span style="text-transform:uppercase"> <b>' . $row->jimbo . "</span></b></h1>";
        }
        ?>
    </div>
    <div class="col-md-2">
        <form action="logout.php" method="POST">
            <button type="submit" class="btn btn-danger" name="logout">Logout here</button>
        </form>
    </div>
</div>

<?php include 'layouts/common_base.php'; ?>