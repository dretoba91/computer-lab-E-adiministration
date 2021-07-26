<?php
	session_start();
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
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
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
                            <div class="sb-sidenav-menu-heading">Admin Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Lab Information
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                

                                <nav class="sb-sidenav-menu-nested nav">
                                <form name="asd" action="?" method="post" class="" >
                                <table width="60%" border="0" align="center" class="table table-striped table-dark" >
                                <tr>
                                    <td><label>
                                    <input type="submit" name="b1" value="Set Time Table">
                                    </label></td>
                                </tr>
                                <!-- <tr>
                                    <td><input type="submit" name="b2" value="News Update"></td>
                                </tr> -->
                                <tr>
                                    <td><input type="submit" name="b3" value="Check Lab Items"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="b4" value="Check Feedback"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="b5" value="Users"></td>
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
                                <tr>
                                    <td><label>
                                    <input type="submit" name="b6" value="Software Installation">
                                    </label></td>
                                </tr>
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
                    <div class="row">
					<div class="col-sm-offset-7 col-sm-10">
						<h2 style="text-align: center">Calendar</h2>
						<div class="card-body">
                        <?php
                            $days_count = date('t');
                            $current_day = date('d');
                            $week_day_first = date('N', mktime(0, 0, 0, date('m'), 1, date('Y')));
                            ?>
                            
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th>MO</th>
                                    <th>TU</th>
                                    <th>WE</th>
                                    <th>TH</th>
                                    <th>FR</th>
                                    <th style="color: red;">SU</th>
                                    <th style="color: red;">SA</th>
                                </tr>
                                <?php for ($w = 1 - $week_day_first + 1; $w <= $days_count; $w = $w + 7): ?>
                                    <tr>
                                        <?php $counter = 0; ?>
                                        <?php for ($d = $w; $d <= $w + 6; $d++): ?>
                                            <td style="<?php if ($counter > 4): ?>color: red;<?php endif; ?><?php if ($current_day == $d): ?>background-color:yellow; color:green;font-weight:bold;<?php endif; ?>">
                                                <?php echo($d > 0 ? ($d > $days_count ? '' : $d) : '') ?>
                                            </td>
                                            <?php $counter++; ?>
                                        <?php endfor; ?>
                                    </tr>
                                <?php endfor; ?>
                            </table>
                        </div>
					</div>
                    </div>   
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <!-- <div class="text-muted">Copyright &copy; Your Website 2021</div> -->
                            <div>
                                <!-- <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a> -->
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>

        

    </body>
</html>

