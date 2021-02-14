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
          <option value="Kaskazini Unguja">Kaskizini Unguja</option>
        </select>
      </div>
      <div class="col-md-6">
        <label>WILAYA JIMBO LILIPO:</label>
        <select name="wilaya" class="js-example-basic-single form-control" required>
          <option value="Arusha Jiji">Arusha Jiji</option>
          <option value="Arusha">Arusha</option>
          <option value="Ngorongoro">Ngorongoro</option>
          <option value="Arumeru">Arumeru</option>
          <option value="Karatu">Karatu</option>
          <option value="Longido">Longido</option>
          <option value="Meru">Meru</option>
          <option value="Mafinga">Mafinga</option>
          <option value="Rungwe">Rungwe</option>
          <option value="Monduli">Monduli</option>
          <option value="Kaskazini A">Kaskazini A</option>
          <option value="Morogoro Mjini">Morogoro Mjini</option>
          <option value="Ifakara">Ifakara</option>
          <option value="Gairo">Gairo</option>
          <option value="Kilosa">Kilosa</option>
          <option value="Malinyi">Malinyi</option>
          <option value="Mlimba">Mlimba</option>
          <option value="Morogoro Wilaya">Morogoro Wilaya</option>
          <option value="Mvomero">Mvomero</option>
          <option value="Ulanga">Ulanga</option>
          <option value="Kyela">Kyela</option>
          <option value="Mbeya">Mbeya</option>
          <option value="Chunya">Chunya</option>
          <option value="Busokelo">Busokelo</option>
          <option value="Mbeya Jiji">Mbeya Jiji</option>
          <option value="Tarime">Tarime</option>
          <option value="Serengeti">Serengeti</option>
          <option value="Rorya">Rorya</option>
          <option value="Musoma">Musoma</option>
          <option value="Butiama">Butiama</option>
          <option value="Tarime">Tarime</option>
          <option value="Bunda">Bunda</option>
          <option value="Musoma Manispaa">Musoma Manispaa</option>
          <option value="Ruangwa">Ruangwa</option>
          <option value="Nachingwe">Nachingwea</option>
          <option value="Mtama">Mtama</option>
          <option value="Liwale">Liwale</option>
          <option value="Kilwa">Kilwa</option>
          <option value="Lindi">Lindi</option>
          <option value="Kigoma">Kigoma</option>
          <option value="Kibondo">Kibondo</option>
          <option value="Kasulu">Kasulu</option>
          <option value="Kakonko">Kakonko</option>
          <option value="Buhingwe">Buhingwe</option>
          <option value="Kasulu">Kasulu/option>
          <option value="Kigoma">Kigoma</option>
          <option value="Nsimbo">Nsimbo</option>
          <option value="Mpimbwe">Mpimbwe</option>
          <option value="Mpanda">Mpanda</option>
          <option value="Mlele">Mlele</option>
          <option value="Mpanda Manispaa">Mpanda Manispaa</option>
          <option value="Ngara">Ngara</option>
          <option value="Muleba">Muleba</option>
          <option value="Missenyi">Missenyi</option>
          <option value="Kyerwa">Kyerwa</option>
          <option value="Karagwe">Karagwe</option>
          <option value="Bukoba">Bukoba</option>
          <option value="Biharamulo">Biharamulo</option>
          <option value="Bukoba Manispaa">Bukoba Manispaa</option>
          <option value="Mufindi">Mufindi</option>
          <option value="Kilolo">Kilolo</option>
          <option value="Iringa">Iringa</option>
          <option value="Mpwapwa">Mpwapwa</option>
          <option value="Kongwa">Kongwa</option>
          <option value="Kondoa">Kondoa</option>
          <option value="Chemba">Chema</option>
          <option value="Chamwino">Chamwino</option>
          <option value="Bahi">Bahi</option>
          <option value="Kondoa">Kondoa</option>
          <option value="Dodoma">Dodoma</option>
          <option value="Geita Mjini">Geita Mjini</option>
          <option value="Nyang'hwale">Nyang'hwale</option>
          <option value="Bukombe">Bukombe</option>
          <option value="Chato">Chato</option>
          <option value="Geita">Geita</option>
          <option value="Mbogwe">Mbogwe</option>
          <option value="Iringa Manispaa">Iringa Manispaa</option>
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
          <option value="Busega">Busega</option>
          <option value="Itilima">Itilima</option>
          <option value="Maswa">Maswa</option>
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
          <option value="Mbarali">Mbarali</option>
          <option value="Mvomero">Mvomero</option>
          <option value="Ulanga">Ulanga</option>
          <option value="Mtwara Mikindani">Mtwara Mikindani</option>
          <option value="Masasi Mji">Masasi Mji</option>
          <option value="Nanyamba">Nenyamaba</option>
          <option value="Newala">Newala</option>
          <option value="Masasi">Masasi</option>
          <option value="Mtwara">Mtwara</option>
          <option value="Nanyumbu">Nanyambu</option>
          <option value="Newala">Newala</option>
          <option value="Tandahimba">Tandahimba</option>
          <option value="Mwanza">Mwanza</option>
          <option value="Ilemela">Ilemela</option>
          <option value="Buchosa">Buchosa</option>
          <option value="Kwimba">Kwimba</option>
          <option value="Magu">Magu</option>
          <option value="Misungwi">Misungwi</option>
          <option value="Sengerema">Sengerema</option>
          <option value="Ukerewe">Ukerewe</option>
          <option value="Makambako">Makambako</option>
          <option value="Njombe Mji">Njombe Mji</option>
          <option value="Ludewa">Ludewa</option>
          <option value="Makete">Makete</option>
          <option value="Njombe">Njombe</option>
          <option value="Wanging'ombe">Wanging'ombe</option>
          <option value="Kibaha Mji">Kibaha Mji</option>
          <option value="Bagamayo">Bagamoyo</option>
          <option value="Kibaha">Kibaha</option>
          <option value="Kibiti">Kibiti</option>
          <option value="Kisarawe">Kisarawe</option>
          <option value="Mafia">Mafia</option>
          <option value="Mkuranag">Mkuranga</option>
          <option value="Rufiji">Rufiji</option>
          <option value="Sumbawanga Manispaa">Sumbawanga Manispaa</option>
          <option value="Kalambo">Kalambo</option>
          <option value="Nkasi">Nkasi</option>
          <option value="Sumbawanga">Sumbawanga</option>
          <option value="Tunduru">Tunduru</option>
          <option value="Songea">Songea</option>
          <option value="Nyasa">Nyasa</option>
          <option value="Namtumbo">Namtumbo</option>
          <option value="Madaba">Madaba</option>
          <option value="Mbinga">Mbinga</option>
          <option value="Songea Manispaa">Songea Manispaa</option>
          <option value="Ushetu">Ushetu</option>
          <option value="Shinyanga">Shinyanga</option>
          <option value="Msalala">Msalala</option>
          <option value="Kishapu">Kishapu</option>
          <option value="Kahama Mji">Kahama Mji</option>
          <option value="Shinyanga Manispaa">Shinyanga Manispaa</option>
          <option value="Itigi">Itigi</option>
          <option value="Singida Manispaa">Singida Manispaa</option>
          <option value="Mkalama">Mkalama</option>
          <option value="Iramba">Iramba</option>
          <option value="Singida">Singida</option>
          <option value="Ikungi">Ikungi</option>
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
