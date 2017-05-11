<?php require_once("header.php"); ?>
<div  class="container" style="">
	<div class="row">
		<div class="col-md-12">
			<div class="title">
				<h3 style="text-align: center; padding-top: 50px;">BIZ HAQIMIZDA</h3>
			</div>
			<div class="aaa">
				<p style="text-align: center;">Bizning tashkilot 2016 yil 21 oktyabrdan beri faoliyat ko'rsatmoqda. Bizning tashkilot orqali chiptalarni internet orqali sotib olish imkoni paydo bo’ladi, bu esa o’z navbatida avvaldan sotish kassalari bo’lmagan, uzoq aholi turar joylarida yashovchi fuqorolar  uchun juda katta  qulayliklar yaratadi. Saytimiz orqali konsert, kino, avia, fudbol, temiryo'l chiptalari sotuvga qo'yilgan.
		 	</p>
			</div>
		 	<div class="title">
				<h3 style="text-align: center;">HAMKORLARIMIZ</h3>
			</div>
			<div class="aaa">
				<ul style="text-align: center;">
					<li>«O’zbekiston temir yo’llari» AJ</li>
					<li>«Alisher Navoiy» kinoteatri</li>
					<li>«O'zbekiston havo yo'llari»</li>
					<li>«Xalqlar do'stligi» saroyi</li>
					<li>«Bunyodkor» stadioni</li>
					<li>«G'uncha» kinoteatri</li>
					<li>«Paxtakor» stadioni</li>
				</ul>
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="title">
			<h3 style="text-align: center;">TASHKILOTIMIZ A'ZOLARI</h3>
			</div>
			<div class="aaa">
			<div class="col-md-3">
				<h4>Aziza Yuldasheva</h4>
				<p><i>Direktor</i></p>
				
				<p>Toshkent shahridagi Inha Universiteti 2-kurs talabasi</p>
			</div>
			<div class="col-md-3">
				<h4>Komola Samigova</h4>
				<p><i>Manager</i></p>
				
				<p>Toshkent shahridagi Inha Universiteti 2-kurs talabasi</p>
			</div>
			<div class="col-md-3">
				<h4>Nozima Musaboyeva</h4>
				<p><i>Programmist</i></p>
				
				<p>Toshkent shahridagi Inha Universiteti 2-kurs talabasi</p>
			</div>
			<div class="col-md-3">
				<h4>Maftuna Olimjonova</h4>
				<p><i>Programmist</i></p>
				
				<p>Toshkent shahridagi Inha Universiteti 2-kurs talabasi</p>
			</div>
			</div>
		</div>	
	</div>
<h3>Comments</h3>
<?php print getComments(); ?>

<div class="col-md-12">
		<div id="addCommentContainer">
		<p>Add a Comment</p>
		<form id="addCommentForm" method="post" action="actions.php">
	    	<div>
	        	<label for="name">Your Name</label>
	        	<input type="text" class="form-text form-control" name="name" id="name" value="<?php print getName(); ?>"/>

	            <label for="body">Comment Body</label>
	            <textarea name="body" id="body" class="form-textarea form-control" cols="20" rows="5"></textarea>
	            <input type="hidden" name="form_id" value="comment_form" />
	            <input type="submit" class="form-submit btn btn-primary" id="submit" value="Add comment" />
	        </div>
	    </form>
		</div>
	</div>

