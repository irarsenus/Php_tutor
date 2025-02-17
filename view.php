<?php
$servername="localhost";
$username="root";
$password="";
$db="stock_db";

$connect=mysqli_connect($servername,$username,$password,$db);
?>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<div class="container">
  
  <form action="view.php" method="post">
    <div class="row">
      <div class="col">
      <label for="exampleInputEmail1">product_id</label>
        <input type="text" class="form-control" id="email" placeholder="product_id" name="pid">
      </div>
      <div class="col">
      <label for="exampleInputEmail1">product_name</label>
        <input type="text" class="form-control" placeholder="product_name" name="pname">
      </div>
    </div>
    <div class="row">
      <div class="col">
      <label for="exampleInputEmail1">product_supplier</label>
        <input type="text" class="form-control" id="email" placeholder="product_supplier" name="psupplier">
      </div>
      <div class="col">
      <label for="exampleInputEmail1">quantity</label>
        <input type="text" class="form-control" placeholder="product_quantity" name="pquantity">
      </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3" value="submit" formaction="insert_product.php">Add</button>
    
    <button type="submit" class="btn btn-primary mt-3" value="submit" formaction="view.php">
    
     view</button>
    </a>  
    
    <button type="submit" class="btn btn-primary mt-3"  value="submit" formaction="update.php" >update</button>
    <button type="submit" class="btn btn-primary mt-3" value="submit" formaction="delete.php">
      delete</button>  
</form>
</div>
<?php
if($connect)
{
    echo "succesfully connected ";
}
else{
    echo "not connected";
}
    ?>

<h3>List of product</h3>
<table border="1">
    <thead>
        <tbody>
            <tr>
                <td>PRODUCT ID</td>
                <td>PRODUCT NAME</td>
                <td>PRODUCT SUPPLIER</td>
                <td>PRODUCT QUANTITY</td>


</tr>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$query="select*from product_table";
$sql_test=mysqli_query($connect,$query);
if(mysqli_num_rows($sql_test)>0)
{
    foreach($sql_test as $prod)
{
?>
<tr>
    <td><?=$prod['product_id'];?></td>
    <td><?=$prod['product_name'];?></td>
    <td><?=$prod['product_supplier'];?></td>
    <td><?=$prod['product_quantity'];?></td>

</tr>

<?php

}}
else
{
    echo "no records found";

}}
?>


</thead>
</tbody>
</table>
