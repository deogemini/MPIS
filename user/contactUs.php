<?php include 'layouts/main.php'; ?>

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a phone number, Email, postal addres, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="col-md-6">
      Phone Call<br><br>
      Project Manager <br><br>
      +255676994832<br><br>
      +255713664385<br><br>

      Email: geminideogratias8@gmail.com<br><br><br>

      Postal address<br><br>
      University of Dar es Salaam<br>
      p.o.box 1305<br>
      Dar es Salaam<br><br>
    </div>
    <div class="col-md-6">
      <form action="contact.ini.php" method="POST">
        <label for="fname">Full Name</label>
        <input type="text" id="fname" name="fullname" placeholder="Your name.." required>
    
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Your email.." required>

        <label for="subject">Mail Us</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px" required></textarea>
        <input type="submit" value="Submit" name="submit">
      </form>
    </div>
  </div>
</div>

<!--  -->
