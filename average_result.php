<!DOCTYPE html>
<html lang="en">

<!--   Tue, 07 Jan 2020 03:33:27 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title>Average result</title>

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
        <div class="main-sidebar sidebar-style-3">
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
                    <h1>Result</h1>
                </div>
                
                <div class="row">
                 <div class="col-12 col-sm-6 col-lg-12">
                   <div class="card-body">
                     <div class="row">
                       <div class="col-12 col-sm-5 col-md-2">
                         <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                            <li class="nav-item"><a class="nav-link " id="cse-tab" data-toggle="tab" href="#cse" role="tab" aria-controls="cse" aria-selected="true"></a></li>
                            <li class="nav-item"><a class="nav-link" id="etc-tab" data-toggle="tab" href="#etc" role="tab" aria-controls="etc" aria-selected="false">ECT</a></li>
                            <li class="nav-item"><a class="nav-link" id="electrical-tab" data-toggle="tab" href="#electrical" role="tab" aria-controls="electrical" aria-selected="false">ELECTRICAL</a></li>
                            <li class="nav-item"><a class="nav-link" id="mechanical-tab" data-toggle="tab" href="#mechanical" role="tab" aria-controls="mechanical" aria-selected="false">MECHANICAL</a></li>
                             <li class="nav-item"><a class="nav-link" id="civle-tab" data-toggle="tab" href="#civle" role="tab" aria-controls="civle" aria-selected="false">CIVLE</a></li>
                            <li class="nav-item"><a class="nav-link" id="mining-tab" data-toggle="tab" href="#mining" role="tab" aria-controls="mining" aria-selected="false">MINING</a></li>
                            
                         </ul>
                       </div>
                       <div class="col-12 col-sm-12 col-md-8">
                          <div class="tab-content " id="myTab2Content">
                            <div class="tab-pane fade show active" id="cse" role="tabpanel" aria-labelledby="cse">
                               <!--Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod-->
                            </div>
                            <div class="tab-pane fade" id="etc" role="tabpanel" aria-labelledby="etc">
                              Sed sed metus vel lacus hendrerit tempus. Sed efficitur velit tortor, ac efficitur est lobortis quis.                                             
                            </div>
                            <div class="tab-pane fade" id="electrical" role="tabpanel" aria-labelledby="electrical">
                               Vestibulum imperdiet odio sed neque ultricies, ut dapibus mi maximus. Proin ligula massa, gravida in lacinia efficitur, hendrerit eget mauris. 
                            </div>
                            <div class="tab-pane fade" id="mechanical" role="tabpanel" aria-labelledby="mechanical">
                               Lorem ipsum dolor sit amet, consectetur adip1222222222isicing elit, sed do eiusmod
                            </div>
                            <div class="tab-pane fade" id="civle" role="tabpanel" aria-labelledby="civle">
                              Sed sed metus vel lacus hendrerit tempus. 5445455555555Sed efficitur velit tortor, ac efficitur est lobortis quis.                                             
                            </div>
                            <div class="tab-pane fade" id="mining" role="tabpanel" aria-labelledby="mining">
                               Vestibulum imperdiet odio sed neque ultric777777777777777ies, ut dapibus mi maximus. Proin ligula massa, gravida in lacinia efficitur, hendrerit eget mauris. 
                            </div>
                          </div>
                        </div>
                      </div>
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