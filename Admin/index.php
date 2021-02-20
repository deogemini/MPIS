<?php include 'layouts/main.php'; ?>
<div class="container">
	<?php
	session_start();
	if (!isset($_SESSION["firstname"])) {

		header("location:/MPIS/user/login.php");
	}
	?>

	<h4> <b>Admin...Welcome to MPIS</b> </h4>



 View registered Member of parliaments with their respective constituency
<hr>

</div>
<?php include 'layouts/common_base.php'; ?>