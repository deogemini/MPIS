<?php include 'layouts/main.php'; ?>

<div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <form action="signup.inc.php" method="POST">
        <div class="form-group">
            <label for="fname"><b>Jina la kwanza</b></label>
            <input class="form-control" type="text" placeholder="Weka jina la kwanza" name="firstname" required>
        </div>
        <div class="form-group">
            <label for="lname"><b>Jina la kati</b></label>
            <input class="form-control" type="text" placeholder="Weka jina la pili" name="secondname">
        </div>

        <div class="form-group">
            <label for="lname"><b>Jina la mwisho</b></label>
            <input class="form-control" type="text" placeholder="Weka jina la mwisho" name="lastname" required>
        </div>

        <div class="form-group">
            <label for="jimbo"><b>Jina la jimbo</b></label>
            <select name="jimbo" class="js-example-basic-single form-control">
                <?php
                include "/dbconnection.php";
                // Using database connection file here
                $stmt = $pdo->query('SELECT jinalajimbo FROM jimbo');
                while ($row = $stmt->fetch()) {
                    echo "<option value=" . $row->jinalajimbo . ">" . $row->jinalajimbo . "</option>";
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label for="gender"><b>Gender</b></label>
            <select name="gender" id="gender" class="form-control">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="rathernotsay">Rather not say</option>
            </select>

        </div>
        <div class="form-group">
            <label for="psw"><b>Password</b></label>
            <input class="form-control" type="password" placeholder="Enter Password" name="password" required>
        </div>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <button type="submit" name="submit" class="btn btn-success" value="submit">Register</button>
    </form>
    <div class="container signin">
        <p>Already have an account? <a href="login.php">Sign in</a>.</p>
    </div>

</div>


<?php include 'layouts/common_base.php'; ?>