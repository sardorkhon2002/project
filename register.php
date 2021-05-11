
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet" type="text/css" href="cs/fonts.css">
<?php require_once("db.php"); ?>
<?php require_once("functions.php"); ?>
<?php require_once("header.php"); ?>
	<div id="extra" class="container">
		<div class="col-md-3">
			<form method="post" name="register_form" action="actions.php">
				<div>
					<label for="email">Email</label>
					<input type="text" name="email" id="email" placeholder="email" class="form-control form-text" />
				</div>
				<div>
					<label for="password">Password</label>
					<input type="password" id="password" name="password" placeholder="password" class="form-control form-text" />
				</div>
				<div>
					<input type="submit" class="btn btn-primary" id="login" value="Registration" />
				</div>
				<input type="hidden" name="form_id" value="register_form" />
			</form>
		</div>
	</div>
<?php require_once("footer.php"); ?>