<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding Numbers in Php</title>
</head>
<body bgcolor="teal">
<table  width="100%" height="100%" border="0"> 
<tr>
    <td>
        <fieldset> 

        <legend>PHP Adding Numbers  Form</legend>
<form method="POST" action="" align="center">
    <label> First Number </label>
    <input type="text" name="num1" value=" ">
 <br> <br>
      <label> Second  Number </label>
    <input type="text" name="num2" value=" ">
<br> <br>
    <input type="submit" name= "submit" value="Add">
<br> <br>
</form>
</fieldset>
</td>
</tr>
</table>  
<?php
if(isset($_POST['submit'])){

$X=$_POST ['num1'];
$y=$_POST['num2'];
$result= $X+$y;
echo "<h3> The Result of sum $X and $y is :$result</h3>";
}
?>

</body>
</html>

