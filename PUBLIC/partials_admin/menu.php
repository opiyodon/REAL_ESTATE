<?php

	include('../config/constants.php');
	include('login_check.php');

?>

<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		Homeverse - Admin
	</title>
	<link  href="../images/9.jpg"  type="image/x-icon" rel="icon">
	<link  href="../css_admin/style.css"  type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>



<body class="text-base transition-all duration-1000 ease-in-out bg-light_bg_bright2 text-light_txt font-poppins">


	<div class="SECTIONS">

		<!--===========================================================NAV_BAR_SECTION SECTION START====================================================-->
	<section>

		<div id="NAV_BAR_SECTION" class="NAV_BAR_SECTION grid grid-cols-11 justify-around pl-20 py-5 sticky">

			<div class="LOGO col-span-2 font-bold">

				<a href="<?php echo SITEURL_ADMIN; ?>index.php" class="flex flex-row items-center text-center">
                    <img src="../images/9.jpg" class="w-10 h-10 rounded-3xl">
				
				    <p class="pl-1">HOME<span class="text-primary font-clicker font-extrabold">VERSE</span></p>
                </a>

			</div>

			<div class="NAV-TOGGLER text-primary font-bold hidden">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
				  </svg>
			</div>
			
			<div class="NAV col-span-6">

				<ul class="flex flex-row font-bold gap-12 py-2 text-lg">

					<li>
						<a href="<?php echo SITEURL_ADMIN; ?>index.php" class="NAV_LI hover:text-primary flex flex-col justify-center items-center text-center ///// ACTIVE">
							<p>Home</p>
						</a>
					</li>

					<li>
						<a href="<?php echo SITEURL_ADMIN; ?>manage_admin.php" class="NAV_LI hover:text-primary flex flex-col justify-center items-center text-center ///// ">
							<p>Admin</p>
						</a>
					</li>

					<li>
						<a href="<?php echo SITEURL_ADMIN; ?>manage_property.php" class="NAV_LI hover:text-primary flex flex-col justify-center items-center text-center ///// ">
							<p>Property</p>
						</a>
					</li>

					<li>
						<a href="<?php echo SITEURL_ADMIN; ?>manage_blog.php" class="NAV_LI hover:text-primary flex flex-col justify-center items-center text-center ///// ">
							<p>Blog</p>
						</a>
					</li>

                    <li>
						<a href="<?php echo SITEURL_ADMIN; ?>manage_order.php" class="NAV_LI hover:text-primary flex flex-row justify-center items-center text-center ///// ">
							<p>Order</p>
						</a>
					</li>

				</ul>
				
			</div>

			<div class="LOGOUT flex flex-row col-span-2">

            <a href="<?php echo SITEURL_ADMIN; ?>logout.php">
					<div class="LOGOUT flex flex-row">
						<div class="BTN rounded-lg py-2 px-5 font-semibold">

							<div>
								
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
									<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
								  </svg>								  

							</div>

							<p class="pl-2">Logout</p>
							
						</div>
						
					</div>
				</a>
				
			</div>

			<div class="DAY_NIGHT s-icon col-span-1 flex justify-start">
					<div class="BTN rounded-full DL_ICON font-semibold p-3">
                        <i class="fas fa-moon text-xl"></i>
					</div>
			</div>
			
		</div>

	</section>
	<!--===========================================================NAV_BAR_SECTION SECTION END====================================================-->