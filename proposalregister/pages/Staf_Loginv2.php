<?php
session_start();
include "connection.php";

if(isset($_POST["staLog"])) {
    // get login details
    $staID = trim($_POST["staffID"]);
    $staPassword = trim($_POST["staPass"]);

    // for admin
    $sql = "SELECT * FROM admin WHERE A_ID='$staID' AND A_Password='$staPassword'";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $row = mysqli_fetch_array($query);
    
    // for normal staff
    $sql2 = "SELECT * FROM staff WHERE Sta_ID='$staID' AND Sta_Password='$staPassword'";
    $query2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
    $row2 = mysqli_fetch_array($query2);
    
    // check the database
    if($row > 0) {
        setAdminSessionVar($staID);

        header("Location: http://localhost/proposalregister/index.php");
        exit();
    } else if($row2 > 0) {
        setStaSessionVar($staID);

        header("Location: http://localhost/proposalregister/index.php");
        exit();
    } else echo "Invalid username or password<br><a href=\"http://localhost/proposalregister/pages/Staf_Login.php\"><button>Back</button></a>";
}

function setStaSessionVar($staID) {
    $_SESSION["staID"] = $staID;
}

function setAdminSessionVar($adminID) {
    $_SESSION["AID"] = $adminID;
}
?>