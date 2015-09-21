<?php
    session_start();
    include "connection.php";
    
    if(isset($_SESSION["stuID"]) && $_SESSION["stuID"]!=null) {
        if(isset($_POST["submit"])) {
            $name = $_POST["studName"];
            $course = $_POST["studCourse"];
            $sem = $_POST["studSem"];
            $phone = $_POST["phoneNum"];
            $oldPassword = $_POST["oldPassword"];
            $newPassword = $_POST["newPassword"];
            
            $sql = "SELECT Stu_Password FROM student WHERE Stu_ID='" .$_SESSION["stuID"]. "'";
            $data = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die(mysqli_error($conn));
            $password = $data["Stu_Password"];
            
            if($oldPassword != null) {
                if($newPassword != null) {
                    if($oldPassword == $password) {
                        $update = "UPDATE student"
                            . " SET Stu_Name='$name',Stu_Course='$course',Stu_Part='$sem',Stu_PhoneNo='$phone',Stu_Password='$newPassword'"
                            . " WHERE Stu_ID='" . $_SESSION["stuID"] . "'";
                        $query = mysqli_query($conn, $update);

                        header("Location: http://localhost/proposalregister/index.php");
                        exit();
                    } else echo "Please enter your valid old password<br><a href=\"http://localhost/proposalregister/pages/Stud_Update.php\"><button>Back</button></a>";
                } else echo "Please Input your new password<br><a href=\"http://localhost/proposalregister/pages/Stud_Update.php\"><button>Back</button></a>";
            } else if($oldPassword==null && $newPassword==null) {
                $update = "UPDATE student "
                        . "SET Stu_Name='$name',Stu_Course='$course',Stu_Part='$sem',Stu_PhoneNo='$phone' "
                        . "WHERE Stu_ID='" . $_SESSION["stuID"] . "'";
                    $query = mysqli_query($conn, $update);

                    header("Location: http://localhost/proposalregister/index.php");
                    exit();
            }
        }
    } else if(isset($_SESSION["AID"]) && $_SESSION["AID"]!=null) {
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
                            <header class="heading">Update student's profile</header>
                            <ul class="nospace clear">
                                <li class="one_quarter first">
                                    <nav class="pagination"></nav>
                                    <div class="clear">
                                        <!-- Borang nak update student -->
                                        <div>
                                            <?php
                                                // show details of student based on sent studID
                                                // make sure the details can be edit
                                                // make button to save the details
                                                if(isset($_SESSION["AID"]) && $_SESSION["AID"]!=null) {
                                                    $id = $_POST["studID"];
                                                    
                                                    $searchAcc = "SELECT * FROM student WHERE Stu_ID='$id'";
                                                    $data = mysqli_fetch_assoc(mysqli_query($conn, $searchAcc)) or die(mysqli_error($conn));

                                                    if($data == null) {
                                                        echo "You are not registered yet";
                                                    } else {
                                                        $id = $data["Stu_ID"];
                                                        $name = $data["Stu_Name"];
                                                        $course = $data["Stu_Course"];
                                                        $sem = $data["Stu_Part"];
                                                        $phone = $data["Stu_PhoneNo"];
                                                        $password = $data["Stu_Password"];
                                            ?>
                                            <div>
                                                <form action="http://localhost/proposalregister/pages/Stud_Updatev3.php" method="post">
                                                    <table style="color:grey">
                                                        <tr>
                                                            <td>Student ID</td>
                                                            <td><input type="hidden" id="studID" name="studID"  value="<?php echo $id; ?>"/><?php echo $id; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for="studName">Student Name</label></td>
                                                            <td><input type="text" id="studName" name="studName"  value="<?php echo $name; ?>"/></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for="studCourse">Course Code</label></td>
                                                            <td><input type="text" id="studCourse" name="studCourse" value="<?php echo $course; ?>"/></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for="studSem">Semester</label></td>
                                                            <td><input type="number" id="studSem" name="studSem" value="<?php echo $sem; ?>"/></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for="phoneNum">Phone Number</label></td>
                                                            <td><input type="text" id="phoneNum" name="phoneNum" value="<?php echo $phone; ?>"/></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for="oldPassword">Old Password</label></td>
                                                            <td><input type="password" id="oldPassword" name="oldPassword"/></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for="newPassword">New Password</label></td>
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
?>
