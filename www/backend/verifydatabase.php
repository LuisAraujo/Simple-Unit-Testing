<?php

$dir = "../problems";

$cdir = scandir ($dir);

$arr_dir = [];

foreach ($cdir as $key => $value)
   {
      if (!in_array($value,array(".","..")))
      {
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value))
         {
            array_push( $arr_dir, $value);
         }
	  
	  }
}
$arr_dir2["dirs"] = $arr_dir; 
echo json_encode( $arr_dir2 );
?>