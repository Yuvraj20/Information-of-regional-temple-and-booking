<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WELCOME</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style1.css">    
<link rel="icon" href="favicon.ico">
</head>
<body>
    <header>
    <div class="wrapper">
        <div class="logo">
            <img src="abc.png" alt="">
        </div>
<ul class="nav-area">
<li><a href="index.html">Home</a></li>
<li><a href="regions.html">Regions</a></li>
<li><a href="home.php">Rest House</a></li>
<li><a href="contactus.html">Contact us</a></li>
</ul>
</div>
<?php
require("connect1.php");
$errors = [];
$errorMessage = '';
@$fn=$_POST['fname'];
@$ln=$_POST['lname'];
@$em=$_POST['email'];
@$ct=$_POST['d'];
@$de=$_POST['a'];
@$fb=$_POST['feed_back'];
$write = "INSERT INTO feedback VALUES ('$fn','$ln','$em','$ct','$de','$fb')";
if (mysqli_query($conn,$write)) {
        echo "<div class='welcome-text'>
        <marquee><p><br><br><br><br>Thank You For Your Feedback!!</p></marquee>
    </div>";
      } else {
        echo "Error: " . $write . "<br>" . $conn->error;
    }


 $mailto = @$_POST["email"];
 $adminmail= "yuviomac@gmail.com";
 $feedback = @$_POST["feed_back"];
 $subject = "Feedback";
 $msg = "Hey $fn thanks for filling feedback.\n Your Experience: $ct \n Your Feedback type: $de \n Here is what we got from you: \n";
 $message = $msg . $feedback;
 $message = wordwrap($message, 70);
 $headers = "From: admin ";
 $headers1 = "From: $mailto";

 $msg1 = "Here is what we got from $fn ($mailto): \n Experience: $ct \n Feedback type: $de \n Feedback: ";
 $message1 = $msg1 . $feedback;
 $message1 = wordwrap($message1,70); 
 $headers1 = "From: $mailto";
 
 mail($mailto,$subject,$message,$headers);
 mail($adminmail,$subject,$message1,$headers1);


mysqli_close($conn);
?>
</header>

</body>
</html>
