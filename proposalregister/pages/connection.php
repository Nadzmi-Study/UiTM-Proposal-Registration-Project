<?php
    $server = "127.0.0.1"; // server ip address
    $user = "root"; // username
    $password = "megamanx8"; // password
    $database = "proposalregister"; // database name
    
    $conn = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($conn));
?>