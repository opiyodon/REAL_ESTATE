<?php include('../partials_user/menu.php'); ?>

	<!--===========================================================HOME SECTION START====================================================-->
	<section id="Home">

		<a name="Home">

			<div class="HOME bg-fixed h-full py-60 px-32 flex flex-col align-middle bg-cover bg-no-repeat bg-left" style="background-image: url('../images/2.jpg');">
						
				<div class="relative w-screen">
					<a href="<?php echo SITEURL_USER; ?>add_property.php" class="BTN2 w-56 absolute right-44 -top-52">Submit Property</a>
				</div>

				<?php
                        if(isset($_SESSION['add'])) //checking wether session message is set or not
                        {
                            echo $_SESSION['add']; //displaying session message
                            unset($_SESSION['add']); //removing session message
                        }

						if(isset($_SESSION['upload1'])) //checking wether session message is set or not
                        {
                            echo $_SESSION['upload1']; //displaying session message
                            unset($_SESSION['upload1']); //removing session message
                        }

						if(isset($_SESSION['upload2'])) //checking wether session message is set or not
                        {
                            echo $_SESSION['upload2']; //displaying session message
                            unset($_SESSION['upload2']); //removing session message
                        }
                    ?>
			
				<div>
					<p class="text-primary text-7xl">Let Us</p>
					<p class="text-white text-5xl">Guide You Home</p>
				</div>

				<div>
 
					<form action="<?php echo SITEURL_USER; ?>property_search.php" method="POST" class="flex gap-5">
						<div class="SEARCH_GROUP relative flex items-center gap-5">

							<div class="backdrop-blur-xl rounded-3xl px-5 py-2">
								<p class="text-primary text-2xl">Search Property By Type</p>
							</div>

							<select required name="type" id="type" class="SEARCH_CONTROL bg-light_bg_bright2">

								<option value="Select_Type">Select Type</option>

								<?php
									//query to get all admin
									$sql3 = "SELECT DISTINCT type FROM property ORDER BY id DESC";
									//execute the query
									$res3 = mysqli_query($conn, $sql3);

									//check whether the query is executed or not
									if($res3==TRUE)
									{
										//Count rows to check whether we have data in database or not
										$count3 = mysqli_num_rows($res3);//function to get all rows in the database

										//check the num of rows
										if($count3>0)
										{
											//we have data in database
											while($rows3=mysqli_fetch_assoc($res3))
											{
												//using while loop to get all the data from database
												//and while loop will run as long as theres data in database

												//get individual data
												$type=$rows3['type'];

												//displaying the values in our table
												?>

													<option><?php echo $type ?></option>

												<?php

											}
										}
										else
										{
											?>
												<option><div class="ERROR">We Do Not Have Data in Database.</div></option>
											<?php
										}
									}
								?>

							</select>

							<div class="SEARCH_BUTTON py-5">
								<input type="submit" name="submit" class="BTN2 w-44 flex justify-center" value="Search Property">
							</div>

						</div>

					</form>
					
				</div>
				
			</div>
		</a>

	</section>
	<!--===========================================================HOME SECTION END====================================================-->

	<!--===========================================================ABOUT SECTION START====================================================-->
	<section id="About" class="pt-5 pb-24">

		<a name="About">
			<div class="ABOUT flex gap-20">

				<div class="relative">
					<div class="w-1/2 pl-24">
						<div class="ROW h-full rounded-xl border-white border-8 mt-4 py-80 px-44 bg-cover bg-no-repeat bg-left" style="background-image: url('../images/4.jpeg');">
						</div>
					</div>

					<div>
						<img src="../images/5.jpeg" alt="" class="object-cover rounded-xl absolute w-1/2 left-16 bottom-10">
					</div>
				</div>

				<div class="ROW pr-36 w-1/2">
					<div class="ROW flex flex-col justify-center pt-5">
						<div>
							<p class="SECTION_TITLE">About Us</p>
						</div>

						<div class="ABOUT_TITLE">
							<p class="font-bold text-light_txt text-5xl font-poppins py-5">
								The Leading Real Estate <br> Rental Marketplace.
							</p>
						</div>

						<div>
							<p>
								Over 39,000 people work for us in more than 70 countries all over the world. <br> This breadth of global coverage, combined with specialist services enable us to stay the top of the world market.
							</p>
						</div>

						<div class="flex gap-24 py-5">
							<div class="ROW">
								<div class="ROW py-3 flex gap-3">
									<div class="p-3 rounded-full bg-primary3 w-11 flex justify-center">
										<i class="fas fa-sun text-xl text-primary"></i>
									</div>
		
									<div class="flex justify-center">
										<p class="text-light_txt2 flex items-center">Smart Home Design</p>
									</div>
								</div>
		
								<div class="ROW py-3 flex gap-3">
									<div class="p-3 rounded-full bg-primary3 w-11 flex justify-center">
										<i class="fas fa-moon text-xl text-primary"></i>
									</div>
		
									<div class="flex justify-center">
										<p class="text-light_txt2 flex items-center">Exceptional Lifestyle</p>
									</div>
								</div>
							</div>
		
							<div class="ROW">
								<div class="ROW py-3 flex gap-3">
									<div class="p-3 rounded-full bg-primary3 w-11 flex justify-center">
										<i class="fas fa-moon text-xl text-primary"></i>
									</div>
		
									<div class="flex justify-center">
										<p class="text-light_txt2 flex items-center">Beautiful Scene Around</p>
									</div>
								</div>
		
								<div class="ROW py-3 flex gap-3">
									<div class="p-3 rounded-full bg-primary3 w-11 flex justify-center">
										<i class="fas fa-sun text-xl text-primary"></i>
									</div>
		
									<div class="flex justify-center">
										<p class="text-light_txt2 flex items-center">Complete 24/7 Security</p>
									</div>
								</div>
							</div>
						</div>

						<div class="ROW py-4">
							<div class="ABOUT_COMMENT text-gray-800 bg-primary3 py-5 px-8 rounded-lg border-l-8 border-l-primary h-full">
								<p>
									"Choose your living style today. Here at Homeverse we help you live your dreams to the fullest by giving your the best property of your choice at all times."
								</p>
							</div>
						</div>

						<a href="<?php echo SITEURL_USER; ?>home.php#Service">
							<div class="SERVICE_BUTTON py-5 text-white">
								<input type="submit" name="submit" class="BTN2 w-44 flex justify-center" value="OUR SERVICES">
							</div>
						</a>

					</div>
				</div>
			</div>
				
		</a>

	</section>
	<!--===========================================================ABOUT SECTION END====================================================-->

	<!--===========================================================SERVICE SECTION START====================================================-->
<section id="Service" class="pt-5 pb-24 bg-light_bg_bright">

	<a name="Service">
		<div class="SERVICE">
	
			<div class="ROW flex justify-center">
				<div>
					<p class="SECTION_TITLE">Our Services</p>
				</div>
			</div>

			<div class="pt-4 text-6xl flex justify-center">
				<p class="SERVICE_SECTION_TITLE">Our Main Focus</p>
			</div>

			<div class="pt-10 pb-24 px-20 flex flex-row align-middle justify-center gap-5">

				<div class="Card">

					<div>
						<img src="../images/acquire.png" alt="Discussion" class="w-20 h-20">
					</div>

					<div>
						<div class="SERVICE_TITLE">Buy a home</div>

						<div class="SERVICE_TEXT">
							<p>Buying a home? Look no further, homverse has the best houses and property you would marvel looking at.</p>
						</div>
						
						<a href="<?php echo SITEURL_USER; ?>property.php">
							<div class="text-primary flex gap-5 hover:gap-10 cursor-pointer justify-center pt-5">
								<p>Find A Home</p>
								<i>>></i>
							</div>
						</a>
					</div>
					
				</div>

				<div class="Card">

					<div>
						<img src="../images/review.png" alt="Discussion" class="w-20 h-20">
					</div>

					<div>
						<div class="SERVICE_TITLE">Rent a home</div>

						<div class="SERVICE_TEXT">
							<p>House for rent? Homeverse gives you a platform to find your desired home at the comfort of your seat.</p>
						</div>
						
						<a href="<?php echo SITEURL_USER; ?>property.php">
							<div class="text-primary flex gap-5 hover:gap-10 cursor-pointer justify-center pt-5">
								<p>Find A Home</p>
								<i>>></i>
							</div>
						</a>
					</div>
					
				</div>

				<div class="Card">

					<div>
						<img src="../images/acquire.png" alt="Discussion" class="w-20 h-20">
					</div>

					<div>
						<div class="SERVICE_TITLE">Sell a home</div>

						<div class="SERVICE_TEXT">
							<p>Looking to sell you home? Simply SUBMIT your property and watch the magic unvail.</p>
						</div>
						
						<a href="<?php echo SITEURL_USER; ?>add_property.php">
							<div class="text-primary flex gap-2 hover:gap-10 cursor-pointer justify-center pt-5">
								<p>Submit Property</p>
								<i>>></i>
							</div>
						</a>
					</div>
					
				</div>

			</div>
		

<!--=======================================================================================================-->

	<div class="bg-fixed h-full flex flex-col bg-cover bg-no-repeat bg-left text-white" style="background-image: url('../images/9.jpg');">

		

		<div class="text-4xl py-10 px-32 w-1/2 backdrop-blur-lg">

			<div>
				<p>Why Choose Us</p>
			</div>

			<div class="flex flex-row p-5">
				<div>
					<img src="../images/TOP_RATED_BUDGE.jpg" alt="TOP RATED BUDGE" class="rounded-3xl">                             
				</div>

				<div class="pt-5 pl-5">
					<p class="text-xl">Top Rated</p>
					<p class="text-base font-normal pt-1 text-gray-300">Our specialised client services and global outreach enable us to stay the top of the world market.</p>
				</div>
			</div>

			<div class="flex flex-row p-5 pl-1">
				<div>
					<img src="../images/QUALITY_BUDGE.jpg" alt="QUALITY BUDGE" class="rounded-3xl">                             
				</div>

				<div class="pt-4 pl-5">
					<p class="text-xl">Experience Quality</p>
					<p class="text-base font-normal pt-1 text-gray-300">We give you the best property of your choice and our experienced personel work 24/7 to give you the best client service.</p>
				</div>
			</div>

		</div>

	</div>


<!--===========================================================================================-->
	<div class="HOW_IT_WORKS bg-light_bg_bright">

			<div class="pt-4 text-6xl flex justify-center">
				<p class="SERVICE_SECTION_TITLE">How It Works</p>
			</div>

			<div class="pt-10 pb-24 px-20 flex flex-col align-middle justify-center gap-5">

				<div class="ROW flex flex-row align-middle justify-center">
					<div class="Card2 relative">

						<div class="CIRCLE1">
							1
						</div>

						<div class="CIRCLE2">
							<img src="../images/review.png" alt="Discussion" class="">
						</div>

						<div class="LINE_DOTS">
							<p>............................................................</p>
						</div>

						<div class="CIRCLE3">
							<p></p>
						</div>
						
					</div>

					<div class="Card2 relative">

						<div class="CIRCLE1">
							2
						</div>

						<div class="CIRCLE2">
							<img src="../images/review.png" alt="File Review">
						</div>

						<div class="LINE_DOTS">
							<p>............................................................</p>
						</div>

						<div class="CIRCLE3">
							<p></p>
						</div>
						
					</div>

					<div class="Card2 relative">

						<div class="CIRCLE1">
							3
						</div>

						<div class="CIRCLE2">
							<img src="../images/acquire.png" alt="Acquire">
						</div>
						
					</div>
				</div>
				
				<div class="ROW flex flex-row gap-5">
					<div class="Card3">

					   <div>
							<div class="SERVICE_TITLE">Discussion</div>

							<div class="SERVICE_TEXT">
								<p>Once you have picked your desired property, you will be able to speak with the property owner and come to an agreement.</p>
							</div>
						</div>
						
					</div>

					<div class="Card3">

					   <div>
							<div class="SERVICE_TITLE">Files Review</div>

							<div class="SERVICE_TEXT">
								<p>Thereafter all property details are reviewed to confirm legitimacy. At this stage, you are required to sign legal documents.</p>
							</div>
						</div>
						
					</div>

					<div class="Card3">

					   <div>
							<div class="SERVICE_TITLE">Acquire</div>

							<div class="SERVICE_TEXT">
								<p>Finally you acquire your property after all legal procedures have been followed. The property is then legally yours.</p>
							</div>
						</div>
						
					</div>
				</div>

			</div>
		
			</div>
			
		</div>

	</a>
	
</section>
	<!--===========================================================SERVICE SECTION END====================================================-->

	<!--===========================================================PROPERTY SECTION START====================================================-->
	<section id="Property" class="pt-5 pb-24 pl-10 bg-light_bg_bright2 -mt-24">

		<a name="Property">
			<div class="PROPERTY">
		
				<div class="ROW flex justify-center">
					<div>
						<p class="SECTION_TITLE">Properties</p>
					</div>
				</div>

				<div class="PROPERTY_TITLE flex justify-center">
					<p class="font-bold text-light_txt text-5xl font-poppins py-5">
						Featured Listings
					</p>
				</div>

				<a href="<?php echo SITEURL_USER; ?>property.php">
					<div class="ROW flex justify-end pr-24 pb-5">
						<div>
							<p class="text-primary hover:text-light_txt underline">All Listings >></p>
						</div>
					</div>
				</a>

				<div class="ROW py-1 px-7 flex gap-5">


						<?php
                            //query to get all admin
                            $sql = "SELECT * FROM property WHERE featured='Yes' AND active='Yes' ORDER BY id DESC LIMIT 3";
                            //execute the query
                            $res = mysqli_query($conn, $sql);

                            //check whether the query is executed or not
                            if($res==TRUE)
                            {
                                //Count rows to check whether we have data in database or not
                                $count = mysqli_num_rows($res);//function to get all rows in the database

                                $sn=1;//create a variable and assign the value

                                //check the num of rows
                                if($count>0)
                                {
                                    //we have data in database
                                    while($rows=mysqli_fetch_assoc($res))
                                    {
                                        //using while loop to get all the data from database
                                        //and while loop will run as long as theres data in database

                                        //get individual data
                                        $id=$rows['id'];
                                        $name=$rows['name'];
										$type=$rows['type'];
										$status=$rows['status'];
										$city=$rows['city'];
                                        $backgroundName=$rows['backgroundName'];
                                        $pictureName=$rows['pictureName'];
										$price=$rows['price'];
										$bedrooms=$rows['bedrooms'];
										$bathrooms=$rows['bathrooms'];
										$squareFt=$rows['squareFt'];
										$description=$rows['description'];
                                        $featured=$rows['featured'];
                                        $active=$rows['active'];

                                        //displaying the values in our table
                                        ?>

											<a href="<?php echo SITEURL_USER; ?>selected_property.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>">

											<!-- ===============UPDATE CARD THEN DELETE ||| START============ -->
											<div class="cadz w-96">
												<div class="relative text-white w-full">
													<img src="../images/property/background/<?php echo $backgroundName; ?>" alt="<?php echo $backgroundName; ?>" class="rounded-t-xl object-cover">
														
														<div class="top-1 p-3 absolute flex justify-end">
															<div class="BADGE">
																<p><?php echo $status; ?></p>
															</div>
														</div>
														
														<div class="absolute bottom-1 p-3 flex justify-between gap-28">
															<div class="ROW">
																<div class="flex flex-row gap-2 cursor-pointer">
																	<div>
																		
																		<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
																			<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
																			<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
																		</svg>                              
												
																	</div>
																	<p><?php echo $city; ?></p>
																</div>
															</div>

															<div class="ROW flex gap-2">
																<div></div>
																<div class="flex flex-row cursor-pointer">
																	<div>
																		
																		<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
																			<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
																			<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
																		</svg>                              
												
																	</div>
																	<p>2</p>
																</div>
															</div>
														</div>
												</div>

												<div class="px-5 py-8 bg-light_bg_bright rounded-b-xl w-full">

													<div class="AMOUNT flex text-red-700">
														<p class="font-bold text-2xl">$ <?php echo $price; ?></p>
														<p class="text-base pt-2">/Month</p>
													</div>

													<div class="HOUSE font-bold">
														<p class="text-2xl py-2"><?php echo $name; ?></p>
													</div>

													<div class="TEXT text-light_txt2 py-2">
														<p><?php echo $description; ?></p>
													</div>

													<div class="ROW text-light_txt2 py-2 flex gap-5 pt-3">
														<div class="border-r-2 border-light_txt2 pr-5">

															<div class="flex flex-row cursor-pointer">

																<p><?php echo $bedrooms; ?></p>

																<div>
																	
																	<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 pl-1">
																		<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
																		<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
																	</svg>                              
								
																</div>
													
															</div>
															<div>
																<p>Bedroom</p>
															</div>
														</div>
														<div class="border-r-2 border-light_txt2 pr-5">
															<div class="flex flex-row cursor-pointer">

																<p><?php echo $bathrooms; ?></p>

																<div>
																	
																	<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 pl-1">
																		<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
																		<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
																	</svg>                              
								
																</div>
													
															</div>
															<div>
																<p>Bathrooms</p>
															</div>
														</div>
														<div>
															<div class="flex flex-row cursor-pointer">

																<p><?php echo $squareFt; ?></p>

																<div>
																	
																	<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 pl-1">
																		<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
																		<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
																	</svg>                              
								
																</div>
													
															</div>
															<div>
																<p>Square Ft</p>
															</div>
														</div>
													</div>

											</div>
											<!-- ===============UPDATE CARD THEN DELETE ||| END============ -->

												</div>

											</a>

                                        <?php

                                    }
                                }
                                else
                                {
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="ERROR">No Property has been listed yet.</div>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>



					


					
				</div>
				
			</div>
		</a>
		
		</section>
	<!--===========================================================PROPERTY SECTION END====================================================-->

	<!--===========================================================BLOG SECTION START====================================================-->
<section id="Blog" class="pt-5 pb-24 pl-10 bg-light_bg_bright">

	<a name="Blog">
		<div class="BLOG">
	
			<div class="ROW flex justify-center">
				<div>
					<p class="SECTION_TITLE">News & Blogs</p>
				</div>
			</div>

			<div class="BLOG_TITLE flex justify-center">
				<p class="font-bold text-light_txt text-5xl font-poppins py-5">
					Latest News Feeds
				</p>
			</div>

			<a href="<?php echo SITEURL_USER; ?>blog.php">
				<div class="ROW flex justify-end pr-24 pb-5">
					<div>
						<p class="text-primary hover:text-light_txt underline">All News Feeds >></p>
					</div>
				</div>
			</a>

			<div class="ROW py-1 px-7 flex gap-5">

						<?php
                            //query to get all admin
                            $sql2 = "SELECT * FROM property WHERE blog='Yes' ORDER BY id DESC LIMIT 3";
                            //execute the query
                            $res2 = mysqli_query($conn, $sql2);

                            //check whether the query is executed or not
                            if($res2==TRUE)
                            {
                                //Count rows to check whether we have data in database or not
                                $count2 = mysqli_num_rows($res2);//function to get all rows in the database

                                $sn=1;//create a variable and assign the value

                                //check the num of rows
                                if($count2>0)
                                {
                                    //we have data in database
                                    while($rows2=mysqli_fetch_assoc($res2))
                                    {
                                        //using while loop to get all the data from database
                                        //and while loop will run as long as theres data in database

                                        //get individual data
                                        $id=$rows2['id'];
                                        $type=$rows2['type'];
										$backgroundName=$rows2['backgroundName'];
                                        $comment=$rows2['comment'];
										$date=$rows2['date'];
                                        $featured_blog=$rows2['featured_blog'];
                                        $active_blog=$rows2['active_blog'];

                                        //displaying the values in our table
                                        ?>

											<a href="<?php echo SITEURL_USER; ?>blog_details.php?id=<?php echo $id; ?>">

												<div class="cadz w-96">
													<div class="relative text-white">
														<img src="../images/property/background/<?php echo $backgroundName; ?>" alt="<?php echo $backgroundName; ?>" class="rounded-t-xl object-cover">
													</div>

													<div class="px-5 py-8 bg-light_bg_bright2 rounded-b-xl w-full">

														<div class="ROW flex justify-between">
															<div class="TEXT text-light_txt2 py-2 flex">
															
																<div>
																			
																	<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-red-600 w-6 h-6 pl-1">
																		<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
																		<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
																	</svg>                              
									
																</div>
									
																<p class="hover:text-red-600">By: Admin</p>
									
															</div>

															<div class="TEXT text-light_txt2 py-2 flex">
															
																<div>
																			
																	<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-red-600 w-6 h-6 pl-1">
																		<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
																		<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
																	</svg>                              
									
																</div>
									
																<p class="hover:text-red-600"><?php echo $type ?></p>
									
															</div>
														</div>

														<div class="HOUSE font-bold">
															<p class="text-2xl py-2 hover:text-red-600"><?php echo $comment ?></p>
														</div>

														<div class="ROW flex justify-between">
															<div class="TEXT text-light_txt2 py-2 flex">
															
																<div>
																			
																	<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-red-600 w-6 h-6 pl-1">
																		<path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
																		<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
																	</svg>                              
									
																</div>
									
																<p class="hover:text-red-600"><?php echo $date ?></p>
									
															</div>

																<div class="TEXT text-red-600 hover:text-primary">
															
																	<p>READ MORE</p>
										
																</div>
														</div>

													</div>

												</div>

											</a>

                                        <?php

                                    }
                                }
                                else
                                {
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="ERROR">No Blog has been added yet.</div>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>



			</div>
			
		</div>
	</a>
	
	</section>
	<!--===========================================================BLOG SECTION END====================================================-->

	<!--===========================================================CONTACT SECTION START====================================================-->
<section id="Contact" class="pt-5 pb-24">

	<a name="Contact">
		<div class="CONTACT">
	
			<div class="ROW flex justify-center">
				<div>
					<p class="SECTION_TITLE">Contact Us</p>
				</div>
			</div>

			<div class="BLOG_TITLE flex justify-center">
				<p class="font-bold text-light_txt text-5xl font-poppins py-5">
					Have Any Questions ?
				</p>
			</div>

			<div class="ROW">

				<div class="ROW flex flex-col justify-center">

					<!--=======================================================================================================-->

					<div class="pt-10 px-20 pb-7 flex flex-row align-middle justify-center gap-5">

						<div class="Card">
		
							<div>
								<img src="../images/acquire.png" alt="Discussion" class="w-20 h-20">
							</div>
		
							<a href="#">
								<div>
									<div class="SERVICE_TITLE hover:text-primary">Phone Number</div>
			
									<div class="SERVICE_TEXT hover:text-primary">
										<p>0712345678</p>
									</div>
								</div>
							</a>
							
						</div>
		
						<div class="Card">
		
							<div>
								<img src="../images/review.png" alt="Discussion" class="w-20 h-20">
							</div>
		
							<a href="#">
								<div>
									<div class="SERVICE_TITLE hover:text-primary">Email Address</div>
			
									<div class="SERVICE_TEXT hover:text-primary">
										<p>homeverse@gmail.com</p>
									</div>
								</div>
							</a>
							
						</div>
		
						<div class="Card">
		
							<div>
								<img src="../images/acquire.png" alt="Discussion" class="w-20 h-20">
							</div>
		
							<a href="#">
								<div>
									<div class="SERVICE_TITLE hover:text-primary">Office Address</div>
			
									<div class="SERVICE_TEXT hover:text-primary">
										<p>Nairobi, Kenya</p>
									</div>
								</div>
							</a>
							
						</div>
		
					</div>

		<!--=======================================================================================================-->

				</div>

				<div class="ROW px-20">

					<div class="Card p-2">
		
						<div class="flex gap-10">

							<div class="ROW">

								<!---=========contact Form=======--->
								<form class="GFORM" method="POST" data-email="opiyodon9@gmail.com" action="https://script.google.com/macros/s/AKfycbwCGs3AYqnF95SFheTiIaF4INjOGIRi_nPuIh0SvkvEyx5NNqEwVfVTcA1GCFo42Sp_rg/exec">
									<div class="ROW">

										<div class="CONTACT_FORM w-full">
				
											<div class="ROW flex xs:flex-col md:flex-row md:gap-10">
				
												<div class="FORM_ITEM md:w-1/2">
				
													<div class="FORM_GROUP">
														<input type="text" name="Name" required class="FORM_CONTROL xs:h-8 md:h-14 p-5" placeholder="Name">
													</div>
				
												</div>
				
												<div class="FORM_ITEM md:w-1/2">
				
													<div class="FORM_GROUP">
														<input type="email" name="Email" required id="GMAIL" class="FORM_CONTROL xs:h-8 md:h-14 p-5" placeholder="Email">
													</div>
				
												</div>
				
											</div>
				
											<div class="ROW">
				
												<div class="FORM_ITEM">
				
													<div class="FORM_GROUP">
														<input type="text" name="Subject" required class="FORM_CONTROL xs:h-10 md:h-16 p-5" placeholder="Subject">
													</div>
				
												</div>
				
											</div>
				
											<div class="ROW">
				
												<div class="FORM_ITEM">
				
													<div class="FORM_GROUP">
														<textarea name="Message" required class="FORM_CONTROL_MESSAGE h-56 scroll p-5" id="" placeholder="Message"></textarea>
													</div>
				
												</div>
				
											</div>

											<div class="text-white pl-10">
												<div class="SUBMIT_BUTTON py-5">
													<input type="submit" class="BTN2 w-44 flex justify-center" value="Send">
												</div>
											</div>
				
										</div>
				
									</div>
								</form>

							</div>

							<div class="ROW">
								<div class="map pt-2">
				
									<iframe class="w-96 h-96 rounded-2xl" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6709.971064919377!2d36.034636629210816!3d-0.27409609980470795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18298dd7388806c5%3A0xa68672a04fad1db!2sKabarak%20University!5e0!3m2!1sen!2ske!4v1665729141752!5m2!1sen!2ske"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					
								</div>
							</div>

						</div>
						
					</div>

				</div>

			</div>
			
		</div>
	</a>
	
	</section>
	<!--===========================================================CONTACT SECTION END====================================================-->
	
	<?php include('../partials_user/footer.php'); ?>