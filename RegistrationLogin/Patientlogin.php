<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="patstylelogin.css">
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>
	<header>
	<div class="loginbox" style="background-color: white;">
       <img src="pat.png" class="avatar">
       <h3 > Login As Patient</h3>	
      
       <form method="POST" >
             <input type="text" name="email" placeholder="Enter email-id" style="font-color:black">
            
             <input type="password" name="password" placeholder="Enter password">
             <br> 
             <input type="submit" name="submit" value="LOGIN">
             <br>
        </form>	
     
        <div class="bottom">
          <div class="remember"> <input type="checkbox" name="Remember" checked="checked"><a href="#">Remember me</a>
          </div>
          <div class="pass"><a href="Patient.php">Dont have Account?</a>
          </div>
          
        </div>
      </div>
  </header>
</body>
</html>

<?php  
    include 'connect.php';

    if(isset($_POST['submit'])) 
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

      $check = "SELECT * FROM patientsignin WHERE email = '$email' && password = '$password' ";
      $patname = "SELECT firstname FROM doctorsignin WHERE email = '$email' && password = '$password' ";
       $checkres = mysqli_query($con,$check);
        $checknum = mysqli_num_rows($checkres);
        if($checknum == 1 )
        { 
          ?>
          <script >
            alert("Login Successful");
          </script>
          <?php
            header('location:test.php');
        }
        else{
          ?>
          <script >
            alert("Please Check Your Credentials");
          </script>
          <?php
         header('location:Patientlogin.php');
        }

}
?>

