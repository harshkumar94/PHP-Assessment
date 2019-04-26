<?php
 
include 'connection.php';

if(isset($_POST['done'])){

    $brandName = $_POST['brandname'];
    $type = $_POST['type'];
    $color = $_POST['color'];
    $price = $_POST['price'];
    $insertquery="insert into `vehicle` (`brand`,`type`,`color`,`price`) values ('$brandName','$type','$color','$price')";
    
    $query = mysqli_query($conn,$insertquery);

    header('location:list.php');
}

?>



<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <title>Page Title</title> -->
</head>
<body>
    <div class="container">
    <h2 align="center">Create Form</h2>
    <form  method="POST">
        <div class="form-group">
            <label for="brand_name">Brand Name</label>
            <input type="text" class="form-control" id="brand_name" name="brandname">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select class="form-control" id="type" name="type">
                
                <option>New</option>
                <option>Used</option>
            </select>
        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <select class="form-control" id="color" name="color">
                <option>Black</option>
                <option>White</option>
                <option>Blue</option>
                <option>Green</option>
                <option>yellow</option>
            </select>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
        <button type="submit" class="btn btn-primary" name="done">Submit</button>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>