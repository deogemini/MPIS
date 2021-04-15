<?php include 'layouts/main.php'; ?>

<!-- Main content Start Here -->
<div class="container">
  <?php
  if (isset($_GET['message']) and $_GET['message'] == 'registered') {
    echo '<div class="alert alert-info" role="alert">
  Mbunge ameshasajiliwa...!!
  </div>';
  }
  ?>
  <h2> Sajili Mbunge</h2>
  <form action="sajilimbunge.php" method="POST">
    <div class="row">
      <div class="col-md-6">
        <div class="form-outline">
          <label class="form-label">Jina la Kwanza</label>
          <input type="text" class="form-control" name="jinalakwanza" required>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-outline">
          <label class="form-label">Jina la Pili</label>
          <input type="text" name="jinalapili" class="form-control" name="jinalapili">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-outline">
          <label class="form-label">Jina la Mwisho</label>
          <input type="text" name="jinalamwisho" class="form-control" name="jinalamwisho" required>
        </div>
      </div>
      <div class="col-md-6">
        <label> jimbo</label>
        <select name="jimbo" class="js-example-basic-single form-control" required>
          <?php
          include "db.php";  // Using database connection file here
          $stmt = $pdo->query('SELECT jinalajimbo FROM jimbo');
          while ($row = $stmt->fetch()) {
            echo "<option value=" . $row->jinalajimbo . ">" . $row->jinalajimbo . "</option>";
          }
          ?>
        </select>

      </div>
    </div>
    <br>

    <div class="row">
      <div class="col-md-6 text-center">
        <label> Gender</label><br>
        <select name="gender" class="form-control" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
      <div class="col-md-6">
        <label class="col-md-6">Birth date</label>
        <input class="form-control" type="date" name="birthdate" value="2011-08-19" id="startingdate" required>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label>Email ya Mbunge</label>
        <input type="email" class="form-control" name="email" placeholder="you@example.com" required>
      </div>

      <div class="col-md-6">
        <label>Telephone</label>
        <input class="form-control" type="tel" placeholder=" +255000000" name="telephone" required>
      </div>
    </div>


    <div class="row py-2">
      <div class="col-md-4">
        <label> CHAMA CHA MBUNGE</label>
        <select name="chama" id="chama" class="js-example-basic-single form-control" required>
          <option value="CCM">CHAMA CHA MAPINDUZI(CCM)</option>
          <option value="CHADEMA">CHAMA CHA DEMOKRASIA NA MAENDELEO (CHADEMA)</option>
          <option value="CUF">CIVIL UNITED FRONT</option>
          <option value="UMD">UNION FOR MULTIPARTY</option>
          <option value="NCCR-M">NCCR-MAGEUZI</option>
          <option value="NLD">NATIONAL LEAGUE FOR DEMOCRACY</option>
          <option value="MAKINI">ATTETIVE DEMOCRACY PARTY</option>
          <option value="UPDP">UNITED PEOPLE'S DEMOCRATIC PARTY</option>
          <option value="NRA">NATIONAL RECONSTRUCTION ALLIANCE</option>
          <option value="TADEA">TANZANIA DEMOCRATIC ALLIANCE</option>
          <option value="TLP">TANZANIA LABOUR PARTY</option>
          <option value="UDP">UNITED DEMOCRATIC PARTY</option>
          <option value="CHAUSTA">JUSTICE AND DEVELOPMENT PARTY(CHAUSTA)</option>
          <option value="PPT-MAENDELEO">PROGRESSIVE PARTY OF TANZANIA-MAENDELEO</option>
          <option value="SAU">PEOPLE'S VOICE(sauti ya Umma) </option>
          <option value="ACT">ALLIANCE FOR CHANGE AND TRANSPARENCY (ACT)</option>
          <option value="CHAUMA">PART FOR PEOPLE'S REDEMPTION (CHAUMA)</option>
          <option value="ADC">ALLIANCE FOR DEMOCRATIC CHANGE</option>
          <option value="AFP">ALLIANCE FOR TANZANIAN FARMERS PARTY</option>
          <option value="TRADITIONAL DHOW">TRADITIONAL DHOW</option>
        </select>
      </div>


      <div class="col-md-4">
        <label>Starting date</label>
        <input class="form-control" type="date" value="2011-08-19" name="startingdate" id="startingdate" required>
      </div>

      <div class="col-md-4">
        <label>Finishing date</label>
        <input class="form-control" type="date" value="2011-08-19" name="finishingdate" id="finishingdate" required>
      </div>
    </div>

    <button type="submit" name="submit" class="btn btn-success" value="submit">Save details</button>
  </form>

</div>
<!--/ Main content End Here-->

<?php include 'layouts/common_base.php' ?>