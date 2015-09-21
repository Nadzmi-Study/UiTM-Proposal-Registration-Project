<!-- php utk register student -->
<?php
if(isset($_POST["submit"])) { // check whether the submit button has been pressed or not
    // get all details of student and initialize each variables
    $id = $_POST["studID"];
    $password = $_POST["password"];
    $name = $_POST["studName"];
    $course = $_POST["studCourse"];
    $sem = $_POST["studSem"];
    $phone = $_POST["phoneNum"];

    registerStudent($id, $password, $name, $course, $sem, $phone); // register the student into database

    header("Location: http://localhost/proposalregister/index.php"); // direct to index page
    exit();
}

function registerStudent($id, $stuPassword, $name, $course, $sem, $phone) {
    include "connection.php"; // make connection to database

    // sql query to register student's detail into database
    $sql = "INSERT INTO student(`Stu_ID`, `Stu_Name`, `Stu_Course`, `Stu_Part`, `Stu_PhoneNo`, `Stu_Password`)"
            . "VALUES('$id', '$name', '$course', '$sem', '$phone', '$stuPassword')";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    mysql_close($conn); // close connection to databse
}
?>
<!-- ############# -->