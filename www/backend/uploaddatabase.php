<?php

$namefile = $_FILES["database"]["name"];
$tempfile = $_FILES["database"]["tmp_name"];

$pathfile = "../problems/".$namefile;

if( !is_dir( "../problems/".basename($namefile, ".zip") )){
	move_uploaded_file($tempfile, $pathfile);

	$zip = new ZipArchive;
	$res = $zip->open($pathfile);
	if ($res === TRUE) {
	
		$zip->extractTo("../problems/".basename($namefile, ".zip")."/");
		$zip->close();
		
		unlink($pathfile);
		
		echo '{"status": "sucess"}';
	
	} else {
		echo '{"status": "error"}';
	}
 
}else{
	echo '{"status": "duplicated"}';
}
?>