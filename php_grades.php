/* if elseif else */
<?php
$marks = 45;

if($marks >=90)
    echo "grade is A:". $marks;
elseif($marks>=80)
    echo "grade is B :".$marks;
elseif($marks>=70)
    echo "grade is C :".$marks;
elseif($marks>=60)
    echo "grade is D :".$marks;
elseif($marks>=50)
    echo "grade is E :".$marks;
else
    echo "grade is F :".$marks;

?>