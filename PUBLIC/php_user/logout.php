<?php

    //include contants.php file here
    include('../config/constants.php');

    //1. Destroy the Session
    session_destroy();

    //2. Redirect to Login Page
    header('location:'.SITEURL_USER.'login.php');

?>