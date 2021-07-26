<?php 
	session_start();
	include("connect.php");

  if(isset($_POST['b1']))
  {
        $username = $_POST['t1'];  
        $password = $_POST['t2']; 
        // $submit = $_POST['b1'];
     
    
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from ainfo where uname = '$username' and upass = '$password'"; 
        
        $result = mysqli_query($conn, $sql); 
        $row = mysqli_fetch_array($result);  
          
        if($row > 0){
               
        
            echo "<h1><center> Login successful </center></h1>";
            header("location:admin_home.php"); 
            exit(); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }      
    }

            if(isset($_GET['todo']) && $_GET['todo']=="logout")
            	{
          			@session_destroy();
          	} 
            


  
?>




<!DOCTYPE html>
<html lang="en">
<head>

     <title>Computer Lab E-Administrtion</title>
<!-- 

Get Ready Template

https://templatemo.com/tm-521-get-ready

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/vegas.min.css">
     <link rel="stylesheet" href="../css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../css/templatemo-style.css">

     <!-- Bootstrap 2 -->
     <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>

     <!-- HOME -->
     <section id="home">
        <div class="overlay"></div>
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="home-info">
                         <div class="card-header"><h3 class="text-center font-weight-heavy my-10" style="font-size: 30px;">Admin Login</h3></div>
                         <div class="">
                                    <form id="form1" name="form1" method="POST" action="" class="border border-info p-5">
                                            <div class="form-floating lg">
                                                <input class="form-control" id="inputEmail" type="text" placeholder="username" name="t1" style="width: 300px; font-size: 20px;" />
                                                <label for="inputUsername">Username</label>
                                            </div>
                                            <br>
                                            <div class="form-floating lg">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="t2" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <br>
                                            <div class="form-check lg-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword" style="font-size: 20px;">Remember Password</label>
                                            </div>
                                            <br>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="user_login.php" style="font-size: 15px;">Instructor/Student/HOD Login</a>
                                                <!-- <button class="btn btn-primary btn-block" name="b1" >Log in</button> -->
                                                
                                                <label>
                                                <input type="submit" name="b1" id="button" value="Login" style="width: 80px; font-size: 15px;" />
                                                </label>
                                                
                                                

                                            </div>
                                        </form>
                                    </div>
                               
                        </div>
                    </div>
                </div>

            </div>
        </div>
     </section>

     <!-- SCRIPTS -->
     <script src="../js/jquery.js"></script>
     <script src="../js/bootstrap.min.js"></script>
     <script src="../js/vegas.min.js"></script>
     <script src="../js/countdown.js"></script>
     <script src="../js/init.js"></script>
     <script src="../js/custom.js"></script>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>

</body>
</html>