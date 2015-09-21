<?php
session_start();
include "connection.php";

$sql = "SELECT * FROM proposal";
$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
while($fetch = mysqli_fetch_array($query) or die(mysqli_error($conn))) {
    if(isset($_POST[$fetch["P_ID"]])) {
        $sql2 = "UPDATE proposal SET P_Status='" . $_POST[$fetch["P_ID"]] . "' WHERE P_ID='" . $fetch["P_ID"] . "'";
        $query2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
        
        header("Location: http://localhost/proposalregister/pages/Prop_Approval.php");
    }
}
?>

