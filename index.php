<?php require_once("header.php"); ?>
	<div id="extra" class="container">
		<div class="title">
			<h2>Biletlarga onlayn buyurtma berish</h2>
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





					<div class="row">	
					<h3 style="text-align: center;">Ko'ngilochar biletlar</h3>
						<div class="col-md-12">
						<div class="col-md-4 hovered" style="min-height:300px; background-image:url('files/w.jpg')">
							<a href="?t">
								<!--img src="/files/theatre.png" height="100%" width="100%" /-->
								<div class="cover">Konsert biletlari</div>
							</a>
						</div>
						<div class="col-md-4 hovered" style="min-height:300px; background-image:url('files/eeee.jpg')">
							<a href="?tt">
								<!--img src="/files/concerts.png" height="352px" width="100%" /-->
								<div class="cover">Teatr biletlari</div>
							</a>
						</div>
						<div class="col-md-4 hovered" style="min-height:300px; background-image:url('files/footbol.jpg')">
							<a href="?ttt">
								<!--img src="/files/theatre.png" height="100%" width="100%" /-->
								<div class="cover">Fudbol biletlari</div>
							</a>
						</div>
						</div>
					</div>	
					<div class="row" style="margin-bottom: 100px;">	
					<h3 style="text-align: center;">Transport biletlari</h3>
						<div class="col-md-12">
						<div class="col-md-4 hovered" style="min-height:300px; background-image:url('files/a.jpg')">
							<a href="?tttt">
								<!--img src="/files/theatre.png" height="100%" width="100%" /-->
								<div class="cover">Avia biletlar</div>
							</a>
						</div>
						<div class="col-md-4 hovered" style="min-height:300px; background-image:url('files/images.jpg')">
							<a href="?ttttt">
							
								<!--img src="/files/concerts.png" height="352px" width="100%" /-->
								<div class="cover">Temiryo'l biletlari</div>
							</a>
						</div>
						<div class="col-md-4 hovered" style="min-height:300px; background-image:url('files/ccc.jpg')">
							<a href="?tttttt">
							
								<!--img src="/files/theatre.png" height="100%" width="100%" /-->
								<div class="cover">Oylik yo'l biletlari</div>
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