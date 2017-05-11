<?php require_once("db.php"); ?>
<?php require_once("functions.php"); ?>
<?php require_once("header.php"); ?>
<?php if(isset($_SESSION['uid']) && $_SESSION['uid'] != 1){print '<META http-equiv="refresh" content="0;URL=index.php">';} ?>
	<div id="extra" class="container">
		<div class="row">
			<div class="col-md-12"><h3>Yangi tadbir qo'shish</h3></div>
			<div class="col-md-6">
				<form method="post" name="create_bilet" action="actions.php" enctype='multipart/form-data'>
					<input type="hidden" name="form_id" value="create_bilet_form"/>
					<select class="form-control form-text" name="cat_id" style="margin: 5px 0;">
						<?php print getCats(); ?>
					</select>
					<input type="text" name="nomi" placeholder="Tadbir nomini kiriting" class="form-control form-text" />
					<input type="text" name="sana" placeholder="Tadbir sanasini kiriting" class="form-control form-text" />
					<input type="text" name="narxi" placeholder="Bilet narxini kiriting" class="form-control form-text" />
					<input type="text" name="soni" placeholder="Biletlar umumiy sonini kiriting" class="form-control form-text" />
					<input type="text" name="qator" placeholder="Qatorlarning umumiy sonini kiriting" class="form-control form-text" />
					<input type="text" name="joy" placeholder="Joylar sonini kiriting" class="form-control form-text" />
					<textarea name="manzili" class="form-control form-text" rows="5"></textarea>
					<label for="file"><strong>Bilet sur'atini kiriting</strong></label>
					<input type='file' name='file' placeholder="Faylni yuklang" id="file" /><br/>
					<input type="submit" name="zakaz_btn" class="btn btn-success" value="Kiritish" />
				</form>
			</div>
		</div>
		
	</div>
<?php require_once("footer.php"); ?>