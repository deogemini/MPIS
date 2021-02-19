<?php include 'layouts/main.php'; ?>
<div class="container">
	<?php
	session_start();
	if (!isset($_SESSION["firstname"])) {

		header("location:/MPIS/user/login.php");
	}
	?>
	<p class="text-justify">

	<h4> <b>Welcome to MPIS</b> </h4>

	Member of parliament information system (MPIS), it's the platform that olds Citizens compliments and Members of parliamnets details and feedback to the respective compliment.<br><br>
		
<h5><b> What does MPIS do? </b></h5> 

MPIS allows Member of parliamnet and citizens of Tanzania to solve challenges that cictizens are facing online. 
Here is an example of what MPIS can do:<br><br>

<h6>Member of parliamnet</h6>
View citizens compliments<br>
provides feedback to citizens<br><br>

<h6>citizens</h6>

provides compliments to Members of parliaments<br>
Views feedback<br>
Views complimnets status<br><br>

<h6>Other</h6>
register Members of parliament<br>
Register constituency<br>
view list of Members of parliament<br>
view list of constituency


	</p>
</div>
<?php include 'layouts/common_base.php'; ?>