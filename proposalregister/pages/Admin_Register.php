<html>
    <head>
        <title>ADMINISTRATOR REGISTRATION</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="http://localhost/proposalregister/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    </head>
    
    <body id="top">
        <?php
        session_start();
        include "connection.php";
        
        // user kena login sebagai staff
        if(isset($_SESSION["staID"]) && $_SESSION["staID"]!=null) {
        ?>
        <!-- Menu kecik kat atas sekali -->
        <div class="wrapper row0">
            <div id="topbar" class="clear">
                <nav>
                    <ul>
                        <li><a href="http://localhost/proposalregister/index.php">Home</a></li>
                        <li><a href="http://localhost/proposalregister/pages/Contact.php">Contact Us</a></li>
                        <li><a href="http://localhost/proposalregister/pages/logout.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- ############# -->
    
        <!-- Tajuk page -->
        <div class="wrapper row1">
            <header id="header" class="clear">
                <div id="logo" class="fl_left">
                    <h1>
                        <a href="http://localhost/proposalregister/index.php">
                            <img src="http://localhost/proposalregister/images/demo/Logo_Universiti_Teknologi_Mara_(UiTM).png" alt="" width="400" height="169">
                        </a>
                    </h1>
                    <h1>&nbsp;</h1>
                    <center>
                        <h1>
                            <a href="http://localhost/proposalregister/index.php">PROPOSAL REGISTRATION SYSTEM</a>
                        </h1>
                    </center>
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
                        <li><a href="#" class="drop">PROPOSAL</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Proposal_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Proposal_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Proposal_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Proposal_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="drop">STUDENT</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="drop">STAFF</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="drop">CLUB</a>
                            <ul>
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
    
        <!-- Ruang utk borang register -->
        <div class="wrapper row3">
            <div class="rounded">
                <main class="container clear"> 
                    <div id="gallery">
                        <figure>
                            <header class="heading">Register as Administrator</header>
                            <ul class="nospace clear">
                                <li class="one_quarter first">
                                    <nav class="pagination"></nav>
                                    <div class="clear">
                                        <!-- Borang nak register admin -->
                                        <div>
                                            <form action="http://localhost/proposalregister/pages/Admin_Registerv2.php" method="post">
                                                PASSWORD: <input type="password" name="adminPass"/>
                                                <input type="submit" name="regAdmin" value="Register as Administrator"/>
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
        <?php
        // kalau user x login sebagai staff
        } else {
        ?>
        <!-- Menu kecik kat atas sekali -->
        <div class="wrapper row0">
            <div id="topbar" class="clear">
                <nav>
                    <ul>
                        <li><a href="http://localhost/proposalregister/index.php">Home</a></li>
                        <li><a href="http://localhost/proposalregister/pages/Contact.php">Contact Us</a></li>
                        <li><a href="http://localhost/proposalregister/pages/Stud_Login.php">Student Login</a></li>
                        <li><a href="http://localhost/proposalregister/pages/Staf_Login.php">Staff Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- ############# -->
    
        <!-- Tajuk page -->
        <div class="wrapper row1">
            <header id="header" class="clear">
                <div id="logo" class="fl_left">
                    <h1>
                        <a href="http://localhost/proposalregister/index.php">
                            <img src="http://localhost/proposalregister/images/demo/Logo_Universiti_Teknologi_Mara_(UiTM).png" alt="" width="400" height="169">
                        </a>
                    </h1>
                    <h1>&nbsp;</h1>
                    <center>
                        <h1>
                            <a href="http://localhost/proposalregister/index.php">PROPOSAL REGISTRATION SYSTEM</a>
                        </h1>
                    </center>
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
                        <li><a href="#" class="drop">STUDENT</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Login.php">LOGIN</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="drop">STAFF</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Login.php">LOGIN</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- ############# -->
    
        <!-- Ruang utk borang register -->
        <div class="wrapper row3">
            <div class="rounded">
                <main class="container clear"> 
                    <div id="gallery">
                        <figure>
                            <header class="heading">Register as Administrator</header>
                            <ul class="nospace clear">
                                <li class="one_quarter first">
                                    <nav class="pagination"></nav>
                                    <div class="clear">
                                        <div>
                                            <h1>Please do these steps before registering your account as staff : </h1>
                                            <ol>
                                                <li>
                                                    <p>
                                                        If you have no register yourself in this system, please do so by going to the staff registration page.
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
        <?php
        }
        ?>
        
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
