<html>
    <head>
        <title>PROPOSAL REGISTRATION SYSTEM</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="http://localhost/proposalregister/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body id="top">
        <?php
            session_start();
            include "connection.php";
            
            // kalau user login sebagai student
            if(isset($_SESSION["stuID"]) && $_SESSION["stuID"]!=null) { 
                $sql = "SELECT Stu_Name FROM student WHERE Stu_ID='" . $_SESSION["stuID"] . "'";
                $fetch = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die("Record not found");
                
                $name = $fetch["Stu_Name"];
        ?>
        
        <!-- page utk student yg dah login -->
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
        
        <!-- logo uitm besaq -->
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
                            <a class="drop" href="#">PROFILE</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="drop" href="#">PROPOSAL</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="drop" href="#">CLUB</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Club_View.php">VIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Join.php">JOIN</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- ############### -->
        <!-- ########## -->
        
        <?php
            // kalau user login sebagai staff
            } else if(isset($_SESSION["staID"]) && $_SESSION["staID"]!=null) { 
                $sql = "SELECT Sta_Name FROM staff WHERE Sta_ID='" . $_SESSION["staID"] . "'";
                $fetch = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die("Record not found");
                
                $name = $fetch["Sta_Name"];
        ?>
        
        <!-- page utk staff yg dah login -->
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
                        <a class="drop" href="#">PROFILE</a>
                        <ul>
                            <li><a href="http://localhost/proposalregister/pages/Staf_Review.php">REVIEW</a></li>
                            <li><a href="http://localhost/proposalregister/pages/Staf_Update.php">UPDATE</a></li>
                            <li><a href="http://localhost/proposalregister/pages/Staf_Delete.php">DELETE</a></li>
                            <li><a href="http://localhost/proposalregister/pages/Admin_Register.php">REGISTER AS ADMINISTRATOR</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="drop" href="#">CLUB</a>
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
        <!-- ############### -->
        <!-- ########## -->
        
        <?php
            // kalau user x login lagi
            } else if(isset($_SESSION["AID"]) && $_SESSION["AID"]!=null) {
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
            } else {
        ?>
        
        <!-- page utk user yg x login lg -->
        <!-- menu kecik kat atas sekali -->
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
                            <a class="drop" href="#">STUDENT</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Register.php">Register</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="drop">STAFF</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Register.php">Register</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="drop">CLUB</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Club_View.php">View</a></li>
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
        
        <!-- Slides iklan 2 drp atas sekali -->
        <div class="wrapper">
            <div id="slider">
                <div id="slide-wrapper" class="rounded clear"> 
                    <figure id="slide-1">
                        <a class="view" href="#"><img src="http://localhost/proposalregister/images/demo/slider/1.png" alt=""></a>
                        <figcaption>
                            <h2>SAMBUTAN HARI RAYA PERDANA</h2>
                            <p>Bertempat di Pusat Islam Pada 4/8/2015. Anda dijemput beramai-ramai hadir memeriahkan lagi majlis berpakaian baju melayu.</p>

                            <p class="right">&nbsp;</p>
                        </figcaption>
                    </figure>
                    <figure id="slide-2">
                        <a class="view" href="#"><img src="http://localhost/proposalregister/images/demo/slider/2.png" alt=""></a>
                        <figcaption>
                            <h2>International Conference on Governance, Fraud, Ethics and Social Responsibility 2015 (iConGFESR 2015)</h2>
                            <p>
                                The 2nd Conference on Computing, Mathematics and Statistics (iCMS 2015)
                                <br>
                                Venue: Langkawi Island, Malaysia
                                <br>
                                Date: 4th - 5th Nov, 2015.
                            </p>
                            <p class="right">&nbsp;</p>
                        </figcaption>
                    </figure>
                    <figure id="slide-3">
                        <a class="view" href="#"><img src="http://localhost/proposalregister/images/demo/slider/3.png" alt=""></a>
                        <figcaption>
                            <h2>iCMS 2015</h2>
                            <p>
                                The 2nd Conference on Computing, Mathematics and Statistics (iCMS 2015)
                                <br>Venue: Langkawi Island, Malaysia
                                <br>Date: 4th - 5th Nov, 2015.
                            </p>
                            <p class="right">&nbsp;</p>
                        </figcaption>
                    </figure>
                    <figure id="slide-4">
                        <a class="view" href="#"><img src="http://localhost/proposalregister/images/demo/slider/4.png" alt=""></a>
                        <figcaption>
                            <h2>BENGKEL KHIDMAT LATIHAN DAN PERUNDINGAN</h2>
                            <p>
                                Tarikh	:	23 - 24 OGOS 2015
                                <br>Masa	:	08.00 PAGI - 05.00 PETANG
                                <br>Tempat	:	DEWAN SRI JERAI
                                <br>Anjuran	:	iLQAM UiTM KEDAH & RMI
                            </p>
                            <p class="right">&nbsp;</p>
                        </figcaption>
                    </figure>
                    <figure id="slide-5">
                      <a class="view" href="#"><img src="http://localhost/proposalregister/images/demo/slider/5.png" alt=""></a>
                      <figcaption>
                          <h2>Program Suntikan Vaksin HPV Percuma</h2>
                          <p>Unit Kesihatan, UiTM Kedah telah dilantik sebagai Rakan Perlaksana untuk Program Suntikan Vaksin HPV Percuma Bagi Siswi di IPTA.</p>
                          <p>&nbsp;</p>
                          <p>
                              <a href="https://www.facebook.com/HEPUiTMKEDAH/videos/vb.294045943967451/3998889382846/?type=2&theater">Watch Video</a>
                          </p>
                          <p class="right">&nbsp;</p>
                      </figcaption>
                    </figure>
                    <ul id="slide-tabs">
                        <li><a href="#slide-1">MAJLIS RAYA PERDANA</a></li>
                        <li><a href="#slide-2">iConGFESR 2015</a></li>
                        <li><a href="#slide-3">iCMS 2015</a></li>
                        <li><a href="#slide-4">PROGRAM iLQAM</a></li>
                        <li><a href="#slide-5">VAKSINASI HPV</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ########### -->
        
        <!-- bahagian tengah page, yg banyak berita --> 
        <div class="wrapper row3">
            <div class="rounded">
                <main class="container clear">
                    <div class="group btmspace-30">
                        <div class="one_half">
                            <h2>Latest News &amp; Events</h2>
                            <ul class="nospace listing">
                                <li class="clear">
                                    <div class="imgl borderedbox"><img src="http://localhost/proposalregister/images/demo/News1.jpg" alt=""></div>
                                    <p class="nospace btmspace-15">
                                        <a href="https://www.facebook.com/HEPUiTMKEDAH/photos/a.297214500317262.69540.294045943967451/951267528245286/?type=1&theater">Majlis Program Wasattiyah.</a>
                                    </p>
                                    <p>
                                        Perhatian kepada pelajar Semester 1, MDAB, ASASI Undang-Undang, MPP, JPK dan Komander. Kehadiran akan direkodkan.
                                    </p>
                                </li>
                                <li class="clear">
                                    <div class="imgl borderedbox"><img src="http://localhost/proposalregister/images/demo/News2.jpg" alt=""></div>
                                    <p class="nospace btmspace-15">
                                        <a href="https://www.facebook.com/HEPUiTMKEDAH/photos/pcb.950788038293235/950787711626601/?type=1&theater">Selamat Ulang Tahun Kelahiran.</a>
                                    </p>
                                    <p>
                                        Selamat Ulang Tahun Kelahiran Dr Abd Latif Abdul Rahman
                                        Timbalan Rektor HEP
                                        Semoga tahun- tahun yang mendatang mendapat kerahmatan daripadaNya.
                                    </p>
                                </li>
                                <li class="clear">
                                    <div class="imgl borderedbox"><img src="http://localhost/proposalregister/images/demo/News3.jpg" alt=""></div>
                                    <p class="nospace btmspace-15">
                                        <a href="https://www.facebook.com/HEPUiTMKEDAH/photos/pcb.947447271960645/947446848627354/?type=1&theater">Perhatian Kepada pelajar diploma yang memohon PTPTN.</a>
                                    </p>
                                    <p>
                                        Permohonan untuk kelompok ke2 telah diluluskan pada 7/7/2015. 
                                        Dokumen perjanjian hendaklah dihantar seperti ketetapan berikut :
                                        <br>Tarikh : 28/07/2015
                                        <br>Tempat : Ruang Legar HEP UiTM Kedah
                                        <br>Masa : 9.00 Pg - 4.00 Ptg.
                                    </p>
                                </li>
                            </ul>
                            <p class="right">&nbsp;</p>
                        </div>
                        <div class="one_quarter sidebar">
                            <div class="sdb_holder">
                                <h6><br>Like Us On Facebook</h6>
                                <blockquote>
                                    <blockquote>
                                        <p>
                                            <a href="https://www.facebook.com/HEPUiTMKEDAH"><img src="http://localhost/proposalregister/images/Facebook-Logo.png" width="40" height="40"></a>
                                        </p>
                                    </blockquote>
                                </blockquote>
                                <h6><br>Or Scan QR Code Below</h6>
                                <p>
                                    <img src="images/demo/static_qr_code_without_logo.jpg" width="370" height="370">
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- ############ -->
                    <!-- kotak kecik(biru) kat bawah sekali -->
                    <div id="twitter" class="group btmspace-30">
                        <span lang="EN-US">
                            <em>
                                "Orang yang berjaya dalam hidup adalah orang yang nampak tujuannya dengan jelas dan menjurus kepadanya tanpa menyimpang."
                                <br>- Cecil B. DeMille -
                            </em>
                        </span>
                    </div>
                    <!-- ############ -->
                    <!-- border(putih) kat bawah sekali -->
                    <div class="group"></div>
                    <!-- ############ -->
                </main>
            </div>
        </div>
        <!-- ########### -->
        
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

<!--
design type
operation type
attackers type
security type
maintenance type
-->