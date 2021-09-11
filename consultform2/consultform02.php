<!DOCTYPE html>
<html>
    <head>
        <title>
           Consultation form
        </title>
        <link rel="stylesheet" type="text/css" href="consultform02.css">
        <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body bgcolor="#175E59">
        
        <div class="whites"></div>
        <form method="POST">  
        <div class="head">Kindly Fill this to get precise Consultation</div>  
        <div class="immg">
            <img src="puzzle.jpg">
        </div>
        <div class="formbox"> 
            <label>Consultation via </label></div>
        <div class="ccall">
        
        <input type ="radio" value="callc" name="mode">
        <label for="callc">Call</label>
        </div>
            <div class="vcall">
            <input type ="radio" value="callv" name="mode">
            <label for="callv">VideoCall</label>
            </div>
                <div class="cchat">
                <input type ="radio" value="chatc" name="mode">
                <label for="chatc">Chat</label>
                </div>
            
                <div class="gender1">
                    <p> Consultant</p>
                    <input type ="radio" value="gender" name="gender">
                    <label for="female">Female Doctor</label>
                    </div>
                        <div class="gender2">
                        <input type ="radio" value="gender" name="gender">
                        <label for="male">Male Doctors</label>
                        </div>
        

        <div class="symptom">
        <label>Describe your Symptoms or Health problems </label>
        <input type ="textbox" name="descr" placeholder="Eg:Fever,Headache ">
        
        </div>
         
        <div class="verin">
            <p>Since when are you experiencing above Symptoms</p>   
            <div class="datee">
                <input type="datetime-local" id="send" name="dt" onclicl="result.value=send.value">
                </div>
            </div>
        <div class="submitb"><input href= "..\Appoinment\consultsurveyform.php" type ="submit" name="submit" value="Submit"></div>
        
        <div class="clearf"><input type="reset" value="Clear form"></div>
      
    </div>  
    </form>
    </body>
</html>


<?php  
    include 'connect.php';  
   

    if (isset($_POST['submit'])) 
    {
      $mode = $_POST['mode'];
      $gender = $_POST['gender'];
      $descr = $_POST['descr'];
      $dt = $_POST['dt'];
 /*   $otp = $_POST['otp']; 
      
   
   /*   $reset = $_POST['reset']; */
      $insertquery = "INSERT INTO `consultation2`(`mode`, `gender`, `descr`, `dt` ) VALUES ('$mode','$gender','$descr','$dt' )";
      $res=mysqli_query($con,$insertquery);
      if($res)
      {     

        ?>
                  <script>
                    alert("Data Inserted Properly");
                    location.href = '../Appoinment/consultsurveyform.php';

                  </script>
              <?php
              header("location:..\Appoinment\consultsurveyform.php");
        /*header("location:");*/
      }
      else
      {
        ?>
              <script>
                alert("We will get back to you soon...!");
                location.href = '../Appoinment/consultsurveyform.php';
              </script>


              <?php

      }
  }
  ?>