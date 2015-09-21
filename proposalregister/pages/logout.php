<?php
// for logout
    session_start(); // start a session
    
    session_destroy(); // destroy current session

    header("Location: http://localhost/proposalregister/index.php"); // direct to the index page
    exit();
?>
