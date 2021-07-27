<?php

    // Connection string for database
    $con = mysqli_connect("localhost", "root", "", "budget")or die(mysqli_error($con));
    
    // Checking for existing session, or else starting a new session
    if (!isset($_SESSION['email'])) 
        session_start();

?>
