<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">

<?php require_once("header.php"); ?>
	<div id="extra" class="container">
		<div class="title">
			<h2>Online Ticket Booking</h2>
		</div>
		<div class="row">
				<?php
					if(isset($_GET['available']))
						print get_available_tickets($_GET['cat_id']);
					elseif(isset($_GET['t']))
						print one();
					elseif(isset($_GET['tt']))
						print two();
					elseif(isset($_GET['ttt']))
						print three();
					elseif(isset($_GET['tttt']))
						print four();
					elseif(isset($_GET['ttttt']))
						print five();
					elseif(isset($_GET['tttttt']))
						print six();
					else{
				?>

					<div  style="margin-bottom: 100px;">
					<h3 style="text-align: center;">Entertainment tickets</h3>
						<div class="col-md-12">
						<div class="col-md-4 hovered w-100" style="min-height:200px;border-radius:20px; background-image:url('images/concerts.jpg')">
							<a href="?t">
								<div class="cover">Concerts</div>
							</a>
						</div>
						<div class="col-md-4 hovered" style="min-height:200px; border-radius:20px; background-image:url('images/theatre.jpg')">
							<a href="?tt">
								<div class="cover">Theaters</div>
							</a>
						</div>
						<div class="col-md-4 hovered" style="min-height:200px; border-radius:20px; background-image:url('images/football.jpg')">
							<a href="?ttt">
								<div class="cover">Football</div>
							</a>
						</div>
						</div>
					</div>
					<div style="margin-bottom: 100px;">
					<h3 style="text-align: center;">Transport tickets</h3>
						<div class="col-md-12">
						<div class="col-md-4 hovered" style="min-height:200px; border-radius:20px; background-image:url('images/avia.jpg')">
							<a href="?tttt">
								<div class="cover">Avia</div>
							</a>
						</div>
						<div class="col-md-4 hovered" style="min-height:200px; border-radius:20px; background-image:url('images/railways.jpg')">
							<a href="?ttttt">
								<div class="cover">Railways</div>
							</a>
						</div>
						<div class="col-md-4 hovered" style="min-height:200px; border-radius:20px; background-image:url('images/bus.png')">
							<a href="?tttttt">
								<div class="cover">Public transport</div>
							</a>
						</div>
						</div>
					</div>
					<?php
				}



?>
		</div>
		</div>
	</div>
<?php require_once("footer.php"); ?>