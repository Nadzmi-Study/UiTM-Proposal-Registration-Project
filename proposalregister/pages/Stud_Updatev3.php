<?php
session_start();
include "connection.php";

if(isset($_POST["update"])) {
        $id = $_POST["studID"];
        $name = $_POST["studName"];
        $course = $_POST["studCourse"];
        $sem = $_POST["studSem"];
        $phone = $_POST["phoneNum"];
        $oldPassword = $_POST["oldPassword"];
        $newPassword = $_POST["newPassword"];

        $sql = "SELECT Stu_Password FROM student WHERE Stu_ID='$id'";
        $data = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die(mysqli_error($conn));
        $password = $data["Stu_Password"];

        if($oldPassword != null) {
            if($newPassword != null) {
                if($oldPassword == $password) {
                    $update = "UPDATE student"
                        . " SET Stu_Name='$name',Stu_Course='$course',Stu_Part='$sem',Stu_PhoneNo='$phone',Stu_Password='$newPassword'"
                        . " WHERE Stu_ID='$id'";
                    $query = mysqli_query($conn, $update);

                    header("Location: http://localhost/proposalregister/index.php");
                    exit();
                } else echo "Please enter your valid old password<br><a href=\"http://localhost/proposalregister/pages/Stud_Update.php\"><button>Back</button></a>";
            } else echo "Please Input your new password<br><a href=\"http://localhost/proposalregister/pages/Stud_Update.php\"><button>Back</button></a>";
        } else if($oldPassword==null && $newPassword==null) {
            $update = "UPDATE student "
                    . "SET Stu_Name='$name',Stu_Course='$course',Stu_Part='$sem',Stu_PhoneNo='$phone' "
                    . "WHERE Stu_ID='$id'";
                $query = mysqli_query($conn, $update);

                header("Location: http://localhost/proposalregister/index.php");
                exit();
        }
    }
?>