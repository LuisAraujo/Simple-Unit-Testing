<?php
//EXTRATOR DE ERROS
$namefile = $_POST["filename"]; //"file"; //mudar para parâmetro

$handle = fopen($namefile, "r");

$code = "";
while (($line = fgets($handle)) !== false) {
      $code .= $line. ;  
}

echo $code;

?>