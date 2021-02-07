<?php include 'layouts/main.php';?>
<?php 
session_start();
if(isset($_SESSION["firstname"])){
echo '<h3>Login Success, Welcome.. '.$_SESSION["firstname"].'</h3>';
}
else{
    header("location:login.php");
}
?>
<div class="container">
<div class="row">
<div class="col-md-10">
<h2> Welcome at....</h2>
</div>
<div class="col-md-2">
<form action="logout.php">
<button type="submit" class="btn btn-danger" name="logout">Logout here</button>
</form>
</div>
</div>
</div>

<?php include 'layouts/common_base.php'; ?>