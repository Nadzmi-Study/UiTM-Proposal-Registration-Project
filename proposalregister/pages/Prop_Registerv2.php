<?php
// register proposal
session_start();

if(isset($_POST["register"])) { // check whether user has clicked submit button or not
    // get proposal details and initialize all of the variables
    if(isset($_SESSION["AID"]) && $_SESSION["AID"]!=null) {
        $name = $_POST["proposalName"];
        $loc = $_POST["proposalLoc"];
        $date = $_POST["proposalDate"];
        $budget = $_POST["proposalBudget"];
        $participant = $_POST["participantNum"];
        $desc = $_POST["proposalDesc"];
        $leader = $_POST["leaderName"];
        $id = $_POST["stuID"];
        $clubID = $_POST["clubID"];

        registerProposal($name,$loc,$date,$budget,$participant,$desc,$leader,$id,$clubID);

        header("Location: http://localhost/proposalregister/index.php");
    } else if(isset($_SESSION["stuID"]) && $_SESSION["stuID"]!=null) {
        $name = $_POST["proposalName"];
        $loc = $_POST["proposalLoc"];
        $date = $_POST["proposalDate"];
        $budget = $_POST["proposalBudget"];
        $participant = $_POST["participantNum"];
        $desc = $_POST["proposalDesc"];
        $leader = $_POST["leaderName"];
        $id = $_SESSION["stuID"]; // get current session id
        $clubID = $_POST["clubID"];

        registerProposal($name,$loc,$date,$budget,$participant,$desc,$leader,$id,$clubID);
    }
}

function registerProposal($name,$loc,$date,$budget,$participant,$desc,$leader,$id,$clubID) {
    include "connection.php";

    $sql = "INSERT INTO proposal(`P_Name`, `P_Location`, `P_Date`, `P_Budget`, `P_Participant`, `P_Description`, `P_ProjectLeader`, `Stu_ID`, `C_ID`)"
            . "VALUES('$name', '$loc', '$date', '$budget', '$participant', '$desc', '$leader', '$id', '$clubID')";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
    header("Location: http://localhost/proposalregister/index.php");
}
?>