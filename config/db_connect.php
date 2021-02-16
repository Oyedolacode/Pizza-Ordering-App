<?php

// connect to database
$conn = mysqli_connect('localhost', 'Ola', '1234jam', 'dokka_pizza');

// check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}




?>