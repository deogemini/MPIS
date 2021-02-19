<?php include 'layouts/main.php'; ?>
<div class="container">
	<?php
	session_start();
	if (!isset($_SESSION["firstname"])) {

		header("location:/MPIS/user/login.php");
	}
	?>
	<p class="text-justify">

	<h4> <b>Admin...Welcome to MPIS</b> </h4>

	Member of parliament information system (MPIS), it's the platform that holds Citizens compliments and Members of parliamnets details and feedback to the respective compliment.<br><br>
		
<h5><b> What does MPIS do? </b></h5> 

MPIS allows admin to: <br> Register Member of parliament and their constituency,:<br>

 View registered Member of parliaments with their respective constituency
<hr>

	</p>
</div>
<?php include 'layouts/common_base.php'; ?>