<?php include('../config/constants.php'); ?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		Homeverse
	</title>
	<link  href="../css_user/style.css"  type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>



<body class="text-base transition-all duration-1000 ease-in-out bg-light_bg_bright text-light_txt font-poppins">


	<div class="SECTIONS">

		<!--===========================================================NAV_BAR_SECTION SECTION START====================================================-->
	<section>

		<div id="NAV_BAR_SECTION" class="NAV_BAR_SECTION grid grid-cols-8 justify-around pl-20 py-5 sticky">

			<div class="LOGO col-span-3 font-bold">

				<a href="<?php echo SITEURL_USER; ?>index.php" class="flex flex-row items-center text-center">
                    <img src="../images/9.jpg" class="w-10 h-10 rounded-3xl">
				
				    <p class="pl-1">HOME<span class="text-primary font-clicker font-extrabold">VERSE</span></p>
                </a>

			</div>

			<div class="LOGIN_REGISTER flex flex-row col-span-2 justify-center gap-5">

				<a href="<?php echo SITEURL_USER; ?>login.php">
					<div class="LOGIN flex flex-row">
						<div class="BTN rounded-lg py-2 px-5 font-semibold">

							<div>
								
								<ion-icon name="person" class="mt-1"></ion-icon>

							</div>

							<p class="pl-2">Login</p>

						</div>
					</div>
				</a>

				<a href="<?php echo SITEURL_USER; ?>register.php">
					<div class="REGISTER flex flex-row">
						<div class="BTN rounded-lg py-2 px-5 font-semibold">

							<div>
								
								<ion-icon name="person-add" class="mt-1"></ion-icon>

							</div>

							<p class="pl-2">Register</p>
							
						</div>
					</div>
				</a>
				
			</div>

            <div class="ROW col-span-2 flex justify-end">
                <div class="DAY_NIGHT s-icon">
                    <div class="BTN rounded-full DL_ICON font-semibold p-3">
                        <i class="fas fa-moon text-xl"></i>
					</div>
                </div>
            </div>
            
			
		</div>

	</section>
	<!--===========================================================NAV_BAR_SECTION SECTION END====================================================-->