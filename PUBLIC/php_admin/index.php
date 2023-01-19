<?php include('../partials_admin/menu.php'); ?>

	<!--===========================================================HOME SECTION START====================================================-->
	<section id="Home" class="bg-light_bg_bright">

		<a name="Home">

            <div class="MAIN_CONTENT">

                <div class="ROW">

                    <div class="HEADER">Dashboard</div>

                    <?php
                        if(isset($_SESSION['login'])) //checking wether session message is set or not
                        {
                            echo $_SESSION['login']; //displaying session message
                            unset($_SESSION['login']); //removing session message
                        }
                    ?>

                    <div class="ROW flex gap-5">

                        <div class="COL_4">
                            <p class="text-3xl font-bold">5</p>
                            
                            <p class="pt-1">Properties</p>
                        </div>

                        <div class="COL_4">
                            <p class="text-3xl font-bold">5</p>
                            
                            <p class="pt-1">Properties</p>
                        </div>

                        <div class="COL_4">
                            <p class="text-3xl font-bold">5</p>
                            
                            <p class="pt-1">Properties</p>
                        </div>

                        <div class="COL_4">
                            <p class="text-3xl font-bold">5</p>
                            
                            <p class="pt-1">Properties</p>
                        </div>

                    </div>
                    
                </div>

            </div>
			
	    </a>
	
	</section>
	<!--===========================================================HOME SECTION END====================================================-->
	
	<?php include('../partials_admin/footer.php'); ?>