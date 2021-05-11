<?php session_start(); ?>
<?php require_once("db.php"); ?>
<?php require_once("functions.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php print "Biletlarga onlayn buyurtma berish"; ?></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" />
	<link href="/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
	<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />
	<script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
	</head>
	<body>
		<div id="wrapper">
			<div id="header-wrapper">
				<div id="header" class="container">
					<div id="logo">
						<a href="/"><img src="files/logo2.png" /></a>
					</div>
					<div id="menu">
						<ul>
							<li class="current_page_ite"><a href="index.php" accesskey="1" title="">Home</a></li>
							<?php if(is_user_logged_in()): ?>
								<?php if($_SESSION['uid'] == 1): ?>
									<li><a href="create_bilet.php" title="">Buy Ticket</a></li>
									<li><a href="orders.php" title="">Booking</a></li>
								<?php endif; ?>
								<?php if(isset($_SESSION['uid'])):  ?>
									<li>
										<a>Hello, <?php print getUsernameById($_SESSION['uid']); ?></a>
									</li>
								<?php endif; ?>
								<li><a href="logout.php" accesskey="5" title="">Log out</a></li>
							<?php else: ?>
								<li><a href="login.php" accesskey="5" title="">Sign in</a></li>
								<li><a href="register.php" accesskey="5" title="">Registration</a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="message_block">
				<?php print display_message(); ?>
			</div>