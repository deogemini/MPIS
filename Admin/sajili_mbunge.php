<?php include 'layouts/main.php';?>
   
<!-- Main content Start Here -->
<div class="main-content" data-spy = "scroll">
	<h2> Sajili Mbunge</h2>
    <form action="sajilijimbo.php" method="POST">
      <div class="col">
      	<div class="form-outline">
        <label class="form-label" >Jina la Kwanza</label>
        <input type="text" class="form-control" id="jinalakwanza">
      </div>
      </div>

       <div class="col">
        <div class="form-outline">
        <label class="form-label" >Jina la Pili</label>
        <input type="text" class="form-control" id="jinalakwanza">
      </div>
      </div>
        <div class="col">
        <div class="form-outline">
        <label class="form-label" >Jina la Mwisho</label>
        <input type="text" class="form-control" id="jinalakwanza">
      </div>
      </div>
      <br>

      <div class="container">
        <label> Gender</label>
      <div class="form-check-inline">
            <label class="form-check-label">
           <input type="radio" class="form-check-input" name="optradio">Male
        </label>
        </div>
    <div class="form-check-inline">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Female
  </label>
</div>
    
<div class="form-check-inline">
  <label for="example-date-input" class="col-5 ">Birth date</label>
  <div class="col-8">
    <input class="form-control" type="date" value="2011-08-19" id="startingdate">
  </div>
      </div>
      </div>
      <div class="col">
      <div class="form-check-inline ">
      <label for="lgFormGroupInput" class="col-md-5 col-form-label" >Email ya Mbunge</label>
      <div class="col-md-7">
        <input type="email" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="you@example.com">
      </div>
    </div>
    <div class="form-check-inline">
  <label for="example-tel-input" class="col-md-5 col-form-label">Telephone</label>
  <div class="col-md-7">
    <input class="form-control" type="tel" placeholder=" +255000000" id="example-tel-input">
  </div>
</div>
      </div>

    
      <div class="col">
        <div class= "form-check-inline">
          <label class="col-md-4 col-form-label" > CHAMA CHA MBUNGE</label>
            <select name="chama" id="chama" class="form-control form-control-lg col-md-8">
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
      </div> 
                
                <div class="form-check-inline">
            <label for="example-date-input" class="col-4 col-form-label">Starting date</label>
            <div class="col-8">
              <input class="form-control" type="date" value="2011-08-19" id="startingdate">
            </div>
                </div>
            <div class="form-check-inline">
            <label for="example-date-input" class="col-4 col-form-label">Finishing date</label>
            <div class="col-8">
              <input class="form-control" type="date" value="2011-08-19" id="finishingdate">
            </div>
                </div>

                <div class="form-check-inline">
  <label for="example-password-input" class="col-4 col-form-label">Password</label>
  <div class="col-8">
    <input class="form-control" type="password" value="hunter2" id="example-password-input">
  </div>
</div>
      <button type="button" class="btn btn-success">Save details</button>
  </form>

</div>
<!--/ Main content End Here-->

<?php include'layouts/common_base.php' ?>


