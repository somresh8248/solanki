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


	<!-- CSS
    
     ================================================== -->


	<!-- Theme Color
	============================================= -->
	<link rel="stylesheet" id="color" href="css/blue.css">


	<!-- Medicom Style
	============================================= -->
	<link rel="stylesheet" href="css/medicom.css">
	<link rel="stylesheet" href="assets_blog/style.css">


	<!-- This page
	============================================= -->
	<link href="css/revolution_style.css" rel="stylesheet">
	<link href="css/settings.css" rel="stylesheet">


	<!-- Bootstrap
	============================================= -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

	<!-- Link Swiper's CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->



	<!-- Header Scripts
    
    ================================================== -->

	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/Toogle.js"></script>

</head>

<body class="fixed-header" style="overflow: visible;">

	<!-- Document Wrapper
		============================================= -->
	<div id="wrapper" class="clearfix">
		<div class="tophead">
			<div class="logo">
				<a href="Insurance.html"><img src="images/logo.png" alt="" title="" class="navbar-brands"></a>
			</div>
			<div class="topHeadContent">
				<ul>
					<!-- <li> <a href="index.html">Home</a></li> -->
					<li> <a href="Patient-stories.html">Patient Stories</a></li>
					<!-- <li> <a href="Eye-Donation.html">Eye Donation</a></li> -->
					<li> <a href="Book-Appointment.html">Book An Appointment</a></li>
					<li> <a href="Internship.html">Internship</a></li>
					<li> <a href="tel:95916 38909" class="emergency-button btn-danger">Emergency : +91 95916 38909</a></li>

				</ul>
			</div>

		</div>

		<!-- Header
		============================================= -->
		<header id="header" class="medicom-header medical-nav no-mobile">

			<!-- Top Row
			============================================= -->
			<div class="solid-row"></div>

			<div class="container-fluid">



				<!-- Primary Navigation
				============================================= -->
				<nav class="navbar navbar-default mobilenav-default" role="navigation" id="primary-nav1">

					<!-- Brand and toggle get grouped for better mobile display
					============================================= -->
					<div class="logo">
						<a href="index.html"><img src="images/logo.png" alt="" title="" class="navbar-brands2"></a>
					</div>

					<div class="navbar-header">

						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>


					</div>


					<div class="collapse navbar-collapse navbar-right" id="primary-nav">

						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="index.html" class="dropdown-toggle" ><i class="fa fa-plus"></i>Home
									</a>
								
							</li>
                            <li class="dropdown">
								<a href="about-us.html" class="dropdown-toggle" ><i
										class="fa fa-plus"></i>About DSEH</a>
								<!-- <ul class="dropdown-menu">
									<li><a href="about-us.html">About Us One</a></li>
									<li><a href="about-us2.html">About Us Two</a></li>
								</ul> -->

							</li>

                           
							<li class="mega-menu-item dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus"></i>Our
									Specialties</a>
								<div class="mega-menu dropdown-menu">
									<br>
									<img src="images/banner/specialist-banner.jpg" class="img-rounded padding-bottom-20" alt="" title="">
									<ul>
										<li><a href="Comprehensive-ophthalmology.html">Comprehensive Ophthalmology</a>
										</li>
										<li><a href="cataract.html">Cataract</a></li>
										<li><a href="LASIK-and-Refractive.html">LASIK and Refractive</a></li>
										<li><a href="Vitreo-Retina.html">Vitreo Retina and Diabetic Retinopathy
												 </a></li>
										<li><a href="Glaucoma.html">Glaucoma   </a></li>

									</ul>
									<ul>
										<li><a href="Cornea.html">Cornea  </a></li>
										<li><a href="Pediatric-Ophthalmology-and-Squint.html">Pediatric Ophthalmology &
												Squint</a></li>
										<li><a href="Oculoplasty.html">Oculoplasty</a></li>
										<li><a href="Optometry.html">Optometry  <br><br></a></li>
										<!-- <li><a href="Second-Opinion.html">Second Opinion </a></li> -->

									</ul>

								</div>
							</li>

							<li class="dropdown">
								<a href="Our-Team.html" class="dropdown-toggle" ><i class="fa fa-plus"></i>Our
									Team</a>
								<!-- <ul class="dropdown-menu">
									<li><a href="about-us.html">About Us One</a></li>
									<li><a href="about-us2.html">About Us Two</a></li>
								</ul> -->
							</li>
							<li class="mega-menu-item">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus"></i>Our
									Facilities</a>
								<div class="mega-menu dropdown-menu">
									<img src="images/banner/international-image.jpg" class="img-rounded" alt="" title="">
									<ul>

										<li class="dropdown-mega">
											<div class="drop-home">Other Services
											<ul class="drop-items" style="padding: 0;">
											
												<li> <a style="padding-left: 10px;" class="drop-link" href="Payments-EMI.html">Payments-EMI </a></li>
												<!-- <li> <a class="drop-link" href="Registration-Form.html">Registration-Form</a></li> -->
												<li> <a class="drop-link" href="Self-Evaluation.html">Self-Evaluation</a></li>
												<li> <a class="drop-link" href="TravelerDesk.html">Traveller desk</a></li>
												<li> <a class="drop-link" href="Explainer-video.html">Explainer-video</a></li>
												
											</ul>
										</div>
											<a href="#"></a>
										</li>
										
										
                                         
										<!-- <li class="dropdown">
											<div  class="dropdown-toggle" data-toggle="dropdown">About Us</div>
											<ul class="dropdown-menu">                                                                                          
											  <li><a href="about-us.html">About Us One</a></li>
											  <li><a href="about-us2.html">About Us Two</a></li>
											</ul>
										</li> -->

										<li class="dropdown-mega">
											<!-- <a href="#" class="dropdown-toggle">Specialized Ophthalmic Services</a> -->
                           <!-- <ul class="dropdown-menu">
									<li><a href="about-us.html">About Us One</a></li>
									<li><a href="about-us2.html">About Us Two</a></li>
								</ul> -->
								        <br>
										<div  class="drop-home">Specialized Ophthalmic Services
											 
											<ul class="drop-items" style="padding: 0;">
												<li> 
													<!-- <a class="drop-link" href="#"> -->
												   <div class="drop-home-child ">
													Cataract
													 <ul class="drop-items-child">
														<li><a class="drop-link-child" href="Monofocal.html">Monofocal</a></li>
														<li><a class="drop-link-child" href="Multifocal.html">Multifocal</a></li>
														<li><a class="drop-link-child" href="toric-lens.html">Toric lens</a></li>
														<li><a class="drop-link-child" href="Refractive-Surgeries.html">Refractive Surgeries</a></li>
														<li><a class="drop-link-child" href="Phakic-intraocular-lens.html">Phakic IOL Implementation</a></li>
													 </ul>
												   </div>	
												<!-- </a> -->
												 
												</li>
												<li>
													 <!-- <a class="drop-link" href="#"> -->
														
													<!-- </a> -->
													<div class="drop-home-child " style="padding-left: 10px;">
														Cornea & Refractive
														 <ul class="drop-items-child">
															<li><a href="Bladelesslasik.html" class="drop-link-child">Bladeless Lasik Treatment</a></li>
															<li><a href="ICL.html" class="drop-link-child">ICL For High Myopia</a></li>
														 </ul>
													   </div>
													</li>
												<li> <a style="padding-left: 10px;" class="drop-link" href="retina.html">Retina </a></li>
												<li> <a class="drop-link" href="Glaucoma.html">Glaucoma</a></li>
												<li> <a class="drop-link" href="Pediatric-Ophthalmology-and-Squint.html">Pediatric</a></li>
												<li> <a class="drop-link" href="Oculoplasty.html">Oculoplasty</a></li>
											
											</ul>

										</div>
										<!-- <a href="#"></a> -->
										<a href="#" ></a>

										</li>


									</ul>
									
									<ul>
										<li><a href="Second-Opinion.html">Second Opinion</a></li>
										<li class="word">
											<br>
											<a href="prosthetic-eye.html">prosthetic eye
												
											</a>
										</li>
 
											<li class="padding-bottom-50" > <a  href="contact-lens.html">contact lens</a></li>

									
										<!-- <li><a href="Pediatric-Ophthalmology-and-Squint.html">Pediatric Ophthalmology &
												Squint</a></li>
										<li><a href="Oculoplasty.html">Oculoplasty</a></li>
										<li><a href="Optometry.html">Optometry  <br><br></a></li>
										<li><a href="Second-Opinion.html">Second Opinion </a></li> -->

									</ul>

								</div>
							</li>
							

							<!-- <li class="dropdown">
								<a href="Facilities.html" class="dropdown-toggle" ><i class="fa fa-plus"></i>Our
									Facilities</a>
								<ul class="dropdown-menu">
									<li><a href="about-us.html">About Us One</a></li>
									<li><a href="about-us2.html">About Us Two</a></li>
								</ul>
							</li> -->

							<li class="dropdown">
								<a href="international-patient-services.html" class="dropdown-toggle" ><i
										class="fa fa-plus"></i>International Patient Service</a>
								<!-- <ul class="dropdown-menu">
									<li><a href="about-us.html">About Us One</a></li>
									<li><a href="about-us2.html">About Us Two</a></li>
								</ul> -->
							</li>

							<!-- <li class="mega-menu-item dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
										class="fa fa-plus"></i>Resources</a>
								<div class="mega-menu dropdown-menu">
									<img src="images/banner/international-banner2.png" class="img-rounded" alt="" title="">
									<ul>
										<li><a href="Payments-EMI.html">Payment & EMI</a></li>
										<li><a href="Registration-Form.html">Registration Form</a></li>
										<li><a href="Self-Evaluation.html">Self Evaluation</a></li>


									</ul>
									<ul>
										<li><a href="Explainer-video.html">Explainer Video</a></li>

									</ul>

								</div>
							</li> -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" ><i
										class="fa fa-plus"></i>Our gallery</a>
								<!-- <ul class="dropdown-menu">
									<li><a href="about-us.html">About Us One</a></li>
									<li><a href="about-us2.html">About Us Two</a></li>
								</ul> -->
							</li>

							<li class="dropdown">
								<a href="Insurance.html" class="dropdown-toggle" ><i
										class="fa fa-plus"></i>Insurance</a>
								<!-- <ul class="dropdown-menu">
									<li><a href="about-us.html">About Us One</a></li>
									<li><a href="about-us2.html">About Us Two</a></li>
								</ul> -->
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle" ><i
										class="fa fa-plus"></i>Resource</a>
								<ul class="dropdown-menu">
									<li><a href="about-us.html">Blog</a></li>
									<li><a href="about-us2.html">Success Story</a></li>
								</ul>
							</li>


							<li class="dropdown last">
								<a href="contact-us.html" class="dropdown-toggle" ><i
										class="fa fa-plus"></i>Contact Us</a>
								<!-- <ul class="dropdown-menu">
									<li><a href="contact-us.html">Contact Us one</a></li>
									<li><a href="contact-us2.html">Contact Us two</a></li>
								</ul> -->
							</li>

						</ul>

					</div>
				</nav>

			</div>

		</header>

		<div id="content-index">
			<div class="mobile-navbar">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" title="" class="navbar-brands2"></a>
				</div>
	
				<div class="menu-bars" onclick="openmenu1()">
					<svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#000000" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
				</div>
	
	<div class="menu-items" id="openmenu1">
		<ul class="main-ul">
	<a href="about-us.html" class="link-no"><li><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#da8d00" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
		&nbsp; &nbsp; About DSEH</li></a>
	
	<!-- <a href="index.html" class="link-no"><li><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path fill="#da8d00" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
		&nbsp; &nbsp; Home</li>
	</a> -->
	
	<div onclick="openmenu2()" class="link-no"><li class="parent-ele"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#da8d00" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
		&nbsp; &nbsp; Our Specialties
	<ul id="openmenu2" class="sub-menu">
		<img src="images/banner/specialist-banner.jpg" alt="noimg" class="img-fluid img-rounded" style="padding: 30px;"/>
	<a href="Comprehensive-ophthalmology.html"><li class="inner-font-menu">COMPREHENSIVE OPHTHALMOLOGY 1</li></a>
	<a href="cataract.html"><li class="inner-font-menu">Cataract</li></a>
	<a href="LASIK-and-Refractive.html"><li class="inner-font-menu">LASIK and Refractive</li></a>
	<a href="Vitreo-Retina.html"><li class="inner-font-menu">Vitreo Retina and Diabetic Retinopathy</li></a>
	<a href="Cornea.html"><li class="inner-font-menu">Cornea</li></a>
	<a href="Pediatric-Ophthalmology-and-Squint.html"><li class="inner-font-menu">Pediatric Ophthalmology & Squint </li></a>
	<a href="Oculoplasty.html"><li class="inner-font-menu">Oculoplasty </li></a>
	<a href="Optometry.html"><li class="inner-font-menu">Optometry   </li></a>
	</ul>
	
	</li></div>
	
	<a href="Our-Team.html" class="link-no"><li><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#da8d00" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
		&nbsp; &nbsp; Our Team </li></a>
	
		<div  class="link-no"><li class="parent-ele"><p class="margin-0" onclick="openmenu3()">
			<svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#da8d00" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
			&nbsp; &nbsp; Our Facilites
		</p>
		<ul id="openmenu3" class="sub-menu">
			<img src="images/banner/international-image.jpg" alt="noimg" class="img-fluid img-rounded" style="padding: 30px;"/>
		<a href="Second-Opinion.html"><li class="inner-font-menu">Second Opinion</li></a>
		<!-- <a href="#"><li class="inner-font-menu"></li></a> -->
				<li class="inner-font-menu2"><p style="margin-left: 30px;" class="margin-0" onclick="toglesubopenmenunew()"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#da8d00" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/></svg>
								 &nbsp;	Other Services</p>
							<ul id="subopenmenunew" class="sub-menu">
											
								<a href="Payments-EMI.html" class="link-no"><li class="inner-font-menu3">Payments-EMI</li></a>
								<!-- <a href="Registration-Form.html" class="link-no"><li class="inner-font-menu3">Registration-Form</li></a> -->
								<a href="Self-Evaluation.html" class="link-no"><li class="inner-font-menu3">Self-Evaluation</li></a>
								<a href="TravelerDesk.html" class="link-no"><li class="inner-font-menu3">Traveller desk</li></a>
								<a href="Explainer-video.html" class="link-no"><li class="inner-font-menu3">Explainer-video</li></a>
							</ul>
	
				 </li>
	
	
		<li class="inner-font-menu2"><p style="margin-left: 30px;" class="margin-0" onclick="toglesubopenmenu()"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#da8d00" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/></svg>
							&nbsp;	Specialized Ophthalmic Services</p>
			<ul id="subopenmenu" class="sub-menu">
				<li class="inner-font-menu3">
					<p  class="margin-0" onclick="togleinnersubopenmenu()"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#da8d00" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/></svg>
						&nbsp;
						Catract</p>
					<ul id="innersubmenu1" class="sub-menu">
				<a href="Monofocal.html" class="link-no"><li class="inner-font-menu2">Monofocal</li></a>
				<a href="Multifocal.html" class="link-no"><li class="inner-font-menu2">Multifocal</li></a>
				<a href="toric-lens.html" class="link-no"><li class="inner-font-menu2">Toric lens</li></a>
					</ul>
	
				</li>
				
	
				<li class="inner-font-menu3">
					<p  class="margin-0" onclick="togleinnersubopenmenu2()"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#da8d00" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/></svg>
						&nbsp;
						Cornea & Refractive</p>
					<ul id="innersubmenu2" class="sub-menu">
						<a href="Bladelesslasik.html" class="link-no"><li class="inner-font-menu2">Bladeless Lasik Treatment</li></a>
			<a href="ICL.html" class="link-no"><li class="inner-font-menu2">Icl For High Myopia</li></a>
					</ul>
	
		</li>
	
	<a href="retina.html" class="link-no"><li class="inner-font-menu3">Retina </li></a>
	<a href="Glaucoma.html" class="link-no"><li class="inner-font-menu3">Glaucoma </li></a>
	<a href="Pediatric-Ophthalmology-and-Squint.html" class="link-no"><li class="inner-font-menu3">Pediatric </li></a>
	<a href="Oculoplasty.html" class="link-no"><li class="inner-font-menu3">Oculoplasty</li></a>
	</ul>
	
			</li>
	
		<a href="prosthetic-eye.html"><li class="inner-font-menu">
			prosthetic eye</li></a>
			<a href="contact-lens.html"><li class="inner-font-menu">
				contact lens</li></a>
	
		</ul>
		
		</li></div>
	
	<a href="international-patient-services.html" class="link-no"><li><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#da8d00" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
		&nbsp; &nbsp; International Patient Service</li></a>
	
		<!-- <div onclick="openmenu4()" class="link-no"><li class="parent-ele"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path fill="#da8d00" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
			&nbsp; &nbsp; Resources
		<ul id="openmenu4" class="sub-menu">
			<img src="images/banner/international-banner2.png" alt="noimg" class="img-fluid img-rounded" style="padding: 30px;"/>
		<a href="Payments-EMI.html"><li class="inner-font-menu">Payment & EMI</li></a>
		<a href="Registration-Form.html"><li class="inner-font-menu">Registration From</li></a>
		<a href="Self-Evaluation.html"><li class="inner-font-menu">Self Evaluation</li></a>
		<a href="Explainer-video.html"><li class="inner-font-menu">Expaliner Video</li></a>
		</ul>
		
		</li></div> -->
	
	<a href="Insurance.html" class="link-no"><li><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#da8d00" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
		&nbsp; &nbsp; Insurance</li></a>
	
	<a href="contact-us.html" class="link-no"><li><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#da8d00" d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg>
		&nbsp; &nbsp; Contact us</li></a>
	
	
		</ul>
	</div>
	
				
	
			</div>
        <?php

        // include("header.php");
        include("Includes/TagsBody.php");
        // include("footer.php");

        ?>

        


<footer id="footer" class="light">
		<div class="colourfull-row"></div>

		<!-- <div class="container">

			<div class="row">

				<div class="col-md-4">

					<div class="footer-widget">

						<h5><span>Our Specialties</span></h5>

						<ul class="footer-nav list-unstyled clearfix">
							<li><a href="Comprehensive-ophthalmology.html"><i
										class="fa fa-long-arrow-right"></i>Comprehensive Ophthalmology</a>
							</li>
							<li><a href="cataract.html"><i class="fa fa-long-arrow-right"></i>Cataract
									Cataract</a></li>
							<li><a href="LASIK-and-Refractive.html"><i class="fa fa-long-arrow-right"></i>LASIK and
									Refractive</a></li>
							<li><a href="Vitreo-Retina.html"><i class="fa fa-long-arrow-right"></i>Vitreo Retina and
									Diabetic
									Retinopathy Cataract</a></li>
							<li><a href="Glaucoma.html"><i class="fa fa-long-arrow-right"></i>Glaucoma Cataract</a>
							</li>
							<li><a href="Cornea-Cataract.html"><i class="fa fa-long-arrow-right"></i>Cornea Cataract</a>
							</li>
							<li><a href="Pediatric-Ophthalmology-and-Squint.html"><i
										class="fa fa-long-arrow-right"></i>Pediatric Ophthalmology &
									Squint</a></li>
							<li><a href="Oculoplasty.html"><i class="fa fa-long-arrow-right"></i>Oculoplasty</a>
							</li>
							<li><a href="Optometry-Cataract.html"><i class="fa fa-long-arrow-right"></i>Optometry
									Cataract</a></li>

						</ul>

					</div>

				</div>

				<div class="col-md-3">

					<div class="footer-widget">

						<h5><span>International Patient Services</span></h5>

						<ul class="footer-nav list-unstyled clearfix">
							<li><a href="international-patient-services.html"><i
										class="fa fa-long-arrow-right"></i>Introduction</a></li>
							<li><a href="international-patient-services.html"><i
										class="fa fa-long-arrow-right"></i>Serivces</a></li>
							<li><a href="international-patient-services.html"><i
										class="fa fa-long-arrow-right"></i>Contact Details</a></li>

						</ul>

					</div>

				</div>

				<div class="col-md-3">

					
					<div class="footer-widget">

						<h5><span>About DSEH</span></h5>

						<ul class="footer-nav list-unstyled clearfix">
							<li><a href="about-us.html"><i class="fa fa-long-arrow-right"></i>Introduction</a></li>
							<li><a href="about-us.html"><i class="fa fa-long-arrow-right"></i>Vision, Mission & Core
									Values</a>
							</li>
							<li><a href="about-us.html"><i class="fa fa-long-arrow-right"></i>Management Team</a>
							</li>
							<li><a href="about-us.html"><i class="fa fa-long-arrow-right"></i>Chairmans Messages</a>
							</li>
							<li><a href="about-us.html"><i class="fa fa-long-arrow-right"></i>Community Outreach</a>
							</li>

						</ul>

					</div>

				</div>

				<div class="col-md-2">

					
					<div class="footer-widget">

						<h5><span>Resources</span></h5>

						<ul class="footer-nav list-unstyled clearfix">
							<li><a href="Payments-EMI.html"><i class="fa fa-long-arrow-right"></i>Payment & EMI</a>
							</li>
							<li><a href="Payments-EMI.html"><i class="fa fa-long-arrow-right"></i>Registration
									Forms</a></li>
							<li><a href="Payments-EMI.html"><i
										class="fa fa-long-arrow-right"></i>Self-Evaluation</a></li>
							<li><a href="Payments-EMI.html"><i class="fa fa-long-arrow-right"></i>Explainer
									Videos</a></li>
						

						</ul>


					</div>

				</div>


			</div>

		</div> -->
		
		
  <div style="background-color: #F6F1EE;">
		<div class="" style="padding: 50px" >
			<div class="row" >
				<div class="col-md-3 footer-font-size" style="padding-top: 5px;"><a href="#.">
					<img src="images/logo-removebg-preview-removebg-preview.png" alt="" title="Medicom Logo" style="height: 60px; "></a>
							<br>
							<br>
					<p class="mt-4">Welcome to Dr. Solanki Eye Hospital.
						<br>

						We are an outcome of 35 years of passion, experience, and skills backed by dedication
						delivering.... Simply Eye Care.
						<br>
						With Warm Regards,
						Dr. Narpat Solanki, Chief Medical Director
					</p>
				</div>
				<div class="col-md-2 ">
					<h5 class="" style="color: #eca328;">Quick links</h5>
					<!-- <div class="col-md-3 footer-font-size">
						<a href="Comprehensive-ophthalmology.html">
							<p class="quick-links-items"><i class="fa fa-long-arrow-right" ></i>Comprehensive Ophthalmology</p>
						</a>
						<a href="cataract.html">
							<p  class="quick-links-items"><i class="fa fa-long-arrow-right" ></i>Cataract</p>
						</a>
						<a href="LASIK-and-Refractive.html">
							<p  class="quick-links-items"><i class="fa fa-long-arrow-right" ></i>LASIK and Refractive</p>
						</a>
						<a href="Vitreo-Retina.html">
							<p  class="quick-links-items"><i class="fa fa-long-arrow-right"  ></i>Vitreo Retina and Diabetic Retinopathy</p>
						</a>
				
						<a href="Glaucoma.html">
							<p  class="quick-links-items"><i class="fa fa-long-arrow-right"  ></i>Glaucoma</p>
						</a>
					</div> -->
					<!-- <div class="col-md-3">
						
						<a href="Cornea.html">
							<p  class="quick-links-items"><i class="fa fa-long-arrow-right"  ></i>Cornea  </p>
						</a>
						<a href="Pediatric-Ophthalmology-and-Squint.html">
							<p  class="quick-links-items"><i class="fa fa-long-arrow-right"  ></i>Pediatric Ophthalmology & Squint</p>
						</a>
						<a href="Oculoplasty.html">
							<p  class="quick-links-items"><i class="fa fa-long-arrow-right"  ></i>Oculoplasty</p>
						</a>
						<a href="Optometry.html">
							<p  class="quick-links-items"><i class="fa fa-long-arrow-right"  ></i>Optometry</p>
						</a>
					</div> -->
					
						<a href="index.html">
							<p  class="quick-links-items"><i class="fa fa-long-arrow-right"  ></i>Home</p>
						</a>
						<a href="about-us.html">
							<p  class="quick-links-items"><i class="fa fa-long-arrow-right"  ></i>About DSEH</p>
						</a>
						<a href="cataract.html">
							<p  class="quick-links-items"><i class="fa fa-long-arrow-right"  ></i>Our Specialtiest</p>
						</a>
						<a href="Our-Team.html">
							<p  class="quick-links-items"><i class="fa fa-long-arrow-right"  ></i>Our Team</p>
						</a>
						<a href="Monofocal.html">
							<p  class="quick-links-items"><i class="fa fa-long-arrow-right"  ></i>Our Facilities</p>
						</a>
						
						<a href="international-patient-services.html">
							<p  class="quick-links-items"><i class="fa fa-long-arrow-right"  ></i>International Patient Service</p>
						</a>
						<a href="Insurance.html">
							<p  class="quick-links-items"><i class="fa fa-long-arrow-right"  ></i>Insurance</p>
						</a>
						<a href="#">
							<p  class="quick-links-items"><i class="fa fa-long-arrow-right"  ></i>Resource</p>
						</a>
						<a href="contact-us.html">
							<p  class="quick-links-items"><i class="fa fa-long-arrow-right"  ></i>Contact Us</p>
						</a>
					
				</div>
				
				<div class="col-md-3 next-footer footer-font-size">
					<h5 style="color: #eca328;">Contact Info</h5>
					<p > <i class="fa fa-map-marker" style="color: #046ab0;"></i> #191/1, Link Road, 2nd Cross, Malleswaram, Bangalore - 560 003</p>
					<p>
						Appointment: <br>
						<i class="fa fa-phone" style="color: #046ab0;"></i><a href="tel: +91 08 2356 2211" style="color: gray;"> 08 2356 2211 </a>/<a href="tel: 2356 2299" style="color: gray;"> 2356 2299 </a>

					</p>
					<p>
						Helpline :<br>
						<i class="fa fa-phone" style="color: #046ab0;"></i><a href="tel: +91 94490 50206" style="color: gray;"> 94490 50206 </a>/<a href="tel: 94490 50207" style="color: gray;">94490 50207 </a>
					</p>
				
					<p>
						Emergency : 
						<i class="fa fa-phone" style="color: #046ab0;"></i><a href="tel:  +91 95916 38909" style="color: gray;"> 95916 38909</a>
					</p>
					<p>
						<i class="fa fa-envelope" style="color: #046ab0;"></i><a style="color: gray;" href="mailto:info@drsolankieyehospital.com"> info@drsolankieyehospital.com</a>
					</p>
				</div>
				<div class="col-md-4">
					<h5 style="color: #eca328;">Location</h5>

					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7775.271521436051!2d77.57384!3d12.995133!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae163b521be895%3A0xc3990ec6cc9b858f!2sDr.Solanki%20Eye%20Hospital!5e0!3m2!1sen!2sin!4v1695190213611!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					<ul class="social-rounded">
								<li><a href="https://www.facebook.com/profile.php?id=100063949147300"><i class="fa fa-facebook" style="color: #eca328;"></i></a></li>								
								<li><a href="https://www.youtube.com/@Drsolankieyehospital2024"><i class="fa fa-youtube" style="color: #eca328;"></i></a></li>
								<li><a href="https://www.instagram.com/dr_solankieyehospital/?hl=en"><i class="fa fa-instagram" style="color: #eca328;"></i></a></li>
								<li><a href="https://www.linkedin.com/company/106284134/admin/dashboard/"><i class="fa fa-linkedin" style="color: #eca328;"></i></a></li>
								<li><a href="https://x.com/Drsolankie10201"><i class="fa fa-twitter" style="color: #eca328;"></i></a></li>
								<li><a href="https://in.pinterest.com/drsolankieyehospital/"><i class="fa fa-pinterest" style="color: #eca328;"></i></a></li>
		
							</ul>
				</div>
				   
			</div>
			<div class="row">
				<div class="col-md-12">
					<a href="#">
						<p style="font-weight: 600; margin: 0px; font-size: 15px; text-align:right;">Privacy Policy | Terms & Conditions</p>
					</a>
					
				  </div>
			</div>
			<p class="copyright text-center">Copyright © 2025 Dr. Solanki Eye Hospital. All rights reserved.</p>
		</div>
		
		
		

	</div>

<!-- Copyright
============================================= -->

		<!-- Footer Bottom
============================================= -->



	</footer>
	<!-- back to top -->
	<a href="#." class="back-to-top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

	</div><!--end #wrapper-->



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

	<!-- This page
	============================================= -->
	<script src="js/jquery.themepunch.plugins.min.js"></script>
	<script src="js/jquery.themepunch.revolution.min.js"></script>


	<script>

		// (function () {

		// 	// Revolution slider
		// 	var revapi;
		// 	revapi = jQuery('.tp-banner').revolution(
		// 		{
		// 			delay: 9000,
		// 			startwidth: 1170,
		// 			startheight: 682,
		// 			hideThumbs: 200,
		// 			fullWidth: "on",
		// 			forceFullWidth: "on"
		// 		});

		// })();

		// function loadabout(){
		// 	window.location.href = "/about-us.html";
		// }

		// loadabout()
	</script>

</body>

</html>