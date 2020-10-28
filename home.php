<!DOCTYPE html>
<html lang="en">

<!--   Tue, 07 Jan 2020 03:33:27 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>OSE Admin</title>

<!-- General CSS Files -->
<link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

<!-- CSS Libraries -->
<link rel="stylesheet" href="assets/modules/jqvmap/dist/jqvmap.min.css">
<link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
<link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

<!-- Template CSS -->
<link rel="stylesheet" href="assets/css/style.min.css">
<link rel="stylesheet" href="assets/css/components.min.css">

</head>
<body class="layout-4">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        
        <!-- Start app top navbar -->
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
                <div class="search-element">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                    <div class="search-backdrop"></div>
                                    </div>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">Hi, Michelle Green</div></a>
                    <div class="dropdown-menu dropdown-me 1nu-right">
                        <div class="dropdown-title">Logged in 5 min ago</div>
                        <a href="features-profile.html" class="dropdown-item has-icon"><i class="far fa-user"></i> Profile</a>
                        <a href="features-activities.html" class="dropdown-item has-icon"><i class="fas fa-bolt"></i> Activities</a>
                        <a href="features-settings.html" class="dropdown-item has-icon"><i class="fas fa-cog"></i> Settings</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Start main left sidebar menu -->
        <div class="main-sidebar sidebar-style-3 ">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="#">OSE</a>
                </div>
               
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <li class="dropdown active">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                        
                       
                    </li>
                    <li class="menu-header">Master-Admin</li>
                    
                   
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Master-Admin</span></a>
                        <ul class="dropdown-menu">
                           
                            <li><a href="#">Select dept</a></li>
                            <li><a href="average_result.php">Dept Average result</a></li>
                           
                           </ul>
                    </li>
                    <li class="menu-header">Admin</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Admin</span></a>
                        <ul class="dropdown-menu">
                           
                            
                            <li><a href="#">Select semister</a></li>
                            <li><a href="#">Faculty-data</a></li>
                            <li><a href="#">Student-data</a></li>
                            <li><a href="#">Exam result</a></li>
                        </ul>
                    </li>

                     <li class="menu-header">Faculty</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Faculty</span></a>
                        <ul class="dropdown-menu">
                             
                            
                            <li><a href="#">Select semister</a></li>
                            <li><a href="#">Insert Questions</a></li>
                            <li><a href="#">Update Questions</a></li>
                            <li><a href="#">Select students</a></li>
                            <li><a href="#">Exam result</a></li>
                        </ul>
                    </li>

                    <li class="menu-header">User</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-map-marker-alt"></i> <span>User</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="register.php">Register</a></li> 
                            <li><a href="login.php">Login</a></li>
                            <li><a href="forgot-password.php">Forgot Password</a></li>
                            <li><a href="reset-password.php">Reset Password</a></li>   
                           <li><a href="#">Slect semister</a></li>
                           <li><a href="#">MCQ</a></li>
                           <li><a href="#">View result</a></li>
                        </ul>
                    </li>
              
            </section>
        </div>

        
     <div class="main-content">
            <section class="section">
                 <div class="section-header">
                    <h1>Dashboard</h1>
                </div>
                <div class="section-body">
                   
                    <div class="card">
                        <div class="card-header">
                            <h4>Onile Examination</h4>
                        </div>
                        <div class="card-body">
                            <p>Technological advancements in this era of digitization along with being a boon to the world have been advantageous to the educational sector too. The introduction of online exam software replaced the conventional system of assessment.</p><p>
                            The various examination conducting agencies are now able to evaluate the test takers freely and cost-effectively through computer-based tests. Today’s article discusses the current scope and objectives of an online examination system also with future.</p><p>
                            Before proceeding further let us understand the concept of online examination software. Exam software allows users to take online tests and automatically generate results based on the answers marked by the users.</p>
                        </div>
                        
                    </div>
                </div>    
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-primary">
                            
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Admin</h4>
                                </div>
                                <div class="card-body">
                                    00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-danger">
                        
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Faculty</h4>
                                </div>
                                <div class="card-body">
                                    00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-warning">
                            
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Student</h4>
                                </div>
                                <div class="card-body">
                                    00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-success">
                                
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Online Users</h4>
                                </div>
                                <div class="card-body">
                                    47
                                </div>
                            </div>
                        </div>
                    </div>                  
                </div>
       

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-light">
                        
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Exams Conducted</h4>
                                </div>
                                <div class="card-body">
                                    00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-info">
                    
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Average Result</h4>
                                </div>
                                <div class="card-body">
                                    00
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-secondary">
                               <!-- <i class="far fa-file"></i>-->
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Reports</h4>
                                </div>
                                <div class="card-body">
                                    1,201
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="card card-statistic-1">
                            <div class="card-icon bg-dark">
                    
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Online Users</h4>
                                </div>
                                <div class="card-body">
                                    47
                                </div>
                            </div>
                        </div>
                    </div>                  
                </div>
       
        
        <!-- Start app Footer part -->
        <footer class="main-footer">
            <div class="footer-left">
                 <div class="bullet"></div>  <a href="templateshub.net">end</a>
            </div>
            <div class="footer-right">
            
            </div>
        </footer>
    </div>
</div>

<!-- General JS Scripts -->
<script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="js/CodiePie.js"></script>

<!-- JS Libraies -->
<script src="assets/modules/jquery.sparkline.min.js"></script>
<script src="assets/modules/chart.min.js"></script>
<script src="assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<script src="assets/modules/summernote/summernote-bs4.js"></script>
<script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<!-- Page Specific JS File -->
<script src="js/page/index.js"></script>

<!-- Template JS File -->
<script src="js/scripts.js"></script>
<script src="js/custom.js"></script>
</body>

<!--   Tue, 07 Jan 2020 03:35:12 GMT -->
</html>