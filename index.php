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

					<div class="row" style="margin-bottom: 100px;">
					<h3 style="text-align: center;">Entertainment tickets</h3>
						<div class="col-md-12">
						<div class="col-md-4 hovered w-100" style="min-height:200px; background-image:url('images/concerts.jpg')">
							<a href="?t">
								<!--img src="/images/theatre.png" height="100%" width="100%" /-->
								<div class="cover">Concerts</div>
							</a>
						</div>
						<div class="col-md-4 hovered" style="min-height:200px; background-image:url('images/theatre.jpg')">
							<a href="?tt">
								<!--img src="/files/concerts.png" height="352px" width="100%" /-->
								<div class="cover">Theaters</div>
							</a>
						</div>
						<div class="col-md-4 hovered" style="min-height:200px; background-image:url('files/theatre.png')">
							<a href="?ttt">
								<!--img src="/files/theatre.png" height="100%" width="100%" /-->
								<div class="cover">Football</div>
							</a>
						</div>
						</div>
					</div>
					<div class="row" style="margin-bottom: 100px;">
					<h3 style="text-align: center;">Transport tickets</h3>
						<div class="col-md-12">
						<div class="col-md-4 hovered" style="min-height:200px; background-image:url('files/theatre.png')">
							<a href="?tttt">
								<!--img src="/files/theatre.png" height="100%" width="100%" /-->
								<div class="cover">Avia</div>
							</a>
						</div>
						<div class="col-md-4 hovered" style="min-height:200px; background-image:url('files/theatre.png')">
							<a href="?ttttt">

								<!--img src="/files/concerts.png" height="352px" width="100%" /-->
								<div class="cover">Railways</div>
							</a>
						</div>
						<div class="col-md-4 hovered" style="min-height:200px; background-image:url('files/theatre.png')">
							<a href="?tttttt">

								<!--img src="/files/theatre.png" height="100%" width="100%" /-->
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