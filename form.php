<?php
if (isset($_POST["submit"])){
    
    //form submission details
    $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
    $emailFrom =htmlspecialchars(stripslashes(trim($_POST['email'])));
    $phone = htmlspecialchars(stripslashes(trim($_POST['phone'])));
    $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
    $occupation = htmlspecialchars(stripslashes(trim($_POST['occupation'])));

    //email details
    $emailTo = 'hanis@hanisnoor.com';         
    $subject = 'APD Form Submission';
    $subject2 = 'APD Form Submission';
    $header = 'From: '.$emailFrom;
    $header2 = 'From: '.$emailTo;
    $txt = 'Here is a copy of a message from a visitor named '.$name.".\n"
           .'Message: '.$message."\n"
           .'Phone: '.$phone."\n"
           .'Occupation: '.$occupation."\n";                   
    $txt2 = 'Thank you for filling out the form. Here is a copy of your message, '.$name.".\n"
           .'Message: '.$message."\n"
           .'Phone: '.$phone."\n"
           .'Occupation: '.$occupation."\n"; 

    if (mail($emailTo,$subject,$txt,$header) && mail($emailFrom,$subject2,$txt2,$header2)) {
        echo "<script>alert('Thank you for filling out the form. Your message has been sent.');</script>";
        echo "<script>document.location.href='index.html'</script>";
    }
    else {
        echo"<script>alert('Sorry, your message has not been sent. Please try again.');</script>";
    }
    }
  
?>