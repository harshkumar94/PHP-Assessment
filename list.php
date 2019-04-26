<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <title>Page Title</title> -->
</head>
<body>
    <div class="container">
        <h2 align="center">List Of Vehicles</h2>
        <a href="insert.php"><button class="btn btn-primary my-4 float-right">New</button></a>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Type</th>
                    <th scope="col">Color</th>
                    <th scope="col">Price</th>
                    <th colspan="2"><span class="ml-5">Action</span></th>
                </tr>
            </thead>

            <?php

                include 'connection.php';

                $selectquery = "select * from vehicle";
                $query = mysqli_query($conn, $selectquery);

                while ($result = mysqli_fetch_array($query)) {
            ?>
                            <tbody>
                                <tr>
                                    <td scope="row"><?php echo $result['id']; ?></td>
                                    <td><?php echo $result['brand']; ?></td>
                                    <td><?php echo $result['type']; ?></td>
                                    <td><?php echo $result['color']; ?></td>
                                    <td><?php echo $result['price']; ?></td>
                                    <td><button class="btn btn-primary"><a href="update.php?id=<?php echo $result['id']; ?>" class="text-white">Edit</a></button></td>
                                    <td><button class="btn btn-danger"><a href="delete.php?id=<?php echo $result['id']; ?>" class="text-white" onclick="return myFunction()">Delete</a></button></td>
                                </tr>
                            </tbody>

            <?php
                }
            ?>

        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<script>
    function myFunction() {
        if(!confirm("Are you sure you want to delete this?"))
        event.preventDefault();
  }
</script>