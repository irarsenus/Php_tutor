<?php

function mutlti_table($number,$limit){
$i=1;
do{
echo $i."*".$number."=".$i*$number;
$i++;
echo "<br>";
}
while($i<=$limit);
 return $i*$number;
}

echo mutlti_table(8,10);


?>