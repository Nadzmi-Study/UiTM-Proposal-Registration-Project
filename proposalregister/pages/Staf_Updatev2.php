<!-- php utk update staff -->
<?php
session_start();
include "connection.php";

if(isset($_SESSION["AID"]) && $_SESSION["AID"]!=null) {
    if(isset($_POST["search"])) {
?>
<html>
    <head>
        <title>STAFF REGISTRATION</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="http://localhost/proposalregister/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    </head>
    
    <body id="top">
        <!-- Menu kecik kat atas sekali -->
        <?php        
        if(isset($_SESSION["AID"]) && $_SESSION["AID"]!=null) {
            $sql = "SELECT Sta_Name FROM staff WHERE Sta_ID='" . $_SESSION["AID"] . "'";
            $fetch = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die("Record not found");

            $name = $fetch["Sta_Name"];
        ?>
        
        <!-- page utk admin -->
        <!-- menu kecik kat atas sekali -->
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
        <!-- ########## -->
        
        <!-- logo uitm besaq -->
        <div class="wrapper row1">
            <header id="header" class="clear">
                <div id="logo" class="fl_left">
                    <h1>
                        <a href="http://localhost/proposalregister/index.php">
                            <img src="http://localhost/proposalregister/images/demo/Logo_Universiti_Teknologi_Mara_(UiTM).png" alt="" width="1098" height="197">
                        </a>
                    </h1>
                    <h1>&nbsp;</h1>
                    <h1>
                        <center>
                            <a href="http://localhost/proposalregister/index.php">PROPOSAL REGISTRATION SYSTEM</a>
                        </center>
                    </h1>
                </div>
                <div class="fl_right"></div>
            </header>
        </div>
        <!-- ############### -->
        
        <!-- dropdown menu kat atas -->
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
                                <li><a href="http://localhost/proposalregister/pages/Club_Delete.php">DELETE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Register.php">REGISTER</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="drop">PROPOSAL</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Approval.php">APPROVAL</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- ############### -->
        <!-- ########## -->
        
        <?php
        }
        ?>
        
        <!-- Ruang utk borang update -->
        <div class="wrapper row3">
            <div class="rounded">
                <main class="container clear"> 
                    <div id="gallery">
                        <figure>
                            <header class="heading">Update staff's profile</header>
                            <ul class="nospace clear">
                                <li class="one_quarter first">
                                    <nav class="pagination"></nav>
                                    <div class="clear">
                                        <!-- Borang nak update student -->
                                        <div>
                                        <?php
                                        if(isset($_SESSION["AID"]) && $_SESSION["AID"]!=null) {
                                            $searchAcc = "SELECT * FROM staff WHERE Sta_ID='" . $_POST["staID"] . "'";
                                            $data = mysqli_fetch_assoc(mysqli_query($conn, $searchAcc)) or die(mysqli_error($conn));

                                            if($data == null) {
                                                echo "You are not registered yet";
                                            } else {
                                                $id = $data["Sta_ID"];
                                                $name = $data["Sta_Name"];
                                                $dept = $data["Sta_Department"];
                                                $post = $data["Sta_Position"];
                                                $clubID = $data["C_ID"];
                                        ?>
                                        <div>
                                            <form action="http://localhost/proposalregister/pages/Staf_Updatev3.php" method="post">
                                                <table style="color:grey">
                                                    <tr>
                                                        <td><label for="staID"><b>Staff ID</b></label></td>
                                                        <td><input type="hidden" id="staID" name="staID"  value="<?php echo $id; ?>"/><?php echo $id; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="staName"><b>Staff Name</b></label></td>
                                                        <td><input type="text" id="staName" name="staName"  value="<?php echo $name; ?>"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="dept"><b>Department</b></label></td>
                                                        <td><input type="text" id="dept" name="dept" value="<?php echo $dept; ?>"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="post"><b>Position</b></label></td>
                                                        <td><input type="text" id="post" name="post" value="<?php echo $post; ?>"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="clubID"><b>Club ID</b></label></td>
                                                        <td><input type="text" id="clubID" name="clubID" value="<?php echo $clubID; ?>"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="oldPassword"><b>Old Password</b></label></td>
                                                        <td><input type="password" id="oldPassword" name="oldPassword"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="newPassword"><b>New Password</b></label></td>
                                                        <td><input type="password" id="newPassword" name="newPassword"/></td>
                                                    </tr>
                                                </table>
                                            <input type="submit" name="update" value="Update"/>
                                            <input type="reset" name="reset" value="Reset"/>
                                            </form>
                                        </div>
                                            
                                        <?php
                                            }
                                        }
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
    }
} else if(isset($_SESSION["staID"]) && $_SESSION["staID"]!=null) {
    if(isset($_POST["submit"])) {
        $name = $_POST["staName"];
        $dept = $_POST["dept"];
        $post = $_POST["post"];
        $clubID = $_POST["clubID"];
        $oldPass = $_POST["oldPassword"];
        $newPass = $_POST["newPassword"];

        $sql = "SELECT Sta_Password FROM staff WHERE Sta_ID='" .$_SESSION["staID"]. "'";
        $data = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die(mysqli_error($conn));
        $password = $data["Sta_Password"];

        if($oldPass != null) {
            if($newPass != null) {
                if($oldPass == $password) {
                    $update = "UPDATE staff "
                        . "SET Sta_Name='$name',Sta_Department='$dept',Sta_Position='$post',C_ID='$clubID',Sta_Password='$newPass' "
                        . "WHERE Sta_ID='" . $_SESSION["staID"] . "'";
                    $query = mysqli_query($conn, $update);

                    header("Location: http://localhost/proposalregister/index.php");
                    exit();
                } else echo "Please enter your valid old password<br><a href=\"http://localhost/proposalregister/pages/Staf_Update.php\"><button>Back</button></a>";
            } else echo "Please Input your new password<br><a href=\"http://localhost/proposalregister/pages/Staf_Update.php\"><button>Back</button></a>";
        } else {
            $update = "UPDATE staff "
                . "SET Sta_Name='$name',Sta_Department='$dept',Sta_Position='$post',C_ID='$clubID' "
                . "WHERE Sta_ID='" . $_SESSION["staID"] . "'";
            $query = mysqli_query($conn, $update);

            header("Location: http://localhost/proposalregister/index.php");
            exit();
        }
    }
}
?>
<!-- ############# -->