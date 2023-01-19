<?php include('../partials_user/nav.php'); ?>

<!--===========================================================REGISTER SECTION START====================================================-->
<section id="Register">

    <a name="Register">
        <div class="REGISTER h-full">

            <div class="bg-fixed h-full flex flex-col bg-cover bg-no-repeat bg-left text-light_txt" style="background-image: url('../images/12.jpg');">

                <div class="ROW flex justify-center">

                    <div class="py-16 px-32 w-1/2 backdrop-blur-xl flex justify-center text-center items-center">

                        <div>
                            <form action="" class="bg-light_bg_bright p-10 rounded-xl">

                                <p class="text-4xl">Register</p>

                                <p class="text-lg">To Access Your Dashboard</p>

                                <div class="SEARCH_GROUP relative flex">
                                    <input type="text" name="Register_name" required class="SEARCH_CONTROL bg-light_bg_bright" placeholder="Enter Name">
                                </div>
                                
                                <div class="SEARCH_GROUP relative flex">
                                    <input type="email" name="Register_email" required class="SEARCH_CONTROL bg-light_bg_bright" placeholder="Enter Email">
                                </div>

                                <div class="SEARCH_GROUP relative flex">
                                    <input type="text" name="Register_phone" required class="SEARCH_CONTROL bg-light_bg_bright" placeholder="Enter Phone">
                                </div>

                                <div class="SEARCH_GROUP relative flex">
                                    <input type="password" name="Register_password" required class="SEARCH_CONTROL bg-light_bg_bright" placeholder="Enter Password">
                                </div>

                                <div class="SEARCH_BUTTON py-5 text-white">
                                    <!--<button class="h-12 w-48 flex justify-center px-5 py-5">Register</button>-->
                                    <input type="submit" value="Register" class="h-12 w-48 flex justify-center px-5 py-5">
                                </div>

                            </form>
                        </div>

                    </div>

                </div>

            </div>
            
        </div>
    </a>

</section>
<!--===========================================================REGISTER SECTION END====================================================-->

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