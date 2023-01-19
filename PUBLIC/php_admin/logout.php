<?php

    //include contants.php file here
    include('../config/constants.php');

    //1. Destroy the Session
    session_destroy(); //unsets $_SESSION['user']

    //2. Redirect to Login Page
    header('location:'.SITEURL_ADMIN.'login.php');
    ob_end_flush();

?>