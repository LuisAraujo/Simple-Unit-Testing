<?php



$problem = $_POST["idactivity"];
$token = $_POST["idtoken"];

//Creating folder
$uritoken= "../".$token;
if( !mkdir($uritoken) ){
	echo '{"status": "file-error"}';
	return;
}


$tempfile = $_FILES["codefile"]["tmp_name"];
$namefile =$uritoken."/".basename($tempfile, ".tmp").".c";
move_uploaded_file($tempfile, $namefile);



//$namefile = "../code.c";
//$problem = 1;

//Get Json conf 
$str = file_get_contents('../problems/'.$problem.'/desc.json');
$cases = json_decode($str, true)["cases"]; 
	

$count = count($cases);
$counterror = 0;
$n = 1;
$str = "";
	
for($n=0; $n < $count; $n++){
	
	$expected = $cases[$n]["output"];
	$inputs = $cases[$n]["input"];
	
	$temp = tmpfile();
	fwrite($temp, $inputs);
	fseek($temp, 0);
	
	$tempuri= stream_get_meta_data($temp)['uri'];
	
	//$cmd = "python ".$namefile." < ".$tempuri." 2> output";
	$cmd = "gcc ".$namefile." -o ".$uritoken."/file.exe 2> output";

	$result = "";
	$error = "";

	exec($cmd, $result, $error);

	if($error){
		
		echo '{"status": "error"}';
		return;
	}
	
	$cmd = "cd ../".$token." && file.exe  < ".$tempuri." 2> ".$uritoken."/output";
	exec($cmd, $result, $error);
	
	//var_dump($result);	
	
	$inputs = preg_replace( "/\r|\n/", " ", $inputs );
	$actual_output = "";
	for($j = 0; $j < count($result); $j++)
		$actual_output .= $result[$j];

	if( strcmp( $actual_output , $expected )  === 0){
		
	}else{	
		if( strcmp( $str, "") !== 0 )
			$str .= " , ";
		
		$str .= '{"inputs" : "'.$inputs.'", "expected" : "'.$expected.'", "actual": "'.$actual_output.'"}';
		$counterror++;
	}
	
	fclose($temp); // isto remove o arquivo
}

if( $counterror == 0)
	echo '{"total": "100", "status": "accepted"}';
else 
	echo '{"total": "'. (100  * $counterror) / $count .'",  "status": "fail", "erro": ['.$str.'] }';
	
//removing files
unlink($uritoken."/file.exe");	
unlink($uritoken."/output");	
unlink($namefile);	
rmdir($uritoken);

?>