<?php


$namefile = $_FILES["codefile"]["tmp_name"];
$problem = $_POST["idactivity"];

$str = file_get_contents('../problems/'.$problem.'/desc.json');
$cases = json_decode($str, true)["cases"]; 

//$problem = "1";
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
	
	$cmd = "python ".$namefile." < ".$tempuri." 2> output";
	
	$result = "";
	$error = "";

	exec($cmd, $result, $error);

	if($error){
		echo '{"status": "error"}';
		return;
	}
	
	if( !count($result) ) {
		echo '{"status": "no-output"}';
		return;
	}

	
	
	$inputs = preg_replace( "/\r|\n/", " ", $inputs );
	if( strcmp( $result[0], $expected )  === 0){
		
	}else{	
		if( strcmp( $str, "") !== 0 )
			$str .= " , ";
		
		$str .= '{"inputs" : "'.$inputs.'", "expected" : "'.$expected.'", "actual": "'.$result[0].'"}';
		$counterror++;
	}
	
	fclose($temp); // isto remove o arquivo
}

if( $counterror == 0)
	echo '{"total": "100", "status": "accepted"}';
else 
	echo '{"total": "'. (100  * $counterror) / $count .'",  "status": "fail", "erro": ['.$str.'] }';
	
	
	
	

?>