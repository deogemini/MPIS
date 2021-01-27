<?php include 'layouts/main.php';?>
   
<!-- Main content Start Here -->
<div class="main-content">
	<h2> Sajili Jimbo</h2>
    <form action="sajilijimbo.php" method="POST">
      <div class="col">
      	<div class="form-outline">
        <label class="form-label" >Jina la jimbo</label>
        <input type="text" class="form-control" id="jinalakwanza">
      </div>
      </div>
        <div class="col">
          <label class="form-label" >Jimbo lipo mkoa upi?</label>
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">MKOA
             <span class="caret"></span>
         </button>
		  <ul class="dropdown-menu">
		    <li><a href="#">HTML</a></li>
		    <li><a href="#">CSS</a></li>
		    <li><a href="#">JavaScript</a></li>
		  </ul>
    </div>

     <div class="col">
          <label class="form-label" >Jimbo lipo wilaya ipi?</label>
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">WILAYA
  <span class="caret"></span>
 </button>

  <ul class="dropdown-menu">
    <li><a href="#">HTML</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">JavaScript</a></li>
  </ul>
    </div>
     <div class="col">
        <div class="form-outline">
        <label class="form-label" >Idadi ya kata katika jimbo</label>
        <input type="number" class="form-control" id="kata">
      </div>
  </form>

</div>
<!--/ Main content End Here-->

<?php include'layouts/common_base.php' ?>


