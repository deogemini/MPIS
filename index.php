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

</nav>

<!--about us div-->
<div class="container" id="aboutUs">
<div class="row">
<div class="col-md-12">
    <h3  style="text-align: center;"> About us</h3>
    <p>
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 
    the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    </p>

</div>    
</div>
</div>

<!--features-->
<div class="container" id="features">
<div class="row">
<div class="col-md-12">
    <h3  style="text-align: center;"> Features</h3>
  <div class="wrapper">
    <div class="cards_wrap">
      <div class="card_item">
          <div class="card_inner">
                <div  class="card_top">
                    <img src="Assets/images/mbunge.jfif" alt="wanachi" class="img-feature">
                      </div>
                      <div class="card_bottom">
                       <div class="card_category">
                           kutoa maoni
                         </div>

                       <div class="card_info">
                           <p class="title">Wananchi wanatoa maoni</p>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                      
                       <div class="card_creator">By MPIS developer</div>
                      </div>
                </div>
            </div>
            <div class="card_item">
          <div class="card_inner">
                <div  class="card_top">
                    <img src="Assets/images/akijibu.jfif" alt="wanachi" class="img-feature">
                      </div>
                      <div class="card_bottom">
                       <div class="card_category">
                           kujibu maoni
                         </div>

                       <div class="card_info">
                           <p class="title">Mbunge akijibu maoni</p>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                      
                       <div class="card_creator">By MPIS developer</div>
                      </div>
                </div>
            </div>
            <div class="card_item">
          <div class="card_inner">
                <div  class="card_top">
                    <img src="Assets/images/wananchi.jfif" alt="wanachi" class="img-feature">
                      </div>
                      <div class="card_bottom">
                       <div class="card_category">
                           kusikia maelekezo
                         </div>

                       <div class="card_info">
                           <p class="title">serikali kutoa maelekezo</p>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                      
                       <div class="card_creator">By MPIS developer</div>
                      </div>
                </div>
            </div>
            <div class="card_item">
                 <div class="card_inner">
                <div  class="card_top">
                    <img src="Assets/images/wabunge.jfif" alt="wanachi" class="img-feature" class="responsive">
                      </div>
                      <div class="card_bottom">
                       <div class="card_category">
                           kujua wabunge 
                         </div>

                       <div class="card_info">
                           <p class="title">Wananchi watajua wabunge </p>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                      
                       <div class="card_creator">By MPIS developer</div>
                      </div>
                </div>
            </div>
  </div>
  </div>
   </div>

</div>    
</div>


    

<!--  footer-->
	<footer class="footer" style="margin-top: auto;" >
      <div class="container" ">
      	<span class="text-dark"> <strong>MPIS </strong></strong>@ 2021 Copyright</span>
      </div>
    </footer>
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