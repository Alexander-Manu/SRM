<?php
    //Authorization - Access Control

    //Check whether the user is logged in or not
    if(!isset($_SESSION['user'])) //If user session is not set
   {
        //user is not logged in
        //Redirect to login page with message
        $_SESSION['no-login-message'] = "<div class='error text-center'>Please login to access Teacher Panel.</div>";
        //Redirect to login page
        header('location:'.SITEURL.'admin/login.php');
    }
?>