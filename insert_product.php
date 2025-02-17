<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "stock_db";

$conn = mysqli_connect($hostname, $username, $password, $database);

if(!$conn)
{
  die("fail toconnect".mysqli_connect_error());
}
else{
    echo'connected!!!!!!!';
}
?>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $p_id =$_POST['pid'];
    $p_name = $_POST['pname'];
    $p_supplier =  $_POST['psupplier'];
    $p_quantity=  $_POST['pquantity'];

    $sql = "INSERT INTO product_table (product_id,product_name,product_supplier,product_quantity) VALUES 
    ('$p_id','$p_name','$p_supplier','$p_quantity')";

if (mysqli_query($conn,$sql)) {
    echo "data are inserted!!!!";
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

mysqli_close($conn);
?>



