<?php include('../partials_user/nav.php'); ?>

<!--===========================================================LOGIN SECTION START====================================================-->
<section id="Login">

    <a name="Login">
        <div class="LOGIN h-full">

            <div class="bg-fixed h-full flex flex-col bg-cover bg-no-repeat bg-left text-light_txt" style="background-image: url('../images/4.jpeg');">

                <div class="ROW flex justify-center">

                    <div class="py-9 px-32 w-1/2 backdrop-blur-xl flex justify-center text-center items-center">

                        <div>
                            <form action="" class="bg-light_bg_bright p-10 rounded-xl">

                                <p class="text-4xl">Login</p>

                                <p class="text-lg">To Access Your Dashboard</p>

                                <div class="SEARCH_GROUP relative flex">
                                    <input type="email" name="login_email" required class="SEARCH_CONTROL bg-light_bg_bright" placeholder="Enter Email">
                                </div>

                                <div class="SEARCH_GROUP relative flex">
                                    <input type="password" name="login_password" required class="SEARCH_CONTROL bg-light_bg_bright" placeholder="Enter Password">
                                </div>

                                <div class="SEARCH_BUTTON py-5 text-white">
                                    <!--<button class="h-12 w-48 flex justify-center px-5 py-5">Login</button>-->
                                    <input type="submit" value="Login" class="h-12 w-48 flex justify-center px-5 py-5">
                                </div>

                                <a href="<?php echo SITEURL_USER; ?>forgot_password.php"><p class="hover:text-primary hover:underline">Forgot password?</p></a>

                                <div class="flex flex-row justify-center gap-1 pb-5">

                                    <div class="L_DOTS">
                                        <p>_______</p>
                                    </div>

                                    <p class="font-bold text-lg pt-1">OR</p>

                                    <div class="L_DOTS">
                                        <p>_______</p>
                                    </div>

                                </div>

                                <p>Don't have an Account? <a href="<?php echo SITEURL_USER; ?>register.php" class="text-primary font-semibold hover:underline">Register</a></p>

                                <div class="flex flex-row justify-center gap-1 pb-5">

                                    <div class="L_DOTS">
                                        <p>_______</p>
                                    </div>

                                    <p class="font-bold text-lg pt-1">OR</p>

                                    <div class="L_DOTS">
                                        <p>_______</p>
                                    </div>

                                </div>

                                <p>Log in as Admin? <a href="<?php echo SITEURL_ADMIN; ?>login.php" class="text-primary font-semibold hover:underline">Admin</a></p>

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