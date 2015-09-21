<?php
session_start();
include "connection.php";

if(isset($_POST["delete"])) {
    $id = $_POST["staID"];
    
    $sql = "DELETE FROM staff WHERE Sta_ID='$id'";
    $query = mysqli_query($conn, $sql);
    $_SESSION["staID"] = null;

    header("Location: http://localhost/proposalregister/index.php");
    exit();
}
?>