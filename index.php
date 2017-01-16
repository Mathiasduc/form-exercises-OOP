<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 

	if(!$_POST){
		include './form.php';
	}else{
		$newUser = new UserFormSent($_POST, $_FILES);
		var_dump($newUser->getter("name"));
	}
	class UserFormSent {
		private $gender = "undefined";
		private $first_name = "undefined";
		private $name = "undefined";
		private $fileSize = 0;
		private $errorCode = 0;
		private $fileTmpName = "";

		function __construct($UserInfo, $fileSent)
		{
			if(!$UserInfo || !$fileSent){
				throw new Exception("This class need _POST data AND _FILES data", 1);	
			}
			elseif(preg_match("/^(.*\.(?!(pdf)$))?[^.]*$/i", $fileSent["file"]["name"])) {
				throw new Exception("The file need to be a pdf", 1);
			}
			else{
				$this->gender = $UserInfo["gender"];
				$this->first_name = $UserInfo["first_name"];
				$this->name = $UserInfo["name"];
				$this->fileSize = $fileSent["file"]["name"];
				$this->errorCode = $fileSent["file"]["error"];
				$this->fileTmpName = $fileSent["file"]["tmp_name"];
			}
		}
		public function getter($toGet="all") {
			if($toGet !== "all"){
				return($this->$toGet);
			}else{
				return($this);
			}
		}
	}	
	?>
</body>
</<html></html>>