<?php

if (isset($_GET['Tag'])) {
    $TagID = $_GET['Tag'];
} else {
    header("Location: index.php");
}

?>


<div class="page-wrapper">
         <!-- Breadcrumb area start  -->
      <!-- <div class="breadcrumb__area theme-bg-1 p-relative z-index-11 pt-95 pb-95">
         <div class="breadcrumb__thumb" data-background="assets/imgs/media/about_breadcrum.jpg"></div>
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xxl-12">
                  <div class="breadcrumb__wrapper text-center">
                     <h2 class="breadcrumb__title" style="text-transform:none;">Tags</h2>
                     <div class="breadcrumb__menu">
                        <nav>
                           <ul>
                              <li><span><a href="index.html">Home</a></span></li>
                              <li><span style="color: #1C7CC4;">Tag</span></li>
                              <li><span style="color: #1C7CC4;"><?php TagByID($TagID); ?></span></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- Breadcrumb area start  -->

        <!-- <div class="container"> -->
        <!-- Grid -->
        <div class="w3-row">

            <!-- Blog entries -->
            <div class="w3-col l8 s12">
                <!-- Blog entry -->
                <?php DisplayPostsTag($TagID); ?>
                <!-- END BLOG ENTRIES -->
            </div>

            <!-- Introduction menu -->
            <div class="w3-col l4">

                <!-- Posts -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4 style="color:black; text-transform:none;">Popular Posts</h4>
                    </div>
                    <ul class="w3-ul w3-hoverable w3-white">
                        <?php PopularPosts(); ?>
                    </ul>
                </div>
                <hr>

                <!-- Labels / tags -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4 style="color:black; text-transform:none;">Tags</h4>
                    </div>
                    <div class="w3-container w3-white">
                        <p><?php Tags(); ?></p>
                    </div>
                </div>

                <!-- END Introduction Menu -->
            </div>

            <!-- END GRID -->
        </div>
        <!-- </div> -->


    </div><!-- /.page-wrapper -->

        <!-- main-js -->
    <script src="assets/js/script.js"></script>
     <!-- JS here -->
   <script src="assets/js/jquery-3.6.0.min.js"></script>
   <script src="assets/js/waypoints.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/meanmenu.min.js"></script>
   <script src="assets/js/swiper.min.js"></script>
   <script src="assets/js/slick.min.js"></script>
   <script src="assets/js/magnific-popup.min.js"></script>
   <script src="assets/js/counterup.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/beforeafter.jquery-1.0.0.min.js"></script>
   <script src="assets/js/main.js"></script>

        