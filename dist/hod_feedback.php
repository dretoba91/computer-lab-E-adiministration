<?php 

    include("connect.php");
    include("aheader.php");
?>



 


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>E-Admin Computer Lab</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="popup.css">
    </head>
    <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Lab E-Administration</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="index.php?todo=logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="admin_home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Lab Information
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                

                                <nav class="sb-sidenav-menu-nested nav">
                                <form name="asd" action="?" method="post" class="" >
                                <table width="60%" border="0" align="center" class="table table-striped table-dark" >
                                <!-- <tr>
                                    <td><label>
                                    <input type="submit" name="user_login" value="Check Time Table">
                                    </label></td>
                                </tr> -->
                                <!-- <tr>
                                    <td><input type="submit" name="b2" value="News Update"></td>
                                </tr> -->
                                <tr>
                                    <td><input type="submit" name="b7" value="Check Report"></td>
                                </tr>
                                
                                
                                </table>

                                </form>		
                                
                                </nav>


                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                E-Learning
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Facilities
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                        <form name="asd" action="?" method="post" class="" >
                                <table width="60%" border="0" align="center" class="table table-striped table-dark" >
                                <!-- <tr>
                                    <td><label>
                                    <input type="submit" name="b6" value="Software Installation">
                                    </label></td>
                                </tr> -->
                                <!-- <tr>
                                    <td><input type="submit" name="b2" value="News Update"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="b3" value="Check Lab Items"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="b4" value="Check Feedback"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="b5" value="Users"></td>
                                </tr> -->

                                
                                </table>

                                </form>
                                        </nav>
                                    </div>
                                    <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a> -->
                                    <!-- <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div> -->
                                </nav>
                            </div>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <!-- <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                            	
                        </div>
                    </div> -->
                    <!-- <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div> -->
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Lab Details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Lab Details</li>
                        </ol>
                        <div>
                        <form name="memlogin" method="post" action="?" class="row justify-content-center">

                        <?php
                                        // include("connect.php");
                                        // $q =  mysql_query("select * from flabitems");
                                        // $num = mysql_num_rows($q);
                                        // if($num)
                                        // {
                                        //     while($row = mysql_fetch_array($q))
                                                // { 
                                    
                                        $sql = "SELECT * FROM feedback";
                                        
                                        // To execute the select the query
                                        if(!($selectedResult = mysqli_query($conn, $sql))) {
                                            echo "Retrieval of Datas failed";
                                        } else {
                                            

                            ?>
                        <table width = "600" border = "0" cellspacing = "1" cellpadding = "2" class="table table-striped table-bordered">
                          <thead>
                          <tr bgcolor="#CCCCCC" align="center">

                            <th>S.No</th>
    
                            <th>Name</th>
                            <th>Report/Complaint</th>
                            <th>Department</th>
                                
                            </tr>

                          </thead>
                          

                          <tbody>

                          <?php 

                              if(mysqli_num_rows($selectedResult) == 0) {
                                  echo '<tr><td colspan="8">No Rows Returned</td></tr>';
                              } else {
                                  
                                  while ($row = mysqli_fetch_assoc($selectedResult)) {
                                      echo "<tr>";
                                      echo "<td>{$row['fid']}</td>";
                                      echo "<td>{$row['uname']}</td>";
                                      echo "<td>{$row['comment']}</td>";
                                      echo "<td>{$row['departments']}</td>";
                                    //   echo '<td style="width: 5%"><input type="button" value="Reply" name="Submit" href="areply.php?=' . $row['fid'] . '></td>';
                                    // echo '<td style="width: 5%"><button><a href="areply.php?id=' . $row['fid'] . '">Reply</a></button></td>';
                                    
                                    //   echo "<b><a href="readphp.php?id={$row['employee_id']}">{$row['employee_name']}</a></b>";
                            
                                      echo "</tr>";
                                            
                                            
                                            
                                            
                                            
                                  }
                              }

                          ?>
                          <?php 
                            }
                          ?>  


                                



                            </table>

                            </form>

                            <a href="hod_home.php" class="head4">
                                <input name="Submit" type="button" value="Back"></a>
                        </div>   
                    </div>

                    <div class="right-sidebar user-side">
            <div class="sidebar-form">
                <div class="container-fluid">
                <div class="form-popup" id="myForm">

                <?php 

                            if(isset($_POST['reply'])) {
                                $comment_id = $_POST['c_fid'];
                                $mem_name = $_POST['c_name'];
                                $comment = $_POST['c_comment'];
                                $department = $_POST['department'];


                                $result = "INSERT INTO reply (fid, uname, comment, departments) VALUES ('$comment_id', '$mem_name', '$comment', $department)";

                                if(!mysqli_query($conn, $result)) {
                                    echo "Data not inserted";
                                } else {
                                    echo "Data inserted";
                                }
                            }

                    ?>
               
                    <form action="<?php $_PHP_SELF ?>" class="form-container" method="post">
                    <h4 class="alert bg-success">Reply reports</h4>

                    <label>Report Reply</label>
                    <br>
                    <textarea></textarea>
                        <br>
                        <br>
                        <button type="submit" class="btn" name="save">Reply</button>
                        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                    </form>
                </div>    
                </div>
            </div>
        </div>

                </main>
                <footer class="py-4 bg-light mt-auto">
                    <!-- <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div> -->
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="assets/demo/chart-pie-demo.js"></script>
        <script>
            function openForm() {
            document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
            document.getElementById("myForm").style.display = "none";
            }
        </script>
    </body>
</html>