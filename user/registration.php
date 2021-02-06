<?php include 'layouts/main.php'; ?>

<div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <form action="signup.php" method="POST">
        <div class="form-group">
            <label for="fname"><b>Jina la kwanza</b></label>
            <input class="form-control" type="text" placeholder="Weka jina la kwanza" name="firstname" required>
        </div>
        <div class="form-group">
            <label for="lname"><b>Jina la pili</b></label>
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
                include "db.php";  // Using database connection file here
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
            <input class="form-control" type="password" placeholder="Enter Password" name="psw" required>
        </div>

        <div class="form-group">
            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input class="form-control" type="password" placeholder="Repeat Password" name="psw-repeat" required>
        </div>
        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <button type="submit" class="registerbtn">Register</button>

        <div class="container signin">
            <p>Already have an account? <a href="login.php">Sign in</a>.</p>
        </div>

</div>
</div>
</form>
</div>