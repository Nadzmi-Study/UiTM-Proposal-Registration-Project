<?php
session_start();
include "connection.php";

if(isset($_POST["delAdmin"])) {
    $sql = "DELETE FROM admin WHERE 1";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    $_SESSION["staID"] = null;
    $_SESSION["AID"] = null;

    header("Location: http://localhost/proposalregister/index.php");
} else echo "error";
?>