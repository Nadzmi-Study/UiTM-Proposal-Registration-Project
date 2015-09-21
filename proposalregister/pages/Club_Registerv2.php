<?php
session_start();
include "connection.php";

if(isset($_SESSION["AID"]) || $_SESSION["AID"]!=null) {
    if(isset($_POST["ASubmit"])) { // when the form has been submitted
        $staID = $_POST["staID"];
        
        // get club id of specified staff
        $sql = "SELECT * FROM staff WHERE Sta_ID='$staID'";
        $query = mysqli_fetch_assoc(mysqli_query($conn, $sql)); 

        if($query["C_ID"] == null) { // check whether the staff has been registered into any club
            // get data of the specified staff
            $sql2 = "SELECT * FROM staff WHERE Sta_ID='$staID'"; 
            $fetch = mysqli_fetch_assoc(mysqli_query($conn, $sql2));

            // initialize every attribute
            $name = $_POST["clubName"];
            $desc = $_POST["clubDesc"];
            $staName = $fetch["Sta_Name"];
            
            registerClub($name, $desc, $staName, $staID); // register the club under the staff's name
            header("Location: http://localhost/proposalregister/index.php"); // redirect to index page
        } else {
            // prompt a message to so that the staff cannot register more than 1 club
            echo "You cannot register more than 1 club<br>"
            . "<a href=\"http://localhost/proposalregister/index.php\">HOME</a>";
        }
    }
} else if(isset($_SESSION["staID"]) || $_SESSION["staID"]!=null) { // only staff can register club
    if(isset($_POST["staSubmit"])) { // when the form has been submitted
        // get club id of specified staff
        $sql = "SELECT * FROM staff WHERE Sta_ID='" . $_SESSION["staID"] . "'";
        $query = mysqli_fetch_assoc(mysqli_query($conn, $sql)); 

        if($query["C_ID"] == null) { // check whether the staff has been registered into any club
            // get data of the specified staff
            $sql2 = "SELECT * FROM staff WHERE Sta_ID='" . $_SESSION["staID"] . "'"; 
            $fetch = mysqli_fetch_assoc(mysqli_query($conn, $sql2));

            // initialize every attribute
            $name = $_POST["clubName"];
            $desc = $_POST["clubDesc"];
            $staName = $fetch["Sta_Name"];
            
            registerClub($name, $desc, $staName, $_SESSION["staID"]); // register the club under the staff's name
            header("Location: http://localhost/proposalregister/index.php"); // redirect to index page
        } else {
            // prompt a message to so that the staff cannot register more than 1 club
            echo "You cannot register more than 1 club<br>"
            . "<a href=\"http://localhost/proposalregister/index.php\">HOME</a>";
        }
    }
}

function registerClub($name, $desc, $adv, $staID) { // register the club
    include "connection.php";
    
    // register the club
    $sql = "INSERT INTO club (`C_Name`,`C_Desc`,`C_Advisor`) VALUES ('$name','$desc','$adv')";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
    // update staff's details about club id
    $get = "SELECT * FROM club WHERE C_Name='$name' AND C_Desc='$desc' AND C_Advisor='$adv'";
    $fetch = mysqli_fetch_assoc(mysqli_query($conn, $get)) or die(mysqli_error($conn));
    $sql2 = "UPDATE staff SET C_ID='" . $fetch["C_ID"] . "' WHERE Sta_ID='$staID'";
    $query2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
}
?>
