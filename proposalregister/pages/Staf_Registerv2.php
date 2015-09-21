<!-- php utk register staff -->
<?php
if(isset($_POST["submit"])) { // check whether submit button has been clicked
    // get staff's details and initialize variables
    $id = $_POST["staffID"];
    $name = $_POST["staffName"];
    $staPassword = $_POST["password"];
    $dept = $_POST["staffDept"];
    $post = $_POST["staffPost"];

    registerStaff($id, $name, $staPassword, $dept, $post); // register staff

    header("Location: http://localhost/proposalregister/index.php"); // direct to index page
    exit();
}

function registerStaff($id, $name, $staPassword, $dept, $post) {
    include "connection.php"; // make connection to database

    // make sql query to register staff into database
    $sql = "INSERT INTO staff(Sta_ID, Sta_Name, Sta_Department, Sta_Position, Sta_Password) "
            . "VALUES('$id', '$name', '$dept', '$post', '$staPassword')";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    mysqli_close($conn); // close connection
}
?>
<!-- ############# -->