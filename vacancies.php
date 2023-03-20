<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstrap Css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--Meanmenu Css-->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!--Owl carousel-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!--Owl Theme-->
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!--Magnific-popup-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--Flaticon-->
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <!--Fontawesome-->
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">
        <!--Metismenu-->
        <link rel="stylesheet" href="assets/css/metismenu.min.css">
        <!--Simplebar-->
        <link rel="stylesheet" href="assets/css/simplebar.min.css">
        <!--Odometer-->
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <!--Aos css-->
        <link rel="stylesheet" href="assets/css/aos.css">
        <!--Style css-->
        <link rel="stylesheet" href="assets/css/style.css">
        <!--Dashboard css-->
        <link rel="stylesheet" href="assets/css/dashboard.css">
        <!--Dark css-->
        <link rel="stylesheet" href="assets/css/dark.css">
        <!--Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <title>Vacancies</title>
        <meta name="Vacancies" content="Siraj Manpower Service is a highly reputable consultancy in Sri Lanka, with a global reputation for providing expert guidance on foreign employment opportunities.">
        <link rel="icon" type="image/png" href="assets/images/favicon.png">
    </head>
    <body>

        <!-- Start: Preloader -->
        <?php include 'includes/preloader.php';?>
        <!-- End: Preloader -->

        <!--Start Top Header Area-->
        <?php include 'includes/top_header_area.php';?>
        <!--End Top Header Area-->

        <!-- Start Navbar Area --> 
        <div class="navbar-area">
        <!--Start Top Header Area-->
        <?php include 'includes/mobile-responsive-menu.php';?>
        <!--End Top Header Area-->

            <div class="desktop-nav">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <?php include 'includes/desktop-nav.php';?>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                <a href="home" class="nav-link">
                                    Home            
                                </a>
                                </li>
                                <li class="nav-item">
                                    <a href="vacancies" class="nav-link active">
                                        Vacancies            
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="aboutus" class="nav-link">
                                        About Us           
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="contact" class="nav-link">
                                        Contact Us            
                                    </a>
                                </li>
                                <li class="nav-item">
                                        <a href="blog" class="nav-link">
                                            Blog            
                                        </a>
                                </li>
                            </ul>

                            <div class="others-options">
                                <div class="option-item">
                                    <a href="login" class="default-btn btn"><i class="fa-regular fa-user"></i> Login</a>
                                </div>
                                <div class="option-item" hidden>
                                    <a href="post-job.html" class="default-btn btn">Post New Job</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options justify-content-center d-flex align-items-center">
                                <div class="others-options">
                                    <div class="option-item">
                                        <a href="login" class="default-btn btn"><i class="fa-regular fa-user"></i> Login</a>
                                    </div>
                                    <div class="option-item" hidden>
                                        <a href="post-job.html" class="default-btn btn">Post New Job</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!--Start Page Banner Area-->
        <div class="page-banner-area bg-f0f4fc">
            <div class="container">
                <div class="page-banner-content">
                    <h1>Job Listing</h1>
                    <ul>
                        <li><a href="home">Home</a></li>
                        <li>Vacancies</li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page Banner Area-->

        <!--Start Job Listing Area-->
        <div class="job-listing-area pt-100 pb-70">
            <div class="container">
                <div class="job-listing-search-form">
                    <form>
                        <div class="row g-0">
                            <div class="col-lg-3 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Keywords / Job Title">
                                    <i class="flaticon-portfolio"></i>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="form-group style">
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option selected>Chpoose A Country</option>
                                        <option value="1">Development</option>
                                        <option value="2">Information IT</option>
                                        <option value="3">Corporate Job</option>
                                      </select>
                                    <i class="flaticon-location"></i>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="form-group style">
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option selected>Chpoose A Category</option>
                                        <option value="1">Development</option>
                                        <option value="2">Information IT</option>
                                        <option value="3">Corporate Job</option>
                                      </select>
                                    <i class="flaticon-list"></i>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6">
                                <div class="search-btn">
                                    <button type="submit" class="default-btn btn">Find Jobs</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="job-listing-content">
                            <div class="search-job-top-content">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-4">
                                        <div class="shoing-content">
                                            <span>Showing 1 – 6 of 145 results</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-job-card">
                                        <div class="job-image">
                                            <a href="job-details.html"><img src="assets/images/vacancies/house-maid-kuwait.png" alt="Image"></a>
                                        </div>
                                        <div class="job-content">
                                            <span class="time">2 Years</span>
                                            <h2><a href="job-details.html">Housemaid - Experienced</a></h2>
                                            <div class="info">
                                                <ul>
                                                    <li><i class="flaticon-location"></i>KUWAIT</li>
                                                </ul>
                                            </div>
                                            <div class="bottom-content">
                                                <ul class="d-flex justify-content-between">
                                                    <li>
                                                        <div class="join-now">
                                                            <a href="apply" class="btn btn-primary btn-sm">Apply Now</a>
                                                        </div>
                                                    </li>
                                                    <li><h3>140 KD <span>/Month</span></h3></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-job-card">
                                        <div class="job-image">
                                            <a href="job-details.html"><img src="assets/images/vacancies/house-driver-kuwait.png" alt="Image"></a>
                                            <span class="urgent" style="background-color: red;">Urgent</span>
                                        </div>
                                        <div class="job-content">
                                            <span class="time">2 Years</span>
                                            <h2><a href="job-details.html">House Driver - Experienced</a></h2>
                                            <div class="info">
                                                <ul>
                                                    <li><i class="flaticon-location"></i>KUWAIT</li>
                                                </ul>
                                            </div>
                                            <div class="bottom-content">
                                                <ul class="d-flex justify-content-between">
                                                    <li>
                                                        <a href="apply" class="btn btn-primary btn-sm">Apply Now</a>
                                                    </li>
                                                    <li><h3>160 KD <span>/Month</span></h3></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-job-card">
                                        <div class="job-image">
                                            <a href="job-details.html"><img src="assets/images/vacancies/house-maid-kuwait-1st-time.png" alt="Image"></a>
                                        </div>
                                        <div class="job-content">
                                            <span class="time">2 Years</span>
                                            <h2><a href="job-details.html">Housemaid - First Time</a></h2>
                                            <div class="info">
                                                <ul>
                                                    <li><i class="flaticon-location"></i>KUWAIT</li>
                                                </ul>
                                            </div>
                                            <div class="bottom-content">
                                                <ul class="d-flex justify-content-between">
                                                    <li>
                                                        <a href="apply" class="btn btn-primary btn-sm">Apply Now</a>
                                                    </li>
                                                    <li><h3>130 SAR <span>/Month</span></h3></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-job-card">
                                        <div class="job-image">
                                            <a href="job-details.html"><img src="assets/images/vacancies/house-boy-saudi.png" alt="Image"></a>
                                        </div>
                                        <div class="job-content">
                                            <span class="time">2 Years</span>
                                            <h2><a href="job-details.html">House Boy - Experienced</a></h2>
                                            <div class="info">
                                                <ul>
                                                    <li><i class="flaticon-location"></i>SAUDI</li>
                                                </ul>
                                            </div>
                                            <div class="bottom-content">
                                                <ul class="d-flex justify-content-between">
                                                    <li>
                                                        <a href="apply" class="btn btn-primary btn-sm">Apply Now</a>
                                                    </li>
                                                    <li><h3>120 KD <span>/Month</span></h3></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-job-card">
                                        <div class="job-image">
                                            <a href="job-details.html"><img src="assets/images/vacancies/caregiver-female-uae.png" alt="Image"></a>
                                            <a href="#"><div class="bookmark">
                                                <i class="flaticon-bookmark"></i>
                                            </div></a>
                                        </div>
                                        <div class="job-content">
                                            <span class="time">2 Years</span>
                                            <h2><a href="job-details.html">Caregiver - Female</a></h2>
                                            <div class="info">
                                                <ul>
                                                    <li><i class="flaticon-location"></i>UAE</li>
                                                </ul>
                                            </div>
                                            <div class="bottom-content">
                                                <ul class="d-flex justify-content-between">
                                                    <li>
                                                        <a href="apply" class="btn btn-primary btn-sm">Apply Now</a>
                                                    </li>
                                                    <li><h3>1800 AED <span>/Month</span></h3></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="single-job-card">
                                        <div class="job-image">
                                            <a href="job-details.html"><img src="assets/images/vacancies/tailor-malaysia-female.png" alt="Image"></a>
                                            <a href="#"><div class="bookmark">
                                                <i class="flaticon-bookmark"></i>
                                            </div></a>
                                        </div>
                                        <div class="job-content">
                                            <span class="time">2 Years</span>
                                            <h2><a href="job-details.html">Tailor (Garment) - Female</a></h2>
                                            <div class="info">
                                                <ul>
                                                    <li><i class="flaticon-location"></i>Malaysia</li>
                                                </ul>
                                            </div>
                                            <div class="bottom-content">
                                                <ul class="d-flex justify-content-between">
                                                    <li>
                                                        <a href="apply" class="btn btn-primary btn-sm">Apply Now</a>
                                                    </li>
                                                    <li><h3>2000 RM <span>/Month</span></h3></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="paginations mb-30">
                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                                    <li><a class="active" href="job-listing.html">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" hidden>
                        <div class="sidebar">
                            <div class="single-sidebar-widget job-alert">
                                <h3>Create Job Alert</h3>
                                <p>Create a job alert now and never miss any job update.</p>
                                <form>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Keywords / Job Title">
                                    </div>
                                    <button type="submit" class="default-btn btn">Create Job Alert</button>
                                </form>
                            </div>
                            <div class="single-sidebar-widget range">
                                <h3>Type of Employment</h3>
                                <ul>
                                    <li><a href="post-job.html">Full Time Jobs <span>10</span></a></li>
                                    <li><a href="post-job.html">Part Time Jobs <span>23</span></a></li>
                                    <li><a href="post-job.html">Remote Jobs <span>14</span></a></li>
                                    <li><a href="post-job.html">Internship <span>33</span></a></li>
                                    <li><a href="post-job.html">Contract <span>56</span></a></li>
                                </ul>
                            </div>
                            <div class="single-sidebar-widget range">
                                <h3>Seniority Level</h3>
                                <ul>
                                    <li><a href="post-job.html">Student Level <span>10</span></a></li>
                                    <li><a href="post-job.html">Entry Level <span>23</span></a></li>
                                    <li><a href="post-job.html">Mid Level <span>14</span></a></li>
                                    <li><a href="post-job.html">Senior level <span>33</span></a></li>
                                    <li><a href="post-job.html">Directors <span>56</span></a></li>
                                </ul>
                            </div>
                            <div class="single-sidebar-widget range">
                                <h3>Salary Range</h3>
                                <ul>
                                    <li><a href="post-job.html">$1200 - $1400 <span>10</span></a></li>
                                    <li><a href="post-job.html">$400 - $600 <span>23</span></a></li>
                                    <li><a href="post-job.html">$1000 - $1200 <span>14</span></a></li>
                                    <li><a href="post-job.html">$800 - $1000 <span>33</span></a></li>
                                    <li><a href="post-job.html">$600 - $800 <span>56</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Job Listing Area-->

        <!--Start Footer Area-->
        <?php include 'includes/footer.php';?>
        <!--End Footer Area-->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class="fa-solid fa-arrow-up-long"></i>
            <i class="fa-solid fa-arrow-up-long"></i>
        </div>
        <!-- End Go Top Area -->

        <!-- Jquery js -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap bundle js -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Meanmenu js -->
        <script src="assets/js/jquery.meanmenu.js"></script>
        <!-- Owl Carousel js -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Owl Carousel Thumbs js -->
        <script src="assets/js/carousel-thumbs.min.js"></script>
        <!-- Magnific popup js -->
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <!-- Aos js -->
        <script src="assets/js/aos.js"></script>
        <!-- Mixitup js -->
        <script src="assets/js/mixitup.min.js"></script>
        <!-- Scrollmagic js -->
        <script src="assets/js/scrollmagic.min.js"></script>
        <!-- Gsap js -->
        <script src="assets/js/animation.gsap.min.js"></script>
        <!-- Debug js -->
        <script src="assets/js/debug.addIndicators.min.js"></script>
        <!-- Tweenmax js -->
        <script src="assets/js/tweenmax.min.js"></script>
        <!--Progresscircle-->
        <script src="assets/js/progresscircle.min.js"></script>
        <!--UI JS-->
        <script src="assets/js/jquery-ui.min.js"></script>
        <!--Simplebar Js-->
        <script src="assets/js/simplebar.min.js"></script>
        <!--Metismenu Js-->
        <script src="assets/js/metismenu.min.js"></script>
        <!-- Odometer js -->    
        <script src="assets/js/odometer.min.js"></script>
        <!-- Appear js -->  
        <script src="assets/js/appear.min.js"></script> 
        <!-- Form Validator js -->    
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact Form Script js -->    
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Ajaxchimp js -->    
        <script src="assets/js/ajaxchimp.min.js"></script>
        <!--Custom js-->
        <script src="assets/js/custom.js"></script>
    </body>
</html>