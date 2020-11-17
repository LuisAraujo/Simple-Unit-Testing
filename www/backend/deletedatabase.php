<?php

$database = $_POST["database"];
	
$dirPath = "../problems/".$database."/";

deleteDir($dirPath);

function deleteDir($dirPath) {
	
	$files = glob($dirPath . '*', GLOB_MARK);
	
	foreach ($files as $file) {
		
		if (is_dir($file)) {
			deleteDir($file);
		} else {
			unlink($file);
		}
	}

	rmdir($dirPath);
}


echo '{"name" : "'.$database.'"}';


?>