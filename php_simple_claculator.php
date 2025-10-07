<?php
$op=array('+','-','*','/','%');

$m=100;
$n=5;
switch($op[0]){
    
case'+':
    echo "the sum is:".($m+$n);
    break;
    case'-':
    echo "the sub is:".($m-$n);
    break;
    case'*':
    echo "the product  is:".($m*$n);
    break;
    case'/':
    echo "the division is:".($m/$n);
    break;
    case'%':
    echo "the reminder is:".($m%$n);
    break;
    default:
    echo "invalid operator";
    break
;


}
?>