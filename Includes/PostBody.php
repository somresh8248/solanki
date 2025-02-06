<?php
// Include the database connection
include("Includes/Connection.php");
date_default_timezone_set("Asia/Karachi");

// Check if the slug exists in the URL
if (isset($_GET['slug'])) {
    $PostSlug = ValidateFormData($_GET['slug']);
    // Fetch the Post ID using the slug
    $Query = "SELECT Post_ID FROM blog_post WHERE Post_Slug = '$PostSlug' LIMIT 1";
    $Result = $Connection->query($Query);

    if ($Result && $Result->num_rows > 0) {
        $Row = $Result->fetch_assoc();
        $PostID = $Row['Post_ID'];
    } else {
        echo "<p>Post not found for slug: $PostSlug</p>";
        header("Location: index.php");
        exit();
    }
} else {
    echo "<p>No slug provided.</p>";
    header("Location: index.php");
    exit();
}

// Update Post Stats
$Query = "SELECT * FROM post_visits WHERE Post_ID = '$PostID'";
$Result = $Connection->query($Query);

if ($Result && $Result->num_rows > 0) {
    $Query = "UPDATE post_visits SET Post_Visits = Post_Visits + 1 WHERE Post_ID = '$PostID'";
    $Connection->query($Query);
} else {
    $Query = "INSERT INTO post_visits(Post_ID, Post_Visits) VALUES($PostID, 1)";
    $Connection->query($Query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-G6Z6Y153JZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-G6Z6Y153JZ');
</script>

    
		<!-- <link rel="icon" href="../New_img/favicon.png" type="image/x-icon" /> -->
    

    <!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <!-- <link href="lib/animate/animate.min.css" rel="stylesheet"> -->
    <!-- <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->
    <!-- <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" /> -->

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>KV | Blog</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="image/x-icon" href="../assets/imgs/logo/favicon.ico">
		
		
		
    <link rel="stylesheet" href="../assets_blog/style.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
   <link rel="stylesheet" href="../assets/css/animate.css">
   <link rel="stylesheet" href="../assets/css/swiper.min.css">
   <link rel="stylesheet" href="../assets/css/slick.css">
   <link rel="stylesheet" href="../assets/css/magnific-popup.css">
   <link rel="stylesheet" href="../assets/css/fontawesome-pro.css">
   <link rel="stylesheet" href="../assets/css/spacing.css">
   <link rel="stylesheet" href="../assets/css/main.css">
		
    <!-- Template Stylesheet -->
    <!-- <link href="../css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../assets_blog/style.css">
    
</head>

<body>
       <!-- preloader start -->
   <div id="preloader">
      <div class="bd-loader-inner">
         <div class="bd-loader">
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
            <span class="bd-loader-item"></span>
         </div>
      </div>
   </div> 
   <!-- preloader start -->

   <!-- Back to top start -->
   <div class="backtotop-wrap cursor-pointer">
      <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- Back to top end -->

   <!-- search area start -->
   <div class="df-search-area">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="df-search-form">
                  <div class="df-search-close text-center mb-20">
                     <button class="df-search-close-btn df-search-close-btn"></button>
                  </div>
                  <form action="#">
                     <div class="df-search-input mb-10">
                        <input type="text" placeholder="Search for product...">
                        <button type="submit"><i class="flaticon-search-1"></i></button>
                     </div>
                     <div class="df-search-category">
                        <span>Search by : </span>
                        <a href="#">Healthline, </a>
                        <a href="#">COVID-19, </a>
                        <a href="#">Surgery, </a>
                        <a href="#">Surgeon, </a>
                        <a href="#">Medical research</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- search area end -->

   <!-- Offcanvas area start -->
   <div class="fix">
      <div class="offcanvas__info">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo">
                     <a href="dashboard.html">
                        <img src="../assets/imgs/logo/KV_LOGO.webp" alt="logo not found" style="width:170px !important">
                     </a>
                  </div>
                  <div class="offcanvas__close">
                     <button>
                        <i class="fal fa-times"></i>
                     </button>
                  </div>
               </div>

               <div class="mobile-menu fix mb-40"></div>
               <div class="offcanvas__contact mt-30 mb-20">
                  <h4>Contact Info</h4>
                  <ul>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a target="_blank"
                              href="https://maps.app.goo.gl/7xj9XBKve82Zqtkh6">
                              Kalppa Virusha hospital RG Arcade, Sarjapur Rd, Anekal Taluk, Attibele, Anekal Taluk, Attibele, Bangalore-562107
                           </a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="far fa-phone"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a href="tel:+91843-192-2016">+91843-192-2016</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="offcanvas__contact-icon mr-15">
                           <i class="fal fa-envelope"></i>
                        </div>
                        <div class="offcanvas__contact-text">
                           <a href="mailto:prasadhospitalyel@gmail.com."><span>care.kvh@gmail.com</span></a>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="offcanvas__social">
                  <ul>
                     <li><a href="https://www.facebook.com/Kalppavirushahospital"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="https://x.com/Kalppa_virusha"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="https://www.instagram.com/kalppavirusha/"><i class="fab fa-instagram"></i></a></li>
                     <li><a href="https://www.linkedin.com/company/26620598/admin/"><i class="fab fa-linkedin"></i></a></li>
                     <li><a href="https://in.pinterest.com/kalppavirushahospital/"><i class="fab fa-pinterest"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="offcanvas__overlay"></div>
   <div class="offcanvas__overlay-white"></div>
   <!-- Offcanvas area start -->

   <!-- Header area start -->
   <header>
      <div id="header-sticky" class="header-area">
         <div class="container-fluid">
            <div class="mega-menu-wrapper">
               <div class="header-main">
                  <div class="header-left">
                     <div class="header-logo">
                        <a href="index.html">
                        <img src="../assets/imgs/logo/KV_LOGO.webp" alt="logo not found" >
                        <!--  <img src="assets/imgs/logo/KV_LOGO.webp" alt="logo not found" > -->
                        </a>
                     </div>
                     <div class="mean__menu-wrapper d-none d-lg-block">
                        <div class="main-menu">
                           <nav id="mobile-menu">
                              <ul>
                                 <li>
                                    <a href="../index.html">Home</a>
                                 </li>
                                 <li>
                                    <a href="../about.html">About</a>
                                 </li>
                                 <li>
                                    <a href="../service.html">Services</a>
                                 </li>
                                 <li>
                                    <a href="../team.html">Team</a>
                                 </li>
                                                                  <li>
                                    <a href="../blog.php">Blogs</a>
                                 </li>
                                 <li>
                                    <a href="../gallery1.html">Gallery</a>
                                 </li>
                                 <li>
                                    <a href="../contact.html">Contact</a>
                                 </li>
                              </ul>
                           </nav>
                           <!-- for wp -->
                           <div class="header__hamburger ml-50 d-none">
                              <button type="button" class="hamburger-btn offcanvas-open-btn">
                                 <span>01</span>
                                 <span>01</span>
                                 <span>01</span>
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="header-right d-flex align-items-center justify-content-end ">
                     <div class="header-action d-none d-lg-inline-flex gap-3 ">
                        <div class="link-text d-none d-xxl-block">
                           <span><img src="../assets/imgs/svg/phone-call.svg" alt=""></span>
                           <span><a href="tel:+918431922016">+918431922016</a></span>
                        </div>
                        <div class="header-lang-item header-lang d-none d-xl-block">

                        </div>
                        <div style="background-color:#092A53 !important;" class="header-quick-access d-flex align-items-center">
                         
                           <div class="divider-line"></div>
                           <div class="header__hamburger">
                              <div class="sidebar__toggle">
                                 <a class="bar-icon is-white" href="javascript:void(0)">
                                    <span></span>
                                    <span>
                                       <small></small>
                                    </span>
                                    <span></span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="header__hamburger d-lg-none">
                     <div class="sidebar__toggle">
                        <a class="bar-icon" href="javascript:void(0)">
                           <span></span>
                           <span>
                              <small></small>
                           </span>
                           <span></span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- Header area end -->

    

        <!-- Page Title -->
       <!-- Breadcrumb area start  -->
      <div class="breadcrumb__area theme-bg-1 p-relative z-index-11 pt-95 pb-95">
         <div class="breadcrumb__thumb" data-background="../assets/imgs/media/about_breadcrum.jpg"></div>
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xxl-12">
                  <div class="breadcrumb__wrapper text-center">
                     <h2 class="breadcrumb__title" style="text-transform:none;">My Blog</h2>
                     <div class="breadcrumb__menu">
                        <nav>
                           <ul>
                              <li><span><a href="index.html">Home</a></span></li>
                              <li><a href="../blog.php" style="color: #1C7CC4;">Blog</a></li>
                              <li><span style="color: #1C7CC4;"><?php blogTitle($PostID); ?></span></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Breadcrumb area start  -->
        <!-- End Page Title -->

        <!-- start post-body -->
        <div class="w3-row">
            <div class="w3-container"><?php echo isset($CommentMessage) ? $CommentMessage : ""; ?></div>
            <div class="w3-col l8 s12">
                <!-- Display the post content -->
                <?php DisplayPost($PostID); ?>

                <!-- COMMENTS -->
                <div class="w3-margin">
                    <div class="w3-container">
                        <h4><b style="color:black; text-transform:none;">Comments</b></h4>
                        <hr>
                    </div>
                    <form method="post" action="" class="w3-container"
                        style="background-color:aliceblue;padding:30px 10px">
                        <div class="w3-row-padding">
                            <p class="w3-text-red"> <?php echo isset($NameError) ? $NameError : ""; ?></p>
                            <p class="w3-text-red"> <?php echo isset($CommentError) ? $CommentError : ""; ?></p>
                            <div class="w3-quarter">
                                <input name="Name" class="w3-input w3-round" type="text" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="w3-rest">
                                <textarea name="Comment" style="resize: none;" rows="1" class="w3-input w3-round"
                                    placeholder="Your Comment" required></textarea>
                            </div>
                            <input name="PostId" value="<?php echo $PostID ?>" type="hidden">
                            <div style="margin-left:10px;margin-top:20px">
                                <button style="background-color:#FF7C5B;color:white;padding:15px 40px" name="AddComment"
                                    type="submit" class="w3-button w3-white w3-border"><b>Comment</b></button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <?php DisplayComments($PostID); ?>
                </div>
                <!-- END COMMENTS -->
            </div>

            <!-- Sidebar -->
            <div class="w3-col l4">
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4 style="color:black;text-transform: none;">Popular Posts</h4>
                    </div>
                    <ul class="w3-ul w3-hoverable w3-white">
                        <?php PopularPosts(); ?>
                    </ul>
                </div>
                <hr>
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4 style="color:black;text-transform: none;">Tags</h4>
                    </div>
                    <div class="w3-container w3-white">
                        <p><?php Tags(); ?></p>
                    </div>
                </div>
            </div>
            <!-- END Sidebar -->
        </div>
        <!-- end post-body -->


    </div><!-- /.page-wrapper -->
</body>
 <!-- Footer area start -->
 <footer>
      <section class="footer-bg">
         <div class="footer-area">
            <div class="container">
               <div class="footer-grid b-b">
                  <div class="footer-widget-2 footer-col-1">
                     <div class="footer-logo mb-35">
                        <a href="index.html">
                           <img src="../assets/imgs/logo/KV_LOGO.webp" alt="image bnot found"
                              >
                        </a>
                     </div>

                     <div class="footer-widget-info">
                        <div class="footer-info mb-35">
                           <div class="footer-info-item d-flex align-items-start">
                              <div class="footer-info-icon mr-20">
                                 <span> <i class="fa-solid fa-location-dot"></i></span>
                              </div>
   
                              <div class="footer-info-text">
                                 <a style="color: rgba(255, 255, 255, 0.7)" >Kalppa Virusha hospital
   RG Arcade, Sarjapur Rd,
   Anekal Taluk, Attibele,
   Anekal Taluk, Attibele,
   Bangalore-562107</a>
                              </div>
   
                           </div>
                           <div class="footer-info-item d-flex align-items-start">
                              <div class="footer-info-icon mr-20">
                                 <span><i class="fa-solid fa-envelope"></i></span>
                              </div>
   
                              <div class="footer-info-text">
                                 <a href="mailto:care.kvh@gmail.com">care.kvh@gmail.com</a>
                              </div>
   
                           </div>
                           <div class="footer-info-item d-flex align-items-start">
                              <div class="footer-info-icon mr-20">
                                 <span><i class="fa-solid fa-phone"></i></span>
                              </div>
   
                              <div class="footer-info-text">
                                 <a href="tel:+91843-192-2016">+91843-192-2016</a>
                              </div>
                           </div>
                        </div>
                        <div class="theme-social">
                           <a href="https://www.facebook.com/Kalppavirushahospital"><i class="fa-brands fa-facebook-f"></i></a>
   
   
                           <a href="https://x.com/Kalppa_virusha"><i class="fa-brands fa-twitter"></i></a>
                           <a href="https://www.instagram.com/kalppavirusha/"><i class="fa-brands fa-instagram"></i></a>
   
                           <a href="https://www.linkedin.com/company/26620598/admin/"><i class="fa-brands fa fa-linkedin"></i></a>

                           <a href="https://in.pinterest.com/kalppavirushahospital/"><i class="fa-brands fa fa-pinterest"></i></a>
                        </div>
                     </div>

                  </div>

                 

                  <div class="footer-widget-2 footer-col-2">
                     <div class="footer-widget-title">
                        <h4>Department</h4>
                     </div>
                     <div class="footer-link">
                        <ul>
                           <li style="white-space: nowrap;"><a href="service.html">Obestric Gyneacology</a></li>
                           <li><a href="service.html">General Medicine</a></li>
                           <li><a href="service.html">General Surgeon</a></li>
                           <li><a href="service.html">Pediatrician</a></li>
                           <li><a href="service.html">Ortho Surgeon</a></li>
                           <li><a href="service.html">...View More...</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="footer-widget-2 footer-col-3">
                     <div class="footer-widget-title">
                        <h4 style="white-space: nowrap;">Quick Links</h4>
                     </div>
                     <div class="footer-link">
                        <ul>
                           <li><a href="index.html">Home</a></li>
                           <li><a href="about.html">About Us</a></li>
                           <li><a href="team.html">Team</a></li>
                           <li><a href="service.html">services</a></li>
                           <li><a href="contact.html">Contacts</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="footer-widget-2 footer-col-4">
                     <div class="footer-widget-title">
                        <h4>Get Direction</h4>
                     </div>
                     <div class="theme-social">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.9523447514293!2d77.76888647358547!3d12.781605319018361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae73012a8a35e5%3A0xd14495893544d479!2sKalppa%20Virusha%20Hospital!5e0!3m2!1sen!2sin!4v1725605766219!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-copyright-area">
            <div class="container">
               <div class="footer-copyright-wrapper">
                  <div class="footer-copyright-text">
                     <p class="mb-0">© All Copyright 2024 by <a target="_blank" href="#">Kalppa Virusha Hospital</a></p>
                  </div>
                  <div class="footer-conditions">
                     <ul>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </footer>
   <!-- Footer area end -->


<script src="../blog_pages/script-log.js"></script>
<!-- jequery plugins -->
<!-- <script src="../assets/js/jquery.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/owl.js"></script>
<script src="../assets/js/wow.js"></script>
<script src="../assets/js/validation.js"></script>
<script src="../assets/js/jquery.fancybox.js"></script>
<script src="../assets/js/appear.js"></script>
<script src="../assets/js/scrollbar.js"></script>
<script src="../assets/js/jquery.nice-select.min.js"></script>
<script src="../assets/js/jquery-ui.js"></script> -->
 <!-- main-js -->
 <script src="assets/js/script.js"></script>
     <!-- JS here -->
   <script src="../assets/js/jquery-3.6.0.min.js"></script>
   <script src="../assets/js/waypoints.min.js"></script>
   <script src="../assets/js/bootstrap.bundle.min.js"></script>
   <script src="../assets/js/meanmenu.min.js"></script>
   <script src="../assets/js/swiper.min.js"></script>
   <script src="../assets/js/slick.min.js"></script>
   <script src="../assets/js/magnific-popup.min.js"></script>
   <script src="../assets/js/counterup.js"></script>
   <script src="../assets/js/ajax-form.js"></script>
   <script src="../assets/js/beforeafter.jquery-1.0.0.min.js"></script>
   <script src="../assets/js/main.js"></script>

<!-- main-js -->
<script src="../assets/js/script.js"></script>
<script>
    // Feedback Notification
    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(function () {
            document.querySelectorAll('.alert').forEach(alert => alert.classList.add("bounceOutUp"));
        }, 3000);

        setTimeout(function () {
            document.querySelectorAll('.alert').forEach(alert => alert.remove());
        }, 4000);
    });
</script>
</body>

</html>