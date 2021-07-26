<?php

  if(!isset($_SESSION['aid'])  && $username == "")
  	{
		header("location:index.php");
		exit();
	}else{
			echo  "Welcome ". $username;
			echo "<br>";
			echo  date("Y-m-d");
			if(isset($_REQUEST['b1']))
						{
						header("location: atimetable.php");
				 exit();
				 }
			
				 
				 
				if(isset($_REQUEST['b2']))
						{
						header("location: aupdatenews.php");
				exit();
				}
				if(isset($_REQUEST['b3']))
						{
						header("location: alab_details.php");
				exit();
				}if(isset($_REQUEST['b4']))
						{
						header("location:afeedback.php");
				exit();
				}
				if(isset($_REQUEST['b5']))
						{
						header("location:user.php");
				exit();
				}


				if(isset($_REQUEST['b6']))
						{
						header("location: asoftware_install.php");
				exit();
				}
        }        
 ?>              
          