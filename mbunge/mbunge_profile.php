<?php include 'layouts/main.php'; ?>
<?php include 'db.php';
session_start();

?>
<div class="container">
    <h3>Mbunge details</h3>
    <table class="table table-bordered">
        <tr>
            <td><b>First Name</b></td>
            <td>
                <?php
                if (isset($_SESSION["firstname"])) {
                    $firstname = $_SESSION["firstname"];
                    $sql = "SELECT firstname FROM users WHERE firstname = '$firstname'";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute(["firstname" => $firstname]);
                    while ($row = $stmt->fetch())
                        echo  $row->firstname;
                }
                ?>
            </td>
        </tr>
        <tr>
            <td><b>Second Name</b></td>

            <td>
                <?php
                if (isset($_SESSION["firstname"])) {
                    $firstname = $_SESSION["firstname"];
                    $sql = "SELECT secondname FROM users WHERE firstname = '$firstname'";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute(["firstname" => $firstname]);
                    while ($row = $stmt->fetch())
                        echo  $row->secondname;
                }
                ?>
            </td>

        </tr>
        <tr>
            <td><b>Last Name</b></td>
            <td> <?php
                    if (isset($_SESSION["firstname"])) {
                        $firstname = $_SESSION["firstname"];
                        $sql = "SELECT lastname FROM users WHERE firstname = '$firstname'";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute(["firstname" => $firstname]);
                        while ($row = $stmt->fetch())
                            echo  $row->lastname;
                    }
                    ?></td>
        </tr>
        <tr>
            <td><b>Gender</b></td>
            <td> <?php
                    if (isset($_SESSION["firstname"])) {
                        $firstname = $_SESSION["firstname"];
                        $sql = "SELECT gender FROM users WHERE firstname = '$firstname'";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute(["firstname" => $firstname]);
                        while ($row = $stmt->fetch())
                            echo  $row->gender;
                    }
                    ?></td>
        </tr>
        <tr>
            <td><b>Birthdate</b></td>
            <td> <?php
                    if (isset($_SESSION["firstname"])) {
                        $firstname = $_SESSION["firstname"];
                        $sql = "SELECT birthdate FROM users WHERE firstname = '$firstname'";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute(["firstname" => $firstname]);
                        while ($row = $stmt->fetch())
                            echo  $row->birthdate;
                    }
                    ?></td>
        </tr>
        <tr>
            <td><b>Email</b></td>
            <td> <?php
                    if (isset($_SESSION["firstname"])) {
                        $firstname = $_SESSION["firstname"];
                        $sql = "SELECT email FROM users WHERE firstname = '$firstname'";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute(["firstname" => $firstname]);
                        while ($row = $stmt->fetch())
                            echo  $row->email;
                    }
                    ?></td>
        </tr>
        <tr>
            <td><b>Starting date</b></td>
            <td> <?php
                    if (isset($_SESSION["firstname"])) {
                        $firstname = $_SESSION["firstname"];
                        $sql = "SELECT startingdate FROM users WHERE firstname = '$firstname'";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute(["firstname" => $firstname]);
                        while ($row = $stmt->fetch())
                            echo  $row->startingdate;
                    }
                    ?></td>
        </tr>
        <tr>
            <td><b>Finishing date</b></td>
            <td> <?php
                    if (isset($_SESSION["firstname"])) {
                        $firstname = $_SESSION["firstname"];
                        $sql = "SELECT finishingdate FROM users WHERE firstname = '$firstname'";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute(["firstname" => $firstname]);
                        while ($row = $stmt->fetch())
                            echo  $row->finishingdate;
                    }
                    ?></td>
        </tr>
        <tr>
            <td><b>Jimbo</b></td>
            <td> <?php
                    if (isset($_SESSION["firstname"])) {
                        $firstname = $_SESSION["firstname"];
                        $sql = "SELECT jimbo FROM users WHERE firstname = '$firstname'";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute(["firstname" => $firstname]);
                        while ($row = $stmt->fetch())
                            echo  $row->jimbo;
                    }
                    ?></td>
        </tr>
        <tr>
            <td><b>Chama cha siasa</b></td>
            <td> <?php
                    if (isset($_SESSION["firstname"])) {
                        $firstname = $_SESSION["firstname"];
                        $sql = "SELECT chama FROM users WHERE firstname = '$firstname'";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute(["firstname" => $firstname]);
                        while ($row = $stmt->fetch())
                            echo  $row->chama;
                    }
                    ?></td>
        </tr>


    </table>
</div>


<?php include 'layouts/common_base.php'; ?>