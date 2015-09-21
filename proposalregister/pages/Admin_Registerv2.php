<?php
session_start();
include "connection.php";

if(isset($_POST["regAdmin"])) {
    $adminID = $_SESSION["staID"];
    $adminPass = $_POST["adminPass"];
    
    // cari detail staff yg nk jadi admin dlm table staff
    $sql = "SELECT * FROM admin";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $row = mysqli_fetch_array($query);
    
    // kalu x jmpa details dlm database
    if($row > 0) {
        $_SESSION["stuID"] = null;
        $_SESSION["staID"] = null;
        $_SESSION["AID"] = null;
?>
<!-- Ruang utk borang register -->
    <div class="wrapper row3">
        <div class="rounded">
            <main class="container clear"> 
                <div id="gallery">
                    <figure>
                        <header class="heading">Error in Administration Registration</header>
                        <ul class="nospace clear">
                            <li class="one_quarter first">
                                <nav class="pagination"></nav>
                                <div class="clear">
                                    <div>
                                        <h1>Please do these steps before registering your account as Administrator : </h1>
                                        <ol>
                                            <li>
                                                <p>
                                                    If you have not registered yourself in this system, please do so by going to the staff registration page.
                                                    The page can be accessed in the drop-down menu above.
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    After you have registered your account, you have to login first into your account.
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Before we proceed further, the previous Administrator must delete his/her Administrator account first.
                                                    He/she can do so, by navigating to the Administrator delete page.
                                                    After that, you will have to navigate back to this page. Just click at the "Register as Administrator" button.
                                                    The system will register your details as Administrator.
                                                    Then, you are good to go as this system's Administrator.
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    As an Administrator, you can do all of the operation in this system plus approve or disapprove student's proposal.
                                                </p>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </figure>
                </div>
            </main>
        </div>
    </div>
<!-- ############# -->
<a href="http://localhost/proposalregister/index.php">
    <button>Back</button>
</a>
<?php
    } else {
        // clear dulu table admin
        $sql = "DELETE FROM admin";
        $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        // baru register admin
        $sql2 = "INSERT INTO admin VALUES('$adminID', '$adminPass')";
        $query2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
        
        $_SESSION["staID"] = null;
        $_SESSION["AID"] = null;
        
        header("Location: http://localhost/proposalregister/index.php");
    }
}
?>