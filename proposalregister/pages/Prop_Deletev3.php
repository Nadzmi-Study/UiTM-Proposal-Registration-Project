<?php
session_start();
include "connection.php";

// get proposal details
$sql = "DELETE FROM proposal WHERE P_ID='" . $_POST["propID"] . "'";
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

header("Location: http://localhost/proposalregister/index.php");
exit();
?>