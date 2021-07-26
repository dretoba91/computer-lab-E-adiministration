<?php

  if(!isset($_SESSION['user'])  && $username == "")
  	{
		header("location:user_login.php");
		exit();
	}else{
			echo  "Welcome ". $username;
			echo "<br>";
			echo  date("Y-m-d");
			if(isset($_REQUEST['user_login']))
						{
						header("location: timetable.php");
				 exit();
				 }
			
				 
				 
				if(isset($_REQUEST['b2']))
						{
						header("location: reply.php");
				exit();
				}
				if(isset($_REQUEST['lab_detail']))
						{
						header("location: lab_details.php");
				exit();
				}if(isset($_REQUEST['b4']))
						{
						header("location: makeReport.php");
				exit();
				}
				if(isset($_REQUEST['b5']))
						{
						header("location:user.php");
				exit();
				}


				if(isset($_REQUEST['b6']))
						{
						header("location: software_install.php");
				exit();
				}

				if(isset($_REQUEST['b7']))
						{
						header("location: hod_feedback.php");
				exit();
				}
        }        
 ?>              
          