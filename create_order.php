<?php require_once("db.php"); ?>
<?php require_once("functions.php"); ?>
<?php require_once("header.php"); ?>
<?php if(!is_user_logged_in()) { set_message("Faqat saytga avtorizatsiya bo'lganlar buyurtma berishlari mumkin"); print '<META http-equiv="refresh" content="0;URL=index.php">'; } ?>
	<div id="extra" class="container">
		<div class="row">
			<div class="col-md-12"><h3>Buyurtma berish</h3></div>
			<div class="col-md-6">
				<form method="post" name="create_order" action="actions.php">
					<input type="hidden" name="form_id" value="create_order_form"/>
					<?php $ticket_id = getTicketId($_GET); ?>
					<input type="hidden" name="bilet_id" value="<?php print $ticket_id; ?>"/>
					<input type="text" name="pas_seriya" placeholder="Pasportingiz seriyasini kiriting" class="form-control form-text" />
					<input type="text" name="fname" placeholder="Ismingizni kiriting" class="form-control form-text" />
					<input type="text" name="lname" placeholder="Familyangizni kiriting" class="form-control form-text" />
					<input type="text" name="phone" placeholder="Telefon raqamingizni kiriting" class="form-control form-text" />
					<?php $qatorlar = getTicketData('qator', $ticket_id); ?>
					<select class="form-control form-text" name="soni" style="margin: 5px 0;">
						<option value="0"> - Bilet sonini kiriting - </option>
						<?php for($i = 1; $i <= 30; $i++): ?>
							<option value="<?php print $i; ?>"><?php print $i; ?></option>
						<?php endfor; ?>
					</select>
					<select class="form-control form-text" name="qator" style="margin: 5px 0;">
						<option value="0"> - Qatorni tanlang - </option>
						<?php for($i = 1; $i <= $qatorlar; $i++): ?>
							<option value="<?php print $i; ?>"><?php print $i; ?></option>
						<?php endfor; ?>
					</select>
					<input type="text" name="joy" placeholder="Joy raqamini kiriting" class="form-control form-text" />
					<textarea name="address" class="form-control form-text" rows="5"></textarea>
					<input type="submit" name="zakaz_btn" class="btn btn-success" value="Buyurtma berish" />
				</form>
			</div>
		</div>
		
	</div>
<?php require_once("footer.php"); ?>