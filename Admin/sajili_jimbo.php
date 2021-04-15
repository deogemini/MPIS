<?php include 'layouts/main.php'; ?>
<?php include 'db.php'; ?>
<?php include 'sajilijimbo.php'; ?>


<!-- Main content Start Here -->
<div class="container">
  <?php
  if (isset($_GET['message']) and $_GET['message'] == 'registered') {
    echo '<div class="alert alert-info" role="alert">
  Jimbo limesajiliwa...!!
  </div>';
  }
  ?>
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
          <option value="Mjini Magharibi">Mjini Magharibi</option>
          <option value="Kusini Unguja">Kusini Unguja</option>
          <option value="Kusini Pemba">Kusini Pemba</option>
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
          <option value="Kaskazini Unguja">Kaskizini Unguja</option>
          <option value="Kaskazini Pemba">Kaskizini Pemba</option>
          <option value="Songwe">Songwe</option>

        </select>
      </div>
      <div class="col-md-6">
        <label>HALMASHAURI YA JIMBO:</label>
        <select name="halmashauri" class="js-example-basic-single form-control" required>
          <option value="Wilaya ya Mjini">Wilaya ya Mjini</option>
          <option value="Wilaya ya Magharibi B">Wilaya ya Magharibi B</option>
          <option value="Wilaya ya Magharibi A">Wilaya ya Magharibi A</option>
          <option value="Wilaya ya Kusini">Wilaya ya Kusini</option>
          <option value="Wilaya ya Kati">Wilaya ya Kati</option>
          <option value="Wilaya ya Mkoani">Wilaya ya Mkoani</option>
          <option value="Wilaya ya Chakechake">Wilaya ya Chakechake</option>
          <option value="Wilaya ya Kaskazini B">Wilaya ya Kaskazini B</option>
          <option value="Wilaya ya Kaskazini A">Wilaya ya Kaskazini A</option>
          <option value="Wilaya ya Wete">Wilaya ya Wete</option>
          <option value="Wilaya ya Micheweni">Wilaya ya Micheweni</option>
          <option value="Jiji la Arusha">Jiji la Arusha</option>
          <option value="Wilaya ya Arusha">Wilaya ya Arusha</option>
          <option value="Wilaya ya Karatu">Wilaya ya Karatu</option>
          <option value="Wilaya ya Longido">Wilaya ya Longido</option>
          <option value="Wilaya ya Meru">Wilaya ya Meru</option>
          <option value="Wilaya ya Ngorongoro">Wilaya ya Ngorongoro</option>
          <option value="Manispaa ya Ilala">Manispaa ya Ilala</option>
          <option value="Mji wa Mafinga">Mji wa Mafinga</option>
          <option value="Wilaya ya Rungwe">Wilaya ya Rungwe</option>
          <option value="Wilaya ya Monduli">Wilaya ya Monduli</option>
          <option value="Manispaa ya Morogoro">Manispaa ya Morogoro</option>
          <option value="Mji wa Ifakara">Mji wa Ifakara</option>
          <option value="Wilaya ya Gairo">Wilaya ya Gairo</option>
          <option value="Wilaya ya Kilosa">Wilaya ya Kilosa</option>
          <option value="Wilaya ya Malinyi">Wilaya ya Malinyi</option>
          <option value="Wilaya ya Mlimba">Wilaya ya Mlimba</option>
          <option value="Wilaya ya Morogoro">Wilaya ya Morogoro</option>
          <option value="Wilaya ya Mvomero">Wilaya ya Mvomero</option>
          <option value="Wilaya ya Ulanga">Wilaya ya Ulanga</option>
          <option value="Wilaya ya Kyela">Wilaya ya Kyela</option>
          <option value="Wilaya ya Mbeya">Wilaya ya Mbeya</option>
          <option value="Wilaya ya Chunya">Wilaya ya Chunya</option>
          <option value="Wilaya ya Busokelo">Wilaya ya Busokelo</option>
          <option value="Jiji wa Mbeya">Jiji wa Mbeya</option>
          <option value="Wilaya ya Tarime">Wilaya ya Tarime</option>
          <option value="Wilaya ya Serengeti">Wilaya ya Serengeti</option>
          <option value="Wilaya ya Rorya">Wilaya ya Rorya</option>
          <option value="Wilaya ya Musoma">Wilaya ya Musoma</option>
          <option value="Wilaya ya Butiama">Wilaya ya Butiama</option>
          <option value="Mji wa Tarime">Mji wa Tarime</option>
          <option value="Mji wa Bunda">Mji wa Bunda</option>
          <option value="Wilaya ya Bunda">Wilaya ya Bunda</option>
          <option value="Manispaa ya Musoma">Manispaa ya Musoma</option>
          <option value="Wilaya ya Ruangwa">Wilaya ya Ruangwa</option>
          <option value="Wilaya ya Nachingwea">Wilaya ya Nachingwea</option>
          <option value="Wilaya ya Mtama">Wilaya ya Mtama</option>
          <option value="Wilaya ya Liwale">Wilaya ya Liwale</option>
          <option value="Wilaya ya Kilwa">Wilaya ya Kilwa</option>
          <option value="Manispaa ya Lindi">Manispaa ya Lindi</option>
          <option value="Wilaya ya Kigoma">Wilaya ya Kigoma</option>
          <option value="Wilaya ya Uvinza">Wilaya ya Uvinza</option>
          <option value="Wilaya ya Kibondo">Wilaya ya Kibondo</option>
          <option value="Mji wa Kasulu">Mji wa Kasulu</option>
          <option value="Wilaya ya Kasulu">Wilaya ya Kasulu</option>
          <option value="Wilaya ya Kakonko">Wilaya ya Kakonko</option>
          <option value="Wilaya ya Buhigwe">Wilaya ya Buhigwe</option>
          <option value="Manispaa ya Kigoma">Manispaa ya Kigoma</option>
          <option value="Wilaya ya Nsimbo">Wilaya ya Nsimbo</option>
          <option value="Wilaya ya Mpimbwe">Wilaya ya Mpimbwe</option>
          <option value="Wilaya ya Mpanda">Wilaya ya Mpanda</option>
          <option value="Wilaya ya Mlele">Wilaya ya Mlele</option>
          <option value="Manispaa ya Mpanda">Manispaa ya Mpanda</option>
          <option value="Wilaya ya Ngara">Wilaya ya Ngara</option>
          <option value="Wilaya ya Muleba">Wilaya ya Muleba</option>
          <option value="Wilaya ya Missenyi">Wilaya ya Missenyi</option>
          <option value="Wilaya ya Kyerwa">Wilaya ya Kyerwa</option>
          <option value="Wilaya ya Karagwe">Wilaya ya Karagwe</option>
          <option value="Manispaa ya Bukoba">Manispaa ya Bukoba</option>
          <option value="Wilaya ya Bukoba">Wilaya ya Bukoba</option>
          <option value="Wilaya ya Biharamulo">Wilaya ya Biharamulo</option>
          <option value="Wilaya ya Mufindi">Wilaya ya Mufindi</option>
          <option value="Wilaya ya Kilolo">Wilaya ya Kilolo</option>
          <option value="Wilaya ya Iringa">Wilaya ya Iringa</option>
          <option value="Wilaya ya Mpwapwa">Wilaya ya Mpwapwa</option>
          <option value="Wilaya ya Kongwa">Wilaya ya Kongwa</option>
          <option value="Wilaya ya Kondoa">Wilaya ya Kondoa</option>
          <option value="Wilaya ya Chemba">Wilaya ya Chema</option>
          <option value="Wilaya ya Chamwino">Wilaya ya Chamwino</option>
          <option value="Wilaya ya Bahi">Wilaya ya Bahi</option>
          <option value="Mji Kondoa">Mji Kondoa</option>
          <option value="Jiji la Dodoma">Jiji la Dodoma</option>
          <option value="Mji wa Geita">Mji wa Geita</option>
          <option value="Wilaya ya Nyang'hwale">Wilaya ya Nyang'hwale</option>
          <option value="Wilaya ya Bukombe">Wilaya ya Bukombe</option>
          <option value="Wilaya ya Chato">Wilaya ya Chato</option>
          <option value="Wilaya ya Geita">Wilaya ya Geita</option>
          <option value="Wilaya ya Mbogwe">Wilaya ya Mbogwe</option>
          <option value=" Manispaa ya Iringa"> Manispaa ya Iringa</option>
          <option value="Magharibi A">Magharibi A</option>
          <option value="Magharibi B">Magharibi B</option>
          <option value="Manispaa ya Kinondoni">Manispaa ya Kinondoni</option>
          <option value="Manispaa ya Temeke">Manispaa ya Temeke</option>
          <option value="Wilaya ya Handeni">Wilaya ya Handeni</option>
          <option value="Biharamulo">Biharamulo</option>
          <option value="Manispaa ya Kigamboni">Manispaa ya Kigamboni</option>
          <option value="Wilaya ya Manyoni">Wilaya ya Manyoni</option>
          <option value="Wilaya ya Babati">Wilaya ya Babati</option>
          <option value="Mji wa Babati"> Mji wa Babati</option>
          <option value="Mjini wa Mbulu">Mjini wa Mbulu</option>
          <option value="Wilaya ya Hanang">Wilaya ya Hanang</option>
          <option value="Wilaya ya Kiteto">Wilaya ya Kiteto</option>
          <option value="Wilaya ya Mbulu">Wilaya ya Mbulu</option>
          <option value="Wilaya ya Simanjiro">Wilaya ya Simanjiro</option>
          <option value="Wilaya ya Kilindi">Wilaya ya Kilindi</option>
          <option value="Mji wa Korogwe">Mji wa Korogwe</option>
          <option value="Wilaya ya Korogwe">Wilaya ya Korogwe</option>
          <option value="Wilaya ya Lushoto">Wilaya ya Lushoto</option>
          <option value="Wilaya ya Mkinga">Wilaya ya Mkinga</option>
          <option value="Jiji la Tanga">Jiji la Tanga</option>
          <option value="Mji wa Handeni">Mji wa Handeni</option>
          <option value="Manispaa ya Ubungo">Manispaa ya Ubungo</option>
          <option value="Wilaya ya Muhenza">Wilaya ya Muhenza</option>
          <option value="Wilaya ya Pangani">Wilaya ya Pangani</option>
          <option value="Wilaya ya Bumbuli">Wilaya ya Bumbuli</option>
          <option value="Wilaya ya Nzega">Wilaya ya Nzega</option>
          <option value="Wilaya ya Meatu">Wilaya ya Meatu</option>
          <option value="Wilaya ya Busega">Wilaya ya Busega</option>
          <option value="Wilaya ya Itilima">Wilaya ya Itilima</option>
          <option value="Wilaya ya Maswa">Wilaya ya Maswa</option>
          <option value="Wilaya ya Kaliua">Wilaya ya Kaliua</option>
          <option value="Wilaya ya Urambo">Wilaya ya Urambo</option>
          <option value="Wilaya ya Igunga">Wilaya ya Igunga</option>
          <option value="Wilaya ya Uyui">Wilaya ya Uyui</option>
          <option value="Wilaya ya Sikonge">Wilaya ya Sikonge</option>
          <option value="Mji wa Nzega">Mji wa Nzega</option>
          <option value="Manispaa ya Tabora">Manispaa ya Tabora</option>
          <option value="Mji wa Bariadi">Mji wa Bariadi</option>
          <option value="Wilaya ya Hai">Wilaya ya Hai</option>
          <option value="Wilaya ya Mwanga">Wilaya ya Mwanga</option>
          <option value="Wilaya ya Siha">Wilaya ya Siha</option>
          <option value="Wilaya ya Same">Wilaya ya Same</option>
          <option value="Wilaya ya Moshi">Wilaya ya Moshi</option>
          <option value="Manispaa ya Moshi">Manispaa ya Moshi</option>
          <option value="Wilaya ya Rombo">Wilaya ya Rombo</option>
          <option value="Wilaya ya Mbarali">Wilaya ya Mbarali</option>
          <option value="Manispaa ya Mtwara Mikindani">Manispaa ya Mtwara Mikindani</option>
          <option value="Mji wa Masasi">Mji wa Masasi</option>
          <option value="Mji wa Nanyamba">Mji wa Nanyamaba</option>
          <option value="Mji wa Newala">Mji wa Newala</option>
          <option value="Wilaya ya Masasi">Wilaya ya Masasi</option>
          <option value="Wilaya ya Mtwara">Wilaya ya Mtwara</option>
          <option value="Wilaya ya Nanyumbu">Wilaya ya Nanyumbu</option>
          <option value="Wilaya ya Newala">Wilaya ya Newala</option>
          <option value="Wilaya ya Tandahimba">Wilaya ya Tandahimba</option>
          <option value="Jiji la Mwanza">Jiji la Mwanza</option>
          <option value="Manispaa Ilemela">Manispaa Ilemela</option>
          <option value="Wilaya ya Buchosa">Wilaya ya Buchosa</option>
          <option value="Wilaya ya Kwimba">Wilaya ya Kwimba</option>
          <option value="Wilaya ya Magu">Wilaya ya Magu</option>
          <option value="Wilaya ya Misungwi">Wilaya ya Misungwi</option>
          <option value="Wilaya ya Sengerema">Wilaya ya Sengerema</option>
          <option value="Wilaya ya Ukerewe">Wilaya ya Ukerewe</option>
          <option value="Mji wa Makambako">Mji wa Makambako</option>
          <option value="Mji wa Njombe">Mji wa Njombe</option>
          <option value="Wilaya ya Ludewa">Wilaya ya Ludewa</option>
          <option value="Wilaya ya Makete">Wilaya ya Makete</option>
          <option value="Wilaya ya Njombe">Wilaya ya Njombe</option>
          <option value="Wilaya ya Wanging'ombe">Wilaya ya Wanging'ombe</option>
          <option value="Mji wa Kibaha">Mji wa Kibaha</option>
          <option value="Wilaya ya Bagamayo">Wilaya ya Bagamoyo</option>
          <option value="Wilaya ya Kibaha">Wilaya ya Kibaha</option>
          <option value="Wilaya ya Chalinze">Wilaya ya Chalinze</option>
          <option value="Wilaya ya Kibiti">Wilaya ya Kibiti</option>
          <option value="Wilaya ya Kisarawe">Wilaya ya Kisarawe</option>
          <option value="Wilaya ya Mafia">Wilaya ya Mafia</option>
          <option value="Wilaya ya Mkuranga">Wilaya ya Mkuranga</option>
          <option value="Wilaya ya Rufiji">Wilaya ya Rufiji</option>
          <option value="Manispaa ya Sumbawanga">Manispaa ya Sumbawanga</option>
          <option value="Wilaya ya Sumbawanga">Wilaya ya Sumbawanga</option>
          <option value="Wilaya ya Kalambo">Wilaya ya Kalambo</option>
          <option value="Wilaya ya Nkasi">Wilaya ya Nkasi</option>
          <option value="Wilaya ya Tunduru">Wilaya ya Tunduru</option>
          <option value="Manispaa ya Songea">Manispaa ya Songea</option>
          <option value="Wilaya ya Songea">Wilaya ya Songea</option>
          <option value="Wilaya ya Nyasa">Wilaya ya Nyasa</option>
          <option value="Wilaya ya Namtumbo">Wilaya ya Namtumbo</option>
          <option value="Wilaya ya Madaba">Wilaya ya Madaba</option>
          <option value="Mji wa Mbinga">Mji wa Mbinga</option>
          <option value="Wilaya ya Mbinga">Wilaya ya Mbinga</option>
          <option value="Wilaya ya Ushetu">Wilaya ya Ushetu</option>
          <option value="Wilaya ya Shinyanga">Wilaya ya Shinyanga</option>
          <option value="Wilaya ya Msalala">Wilaya ya Msalala</option>
          <option value="Wilaya ya Kishapu">Wilaya ya Kishapu</option>
          <option value="Mji wa Kahama">Mji wa Kahama</option>
          <option value="Manispaa wa Shinyanga">Manispaa wa Shinyanga</option>
          <option value="Wilaya ya Itigi">Wilaya ya Itigi</option>
          <option value="Manispaa wa Singida">Manispaa wa Singida</option>
          <option value="Wilaya ya Mkalama">Wilaya ya Mkalama</option>
          <option value="Wilaya ya Iramba">Wilaya ya Iramba</option>
          <option value="Wilaya ya Singida">Wilaya ya Singida</option>
          <option value="Wilaya ya Ikungi">Wilaya ya Ikungi</option>
          <option value="Mji wa Tunduma">Mji wa Tunduma</option>
          <option value="Wilaya ya Ileje">Wilaya ya Ileje</option>
          <option value="Wilaya ya Mbozi">Wilaya ya Mbozi</option>
          <option value="Wilaya ya Momba">Wilaya ya Momba</option>
          <option value="Wilaya ya Songwe">Wilaya ya Songwe</option>

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