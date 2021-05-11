<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">

<?php require_once("header.php"); ?>
<?php if(isset($_SESSION['uid']) && $_SESSION['uid'] != 1){print '<META http-equiv="refresh" content="0;URL=index.php">';} ?>
	<div id="extra" class="container">
		<div class="title">
			<h2>Buyurtmalar</h2>
		</div>
		<div class="row">
			<div class='col-md-12'>
				<?php print get_available_orders(); ?>
			</div>
		</div>	
		</div>
	</div>
<?php require_once("footer.php"); ?>