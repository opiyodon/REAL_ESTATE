<?php include('../config/constants.php'); ?>
<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		Homeverse - Admin
	</title>
	<link  href="../css_admin/style.css"  type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>



<body class="text-base transition-all duration-1000 ease-in-out bg-light_bg_bright2 text-light_txt font-poppins">


	<div class="SECTIONS">

		<!--===========================================================LOGIN SECTION START====================================================-->
        <section id="Login">

            <a name="Login">
                <div class="LOGIN h-full">

                    <div class="bg-fixed h-full flex flex-col bg-cover bg-no-repeat bg-left text-light_txt" style="background-image: url('../images/11.jpg');">

                        <div class="ROW flex justify-center">

                            <div class="py-28 px-32 w-1/2 backdrop-blur-xl flex justify-center text-center items-center">

                                <div class="ROW">


                                    <form action="" method="POST" class="bg-light_bg_bright px-10 py-16 rounded-xl">

                                        <table>

                                            <tr>
                                                <td>
                                                    <p class="text-4xl">Login</p>
                                                </td>
                                            </tr>
                                            <?php
                                                if(isset($_SESSION['login'])) //checking wether session message is set or not
                                                {
                                                    echo $_SESSION['login']; //displaying session message
                                                    unset($_SESSION['login']); //removing session message
                                                }
                                                if(isset($_SESSION['no-login-message'])) //checking wether session message is set or not
                                                {
                                                    echo $_SESSION['no-login-message']; //displaying session message
                                                    unset($_SESSION['no-login-message']); //removing session message
                                                }
                                            ?>
                                            <tr>
                                                <td>
                                                    <p class="text-lg">To Access Your Dashboard</p>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="text" class="INPUT" name="username" placeholder="Enter Username">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="password" class="INPUT" name="password" placeholder="Enter Password">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="flex justify-center">
                                                    <input type="submit" name="submit" value="Login" class="BTN_PRI flex justify-center">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <a href="<?php echo SITEURL_ADMIN; ?>forgot_password.php">
                                                        <p class="hover:text-primary hover:underline">Forgot password?</p>
                                                    </a>
                                                </td>
                                            </tr>

                                        </table>

                                    </form>


                                </div>

                            </div>

                        </div>

                    </div>
                    
                </div>
            </a>

        </section>
        <!--===========================================================LOGIN SECTION END====================================================-->

    </div>



<!--===========================================================JS FILES====================================================-->

<script src="https://kit.fontawesome.com/2820328d2c.js" crossorigin="anonymous"></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!--=========================MAIN JS=========================-->

<script src="../js/script.js"></script>

<!--=========================MAIN JS=========================-->

<!--=========================EMAIL JS=========================-->

<script src="../js/email.js" data-cfasync="false" type="text/javascript"></script>

<!--=========================EMAIL JS=========================-->


</body>
</html>
<?php
    //Check whether the submit button is clicked or not
    if(isset($_POST['submit']))
    {
        //process data from Login form
        //1. Get the data from login form
        $username=$_POST['username'];
        $password=md5($_POST['password']);

        //2. SQL to check whether the user with that username and password exist
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

        //3. Execute the query
        $res = mysqli_query($conn, $sql);

        //4. Count rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            //User available and login successfull
            $_SESSION['login'] = "<div class='SUCCESS'>Login Successful</div>";
            $_SESSION['user'] = $username; //to check whether user is logged in or not and logout unsets it

            //redirect to Manage Admin Page
            header('location:'.SITEURL_ADMIN.'index.php');
            ob_end_flush();
        }
        else
        {
            //failed to Delete Admin
            $_SESSION['login'] = "<div class='ERROR'>Username and Password<br>did not match</div>";
            //redirect to Manage Admin Page
            header('location:'.SITEURL_ADMIN.'login.php');
            ob_end_flush();
        }
    }
?>