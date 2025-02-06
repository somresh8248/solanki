<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<base href="" />
	<!-- Basic Page Needs

     ================================================== -->

	 <meta charset="utf-8">

	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 
	 <link rel="icon" type="image/png" href="images/fav-img/favicon.png">
 
	 <title>Dr. Solanki Eye Hospital | Eye Hospital in Bangalore</title>
 
	 <meta name="description" content="">
 
	 <meta name="keywords" content="">
 
	 <meta name="author" content="">


	<!-- Mobile Specific Metas
    
     ================================================== -->

	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

	<meta name="format-detection" content="telephone=no">


	<!-- Web Font
	 ============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

	
	<!-- CSS
    
     ================================================== -->


	<!-- Theme Color
	============================================= -->
	<link rel="stylesheet" id="color" href="css/blue.css">


	<!-- Medicom Style
	============================================= -->
	<link rel="stylesheet" href="css/medicom.css">


	<!-- Bootstrap
	============================================= -->
	<link rel="stylesheet" href="css/bootstrap.css">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->



	<!-- Header Scripts
    
    ================================================== -->
	<script src="js/Toogle.js"></script>
	<script src="js/modernizr-2.6.2.min.js"></script>



</head>




<body>
 <!-- Header area start -->
 <?php include("header.php"); ?>
    <!-- Header area end -->
      <!-- Breadcrumb area start  -->

      <!-- Breadcrumb area start  -->
       
      <div class="page-wrapper">


<!-- <div class="container"> -->
    <?php
    include("Includes/Header.php");
    include("Includes/Body.php");
    ?>
<!-- </div> -->

<!-- footer area start -->
<!-- Header area start -->
<?php include("footer.php"); ?>
<!-- Header area end -->
<!-- footer area end -->

</div>



<!-- All Javascript 
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.stellar.js"></script>
	<script src="js/jquery-ui-1.10.3.custom.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/counter.js"></script>
	<script src="js/waypoints.js"></script>
	<script src="js/jquery.uniform.js"></script>
	<script src="js/easyResponsiveTabs.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>
	<script src="js/jquery.mixitup.js"></script>
	<script src="js/forms-validation.js"></script>
	<script src="js/jquery.jcarousel.min.js"></script>
	<script src="js/jquery.easypiechart.min.js"></script>
	<script src="js/scripts.js"></script>

	<script>
		function incrementNumber(targetElement, finalValue, suffix, duration) {
			const framesPerSecond = 30;
			const increment = duration / framesPerSecond;
	
			let startTime;
	
			function updateCounter(timestamp) {
				if (!startTime) {
					startTime = timestamp;
				}
	
				const elapsed = timestamp - startTime;
	
				if (elapsed < duration) {
					const progress = elapsed / duration;
					const currentNumber = Math.floor(progress * finalValue);
					targetElement.textContent = currentNumber + suffix;
	
					requestAnimationFrame(updateCounter);
				} else {
					// Animation complete
					targetElement.textContent = finalValue + suffix;
				}
			}
	
			requestAnimationFrame(updateCounter);
		}
	
		const clients = document.getElementById('clients');
			
		incrementNumber(clients, 3.75, '+', 2000);

	</script>
</body>

</html>