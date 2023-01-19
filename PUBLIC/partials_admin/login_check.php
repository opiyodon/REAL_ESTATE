<?php

    //AUthorization - Access Control
    //Check whether the user is logged in or not
    if(!isset($_SESSION['user']))//if user Session is not set
    {
        //user is not logged in
        //redirect to login page with message
        $_SESSION['no-login-message'] = "<div class='ERROR'>Please Login To<br>Access Admin Panel</div>";
        //redirect to Login Page
        header('location:'.SITEURL_ADMIN.'login.php');
        ob_end_flush();
    }

?>