<?php
$text= 'C:\xampp\htdocs\php_lesson_2025-2026\crud_node_js.txt';

$file=file_get_contents($text);

if($file===false){

    echo 'error reading file';
}
else{
echo 'the file content is'.$file;
}


?>