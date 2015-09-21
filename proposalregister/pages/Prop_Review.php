<html>
    <head>
        <title>PROPOSAL REVIEW</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="http://localhost/proposalregister/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    </head>
    
    <body id="top">
        <?php
        session_start();
        include "connection.php";
        
        // get staff's club id
        $sql = "SELECT Stu_Name FROM student WHERE Stu_ID='" . $_SESSION["stuID"] . "'";
        $fetch = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die(mysqli_error($conn));

        $name = $fetch["Stu_Name"];
        ?>
        <!-- Menu kecik kat atas sekali -->
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
        <!-- ############# -->
    
        <!-- Tajuk page -->
        <div class="wrapper row1">
            <header id="header" class="clear">
                <div id="logo" class="fl_left">
                    <h1><a href="http://localhost/proposalregister/index.php"><img src="http://localhost/proposalregister/images/demo/Logo_Universiti_Teknologi_Mara_(UiTM).png" alt="" width="400" height="169"></a></h1>
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
                        <li class="active">
                            <a href="http://localhost/proposalregister/index.php">Home</a>
                        </li>
                        <li><a href="#" class="drop">PROFILE</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Delete.php">DELETE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Update.php">UPDATE</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="drop" href="#">PROPOSAL</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="drop">CLUB</a>
                            <ul>
                                <li><a href="">REVIEW</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- ############# -->
    
        <!-- Ruang utk borang delete -->
        <div class="wrapper row3">
            <div class="rounded">
                <main class="container clear"> 
                    <div id="gallery">
                        <figure>
                            <header class="heading">Proposal Review</header>
                            <ul class="nospace clear">
                                <li class="one_quarter first">
                                    <nav class="pagination"></nav>
                                    <div class="clear">
                                        <!-- Borang nak delete proposal -->
                                        <div>
                                            <?php
                                            if(isset($_SESSION["stuID"]) && $_SESSION["stuID"]!=null) {
                                                // get proposal details
                                                $sql = "SELECT * FROM proposal WHERE Stu_ID='" . $_SESSION["stuID"] . "'";
                                                $fetch = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die(mysqli_error($conn));

                                                $propID = $fetch["P_ID"];
                                                $name = $fetch["P_Name"];
                                                $loc = $fetch["P_Location"];
                                                $date = $fetch["P_Date"];
                                                $budget = $fetch["P_Budget"];
                                                $participant = $fetch["P_Participant"];
                                                $desc = $fetch["P_Description"];
                                                $status = $fetch["P_Status"];
                                                $leader = $fetch["P_ProjectLeader"];
                                                $clubID = $fetch["C_ID"];
                                            ?>
                                            <div>
                                                <table style="color:grey">
                                                    <tr>
                                                        <td><b>Student ID</b></td>
                                                        <td><?php echo $_SESSION["stuID"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Proposal ID</b></td>
                                                        <td><?php echo $propID; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Proposal Name</b></td>
                                                        <td><?php echo $name; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Project Leader Name</b></td>
                                                        <td><?php echo $leader; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Proposal Location</b></td>
                                                        <td><?php echo $loc; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Proposal Date</b></td>
                                                        <td><?php echo $date; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Proposal Budget</b></td>
                                                        <td><?php echo $budget; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Number of Participant</b></td>
                                                        <td><?php echo $participant; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Proposal Description</b></td>
                                                        <td><?php echo $desc; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Club ID</b></td>
                                                        <td><?php echo $clubID; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Proposal Status</b></td>
                                                        <td><?php echo $status; ?></td>
                                                    </tr>
                                                </table>
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