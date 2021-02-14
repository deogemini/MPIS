<?php include 'layouts/main.php'; ?>

<!-- Main content Start Here -->
<div class="container">
  <h2 style="text-decoration-skip: true;"> Sajili Jimbo</h2>


  <form method="POST" action="sajilijimbo.php">
    <div class="row">
      <div class="col-md-12">
        <div class="form-outline">
          <label>JINA LA JIMBO</label>
          <input type="text" class="form-control" name="jinalajimbo" required>
        </div>
      </div>
    </div>

    <div class="row py-2">
      <div class="col-md-6">
        <label class="form-label">MKOA JIMBO LILIPO:</label>
        <select name="mkoa" class="js-example-basic-single form-control" required>
          <option value="Dar es Salaam">Dar es Salaam</option>
          <option value="Iringa">Iringa</option>
          <option value="Kilimanjaro">Kilimanjaro</option>
          <option value="Mjini Magharibi ">Mjini Magharibi</option>
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
      <div class="col-md-6">
        <label>WILAYA JIMBO LILIPO:</label>
        <select name="wilaya" class="js-example-basic-single form-control" required>
          <option value="Ilala">Ilala</option>
          <option value="Morogoro Mjini">Morogoro Mjini</option>
          <option value="Ifakara">Ifakara</option>
          <option value="Gairo">Gairo</option>
          <option value="Kilosa">Kilosa</option>
          <option value="Malinyi">Malinyi</option>
          <option value="Mlimba">Mlimba</option>
          <option value="Morogoro Wilaya">Morogoro Wilaya</option>
          <option value="Mvomero">Mvomero</option>
          <option value="Ulanga">Ulanga</option>

          <option value="Magharibi A">Magharibi A</option>
          <option value="Magharibi B">Magharibi B</option>
          <option value="Mjini">Mjini</option>
          <option value="Arusha">Arusha</option>
          <option value="Longido">Longido</option>
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
          <option value="Babati Mji">Babati Mji</option>
          <option value="Mbulu Mjini">Mbulu Mjini</option>
          <option value="Hanang">Hanang</option>
          <option value="Kiteto">Kiteto</option>
          <option value="Hanang">Hanang</option>
          <option value="Mbulu">Mbulu</option>
          <option value="Simanjiro">Simanjiro</option>

          <option value="Mtwara">Mtwara</option>
          <option value="Singida">Singida</option>
          <option value="Ruvuma">Ruvuma</option>
          <option value="Rukwa">Rukwa</option>
          <option value="Kilindi">Kilindi</option>
          <option value="Korogwe">Korogwe</option>
          <option value="Lushoto">Lushoto</option>
          <option value="Mkinga">Mkinga</option>
          <option value="Jiji la Tanga">Jiji la Tanga</option>

          <option value="Mji Handeni">Mji wa Handeni</option>
          <option value="Ubungo">Ubungo</option>
          <option value="Muhenza">Muhenza</option>
          <option value="Pangani">Pangani</option>

          <option value="Bumbuli">Bumbuli</option>
          <option value="Lindi">Lindi</option>
          <option value="Mpwapwa">Mpwapwa</option>
          <option value="Nzega">Nzega</option>
          <option value="Kisarawe">Kisarawe</option>
          <option value="Meatu">Meatu</option>
          <option value="Kaliua">Kaliua</option>
          <option value="Igunga">Igunga</option>
          <option value="Urambo">Urambo</option>
          <option value="Igunga">Igunga</option>
          <option value="Uyui">Uyui</option>
          <option value="Sikonge">Sikonge</option>
          <option value="Mjini Nzega">Mjini Nzega</option>
          <option value="tabora">Tabora</option>
          <option value="Baridi">Baridi</option>
          <option value="Hai">Hai</option>
          <option value="Mwanga">Mwanga</option>
          <option value="Siha">Siha</option>
          <option value="Same">Same</option>
          <option value="Moshi">Moshi</option>
          <option value="Moshi Manispaa">Moshi Manispaa</option>

          <option value="Rombo">Rombo</option>





        </select>
      </div>
    </div>

    <div class="row py-3">
      <div class="col-md-6">
        <label>Idadi ya kata katika jimbo</label>
        <input type="number" class="form-control" name="kata" required>
      </div>

      <div class="col-md-6">
        <button name="submit" type="submit" class="btn btn-success">Save details</button>
      </div>
    </div>
  </form>

</div>
<!--/ Main content End Here-->

<?php include 'layouts/common_base.php' ?>