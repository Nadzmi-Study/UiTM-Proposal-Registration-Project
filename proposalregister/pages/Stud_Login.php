<html>
    <head>
        <title>STUDENT LOGIN</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="http://localhost/proposalregister/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body id="top">
        <!-- navigation bar -->
        <div class="wrapper row0">
            <div id="topbar" class="clear">
                <nav>
                    <ul>
                        <li><a href="http://localhost/proposalregister/index.php">Home</a></li>
                        <li><a href="http://localhost/proposalregister/pages/Contact.php">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- ############### -->
        
        <!-- ############### -->
        <div class="wrapper row1">
            <header id="header" class="clear">
                <div id="logo" class="fl_left">
                    <h1>
                        <a href="http://localhost/proposalregister/index.php"><img src="http://localhost/proposalregister/images/demo/Logo_Universiti_Teknologi_Mara_(UiTM).png" alt="" width="400" height="169"></a>
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
        <!-- ############### -->
        
        <!-- ############### -->
        <div class="wrapper row2">
            <div class="rounded">
                <nav id="mainav" class="clear"> 
                    <ul class="clear">
                        <li class="active"><a href="http://localhost/proposalregister/index.php">HOME</a></li>
                        <li>
                            <a class="drop" href="#">STUDENT</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Login.php">LOGIN</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="drop">STAFF</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Login.php">LOGIN</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="drop">CLUB</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Club_View.php">VIEW</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- ############### -->
        
        <!-- login form -->
        <div class="wrapper row3">
          <div class="rounded">
            <main class="container clear">
                <div id="gallery">
                    <figure>
                        <header class="heading">Login as Student</header>
                        <ul class="nospace clear">
                            <li class="one_quarter first">
                                <nav class="pagination"></nav>
                                <div class="clear">
                                    <div>
                                        <form action="http://localhost/proposalregister/pages/Stud_Loginv2.php" method="post">
                                            <table style="color:grey">
                                                <tr>
                                                    <td><label for="studID">Student ID</label></td>
                                                    <td><input type="text" name="studID" id="studID" required/></td>
                                                </tr>
                                                <tr>
                                                    <td><label for="stuPass">Password</label></td>
                                                    <td><input type="password" name="stuPass" id="stuPass" required/></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td colspan="2">
                                                        <input type="submit" name="stuLog" value="Login"/>
                                                        <input type="reset" name="reset" value="Reset"/>
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </figure>
                </div>
            </main>
          </div>
        </div>
        <!-- ############### -->
        
        <!-- JAVASCRIPTS --> 
        <script src="http://localhost/proposalregister/layout/scripts/jquery.min.js"></script> 
        <script src="http://localhost/proposalregister/layout/scripts/jquery.fitvids.min.js"></script> 
        <script src="http://localhost/proposalregister/layout/scripts/jquery.mobilemenu.js"></script> 
        <script src="http://localhost/proposalregister/layout/scripts/nivo-lightbox/nivo-lightbox.min.js"></script>
        <!-- ############### -->
    </body>
</html>


