<?php
use Phppot\PasswordReset;
use Phppot\Member;

require_once __DIR__ . '/Model/PasswordReset.php';
$passwordReset = new PasswordReset();

if (empty($_GET["token"])) {
    // token not found so exit
    echo 'Invalid request!';
    exit();
} else {
    $token = $_GET["token"];
    // token found, let's validate it
    $memberRecord = $passwordReset->getMemberForgotByResetToken($token);
    if (empty($memberRecord)) {
        // token expired
        // do not say that your token has expired for security reasons
        // never reveal system state to the end user
        echo 'Invalid request!';
        exit();
    }
}
if (! empty($_POST["reset-btn"])) {
    $passwordReset->expireToken($token);
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $displayMessage = $member->updatePassword($memberRecord[0]['member_id'], $_POST["password"]);
}
?>
<HTML>
<HEAD>
<TITLE>Reset Password</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="">
				<form name="reset-password" action="" method="post"
					onsubmit="return resetPasswordValidation()">
					<div class="signup-heading">Reset Password</div>
<?php
if (! empty($displayMessage["status"])) {
    if ($displayMessage["status"] == "error") {
        ?>
				    <div class="server-response error-msg"><?php echo $displayMessage["message"]; ?></div>
<?php
    } else if ($displayMessage["status"] == "success") {
        ?>
                    <div class="server-response success-msg"><?php echo $displayMessage["message"]; ?></div>
<?php
    }
}
?>
				<div class="error-msg" id="error-msg"></div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="forgot-password-info"></span>
							</div>
							<input class="input-box-330" type="password" name="password"
								id="password">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Confirm Password<span class="required error"
									id="confirm-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="confirm-password" id="confirm-password">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="reset-btn" id="reset-btn"
							value="Reset Password">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
function resetPasswordValidation() {
	var valid = true;
	$("#password").removeClass("error-field");
	$("#confirm-password").removeClass("error-field");

	var Password = $('#password').val();
    var ConfirmPassword = $('#confirm-password').val();

	if (Password.trim() == "") {
		$("#forgot-password-info").html("required.").css("color", "#ee0000").show();
		$("#password").addClass("error-field");
		valid = false;
	}
	if (ConfirmPassword.trim() == "") {
		$("#confirm-password-info").html("required.").css("color", "#ee0000").show();
		$("#confirm-password").addClass("error-field");
		valid = false;
	}
	if(Password != ConfirmPassword){
        $("#error-msg").html("Both passwords must be same.").show();
        valid=false;
    }
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
</BODY>
</HTML>