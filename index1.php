<?php include 'config.php';?>
<!DOCTYPE html>
<HTML lang="lv">
<HEAD>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style1.css">
<title>MBTEST</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</HEAD>

<BODY>
<div class="row">
  <div class="column left">
   <div id="header">
<?php include 'header.php';?>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="center">

<h2> Subscribe to newsletter </h2>
<p> Subscribe to our newsletter by entering your email below and get 10% discount to all purchases. </p>
<br>
<br>
<form action="" method="post">
<input type = "text" name = "email" placeholder = "   Your e-mail address" required >
<br>
<br>
<input type="submit"  name="submit" value="Submit">

<br>
<br>
<br>
<input type = "checkbox" name="pt" required >I agree to <a href="#">terms of service</a> 
</form>
<br>
<?php
if((isset($_POST['submit']))){ 
 $sql = "SELECT * FROM mbtest1 WHERE email= '".$_POST["email"]."'";
    $result = $conn->query($sql);
	if ($result->num_rows > 0) {
    echo "Email is already registered! Please submit different email address. <br><br>";
 	
 }else{	
 

$sql = "INSERT INTO mbtest1 (email)
VALUES ('".$_POST["email"]."')";

if ($conn->query($sql) === TRUE) {
  header("Location: subscribed.php");

}
 }
}

?>
<br>

    <hr>
	<br>
	<br>
<a target="_blank" href="#">
 <img class="facebook" src="facebook.jpg" width="20px" height="40px">
</a>
<a target="_blank" href="#">
 <img class="instagram" src="instagram.jpg" width="20px" height="40px">
</a>
<a target="_blank" href="#">
 <img class="twitter" src="twitter.jpg" width="20px" height="40px">
</a>
<a target="_blank" href="#">
 <img class="youtube" src="youtube.jpg" width="20px" height="40px">
</a>
  </div>
  
  </div>
  
  
  
  <div class="column right">
    
   
  </div>
</div>

</div>
</BODY>
</HTML>