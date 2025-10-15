<?php
$file= 'test.txt';

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