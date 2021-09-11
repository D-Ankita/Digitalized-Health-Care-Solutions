  <!DOCTYPE html>
<html>
    <head>
        <title>
           Consultation form
        </title>
        <link rel="stylesheet" type="text/css" href="consultform.css">
        <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body bgcolor="#175E59">
        <div class="head">Consult Now</div>
        <div class="whites"></div>
        <form method="POST">    
        <div class="immg">
            <img src="..\images\misdoc.jpg">
        </div>
        <div class="formbox"> 

        <div class="pName">
        <label>Patient's Name</label>
        <input type ="text" name="patname" >
        </div>

        <div class="symptom">
        <label>Tell us your Symptoms or Health problems </label>
        <input type ="text" name="symptom" placeholder="Eg:Fever,Headache ">
        
        <h3> minimum 4 character</h3>
        </div>

        <div class="radiob">

        <div class="opdb">
        <input type="radio" name="type"  id="butt" value="opd">
        <label for="opd">OPD</label>
        </div>
        <div class="foll">
        <input type="radio" name="type" id="butt" value="followup">
        <label for="followup">Followup</label>
        </div>
         </div>

        <div class="choose">
         <p> Choose a Relavent Speciality </p>
        </div>
        <div class="optt">
        <select name="favcolours">
            <option  value="1">Pediatric</option>
            <option value="1">Dietetian</option>
            <option value="1">psyciatry</option>
        </select>
        </div>
        
        <div class="mobb">
        <p>Mobile number</p>   
        <input type="text" name="mobile" placeholder="enter your number">
        </div>
         <div class="verin">
        <p>Date Of Birth</p>   
        <input type="date" name="dob" placeholder="enter your Date of Birth">
        </div>
         
     <!--   <div class="verin">
          <p>A Verification Code will be sent to this number</p>
            <input type="text" name="otp" placeholder="enter code">
            </div>
       -->  <div class="submitb"><input name="submit" type ="submit" value="Submit"></div>
        
        <div class="clearf"><input name="reset" type="reset" value="Clear form"></div>
      
    </div>  
    </form>
    </body>
</html>


<?php  
    include 'connect.php';
   

    if (isset($_POST['submit'])) 
    {
      $patname = $_POST['patname'];
      $symptom = $_POST['symptom'];
      $type = $_POST['type'];
      $favcolours = $_POST['favcolours'];
      $mobile = $_POST['mobile'];
      $dob = $_POST['dob'];
 /*   $otp = $_POST['otp']; 
      
   
   /*   $reset = $_POST['reset']; */
      $insertquery = "INSERT INTO `consultation`(`patname`, `Symptoms`, `type`, `Speciality`, `mobile`,`dob` ) VALUES ('$patname','$symptom','$type','$favcolours','$mobile' , '$dob')";
      $res=mysqli_query($con,$insertquery);
      if($res)
      {

        ?>
                  <script>
                    alert("Data Inserted Properly");
                    window.location.href = '../consultform2/consultform02.php';

                  </script>
              <?php
              header("location:../consultform2/consultform02.php");
        /*header("location:");*/
      }
      else
      {
        ?>
              <script>
                 alert("We will get back to you soon..!");
                window.location.href = '../consultform2/consultform02.php';
              </script>


              <?php

      }
  }
  ?>