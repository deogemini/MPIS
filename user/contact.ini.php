<?php 

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    $mailTo = "geminideogratias8@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have receieved an email from ".$name.".\n\n".$email;

    mail($mailTo, $txt, $headers);
header("Location: index2.php?mailsend ");


}