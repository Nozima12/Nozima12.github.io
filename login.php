<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">

<?php require_once("db.php"); ?>
<?php require_once("functions.php"); ?>
<?php require_once("header.php"); ?>
	<div id="extra" class="container">
		<div class="col-md-3">
			<form method="post" name="login_form" action="actions.php">
				<div>
					<label for="email">Loginingiz</label>
					<input type="text" name="email" id="email" placeholder="emailingiz" class="form-control form-text" />
				</div>
				<div>
					<label for="password">Parolingiz</label>
					<input type="password" id="password" name="password" placeholder="parolingiz" class="form-control form-text" />
				</div>
				<div>
					<input type="submit" class="btn btn-primary" id="login" value="Kirish" />
				</div>
				<input type="hidden" name="form_id" value="login_form" />
			</form>
		</div>
	</div>
<?php require_once("footer.php"); ?>