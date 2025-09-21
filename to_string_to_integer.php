<?php
 //string to inteegr 

$string="123456789";
$number=(int)$string;
echo "$number"; 

//-----integer to string ---

$integer=34567;
$to_string=(string)$integer;
echo $to_string; 

$fruits=['mango','banana','pineApple','apple'];


     echo $fruits[2]; 

$fruits=array('mango','banana','pineApple','apple');
     echo $fruits[3]; 

     $course= array("name"=>"php-programming",
                    "duration"=>120,
                    "Teacher"=>"Tito");
                    $x=67; 
                    $y=100;
                    
  echo 'the course duration is:'.$course["duration"].'Hours';
  echo "<br>";
  echo 'the course Teacher is:'. $course["Teacher"];
  
  echo "<br>";
  echo "the course Teacher is:". $x+$y;
echo "<br>";
  echo $x+=$y;
echo "<br>";
  echo $x-=$y;
echo "<br>";
  echo $x*=$y;







?>