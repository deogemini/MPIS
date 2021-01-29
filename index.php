<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MainPage</title>

    <link rel="stylesheet"  href="/MPIS/Assets/css/bootstrap.min.css">
    <link rel="stylesheet"  href="/MPIS/Assets/css/custom.css">
    <link href="/MPIS/Assets/plugins/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
<!---navbar and header--->
<nav class="navbar navbar-light" style="background-color:#99ff66;">
  <a class="navbar-brand" href="#">MEMBER OF PARLIAMENT INFORMATION SYSTEM(MPIS)</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="Aboutus">About System</a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Contact us</a>
    </div>
  </div>
</nav>

<!--about us div-->
<div class="row pt-2 px-2" id="Aboutus">
<div class="col-md-12">
    <h3  style="text-align: center;"> About us</h3>
    <p>
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 
    the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </p>

</div>    

</div>

    

<!--  footer-->
<div class="text-center p-3" style="bottom: 0; margin-top:10;position:bottom">
	<footer class="footer">
      <div class="container">
      	<span class="text-dark"> <strong>MPIS </strong></strong>@ 2021 Copyright</span>
      </div>
    </footer>
</div>
<script src="/MPIS/Assets/js/jquery.js"></script>
<script  src="/MPIS/Assets/js/bootstrap.min.js"></script>
<script src="/MPIS/Assets/plugins/dist/js/select2.min.js"></script>
<script>
    $(function(){
      $('.js-example-basic-single').select2();
    });
</script>
</body>
</html>