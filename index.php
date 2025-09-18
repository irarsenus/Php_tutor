<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  
  <form action=" " method="post">
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
      
    
    <button type="submit" class="btn btn-primary mt-3" value="submit" formaction="update.php">update</button>
    <button type="submit" class="btn btn-primary mt-3" value="submit" name="delete" formaction="delete.php">
      delete</button>  
</form>
</div>

</body>


</html>
