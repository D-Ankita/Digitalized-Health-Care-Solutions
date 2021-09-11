<?php include 'connect.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
<link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Rye' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="https://material.io/resources/icons/?icon=dashboard&style=baseline">
<link href='https://fonts.googleapis.com/css?family=Old Standard TT' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="Contactus.css">
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<div class="header">
		<img src="..\images\phoenix.png">
		<h2>PHOENIX</h2>
		<h6>multispeciality hospital</h6>
		<hr>
	</div>

	<div class="navbar">
		<ul>
			<li><a href="..\homepage\home.php" id="nav1"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
			<li><a href="..\Aboutus\aboutus.php" id="nav2">About us</a></li>
			<li ><a>Contact us</a></li>
		</ul>
	</div>
	<div class="top">
		<img id="imgleft" src="laptop.png">
		<h2>Contact Us</h2>
	</div>
	
	<div class="details">
		<h1>Get in Touch</h1>
		<P>Please fill out the quick form and we will be in touch with lightening speed. </P>
		<form method="POST">
		 <input type="text" name="name" id="name"  placeholder="Name">
		 <input type="email" name="email" id="email"  placeholder="Your email address">
	     <input type="text" name="text" id="text"  placeholder="Message">
	     <input type="submit" name="submit" value="SUBMIT">
	     </form>
	</div>

	<div class="info">
		<img id="loc" src="location.png">
		<img id="tele" src="telephone.png">
		<img id="mail" src="email.png">
		<p id="add">PHOENIX<br>Boisar(E)<br>Branch:Virar(W) & Vasai(E).</p>
		<p id="off">Boisar Office:9323299521<br>Virar Office:9673551462<br>Vasai Office:8421222788</p>
		<p id="gm">phoneixboisar@gmail.com<br>phoenixvirar@gmail.com<br>phoenixvasai@gmail.com</p>
	</div>
</body>
</html>

<?php

if (isset($_POST['submit'])) 
    {
$name = $_POST['name'];
$email =$_POST['email'];
$text =$_POST['text'];



    	$query = "INSERT INTO `contactus`( `name`, `email`, `text`) VALUES('$name','$email','$text')";
            $res= mysqli_query($con,$query);
            if($res)
            { 
              ?>
                  <script>
                    alert("Thankyou for your Feedback");


                  </script>
              <?php
            }
            else{
              ?>
              <script>
                alert("Data NOT Inserted Properly");
              </script>


              <?php
}
}

?>