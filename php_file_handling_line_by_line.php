<?php
$file= 'C:\xampp\htdocs\php_lesson_2025-2026\crud_node_js.txt';

$handle=fopen($file,'r');

if($handle){
    while(($line=fgets($handle ))!==false)
    {

echo $line."<br>";
    }
   fclose($handle);
}
    else{
 
echo 'error opening ';
    }


?>