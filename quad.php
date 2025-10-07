<?php
function quadratic_eq($a,$b,$c){

$d=($b*$b)-(4*$a*$c);
if($d>0){
$x1=(-$b+sqrt($d)/(2*$a));
$x2=(-$b-sqrt($d)/(2*$a));

echo "Roots are real and different.<br>";
echo "X1 :"." ".$x1 ."<br>";

echo "X1 :"." ".$x2 ."<br>";

}
elseif($d==0){
$x=(-$b/(2*$a));

echo "Roots are real and same.<br>";
 echo "X1 and X2".$x."<br>";
}

else{

    echo "Roots are complex";
}


}

echo quadratic_eq(1,-4,1);

?>

