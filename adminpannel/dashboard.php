<?php
session_start();

if (!isset($_SESSION['aid'])) {
  header('location:index.php');
} else {
  $aid = $_SESSION['aid'];
  $name = $_SESSION['first_name'];
  $dp = $_SESSION['image'];
}


?>


<?php
include 'connection.php';

$query = "SELECT COUNT(*) As count FROM `contact`";
$query_result = mysqli_query($conn,$query);

while ($row=mysqli_fetch_assoc($query_result)) {
  $output = $row['count'];
}

 $query1 = "SELECT COUNT(*) AS count FROM `registration`";
 $query_result1 = mysqli_query($conn,$query1);

 while ($row1=mysqli_fetch_assoc($query_result1) ){
  $output1 = $row1['count'];
 } 

 $query2 = "SELECT COUNT(*) AS count FROM `client`";
 $query_result2 = mysqli_query($conn,$query2);

 while ($row1=mysqli_fetch_assoc($query_result2) ){
  $output2 = $row1['count'];
 } 

 $query3 = "SELECT COUNT(*) AS count FROM `product`";
 $query_result3 = mysqli_query($conn,$query3);

 while ($row1=mysqli_fetch_assoc($query_result3) ){
  $output3 = $row1['count'];
 }
 
 $query4 = "SELECT COUNT(*) AS count FROM `news`";
 $query_result4 = mysqli_query($conn,$query4);

 while ($row1=mysqli_fetch_assoc($query_result4) ){
  $output4 = $row1['count'];
 } 
 $query5 = "SELECT COUNT(*) AS count FROM `admin`";
 $query_result5 = mysqli_query($conn,$query5);

 while ($row1=mysqli_fetch_assoc($query_result5) ){
  $output5 = $row1['count'];
 } 
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
       
       <style>
            .abc
            {
                font-size: 30px;
                font-weight: bold;
                margin-left: 100px;
            }
            .abcd{
                margin-left: 100px;
            }
            .ab{
                font-size: 30px;
                font-weight: bold;
                margin-top: -20px;
                margin-left: 140px;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="./dashboard.php ">Caster Technical Services</a>
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
                        <li><a class="dropdown-item" href="./addadmin.php">Add Admin</a></li>
                        <li><a class="dropdown-item" href="./viewadmin.php">View Admin</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="./logout.php">Logout</a></li>
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
                            <a class="nav-link" href="./dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">User Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <!-- <a class="nav-link" href="./userrecord.php">User Records</a> -->
                                    <a class="nav-link" href="./usercontect.php">User Contect</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Client Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseclients" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Clients
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseclients" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="./addclients.php">Add Client</a>
                                    <a class="nav-link" href="./viewclients.php">View Client</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Product Iterface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseproduct" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Products
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseproduct" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="./addproduct.php">Add Products</a>
                                    <a class="nav-link" href="./viewproduct.php">View Products</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">News Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsenews" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                News Updates
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsenews" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="./addnews.php">Add News</a>
                                    <a class="nav-link" href="./viewnews.php">View News</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Logout Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapselogout" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Logout Interface
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapselogout" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="./logout.php">Logout</a>
                                    <!-- <a class="nav-link" href="./viewnews.php">View News</a> -->
                                </nav>
                            </div>
                          
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Caster Technical services
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <!-- 1 -->
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body abc">Users</div>
                                    <h4 class="ab"><?php echo "$output"; ?></h4>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link abcd" href="./userrecord.php">View Details</a>
                                        <div class="small text-white"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body abc">Contects</div>
                                    <h4 class="ab"><?php echo "$output1"; ?></h4>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link abcd" href="./usercontect.php">View Details</a>
                                        <div class="small text-white"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- 3 -->
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body abc">Clients</div>
                                    <h4 class="ab"><?php echo "$output2"; ?></h4>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link abcd" href="./viewclients.php">View Details</a>
                                        <div class="small text-white"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- 1 -->
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body abc">Products</div>
                                    <h4 class="ab"><?php echo "$output3"; ?></h4>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link abcd" href="./viewproduct.php">View Details</a>
                                        <div class="small text-white"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- 2 -->
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body abc">News</div>
                                    <h4 class="ab"><?php echo "$output4"; ?></h4>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link abcd" href="./viewnews.php">View Details</a>
                                        <div class="small text-white"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- 3 -->
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body abc">Admin</div>
                                    <h4 class="ab"><?php echo "$output5"; ?></h4>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link abcd" href="./viewadmin.php">View Details</a>
                                        <div class="small text-white"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                          
                          
                        
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
