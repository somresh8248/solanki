<?php

include("Includes/Connection.php");
include("Includes/Functions_Index.php");

//Update Website Stat
$Query = "UPDATE total_visits SET Total_Visits=Total_Visits+1";
$Result = $Connection->query($Query);

if (isset($_GET['PostID'])) {
    $PostID = $_GET['PostID'];
    GetTitle($PostID);
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

    <!-- <meta charset="utf-8">
    <title>Best Diagnostic Centre In Kalaburagi</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Best diagnostic center in Kalaburagi Bangalore" name="Keyword">
    <meta content="Welcome to Vaishnavi Diagnostics - Your Trusted Diagnostic Partner in Kalaburagi, Bangalore" name="description"> -->

    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->
    <!-- <link rel="icon" href="img/favicon.png"> -->
		<link rel="icon" href="../New_img/favicon.png" type="image/x-icon" />
    <!-- Google Web Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">  -->

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <!-- <link href="lib/animate/animate.min.css" rel="stylesheet"> -->
    <!-- <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->
    <!-- <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" /> -->

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>KV | Blog</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/logo/favicon.ico">
		
		<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/meanmenu.min.css">
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/css/swiper.min.css">
   <link rel="stylesheet" href="assets/css/slick.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/fontawesome-pro.css">
   <link rel="stylesheet" href="assets/css/spacing.css">
   <link rel="stylesheet" href="assets/css/main.css">
		
    <!-- Template Stylesheet -->
    <!-- <link href="../css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="assets_blog/style.css">
    
</head>

<body>

    <div class="page-wrapper">




        <?php

        include("header.php");
        include("Includes/TagsBody.php");
        include("footer.php");

        ?>

        



        <script src="./blog_pages/script-log.js"></script>
        <!-- jequery plugins -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/owl.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/validation.js"></script>
        <script src="assets/js/jquery.fancybox.js"></script>
        <script src="assets/js/appear.js"></script>
        <script src="assets/js/scrollbar.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <script src="assets/js/jquery-ui.js"></script>

        <!-- main-js -->
        <script src="assets/js/script.js"></script>
</body>

</html>