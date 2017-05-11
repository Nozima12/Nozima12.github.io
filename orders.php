<?php require_once("header.php"); ?>
<?php if(isset($_SESSION['uid']) && $_SESSION['uid'] != 1){print '<META http-equiv="refresh" content="0;URL=index.php">';} ?>
		<div class="title" style="padding-top: 50px;">
			<h2>Buyurtmalar</h2>
		</div>
		<div class="row">
			<div class='col-md-12' style="padding: 50px;">
				<?php print get_available_orders(); ?>
			</div>
		</div>	
		</div>
<?php require_once("footer.php"); ?>