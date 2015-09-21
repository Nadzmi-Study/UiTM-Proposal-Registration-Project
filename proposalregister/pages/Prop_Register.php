<html>
    <head>
        <title>PROPOSAL REGISTRATION</title>
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
        
        <?php
        } else if(isset($_SESSION["stuID"]) && $_SESSION["stuID"]!=null) {
            $sql = "SELECT Stu_Name FROM student WHERE Stu_ID='" . $_SESSION["stuID"] . "'";
            $fetch = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die("Record not found");

            $name = $fetch["Stu_Name"];
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
                    <li><?php echo $name ?></li>
                </ul>
            </nav>
          </div>
        </div>
        <!-- ########## -->
        
        <?php
        }
        ?>
    
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
        
        <?php
        if(isset($_SESSION["AID"]) && $_SESSION["AID"]!=null) {
        ?>
        
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
                                <li><a href="http://localhost/proposalregister/pages/Prop_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- ############### -->
        
        <?php
        } else if(isset($_SESSION["stuID"]) && $_SESSION["stuID"]!=null) {
        ?>
    
        <!-- Dropdown menu kat atas -->
        <div class="wrapper row2">
            <div class="rounded">
                <nav id="mainav" class="clear">
                    <ul class="clear">
                        <li class="active"><a href="http://localhost/proposalregister/index.php">Home</a></li>
                        <li><a class="drop" href="#">PROFILE</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li><a class="drop" href="#">PROPOSAL</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Delete.php">DELETE</a></li>
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
    
        <!-- Ruang utk borang register -->
        <div class="wrapper row3">
            <div class="rounded">
                <main class="container clear"> 
                    <div id="gallery">
                        <figure>
                            <header class="heading">Register Proposal</header>
                            <ul class="nospace clear">
                                <li class="one_quarter first">
                                    <nav class="pagination"></nav>
                                    <div class="clear">
                                        <!-- Borang nak register proposal -->
                                        <div>
                                            <form method="post" action="http://localhost/proposalregister/pages/Prop_Registerv2.php">
                                                <table style="color:grey">
                                                    <?php
                                                    if(isset($_SESSION["AID"]) && $_SESSION["AID"]!=null) {
                                                    ?>
                                                    <tr>
                                                        <td><label for="stuID"><b>Student ID</b></label></td>
                                                        <td><input type="text" name="stuID" id="stuID" required/></td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                    <tr>
                                                        <td><label for="leaderName"><b>Proposal Project Leader Name</b></label></td>
                                                        <td><input type="text" name="leaderName" id="leaderName" required/></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="clubID"><b>Club ID</b></label></td>
                                                        <td><input type="text" name="clubID" id="clubID" required/></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="proposalName"><b>Proposal Name</b></label></td>
                                                        <td><input type="text" name="proposalName" id="proposalName" required/></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="proposalDate"><b>Proposal Date</b></label></td>
                                                        <td><input type="date" name="proposalDate" id="proposalDate" required/></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="participantNum"><b>Participant Number</b></label></td>
                                                        <td><input type="number" name="participantNum" id="participantNum" required/></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="proposalLoc"><b>Proposal Location</b></label></td>
                                                        <td><input type="text" name="proposalLoc" id="proposalLoc" required/></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="proposalBudget"><b>Proposal Budget RM</b></label></td>
                                                        <td><input type="number" name="proposalBudget" id="proposalBudget" required/></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="proposalDesc"><b>Proposal Description</b></label></td>
                                                        <td><textarea name="proposalDesc" id="proposalDesc" required>Describe more about your proposal here</textarea></td>
                                                    </tr>
                                                </table><br> 
                                                <input type="submit" name="register" value="Submit"/>
                                                <input type="reset" name="reset" value="Reset"/>
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
        
        <!-- ruang kosong kat bawah page -->
        <div class="wrapper row5">
          <div id="copyright" class="clear"></div>
        </div>
        <!-- ############# -->
    
        <!-- JAVASCRIPTS --> 
        <script src="../layout/scripts/jquery.min.js"></script> 
        <script src="../layout/scripts/jquery.fitvids.min.js"></script> 
        <script src="../layout/scripts/jquery.mobilemenu.js"></script> 
        <script src="../layout/scripts/nivo-lightbox/nivo-lightbox.min.js"></script>
        <!-- ############# -->
    </body>
</html>

