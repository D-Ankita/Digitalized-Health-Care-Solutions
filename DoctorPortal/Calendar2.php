<?php include "connect.php"?>

<?php include "links.php"?>
<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Epilogue' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Rye' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="https://material.io/resources/icons/?icon=dashboard&style=baseline">
	<link href='https://fonts.googleapis.com/css?family=Old Standard TT' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="Dashboard.css">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">


</head>
<body>
	<div class="header">
		<img src="logo1.jpg">
		<h2>PHOENIX</h2>
		<h6>multispeciality hospital</h6>
		<hr>
	</div>

	<div class="navbar">
		<ul>
			<li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
			<li><a href="#">About us</a></li>
			<li><a href="#">Contact us</a></li>
		</ul>
	</div>

	<div class="sidebar">
		<ul>
			<li class="active"><a class="active" href="Dashboard.php"><svg class=
			"active" width="35" height="35" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0 10.7143H11.1429V0H0V10.7143ZM3.71429 3.57143H7.42857V7.14286H3.71429V3.57143ZM14.8571 0V10.7143H26V0H14.8571ZM22.2857 7.14286H18.5714V3.57143H22.2857V7.14286ZM0 25H11.1429V14.2857H0V25ZM3.71429 17.8571H7.42857V21.4286H3.71429V17.8571ZM24.1429 14.2857H26V21.4286H20.4286V19.6429H18.5714V25H14.8571V14.2857H20.4286V16.0714H24.1429V14.2857ZM24.1429 23.2143H26V25H24.1429V23.2143ZM20.4286 23.2143H22.2857V25H20.4286V23.2143Z" fill="white
"/>
</svg>
Dashboard</a></li><br>
			<li><a href="Patients.php"><svg width="35" height="35" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.5 12.5001C14.5387 12.5001 17 9.7405 17 6.33341C17 2.92633 14.5387 0.166748 11.5 0.166748C8.46125 0.166748 6 2.92633 6 6.33341C6 9.7405 8.46125 12.5001 11.5 12.5001ZM11.5 15.5834C7.82875 15.5834 0.5 17.6492 0.5 21.7501V24.8334H22.5V21.7501C22.5 17.6492 15.1713 15.5834 11.5 15.5834Z" fill="white"/>
</svg>
Patients</a></li><br>
			<li><a href="History.php"><svg width="35" height="35" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21.3125 11.603C21.3234 18.008 16.5352 23.2455 10.664 23.25C8.12818 23.2519 5.79893 22.2876 3.96851 20.676C3.49254 20.2569 3.45696 19.4788 3.88949 19.0069L4.37362 18.4788C4.74354 18.0752 5.3341 18.0311 5.74393 18.3858C7.09251 19.5532 8.79918 20.25 10.6562 20.25C15.0264 20.25 18.5625 16.3917 18.5625 11.625C18.5625 6.85758 15.0257 3 10.6562 3C8.55877 3 6.65375 3.88917 5.23927 5.34056L7.4201 7.71966C7.85323 8.19216 7.54647 9 6.934 9H0.6875C0.307785 9 0 8.66423 0 8.25V1.43564C0 0.767484 0.740523 0.432844 1.17365 0.905297L3.2951 3.21961C5.2082 1.22512 7.80106 0 10.6562 0C16.5348 0 21.3016 5.19281 21.3125 11.603ZM13.5389 15.296L13.961 14.704C14.3107 14.2135 14.2297 13.5067 13.7801 13.1253L12.0312 11.6414V6.75C12.0312 6.12867 11.5696 5.625 11 5.625H10.3125C9.74295 5.625 9.28125 6.12867 9.28125 6.75V13.1086L12.0918 15.4934C12.5414 15.8748 13.1893 15.7865 13.5389 15.296Z" fill="white"/>
</svg>
History</a></li><br>
			<li><a href="Settings.php"><svg width="35" height="35" viewBox="0 0 29 27" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M25.5076 14.7871C25.5631 14.3745 25.6001 13.9456 25.6001 13.5001C25.6001 13.0546 25.5631 12.6256 25.4891 12.2131L28.6156 10.0351C28.8931 9.83705 28.9671 9.47405 28.8006 9.19355L25.8406 4.62305C25.6556 4.32605 25.2671 4.22705 24.9341 4.32605L21.2526 5.64605C20.4756 5.11805 19.6616 4.68905 18.7551 4.35905L18.2001 0.861049C18.1446 0.531049 17.8301 0.300049 17.4601 0.300049H11.5401C11.1701 0.300049 10.8741 0.531049 10.8186 0.861049L10.2636 4.35905C9.35706 4.68905 8.52456 5.13455 7.76606 5.64605L4.08456 4.32605C3.75156 4.21055 3.36306 4.32605 3.17806 4.62305L0.218063 9.19355C0.0330626 9.49055 0.107063 9.83705 0.403063 10.0351L3.52956 12.2131C3.45556 12.6256 3.40006 13.0711 3.40006 13.5001C3.40006 13.9291 3.43706 14.3745 3.51106 14.7871L0.384562 16.9651C0.107062 17.1631 0.0330626 17.5261 0.199563 17.8066L3.15956 22.3771C3.34456 22.6741 3.73306 22.7731 4.06606 22.6741L7.74756 21.3541C8.52456 21.8821 9.33856 22.3111 10.2451 22.6411L10.8001 26.1391C10.8741 26.4691 11.1701 26.7001 11.5401 26.7001H17.4601C17.8301 26.7001 18.1446 26.4691 18.1816 26.1391L18.7366 22.6411C19.6431 22.3111 20.4756 21.8656 21.2341 21.3541L24.9156 22.6741C25.2486 22.7896 25.6371 22.6741 25.8221 22.3771L28.7821 17.8066C28.9671 17.5096 28.8931 17.1631 28.5971 16.9651L25.5076 14.7871ZM14.5001 18.4501C11.4476 18.4501 8.95006 16.2226 8.95006 13.5001C8.95006 10.7776 11.4476 8.55005 14.5001 8.55005C17.5526 8.55005 20.0501 10.7776 20.0501 13.5001C20.0501 16.2226 17.5526 18.4501 14.5001 18.4501Z" fill="#fff"/>
</svg>
Settings</a></li><br>
			<li><a href="Calendar.php"><svg width="35" height="35" viewBox="0 0 30 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M27 3.25008H25.5V0.416748H22.5V3.25008H7.5V0.416748H4.5V3.25008H3C1.35 3.25008 0 4.52508 0 6.08341V28.7501C0 30.3084 1.35 31.5834 3 31.5834H27C28.65 31.5834 30 30.3084 30 28.7501V6.08341C30 4.52508 28.65 3.25008 27 3.25008ZM27 28.7501H3V10.3334H27V28.7501Z" fill="#fff"/>
</svg>
Calendar</a></li>
		</ul>
</div>
<div style="position: absolute;width: 791px;height: 659px;left: 148px;top: 275px;border: 10px;">
	div class="container">
            <div class="imagebg"></div>
            <a class="hiddenanchor" id="toviewtask"></a>
            <a class="hiddenanchor" id="tocreateplan"></a>
<!------------------------------------------------------------------------------------------------------------------------------------>
<!---------------------------------------------------LOGIN FORM START----------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------------>

                    <div id="createplan" class="col-md-6 col-md-offset-3 form-container animate"  style="margin-top: 150px; margin-bottom: 50px">
                       
                        <form role="form" method="POST" id="reused_form" style="margin-top: 20px;padding-top: 20px;">
                            
                                <div class="col-sm-6 form-group">
                                    <label for="Date">
                                        Date:</label>
                                    <input type="date" class="form-control" id="date" name="date" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="time">
                                        Time:</label>
                                    <input type="time" class="form-control" id="time" name="time" required>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label for="task">
                                        Task:</label>
                                    <input type="text" class="form-control" id="task" name="task" required>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <button type="submit" name="submit" value="submit" class="btn btn-lg btn-warning btn-block"  >Task Planned </button>
                                </div>
                                
                          <div>
                                    <a href="#toviewtask" style="text-align: right"> My Schedule </a>
                        </div>  
                        </form>
                        

                        <?php 

						if (isset($_POST['submit'])){
							$date = $_POST['date'];
							$time = $_POST['time'];
							$task = $_POST['task'];

							$insertquery = "INSERT INTO `scheduleupdate`(`Date`, `Time`, `Task`) VALUES ('$date','$time','$task')";
							$res= mysqli_query($con,$insertquery);
							if($res){ 
						?>
									<script>
										alert("Data Inserted Properly");
									</script>
						<?php
									}else{
						?>
											<script>
												alert("Data NOT Inserted Properly");
											</script>
											<?php
										}}
									?>  

                    </div>
              
<!------------------------------------------------------------------------------------------------------------------------------------>
<!-----------------------------------------------------LOGIN FORM END----------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------------>


<!------------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------FEEDBACK FORM START----------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------------>            
          
               
                    <div id="viewtask"  class="col-md-6 col-md-offset-3 form-container animate"  style="margin-top: -400px; margin-bottom: 50px">
                        <div>
                        <h2>My Schedule</h2> 
                        <table >
                        	<thead>
                        		<tr>
                                  
                        			<th class="th" style="padding: 18px 30px;text-align: center;width: 33.3%;float: left;font-style: bold;">Date</th>
                        			<th class="th"style="padding: 18px 30px;text-align: center;width: 33.3%;float: left;">Time </th>
                        			<th class="th"style="padding: 18px 30px;text-align: center;max-width: 33.3%;float: left;">Task</th>
                                    
                        		</tr>
                        	</thead>
                        	<tbody>

							<?php			
								$selectquery = " SELECT  `Sr.No`, `Date`, `Time`, `Task` FROM `scheduleupdate` ";
		 						$query = mysqli_query($con,$selectquery);
		 						$nums = mysqli_num_rows($query);
		 						while ( $res=mysqli_fetch_array($query))
		 						{

		 					?>
                            
		 						<tr >
		                         	<td class="td" style="padding: 8px 30px;text-align: center;width: 33.3%;float: left;"><?php echo $res['Date']; ?> </td>
		                         	<td class="td" style="padding: 8px 30px;text-align: center;width: 33.3%;float: left;"><?php echo $res['Time']; ?></td>
		                         	<td class="td" style="padding: 8px 30px;text-align: center;width: 33.3%;float: left;"><?php echo $res['Task']; ?></td>
		                         </tr>
		 					<?php		
		 							
		 						} ;	
							?>



		                        
		                     </tbody>
		                 </table> 
                                  <div  style="margin-right: : 350px;padding-bottom: 10px;margin-bottom: 10px;margin-top: 10px;">
                                    <a href="#tocreateplan" name="plan" > Go and Plan the Day </a>
                                </div>                         
                    </div>
                 </div>
                 </div>

</div>






<script type="text/javascript">
    (function(d, m){
        var kommunicateSettings = 
            {"appId":"10400e35cd18f20ff4eac4bce4f7f1ceb","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>
</body>

</html>
10400e35cd18f20ff4eac4bce4f7f1ceb