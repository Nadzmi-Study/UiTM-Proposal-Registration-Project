<html>
    <head>
        <title>CLUB REVIEW</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="http://localhost/proposalregister/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    </head>
    
    <body id="top">
        <!-- page utk student yg dah login -->
        <!-- menu kecik kat atas sekali -->
        <?php
        session_start();
        include "connection.php";
        
        if(isset($_SESSION["stuID"]) && $_SESSION["stuID"]!=null) { // kalau user login sebagai student
            $sql = "SELECT Stu_Name FROM student WHERE Stu_ID='" . $_SESSION["stuID"] . "'";
            $fetch = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die("Record not found");

            $name = $fetch["Stu_Name"];
        ?>
        <div class="wrapper row0">
          <div id="topbar" class="clear"> 
            <nav>
                <ul>
                    <li><a href="http://localhost/proposalregister/index.php">Home</a></li>
                    <li><a href="http://localhost/proposalregister/pages/Contact.php">Contact Us</a></li>
                    <li><a href="http://localhost/proposalregister/pages/logout.php">Logout</a></li>
                    <li><?php echo $name ?></li>
                </ul>
            </nav>
          </div>
        </div>
        <!-- ########## -->
        
        <!-- Tajuk page -->
        <div class="wrapper row1">
            <header id="header" class="clear">
                <div id="logo" class="fl_left">
                    <a href="http://localhost/proposalregister/index.php">
                        <img src="http://localhost/proposalregister/images/demo/Logo_Universiti_Teknologi_Mara_(UiTM).png" alt="" width="1098" height="197">
                    </a>
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
        <!-- ############# -->
    
        <!-- Dropdown menu kat atas -->
        <div class="wrapper row2">
            <div class="rounded">
                <nav id="mainav" class="clear">
                    <ul class="clear">
                        <li class="active"><a href="http://localhost/proposalregister/index.php">Home</a></li>
                        <li><a href="#" class="drop">PROFILE</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="drop">PROPOSAL</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="drop">CLUB</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Club_View.php">VIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Join.php">JOIN</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- ############# -->
        
        <!-- Ruang utk borang review -->
        <div class="wrapper row3">
            <div class="rounded">
                <main class="container clear"> 
                    <div id="gallery">
                        <figure>
                            <header class="heading">Review Club</header>
                            <ul class="nospace clear">
                                <li class="one_quarter first">
                                    <nav class="pagination"></nav>
                                    <div class="clear">
                                        <!-- Borang nak review club -->
                                        <div>
                                            <table style="color:grey">
                                                <tr>
                                                    <td><b>Club ID</b></td>
                                                    <td><b>Club Name</b></td>
                                                    <td><b>Club Advisor</b></td>
                                                    <td><b>Club Description</b></td>
                                                </tr>
                                            <?php
                                            // get club id for current student
                                            $sql = "SELECT C_ID FROM student_club WHERE Stu_ID='" . $_SESSION["stuID"] . "'";
                                            $fetch = mysqli_fetch_array(mysqli_query($conn, $sql)) or die(mysqli_error($conn));
                                            $clubID = $fetch["C_ID"];
                                            
                                            // get club details for the club id
                                            $sql2 = "SELECT * FROM club WHERE C_ID='$clubID'";
                                            $query2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
                                            
                                            // output all the details
                                            $fetch2 = mysqli_fetch_array($query2);
                                            ?>
                                                <tr>
                                                    <td><?php echo $fetch2["C_ID"]; ?></td>
                                                    <td><?php echo $fetch2["C_Name"]; ?></td>
                                                    <td><?php echo $fetch2["C_Advisor"]; ?></td>
                                                    <td><?php echo $fetch2["C_Desc"]; ?></td>
                                                </tr>
                                            </table>
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
        
        <?php
        } else if(isset($_SESSION["AID"]) && $_SESSION["AID"]!=null) {
            $sql = "SELECT Sta_Name FROM staff WHERE Sta_ID='" . $_SESSION["AID"] . "'";
            $fetch = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die("Record not found");

            $name = $fetch["Sta_Name"];
        ?>
        
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
        
        <!-- Tajuk page -->
        <div class="wrapper row1">
            <header id="header" class="clear">
                <div id="logo" class="fl_left">
                    <a href="http://localhost/proposalregister/index.php">
                        <img src="http://localhost/proposalregister/images/demo/Logo_Universiti_Teknologi_Mara_(UiTM).png" alt="" width="1098" height="197">
                    </a>
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
        <!-- ############# -->
    
        <!-- Dropdown menu kat atas -->
        <div class="wrapper row2">
            <div class="rounded">
                <nav id="mainav" class="clear">
                    <ul class="clear">
                        <li class="active"><a href="http://localhost/proposalregister/index.php">Home</a></li>
                        <li><a href="#" class="drop">PROFILE</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="drop">STUDENT</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Student_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Student_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Student_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Student_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="drop">STAFF</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Staff_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Staff_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Staff_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Staff_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="drop">PROPOSAL</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="drop">CLUB</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Club_View.php">VIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- ############# -->
        
        <!-- Ruang utk borang review -->
        <div class="wrapper row3">
            <div class="rounded">
                <main class="container clear"> 
                    <div id="gallery">
                        <figure>
                            <header class="heading">Review Club</header>
                            <ul class="nospace clear">
                                <li class="one_quarter first">
                                    <nav class="pagination"></nav>
                                    <div class="clear">
                                        <!-- Borang nak review club -->
                                        <div>
                                            <table style="color:grey">
                                                <tr>
                                                    <td><b>Club ID</b></td>
                                                    <td><b>Club Name</b></td>
                                                    <td><b>Club Advisor</b></td>
                                                    <td><b>Club Description</b></td>
                                                </tr>
                                            <?php
                                            // get club id for current student
                                            $sql = "SELECT C_ID FROM staff WHERE Sta_ID='" . $_SESSION["AID"] . "'";
                                            $fetch = mysqli_fetch_array(mysqli_query($conn, $sql)) or die(mysqli_error($conn));
                                            $clubID = $fetch["C_ID"];
                                            
                                            // get club details for the club id
                                            $sql2 = "SELECT * FROM club WHERE C_ID='$clubID'";
                                            $query2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
                                            
                                            // output all the details
                                            $fetch2 = mysqli_fetch_array($query2);
                                            ?>
                                                <tr>
                                                    <td><?php echo $fetch2["C_ID"]; ?></td>
                                                    <td><?php echo $fetch2["C_Name"]; ?></td>
                                                    <td><?php echo $fetch2["C_Advisor"]; ?></td>
                                                    <td><?php echo $fetch2["C_Desc"]; ?></td>
                                                </tr>
                                            </table>
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
        <?php
        }
        ?>
        <!-- ############# -->
        <!-- ############# -->
        
        <!-- page utk staff yg dah login -->
        <!-- menu kecik kat atas sekali -->
        <?php
        if(isset($_SESSION["staID"]) && $_SESSION["staID"]!=null) { // kalau user login sebagai student
            $sql = "SELECT Sta_Name FROM staff WHERE Sta_ID='" . $_SESSION["staID"] . "'";
            $fetch = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die("Record not found");

            $name = $fetch["Sta_Name"];
        ?>
        <div class="wrapper row0">
          <div id="topbar" class="clear"> 
            <nav>
                <ul>
                    <li><a href="http://localhost/proposalregister/index.php">Home</a></li>
                    <li><a href="http://localhost/proposalregister/pages/Contact.php">Contact Us</a></li>
                    <li><a href="http://localhost/proposalregister/pages/logout.php">Logout</a></li>
                    <li><?php echo $name ?></li>
                </ul>
            </nav>
          </div>
        </div>
        <!-- ########## -->
        
        <!-- Tajuk page -->
        <div class="wrapper row1">
            <header id="header" class="clear">
                <div id="logo" class="fl_left">
                    <a href="http://localhost/proposalregister/index.php">
                        <img src="http://localhost/proposalregister/images/demo/Logo_Universiti_Teknologi_Mara_(UiTM).png" alt="" width="1098" height="197">
                    </a>
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
        <!-- ############# -->
    
        <!-- Dropdown menu kat atas -->
        <div class="wrapper row2">
            <div class="rounded">
                <nav id="mainav" class="clear">
                    <ul class="clear">
                        <li class="active"><a href="http://localhost/proposalregister/index.php">Home</a></li>
                        <li><a href="#" class="drop">PROFILE</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Staff_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Staff_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Staff_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="drop">CLUB</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Club_View.php">VIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- ############# -->
        
        <!-- Ruang utk borang review -->
        <div class="wrapper row3">
            <div class="rounded">
                <main class="container clear"> 
                    <div id="gallery">
                        <figure>
                            <header class="heading">Review Club</header>
                            <ul class="nospace clear">
                                <li class="one_quarter first">
                                    <nav class="pagination"></nav>
                                    <div class="clear">
                                        <!-- Borang nak review club -->
                                        <div>
                                            <table style="color:grey">
                                                <tr>
                                                    <td><b>Club ID</b></td>
                                                    <td><b>Club Name</b></td>
                                                    <td><b>Club Advisor</b></td>
                                                    <td><b>Club Description</b></td>
                                                </tr>
                                            <?php
                                            // get club id for current staff
                                            $sql = "SELECT C_ID FROM staff WHERE Sta_ID='" .$_SESSION["staID"]. "'";
                                            $fetch = mysqli_fetch_array(mysqli_query($conn, $sql)) or die(mysqli_error($conn));
                                            $clubID = $fetch["C_ID"];
                                            
                                            // get club details for the club id
                                            $sql2 = "SELECT * FROM club WHERE C_ID='$clubID'";
                                            $query2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
                                            
                                            // output all the details
                                            $fetch2 = mysqli_fetch_array($query2) or die(mysqli_error($conn));
                                            ?>
                                                <tr>
                                                    <td><?php echo $fetch2["C_ID"]; ?></td>
                                                    <td><?php echo $fetch2["C_Name"]; ?></td>
                                                    <td><?php echo $fetch2["C_Advisor"]; ?></td>
                                                    <td><?php echo $fetch2["C_Desc"]; ?></td>
                                                </tr>
                                            </table>
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
        <?php
        }
        ?>
        <!-- ############# -->
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
