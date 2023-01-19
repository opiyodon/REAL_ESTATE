<?php include('../partials_user/nav.php'); ?>

<!--===========================================================PASSWORD_RESET SECTION START====================================================-->
<section id="Password_Reset">

    <a name="Password_Reset">
        <div class="PASSWORD_RESET h-full">

            <div class="bg-fixed h-full flex flex-col bg-cover bg-no-repeat bg-left text-light_txt" style="background-image: url('../images/1.jpeg');">

                <div class="ROW flex justify-center">

                    <div class="py-20 px-32 w-1/2 backdrop-blur-xl flex justify-center text-center items-center">

                        <div>
                            <form action="" class="bg-light_bg_bright p-10 rounded-xl">

                                <p class="text-4xl">PASSWORD<br>RESET</p>

                                <p class="text-lg text-primary">Enter a Strong Password<br>that you wont forget!</p>

                                <div class="SEARCH_GROUP relative flex">
                                    <input type="email" name="login_email" required class="SEARCH_CONTROL bg-light_bg_bright" placeholder="Enter Email">
                                </div>

                                <div class="SEARCH_GROUP relative flex">
                                    <input type="password" name="password_reset1" required class="SEARCH_CONTROL bg-light_bg_bright" placeholder="Enter New Password">
                                </div>

                                <div class="SEARCH_GROUP relative flex">
                                    <input type="password" name="password_reset2" required class="SEARCH_CONTROL bg-light_bg_bright" placeholder="Confirm Password">
                                </div>

                                <div class="SEARCH_BUTTON py-5 text-white">
                                    <!--<button class="h-12 w-48 flex justify-center px-5 py-5">Save</button>-->
                                    <input type="submit" value="Save" class="h-12 w-48 flex justify-center px-5 py-5">
                                </div>

                            </form>
                        </div>

                    </div>

                </div>

            </div>
            
        </div>
    </a>

</section>
<!--===========================================================PASSWORD_RESET SECTION END====================================================-->

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