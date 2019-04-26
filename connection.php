<?php
$servername = "localhost";
$username = "root";
$password = "Harshk@ansh";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Select Database
mysqli_select_db($conn,'vehicle_details');

