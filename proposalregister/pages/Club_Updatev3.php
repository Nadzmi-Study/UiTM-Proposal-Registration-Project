<?php
session_start();
include "connection.php";

if(isset($_SESSION["AID"]) && $_SESSION["AID"]!=null) {
    if(isset($_POST["update"])) {
        // get post values
        $id = $_POST["clubID"];
        $name = $_POST["clubName"];
        $desc = $_POST["clubDesc"];

        // update the club record
        $sql2 = "UPDATE club SET C_Name='$name', C_Desc='$desc' WHERE C_ID='$id'";
        $query = mysqli_query($conn, $sql2) or die(mysqli_error($conn));

        header("Location: http://localhost/proposalregister/index.php");
        exit();
    }
}
?>