<?php include 'layouts/main.php'; ?>
<div class="container">
	<?php
	session_start();
	if (isset($_SESSION["firstname"])) {
		echo '<p>Login Success, Welcome.. ' . $_SESSION["firstname"] . '</p>';
	} else {
		header("location:/MPIS/user/login.php");
	}
	?>
	<p class="text-justify">
    
	     
        Member of parliament information system it's the platform

	</p>
</div>
<?php include 'layouts/common_base.php'; ?>