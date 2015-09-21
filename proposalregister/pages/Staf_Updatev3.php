<?php
session_start();
include "connection.php";

if(isset($_POST["update"])) {
    $id = $_POST["staID"];
    $name = $_POST["staName"];
    $dept = $_POST["dept"];
    $post = $_POST["post"];
    $clubID = $_POST["clubID"];
    $oldPass = $_POST["oldPassword"];
    $newPass = $_POST["newPassword"];

    $sql = "SELECT Sta_Password FROM staff WHERE Sta_ID='$id'";
    $data = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die(mysqli_error($conn));
    $password = $data["Sta_Password"];

    if($oldPass != null) {
        if($newPass != null) {
            if($oldPass == $password) {
                $update = "UPDATE staff "
                    . "SET Sta_Name='$name',Sta_Department='$dept',Sta_Position='$post',C_ID='$clubID',Sta_Password='$newPass' "
                    . "WHERE Sta_ID='$id'";
                $query = mysqli_query($conn, $update);

                header("Location: http://localhost/proposalregister/index.php");
                exit();
            } else echo "Please enter your valid old password<br><a href=\"http://localhost/proposalregister/pages/Staf_Update.php\"><button>Back</button></a>";
        } else echo "Please Input your new password<br><a href=\"http://localhost/proposalregister/pages/Staf_Update.php\"><button>Back</button></a>";
    } else {
        $update = "UPDATE staff "
            . "SET Sta_Name='$name',Sta_Department='$dept',Sta_Position='$post',C_ID='$clubID' "
            . "WHERE Sta_ID='$id'";
        $query = mysqli_query($conn, $update);

        header("Location: http://localhost/proposalregister/index.php");
        exit();
    }
}
?>