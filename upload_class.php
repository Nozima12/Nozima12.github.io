<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="stylesheet" type="text/css" href="css/fonts.css">
<?php
	class Upload {
		protected $dir;
		protected $mime_type;
		
		public function uploadFile($file){
			if($this->dangerous($file)) return false;
			$uploadFile = "files/".$file['name'];
			return move_uploaded_file($file['tmp_name'],$uploadFile);
		}
		
		protected function dangerous($file){
			$blackList = array('.php','php3','php4','php5','.html','.htm');
			foreach ($blackList as $item){
				if(preg_match('/$item\$/i',$file['name'])) return false;
			}
		}
	}

//echo substr('salom.php',strlen('salom.php')-3,strlen('salom.php'));


?>