<?php
function factorial($n){
    /*  function definition */
if($n<0){
    return "not valid";
}
$fact=1;
for($i =1;  $i<=$n;$i++){
$fact=$fact*$i;

}
return $fact;
}
$number=4;
/* function call */
echo factorial($number);

?>