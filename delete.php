<?php

    include 'connection.php';

    $id=$_GET['id']; 

    // Delete Query
    $deleteQuery="delete from vehicle where id=$id";

    mysqli_query($conn,$deleteQuery);

    header('location:list.php');
?>