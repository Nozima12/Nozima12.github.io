<?php
	session_start();
	require_once("db.php");
	require_once("functions.php");
	require_once("upload_class.php");
	global $mysqli;
	
	if(isset($_POST['form_id'])){
		if(!empty($_POST['form_id'])){
			$errors = array();
			if($_POST['form_id'] == 'register_form') {
				$email = validate($_POST['email']);
				$password = validate($_POST['password']);
				$sql = "INSERT INTO `users` (`id`,`login`,`password`, `role`) VALUES (NULL, '".$email."', '".md5($password)."', '2')";
				$query = $mysqli->query($sql);
				set_message("Muvaffaqiyatli registratsiya",'success');
				header("Location: login.php");
			}
			
			if($_POST['form_id'] == "login_form"){
				if(isset($_POST['email'])) {
					if(!empty($_POST['email'])){
						$email = validate($_POST['email']);
					}else{
						$errors[] = "Email kiritilmagan";
					}
				}
				if(isset($_POST['password'])) {$password = md5(validate($_POST['password']));}
				if(empty($errors)){
					$query = "SELECT * FROM users WHERE login='".$email."' AND password='".$password."'";
					$query2 = $mysqli->query($query);
					$result = $query2->fetch_assoc();
					if(!isset($query2->num_rows)){
						set_message("Login yoki parol xato kiritilgan",'danger');
						header("Location: login.php");
					}
					if(count($result) > 0){
						$_SESSION['uid'] = $result['id'];
						$_SESSION['logged_in'] = true;
						$query = "UPDATE users SET updated='".date("Y-m-d H:i:s")."' WHERE id = '".$result['id']."'";
						$query2 = $mysqli->query($query);
						set_message("Siz admin sahifasiga muvaffaqiyatli kirdingiz");
						header("Location: orders.php");
					}
				}else{
					set_message($errors[0],'danger');
					header("Location: login.php");
				}
			}

			if($_POST['form_id'] == 'comment_form') {
				global $mysqli;
				if(isset($_POST['name'])) {$name = $_POST['name'];}
				if(isset($_POST['email'])) {$email = $_POST['email'];}
				if(isset($_POST['body'])) {$body = $_POST['body'];}
				if(isset($_SESSION['uid'])) {$uid = $_SESSION['uid'];
				} else {
					$uid = 0;
				}
				if(isset($name) && isset($body)) {
					$sql = "INSERT INTO `comments` (`comment`, `name`) VALUES ('" . $body . "', '" . $name . "')";
					$query = $mysqli->query($sql);
					if($query){	
						set_message("Kommentariy muvaffaqiyatli qo'shildi.");
						header("Location: aboutus.php");				
					}
				} else {
					set_message("Kommentariya muvaffaqiyatli qo'shildi.");
						header("Location: aboutus.php");
				}
			}
			
			if($_POST['form_id'] == "create_order_form"){
				if(isset($_POST['bilet_id'])) {$bilet_id = validate($_POST['bilet_id']);}
				if(isset($_POST['fname'])) {$fname = validate($_POST['fname']);}
				if(isset($_POST['lname'])) {$lname = validate($_POST['lname']);}
				if(isset($_POST['phone'])) {$phone = validate($_POST['phone']);}
				if(isset($_POST['address'])) {$address = validate($_POST['address']);}
				if(isset($_POST['soni'])) {$soni = validate($_POST['soni']);}
				if(isset($_POST['qator'])) {$qator = validate($_POST['qator']);}
				if(isset($_POST['joy'])) {$joy = validate($_POST['joy']);}
				if(isset($_POST['pas_seriya'])) {$pas_seriya = validate($_POST['pas_seriya']);}
				
				$new_soni = getTicketData('soni', $bilet_id) - $soni;	
				$new_joy = getTicketData('joy', $bilet_id) - $soni;	
				
				$sql1 = "INSERT INTO `zakaz` (`id`, `uid`, `bilet_id`,`user_fname`, `user_lname`, `soni`, `manzil`, `phone`, `qator`, `joy`, `pass_seriya`) VALUES (NULL, '".$_SESSION['uid']."', '".$bilet_id."', '".$fname."', '".$lname."', '".$soni."', '".$address."', '".$phone."', '".$qator."', '".$joy."', '".$pas_seriya."')";
				$query1 = $mysqli->query($sql1);
				
				$sql2 = "UPDATE `Bilet` SET `soni`='".($new_soni)."', `joy`='".$new_joy."' where id=".$bilet_id."";
				$query2 = $mysqli->query($sql2);
				
				if($query2){			
					set_message("Buyurtmangiz qabul qilindi. Tez orada siz bilan bog'lanamiz. ");
					header("Location: index.php");				
				}
			}
			
			if($_POST['form_id'] == "create_bilet_form"){
				if(isset($_POST['cat_id'])) {$cat_id = validate($_POST['cat_id']);}
				if(isset($_POST['nomi'])) {$nomi = validate($_POST['nomi']);}
				if(isset($_POST['sana'])) {$sana = validate($_POST['sana']);}
				if(isset($_POST['narxi'])) {$narxi = validate($_POST['narxi']);}
				if(isset($_POST['soni'])) {$soni = validate($_POST['soni']);}
				if(isset($_POST['qator'])) {$qator = validate($_POST['qator']);}
				if(isset($_POST['joy'])) {$joy = validate($_POST['joy']);}
				if(isset($_POST['manzili'])) {$manzili = validate($_POST['manzili']);}
				if(isset($_FILES['file'])) {$file = $_FILES['file'];}

				If($file){
					$uploadFile = new Upload();
					$success = $uploadFile->uploadFile($_FILES['file']);
					
					$file = fopen("links.txt","w");
					$link = file_get_contents('links.txt');
					$text = $link."\n".$_FILES['file']['name'];
					file_put_contents('links.txt',$text);
				}
				
				//print_r($_POST); 
/* ALTER TABLE  `Bilet` ADD  `uri` VARCHAR( 255 ) NOT NULL ; */
				
//print_r($_FILES); exit;

				$sql2 = "INSERT 
					INTO `Bilet` 
						(
							`id`,
							`cat_id`,
							`nomi`,
							`manzili`,
							`sana`,
							`narxi`, 
							`soni`,
							`qator`, 
							`joy`,
							`uri`
						)
						VALUES(
							'NULL',
							'".$cat_id."',
							'".$nomi."',
							'".$manzili."',
							'".$sana."',
							'".$narxi."', 
							'".$soni."',
							'".$qator."', 
							'".$joy."',
							'".$_FILES['file']['name']."'
						) 
					";
				$query2 = $mysqli->query($sql2);
				if($query2){			
					set_message("Yangi tadbir muvaffaqiyatli kiritildi.");
					header("Location: index.php");				
				}
			}
		}	
	}

?>