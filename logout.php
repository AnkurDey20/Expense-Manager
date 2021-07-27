<?php
    session_start();
    
    // Checking for active users, or else goto login
    if (!isset($_SESSION['email'])) 
        header('location:index.php');
    
    // Removing users data from session and redirecting to 'index.php'
    session_destroy();
    
    echo"<script> 
        alert('You have successfully logged out.')
    </script>";
    
    echo"<script> 
        location.href='index.php'
    </script>";
?>

