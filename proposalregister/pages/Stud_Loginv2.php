<?php
session_start();
include "connection.php";

if(isset($_POST["stuLog"])) {
    // get login details
    $stuID = trim($_POST["studID"]);
    $stuPassword = trim($_POST["stuPass"]);
    
    login($stuID, $stuPassword);
}

function login($stuID, $stuPassword) {
    include "connection.php";
    
    $sql = "SELECT * FROM student WHERE Stu_ID='$stuID' AND Stu_Password='$stuPassword'";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    $row = mysqli_fetch_array($query);
    if($row > 0) {
        $_SESSION["stuID"] = $stuID;

        header("Location: http://localhost/proposalregister/index.php");
        exit();
    } else {
?>
        <script language="JavaScript">
            alert("Invalid username or password");
        </script>
<?php
        header("Location: http://localhost/proposalregister/pages/Stud_Login.php");
    }
}
?>