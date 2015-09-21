<html>
    <head>
        <title>PROPOSAL APPROVAL</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="http://localhost/proposalregister/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body id="top">
        <?php
            session_start();
            include "connection.php";
            
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
        
         <!-- Ruang utk borang register -->
        <div class="wrapper row3">
            <div class="rounded">
                <main class="container clear"> 
                    <div id="gallery">
                        <figure>
                            <header class="heading">Proposal Approval</header>
                            <ul class="nospace clear">
                                <li class="one_quarter first">
                                    <nav class="pagination"></nav>
                                    <div class="clear">
                                        <!-- Borang nak register admin -->
                                        <div>
                                            <form action="http://localhost/proposalregister/pages/approval.php" method="post">
                                                <table border="1" style="color:grey">
                                                    <tr>
                                                        <td>No.</td>
                                                        <td>Proposal ID</td>
                                                        <td>Proposal Name</td>
                                                        <td>Project Leader</td>
                                                        <td>Student ID</td>
                                                        <td>Club ID</td>
                                                        <td>Location</td>
                                                        <td>Date</td>
                                                        <td>Budget</td>
                                                        <td>No. of Participant</td>
                                                        <td>Description</td>
                                                        <td>Status</td>
                                                    </tr>
                                                    
                                                    <?php
                                                        $sql = "SELECT * FROM proposal";
                                                        $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                                                        
                                                        $x = 1;
                                                        while($fetch = mysqli_fetch_array($query) or die(mysqli_error($conn))) {
                                                    ?>
                                                            <tr>
                                                                <td><?php echo $x; ?></td>
                                                                <td><?php echo $fetch["P_ID"]; ?></td>
                                                                <input type="hidden" name="propID" value="<?php echo $fetch["P_ID"]; ?>"/>
                                                                <td><?php echo $fetch["P_Name"]; ?></td>
                                                                <td><?php echo $fetch["P_ProjectLeader"]; ?></td>
                                                                <td><?php echo $fetch["Stu_ID"]; ?></td>
                                                                <td><?php echo $fetch["C_ID"]; ?></td>
                                                                <td><?php echo $fetch["P_Location"]; ?></td>
                                                                <td><?php echo $fetch["P_Date"]; ?></td>
                                                                <td><?php echo $fetch["P_Budget"]; ?></td>
                                                                <td><?php echo $fetch["P_Participant"]; ?></td>
                                                                <td><?php echo $fetch["P_Description"]; ?></td>
                                                                <?php
                                                                if($fetch["P_Status"] == "KIV") {
                                                                ?>
                                                                <td>
                                                                    <input type="submit" name="<?php echo $fetch["P_ID"]; ?>" value="APPROVE">
                                                                    <br>
                                                                    <input type="submit" name="<?php echo $fetch["P_ID"]; ?>" value="DISAPPROVE"/>
                                                                </td>
                                                                <?php
                                                                } else {
                                                                ?>
                                                                <td><?php echo $fetch["P_Status"]; ?></td>
                                                                <?php
                                                                }
                                                                ?>
                                                            </tr>
                                                        <?php
                                                        $x++;
                                                        }
                                                        ?>
                                                </table>
                                            </form>
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
        
        <!-- border(biru) kat bawah sekali -->
        <div class="wrapper row5">
            <div id="copyright" class="clear"></div>
        </div>
        <!-- ########### -->
        
        <!-- JAVASCRIPTS --> 
        <script src="http://localhost/proposalregister/layout/scripts/jquery.min.js"></script> 
        <script src="http://localhost/proposalregister/layout/scripts/jquery.fitvids.min.js"></script> 
        <script src="http://localhost/proposalregister/layout/scripts/jquery.mobilemenu.js"></script> 
        <script src="http://localhost/proposalregister/layout/scripts/tabslet/jquery.tabslet.min.js"></script>
        <!-- ########### -->
    </body>
</html>

<?php
function approve($propID) {
    $sql = "UPDATE proposal SET P_Status='APPROVED' WHERE P_ID='$propID'";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
    header("Location: http://localhost/proposalregister/pages/Prop_Approval.php");
}

function disapprove($propID) {
    $sql = "UPDATE proposal SET P_Status='DISAPPROVED' WHERE P_ID='$propID'";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
    header("Location: http://localhost/proposalregister/pages/Prop_Approval.php");
}
?>