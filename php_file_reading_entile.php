<?php
$text= 'test.txt';

$file=file_get_contents($text);

if($file===false){

    echo 'error reading file';
}
else{
echo 'the file content is'.$content;
}


?>