<?php include 'layouts/main.php'; ?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/MPIS/Assets/css/contactUs.css">
</head>

<body>
<div class="Contactcontainer">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a phone number, Email, postal addres, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
     Phone Call<br><br>
    Project Manager <br><br>
    +25523455464566<br><br>
    +255713664385<br><br>

    Email: Deogmin@gmail.com<br><br><br>

    Postal address<br><br>
    University of Dar es Salaam<br>
    p.o.box 1305<br>
    Dar es Salaam<br><br>
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
        <label for="fname">Email Address</label>
        <input type="email" id="email" name="Email" placeholder="Your email.." required>

        <label for="subject">Mail Us</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px" required></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>
