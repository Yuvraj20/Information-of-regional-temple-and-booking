<!DOCTYPE html>    
<html lang="en">    
<head>    
<meta charset="utf-8">
<title>Feedback Page</title>
<link rel="icon" href="favicon.ico">   
<link rel="stylesheet" type="text/css" href="css/feedback.css">  

</head>    
<body onload="document.feedback.fname.focus();">   
<script src="js/feedback.js"></script>
<h1 style="text-align: center;">FEEDBACK FORM</h1>    
<div class="container">
	<h3 style="text-align: center;">Help us improve our website please fill feedback form</h3>    
  <form  name='feedback' action="feedback1.php" onsubmit="return formValidation();" method="POST">    
    <div class="row">    
      <div class="col-25">    
        <label for="fname">First Name*</label>    
      </div>    
      <div class="col-75">    
        <input type="text" name="fname"   placeholder="Your First name..">    
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="lname">Last Name*</label>    
      </div>    
      <div class="col-75">    
        <input type="text" name="lname"  placeholder="Your last name..">    
      </div>    
    </div>    
    <div class="row">    
        <div class="col-25">    
          <label for="email">Email*</label>    
        </div>    
        <div class="col-75">    
          <input type="email" name="email"   placeholder="Your email.. ">    
        </div>    
      </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="exp" >Your Experience*</label>    
      </div>    
      <div class="col-75">    
        <input type="radio" name="d" value="Excellent">
        <label for="d">Excellent</label>
        <input type="radio" name="d" value="Good">
        <label for="e">Good</label>
        <input type="radio" name="d" value="Bad" >
        <label for="f">Bad</label>
        
      </div>   
       
    </div> 
    <div class="row">
        <div class="col-25">
            <label for="select">Select type*</label>
        </div>
        <input type="radio" name="a" value="Comments" >
        <label for="a">Comments</label>
        <input type="radio" name="a" value="Suggestions" >
        <label for="b">Suggestions</label>
        <input type="radio" name="a" value="Questions">
        <label for="c" >Questions</label>
        
    </div>   
    <div class="row">    
      <div class="col-25">    
        <label for="feed_back">FeedBack*</label>    
      </div>    
      <div class="col-75">    
        <textarea name="feed_back"  placeholder="Write something.." style="height:200px"></textarea>    
      </div>    
    </div>    
    <div class="row">    
      <input type="submit" name="submit1" value="Submit">    
    </div>    
  </form>    
</div>    
</body>    
</html>    