<?php include('../partials_user/menu.php'); ?>

<!--===========================================================BLOG SECTION START====================================================-->
<section id="Blog" class="pt-5 pb-24 bg-light_bg_bright">

	<a name="Blog">
		<div class="BLOG">
	
			<div class="ROW flex justify-center">
				<div>
					<p class="SECTION_TITLE">News & Blogs</p>
				</div>
			</div>

			<div class="BLOG_TITLE flex justify-center">
				<p class="font-bold text-light_txt text-5xl font-poppins py-5">
					All News Feeds
				</p>
			</div>

			<div class="ROW py-1 px-7 flex gap-5">

						<?php
                            //query to get all admin
                            $sql2 = "SELECT * FROM property WHERE blog='Yes' ORDER BY id DESC";
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

<?php include('../partials_user/footer.php'); ?>