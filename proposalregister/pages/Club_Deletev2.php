<?php
session_start();
include "connection.php";

if(isset($_POST["search"])) {
    $clubID = $_POST["clubID"];
?>
<html>
    <head>
        <title>CLUB DELETION</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="http://localhost/proposalregister/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    </head>
    
    <body id="top">
        <?php
        if(isset($_SESSION["AID"]) && $_SESSION["AID"]!=null) {
        $sql = "SELECT Sta_Name FROM staff WHERE Sta_ID='" . $_SESSION["AID"] . "'";
        $fetch = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die(mysqli_error($conn));

        $name = $fetch["Sta_Name"];
        ?>
        <!-- Menu kecik kat atas sekali -->
        <div class="wrapper row0">
            <div id="topbar" class="clear">
                <nav>
                    <ul>
                        <li><a href="http://localhost/proposalregister/index.php">Home</a></li>
                        <li><a href="http://localhost/proposalregister/pages/Contact.php">Contact Us</a></li>
                        <li><a href="http://localhost/proposalregister/pages/logout.php">Logout</a></li>
                        <li><span style="color:yellow">ADMINISTRATOR: </span><?php echo $name ?></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- ############# -->
    
        <!-- Tajuk page -->
        <div class="wrapper row1">
            <header id="header" class="clear">
                <div id="logo" class="fl_left">
                    <h1><a href="http://localhost/proposalregister/index.php"><img src="http://localhost/proposalregister/images/demo/Logo_Universiti_Teknologi_Mara_(UiTM).png" alt="" width="400" height="169"></a></h1>
                    <h1>&nbsp;</h1>
                    <h1><a href="http://localhost/proposalregister/index.php">PROPOSAL REGISTRATION SYSTEM</a></h1>
                </div>
                <div class="fl_right"></div>
            </header>
        </div>
        <!-- ############# -->
    
        <!-- Dropdown menu kat atas -->
        <div class="wrapper row2">
            <div class="rounded">
                <nav id="mainav" class="clear">
                    <ul class="clear">
                        <li class="active">
                            <a href="http://localhost/proposalregister/index.php">HOME</a>
                        </li>
                        <li>
                            <a href="#" class="drop">PROFILE</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Delete.php">DELETE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Admin_Delete.php">REMOVE ADMINISTRATION</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="drop" href="#">STUDENT</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="drop">STAFF</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="drop">CLUB</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Club_View.php">VIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Register.php">REGISTER</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- ############# -->
        
        <?php
        }
        ?>
    
        <!-- Ruang utk borang delete -->
        <div class="wrapper row3">
            <div class="rounded">
                <main class="container clear"> 
                    <div id="gallery">
                        <figure>
                            <header class="heading">Delete Club's Record</header>
                            <ul class="nospace clear">
                                <li class="one_quarter first">
                                    <nav class="pagination"></nav>
                                    <div class="clear">
                                        <!-- Borang nak delete club -->
                                        <div>
                                            <?php
                                            if(isset($_SESSION["AID"]) && $_SESSION["AID"]!=null) {
                                                // get club details
                                                $sql = "SELECT * FROM club WHERE C_ID='$clubID'";
                                                $fetch = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die(mysqli_error($conn));

                                                $id = $fetch["C_ID"];
                                                $name = $fetch["C_Name"];
                                                $desc = $fetch["C_Desc"];
                                            ?>
                                                <div>
                                                <form method="post" action="http://localhost/proposalregister/pages/Club_Deletev3.php">
                                                    <table style="color:grey">
                                                        <tr>
                                                            <td><b>ID</b></td>
                                                            <td>
                                                                <input type="hidden" name="clubID" value="<?php echo $id; ?>"/><?php echo $id; ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Name</b></td>
                                                            <td><?php echo $name; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Description</b></td>
                                                            <td><?php echo $desc; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            <center>
                                                                <label for="staID">Staff ID</label>
                                                            </center>
                                                            </td>
                                                            <td>
                                                                <center><input type="text" id="staID" name="staID"/></center>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <center><input type="submit" name="delete" value="Delete"/></center>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </form>
                                            </div>
                                            <?php
                                            } else echo "Please log in first";
                                            ?>
                                        </div>
                                        <!-- ############# -->
                                    </div>
                                </li>
                            </ul>
                        </figure>
                    </div>
                </main>
            </div>
        </div>
        <!-- ############# -->
        
        <!-- ruang kosong kat bawah page -->
        <div class="wrapper row5">
          <div id="copyright" class="clear"></div>
        </div>
        <!-- ############# -->
    
        <!-- JAVASCRIPTS --> 
        <script src="http://localhost/proposalregister/layout/scripts/jquery.min.js"></script> 
        <script src="http://localhost/proposalregister/layout/scripts/jquery.fitvids.min.js"></script> 
        <script src="http://localhost/proposalregister/layout/scripts/jquery.mobilemenu.js"></script> 
        <script src="http://localhost/proposalregister/layout/scripts/nivo-lightbox/nivo-lightbox.min.js"></script>
        <!-- ############# -->
    </body>
</html>
<?php
} else if(isset($_POST["delete"])) {
    // find the club record
    $sql = "SELECT * FROM staff WHERE Sta_ID='" . $_SESSION["staID"] . "'";
    $fetch = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die(mysqli_error($conn));
    
    // delete the club record
    $sql2 = "DELETE FROM club WHERE C_ID='" . $fetch["C_ID"] . "'";
    $query = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
    
    // delete club record in staff_club
    $sql2 = "DELETE FROM student_club WHERE C_ID='" . $fetch["C_ID"] . "'";
    $query2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
    
    // update C_ID in staff table
    $sql3 = "UPDATE staff SET C_ID='" . null . "' WHERE Sta_ID='" . $_SESSION["staID"] . "'";
    $query = mysqli_query($conn, $sql3) or die(mysqli_error($conn));

    header("Location: http://localhost/proposalregister/index.php");
    exit();
}