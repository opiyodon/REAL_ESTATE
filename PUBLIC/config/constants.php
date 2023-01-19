<?php
ob_start();
?>
<?php
    //start Session
    session_start();


    //create constants to store non repeating values
    define('SITEURL_USER','http://localhost/REAL_ESTATE/PUBLIC/php_user/');
    define('SITEURL_ADMIN','http://localhost/REAL_ESTATE/PUBLIC/php_admin/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'ARTKINS');
    define('DB_PASSWORD', 'Bellachao254');
    define('DB_NAME', 'homeverse');

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());
?>