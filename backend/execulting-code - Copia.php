<?php

//$namefile = "../code.py";
//$problem = "1";

$namefile = $_FILES["codefile"]["tmp_name"];
$problem = $_POST["idactivity"];


//$problem = "1";
$count = 2;
$counterror = 0;
$n = 1;
$str = "";

for($n=1; $n <= $count; $n++){
	
	$cmd = "python ".$namefile." < ../problems/".$problem."/datatest0".$n.".txt 2> output";
	

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

	//pode vim do banco
	$file = fopen("../problems/".$problem."/expected0".$n.".txt", "r");
	$expected = fgets($file);

	$file2 = fopen("../problems/".$problem."/datatest0".$n.".txt", "r");
	$inputs = fgets($file2);
	$inputs = preg_replace( "/\r|\n/", "", $inputs );
	if( strcmp( $result[0], $expected)  === 0){
		
	}else{	
		if( strcmp( $str, "") !== 0 )
			$str .= " , ";
		
		$str .= '{"inputs" : "'.$inputs.'", "expected" : "'.$expected.'", "actual": "'.$result[0].'"}';
		$counterror++;
	}
	
}

if( $counterror == 0)
	echo '{"total": "100", "status": "accepted"}';
else 
	echo '{"total": "'. (100  * $counterror) / $count .'",  "status": "fail", "erro": ['.$str.'] }';
	
	
	
	

?>