<?php include('layouts/main.php'); ?>
<?php
session_start();
if (!isset($_SESSION["id"])) {
    header("location:/MPIS/user/login.php");
}
?>

<!-- Page Content  -->



<h2>Mbunge akiunganishwa na MPIS</h2>
<p>Karibu sana mbunge kwenye mfumo laini utakuwa na uwezo wa kuwa na account yako ambayo imesajiliwa
    na kuidhinishwa na Tume huru ya uchaguzi na pia mamlaka za bunge zimeweza kutoa idhini zake wabunge wake kutumia mifumo lain ya computer au tanakilishi ambayo itawasaidia katika ufanisi wa kuwakilisha wananchi wa majimbo kwa urahis zaidi</p>
<div class="line"></div>

<h2>Taarifa za mbunge</h2>
<p>Kwenye huu wa mfumo laini wa computer utahifadhi taarifa za mbunge kuendana na account ya mbunge husika mbunge akiingia kwenye mfumo ataona maoni ya wananchi na pia ataweza kuona taarifa zake binafsi. Taarifa hizi zinazoonyeshwa kwa mbunge mfumo utahakikisha zisiwe za uchochezi wa aina wowote. </p>

<div class="line"></div>

<h2>MPIS na Ufanisi wa Mbunge</h2>
<p>Ufanisi wa huu mfumo laini unapimwa kwa malalamiko kutoka kwa wananchi kumfikia mbunge wao kwa urahisi na kwa muda mfupi bila kuhitaji mikutano ya kisiasa
    pia ufanisi huu upo katika kuonyesha utendaji kazi wa mbunge kwa majibu anayotoa kwa wananchi wake ambao wanakuwa wametoa malalamiko kwa mbunge wao, pia mbunge ataweza kupata malalamiko hata akiwa mbali na wananchi wa jimbo kwa njia ya simu ya kiganjani au hata kupitia kifaa tanakilishi anachokitumia akiwa ofisi ya mbunge. </p>
<div class="line"></div>

<h3>Wananchi na Mbunge kwenye MPIS</h3>
<p>Mbunge na mwakilishi wa wananchi tunakupa nafasi ya kuweza kuongeza mahusiano mazuri na makubwa kati ya mbunge kama mwakilishi kwenye bunge la nchi na pia wananchi kama wahitaji wa huduma za serikali</p>
</div>
</div>



<?php include 'layouts/common_base.php'; ?>