  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="docstyle.css">
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <header>
    <div class="loginbox">
         <img src="doc1.jpg" class="avatar">
         <h3> Register Yourself As Doctor</h3>  
         
         <form method="POST" onsubmit="return validation()" >
          <div >
        <div>
                  <div style="width: 48%;float: left; ">
                          <input type="text" id="firstname" name="firstname" placeholder="Enter firstname" required> 
                    </div>
                    <div style="width: 48%;float: right;">
                          <input type="text" id="lastname" name="lastname" placeholder="Enter lastname" required>
                    </div>
            </div>
            <div>
                    <div style="width: 48%;float: left;">
                          <input type="date" id="dob" name="dob" placeholder="Enter D.O.B" required>
                    </div>
                    <div style=" width:48%; float: right;">
                          <input list="gender"  name="gender" placeholder="Gender" required>
                                <datalist id="gender">
                                  <option value="Male">
                                  <option value="Female">
                                  <option value="Other">
                                </datalist>
                     </div>
            </div>
              <input type="text" name="address" id="address" placeholder="Enter address" required>
              <div>
                    <div style="width: 48%;float: left;">
                          <input type="email" id="email" name="email" placeholder="Enter Email-ID" required>
                    </div>
                   <div style="width: 48%;float: right;">
                          <input type="number" id="mobile" name="mobile" placeholder="Enter Contact No." required>
                    </div>
            </div>
           <div>
                    <div style="width: 48%;float: left;">
                          <input type="password" id="password" name="password" placeholder="Enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>
                    <div style="width: 48%;float: right;">
                          <input type="password" id="confpassword" name="confpassword" placeholder="Confirm password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>
            </div> 
         <input type="submit" name="submit" id="submit" value="SIGN-UP">
          </div>
          </form> 
          <div class="bottom">
            <div class="remember"> <input type="checkbox" name="Remember" checked="checked"><a href="#" >Remember me</a>
            </div>
            <div class="pass"><a href="Doctorlogin.php">Already have an Account?</a>
            </div>
            
          </div>
        </div>
    </header>
  <script type="text/javascript">
    function validation()
      {
        var firstname = document.getElementById('firstname').value;
        var lastname = document.getElementById('lastname').value;
        var dob = document.getElementById('dob').value;
        var gender = document.getElementById('gender').value;
        var address = document.getElementById('address').value;
        var email = document.getElementById('email').value;
        var mobile = document.getElementById('mobile').value;
        var password = document.getElementById('password').value;
        var confpassword = document.getElementById('confpassword').value;



        if(firstname.length < 2 || lastname.length < 2 )
        {
          alert(" Please enter Valid Name") ;
          return false;
        }
        if (password != confpassword) 
        {
            alert("Password and Confirm Password Fields Donot Match");
            return false;
        }


        
      }

      function validatePassword(){
        if(password.value != confpassword.value) {
          confpassword.setCustomValidity("Passwords Don't Match");
        } else {
          confpassword.setCustomValidity('');
        }
      }

      password.onchange = validatePassword;
      confpassword.onkeyup = validatePassword;
  </script>
  </body>
  </html>


  <?php  
      include 'connect.php';
     

      if (isset($_POST['submit'])) 
      {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $confpassword = $_POST['confpassword'];

                                              /* CREATE TABLE `iplab`.`patientsignin` ( `firstname` TEXT NOT NULL , `lastname` TEXT NOT NULL , `dob` DATE NOT NULL , `uniquepatient` VARCHAR(40) NOT NULL AUTO_INCREMENT , `email` VARCHAR(500) NOT NULL , `mobile` VARCHAR(500) NOT NULL , `addr` TEXT NOT NULL , `gender` TEXT NOT NULL , `password` VARCHAR(255) NOT NULL , `confpassword` VARCHAR(255) NOT NULL , PRIMARY KEY (`uniquepatient`)) ENGINE = InnoDB;*/
      $check = "SELECT * FROM doctorsignin WHERE email = '$email' && mobile = '$mobile' ";
       $checkres = mysqli_query($con,$check);
        $checknum = mysqli_num_rows($checkres);
        if($checknum == 1 )
        { 
  ?>
              <script>
                  alert("Mobile Number / Email-ID ALREADY Registered");
                </script>
  <?php
        } 
        else
        { 
            $insertquery = "INSERT INTO `doctorsignin`( `firstname`, `lastname`, `dob`, `email`, `mobile`, `address`, `gender`, `password`, `confpassword`) VALUES ('$firstname','$lastname','$dob','$email','$mobile','$address','$gender','$password','$confpassword')";
              $res= mysqli_query($con,$insertquery);
              if($res)
              { 
                ?>
                    <script>
                      alert("Data Inserted Properly");
                      alert("Please Login to your Account");
                      location.href = 'Doctorlogin.php';

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
          }
  ?>

<!---

CODE TO CHECK IF ALREADY EMAIL ID OR MOBILE NUMBER IS INSERTED IN DATABASE 

    
    $checkres = mysqli_query($con,$check);
    $checknum = mysqli_num_rows($checkres);
    if($checknum != 0){ 
      ?>
      <script>
        alert("Mobile Number / Email-ID ALREADY Registered");
      </script>
      <?php
/*    else
    { 
    } */

 /*
    $insertquery = "INSERT INTO `doctorsignin`( `firstname`, `lastname`, `dob`, `email`, `mobile`, `addr`, `gender`, `password`, `confpassword`) VALUES ('$firstname','$lastname','$dob','$email','$mobile','$address','$gender','$password','$confpassword')";
    $res= mysqli_query($con,$insertquery);
    if($res){ 
      ?>
      <script>
        alert("Data Inserted Properly");
        alert("Please Login to your Account");
        location.href = 'Patient.php';

      </script>
      <?php
    }
    else{
      ?>
      <script>
        alert("Data NOT Inserted Properly");
      </script>


      <?php

       */ 
 /* } */



