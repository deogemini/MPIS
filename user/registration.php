<?php include 'layouts/main.php';?>

    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="name"><b>Jina Kamili</b></label>
      <input type="text" placeholder="Weka jina lako" name="name" required>

      <label for="constituency"><b>Jina la jimbo</b></label>
      <select name="jimbo" class="js-example-basic-single form-control" required >
              <option value="Dar es Salaam">Dar es Salaam</option>
              <option value="Iringa">Iringa</option>
              <option value="Kilimanjaro">Kilimanjaro</option>
              <option value="Arusha">Arusha</option>
              <option value="Mwanza">Mwanza</option>
              <option value="Mara">Mara</option>
              <option value="Pwani">Pwani</option>
              <option value="Tanga">Tanga</option>
      </select>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
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




