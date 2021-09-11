
<!DOCTYPE html>
<html>
    <head>
        <title>
           Book Appoinmentform
        </title>
        <link rel="stylesheet" type="text/css" href="appoinmentform.css">
        <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body bgcolor="#175E59">
        <div class="head">BOOK APPOINMENT NOW</div>
        <div class="whites"></div>
        <form>    
        <div class="immg">
            <img src="hands.png">
        </div>
        <div class="formbox"> 

        <div class="pName" >
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
        <input type="radio" name="butt" value="opd">
        <label for="opd">OPD</label>
        </div>
        <div class="foll">
        <input type="radio" name="butt" value="followup">
        <label for="followup">Followup</label>
        </div>
        </div>

       
        
        <div class="mobb">
        <p>Mobile number</p>   
        <input type="text" name="mobile" placeholder="enter your number">
        </div>

        <div class="datee">
        <input type="datetime-local" name="datetime" id="send" onclicl="result.value=send.value">
        </div>
        <div class="verin">
            <p>Please Describe about the symptom</p>   
            <input type="text" placeholder="Description"  name="desription" >
            </div>
        <div class="submitb" ><a href="..\homepage\home.php"> <input onclick="" type ="submit" name="submit" value="Submit"> </a></div>
        
        <div class="clearf"><input type="reset" name="clear" value="Clear form"></div>
      
    </div>  
    </form>
    </body>
</html>
<!--

<?php  
 /*   
    if (isset($_POST['submit'])) 
    {
      $patname = $_POST['patname'];
      $symptom = $_POST['symptom'];
      $desription = $_POST['desription'];
      $mobile = $_POST['mobile'];
      $datetime = $_POST['datetime'];
      $query = "INSERT INTO `appointment`(`patname`, `Symptoms`, `description`, `mobile`,`datetime` ) VALUES ('$patname','$symptom','$description','$mobile' , '$datetime')";
      $res=mysqli_query($con,$insertquery);
      header("Location:../homepage/home.php");


  }
    */
  ?>

 -->