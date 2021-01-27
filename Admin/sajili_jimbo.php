<?php include 'layouts/main.php';?>
   
<!-- Main content Start Here -->
<div class="container">
	<h2> Sajili Jimbo</h2>
    <form action="sajilijimbo.php" method="POST">
      <div class="col">
      	<div class="form-outline">
        <label class="form-label" >Jina la jimbo</label>
        <input type="text" class="form-control" id="jinalakwanza">
      </div>
      </div>

      <div class="col">
        <div class= "form-outline">
          <label class="form-label"> MKOA JIMBO LILIPO:</label>
            <select name="mikoa" id="mikoa">
              <option value="Dar es Salaam">Dar es Salaam</option>
              <option value="Iringa">Iringa</option>
              <option value="Kilimanjaro">Kilimanjaro</option>
              <option value="Arusha">Arusha</option>
              <option value="Mwanza">Mwanza</option>
              <option value="Mara">Mara</option>
              <option value="Pwani">Pwani</option>
              <option value="Tanga">Tanga</option>
              <option value="Mbeya">Mbeya</option>
              <option value="Manyara">Manyara</option>
              <option value="Kigoma">Kigoma</option>
              <option value="Morogoro">Morogoro</option>
              <option value="Dodoma">Dodoma</option>
              <option value="Kagera">Kagera</option>
              <option value="Geita">Geita</option>
              <option value="Mtwara">Mtwara</option>
              <option value="Singida">Singida</option>
              <option value="Ruvuma">Ruvuma</option>
              <option value="Rukwa">Rukwa</option>
              <option value="Lindi">Lindi</option>
              <option value="Njombe">Njombe</option>
              <option value="Tabora">Tabora</option>
              <option value="Katavi">Katavi</option>
              <option value="Shinyanga">Shinyanga</option>
              <option value="Simiyu">Simiyu</option>
            </select>
        </div>
</div> 
<div class="col">
        <div class= "form-outline">
          <label class="form-label"> Wilaya Jimbo Lilipo</label>
          <select name="wilaya" id="wilaya">
              <option value="Ilala">Ilala</option>
              <option value="Kinondoni">Kinondoni</option>
              <option value="Temeke">Temeke</option>
              <option value="Bagamoyo">Bagamoyo</option>
              <option value="Mwanza">Mwanza</option>
              <option value="Tarime">Tarime</option>
              <option value="Chalinze">Pwani</option>
              <option value="Muhenza">Muhenza</option>
              <option value="Lushoto">Lushoto</option>
              <option value="Handeni">Handeni</option>
              <option value="Biharamulo">Biharamulo</option>
              <option value="Mkuranga">Mkuranga</option>
              <option value="Kigamboni">Kigamboni</option>
              <option value="Manyoni">Manyoni</option>
              <option value="Babati">Babati</option>
              <option value="Mtwara">Mtwara</option>
              <option value="Singida">Singida</option>
              <option value="Ruvuma">Ruvuma</option>
              <option value="Rukwa">Rukwa</option>
              <option value="Lindi">Lindi</option>
              <option value="Mpwapwa">Mpwapwa</option>
              <option value="Nzega">Nzega</option>
              <option value="Kisarawe">Kisarawe</option>
              <option value="Meatu">Meatu</option>
              <option value="Baridi">Baridi</option>
            </select>
        </div>
</div> 


     <div class="col">
        <div class="form-outline">
        <label class="form-label" >Idadi ya kata katika jimbo</label>
        <input type="number" class="form-control" id="kata">
      </div>

      <button type="button" class="btn btn-success">Save details</button>

  </form>

</div>
<!--/ Main content End Here-->

<?php include'layouts/common_base.php' ?>


