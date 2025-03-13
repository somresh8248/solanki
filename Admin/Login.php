<?php

    session_start();
    include("Includes/Functions_Admin.php");
    if(isset($_COOKIE['LoggedIn']) || isset($_COOKIE['RememberMeLogIn'])){
        header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Admin Login &mdash; My Own Blog</title>
	<link rel="stylesheet" type="text/css" href="Login/css/my-login.css">
    <link rel="stylesheet" type="text/css" href="Login/bootstrap/css/bootstrap.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
</head>
<body class="my-login-page">
	<section class="h-100">
        <div id="particles-js"></div>
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="plugins/images/admin-logo.png">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">							 
								<div class="form-group">
									<label for="email">E-Mail Address</label>
                                    <?php echo (isset($EmailError)) ? $EmailError : ""; ?>
									<input id="email" type="email" class="form-control" name="Email" required autofocus>
								</div>

								<div class="form-group">
									<label for="password">Password
										<!--<a href="forgot.html" class="float-right">
											Forgot Password?
										</a>-->
									</label>
                                    <?php echo (isset($PasswordError)) ? $PasswordError : ""; ?>
									<input id="password" type="password" class="form-control" name="Password" required data-eye>
								</div>

								<div class="form-group">
									<label>
										<input type="checkbox" value="On" name="RememberMe"> Remember Me for one week
									</label>
								</div>

								<div class="form-group no-margin">
									<button name="Login" type="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</div>
								<div class="margin-top20 text-center">
									Don't have an account? <a href="register.php">Create One</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2017 &mdash; Your Company 
					</div>
				</div>
			</div>
		</div>
	</section>
    <script src="Login/js/particles.min.js"></script>
    <script src="Login/js/app.js"></script>
	<script src="Login/js/jquery.min.js"></script>
	<script src="Login/bootstrap/js/bootstrap.min.js"></script>
	<script src="Login/js/my-login.js"></script>
</body>
</html>