<?php
session_start();
include "connection.php";

if(isset($_POST["updatev2"])) {
    // get proposal details
    $propID = $_POST["propID"];
    $propName = $_POST["propName"];
    $leaderName = $_POST["leaderName"];
    $location = $_POST["location"];
    $date = $_POST["date"];
    $budget = $_POST["budget"];
    $participant = $_POST["participant"];
    $desc = $_POST["desc"];
    $cID = $_POST["cID"];

    $sql = "UPDATE proposal "
            . "SET `P_Name`='$propName', `P_Location`='$location', `P_Date`='$date', `P_Budget`='$budget', `P_Participant`='$participant', `P_Description`='$desc', `P_ProjectLeader`='$leaderName', `C_ID`='$cID' "
            . "WHERE `P_ID`='$propID'";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    header("Location: http://localhost/proposalregister/index.php");
    exit();
}
?>