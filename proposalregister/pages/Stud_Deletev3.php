<?php
session_start();
include "connection.php";

$id = $_POST["stuID"];

$sql = "DELETE FROM student WHERE Stu_ID='$id'";
$query = mysqli_query($conn, $sql);
$_SESSION["stuID"] = null;

header("Location: http://localhost/proposalregister/index.php");
exit();
?>