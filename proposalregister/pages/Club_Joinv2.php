<?php
session_start();
include "connection.php";

if(isset($_POST["join"])) {
    $clubID = $_POST["clubID"];
    $stuID = $_SESSION["stuID"];
    
    $sql = "INSERT INTO student_club(`Stu_ID`, `C_ID`) VALUES ('$stuID','$clubID')";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
    header("Location: http://localhost/proposalregister/index.php");
}
?>