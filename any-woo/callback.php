<?php  
	//require_once('meu-wp.php');
	if (isset($_POST)) {
		//LOG
		$myfile = fopen("logDoPost.txt", "w") or die("não deu!");
		$txt = "".print_r($_POST);
		fwrite($myfile, $txt);
		fclose($myfile);
		//FLOG
		$arrayCBack = json_decode($_POST, true);
		switch ($arrayCBack['type']) {
			case 'ORDER':
				
				break;
		}
	}  
?>