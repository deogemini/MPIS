<?php include 'layouts/main.php'; ?>

<html>

<head>

<title>Login Form Design</title>

 <style>
    body{

margin: 0;

padding: 0;
background-size: cover;

background-position: center;

font-family: sans-serif;
background-image: url("img/background.jpg");

}



.loginboxlayout{

width: 320px;

height: 400px;

background: #444;

color: #fff;

top: 60%;

left: 50%;

position: absolute;

transform: translate(-50%,-50%);

box-sizing: border-box;

padding: 70px 30px;

}



.avenger{

width: 100px;

height: 100px;

border-radius: 50%;

position: absolute;

top: -50px;

left: calc(50% - 50px);

}



h1{

margin: 0;

padding: 0 0 20px;

text-align: center;

font-size: 22px;

}



.loginboxlayout p{

margin: 0;

padding: 0;

font-weight: bold;

}



.loginboxlayout input{

width: 100%;

margin-bottom: 20px;

}



.loginboxlayout input[type="text"], input[type="password"]

{

border: none;

border-bottom: 1px solid #fff;

background: transparent;

outline: none;

height: 40px;

color: #fff;

font-size: 16px;

}

.loginboxlayout input[type="submit"]

{

border: none;

outline: none;

height: 40px;

background: #fb2525;

color: #fff;

font-size: 18px;

border-radius: 20px;

}

.loginboxlayout input[type="submit"]:hover

{

cursor: pointer;

background: #ffc107;

color: #000;

}

.loginboxlayout a{

text-decoration: none;

font-size: 12px;

line-height: 20px;

color: darkgrey;

}



.loginboxlayout a:hover

{

color: #ffc107;

}

footer {

background-color: #555;

color: #fff;

font-size: 14px;

bottom: 0;

position: fixed;

left: 0;

right: 0;

text-align: center;

z-index: 999;

}



footer p {

margin: 10px 0;

font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida  Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}



footer a {

color: #ff6f61;

text-decoration: none;

margin-right:5px;

}
    
    </style>

<body>
          <div class="container">
          <div class="loginboxlayout">

        <img src="https://1.bp.blogspot.com/-gKqA42FtA48/YABSs2BtewI/AAAAAAAAQAA/l5LBFoA-ECQbI8LLU0oIl75sgaVLduBUwCLcBGAsYHQ/s200/avatar.png" class="avenger">
        <h1>Login Here</h1>
        <form action="signin.php" method="POST">
            <p>Username</p>

            <input type="text" name="firstname" placeholder="First name" required>

            <p>Password</p>

            <input type="password" name="password" placeholder="Enter Password" required>

            <input type="submit" name="" value="Login">

            <a href="#">Lost your password?</a><br>

            <a href="#">Don't have an account?</a>

        </form>
    </div>
    <?php
            if (isset($_GET['text'])) {
                if ($_GET['text'] == "failed") {

                    echo '<h4> Wrong Password</h4>';
                }
            }
            ?>
          </div>
    

<!--footer>

    <p>

		Created by

		<a target="_blank" href="https://codekky.blogspot.com/">Code herdt</a>

    	</p>

</footer-->

</body>

</head>

</html>


<?php include 'layouts/common_base.php'; ?>