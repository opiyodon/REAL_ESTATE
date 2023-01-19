<?php include('../partials_user/menu.php'); ?>

<!--===========================================================PROPERTY SEARCH SECTION START====================================================-->
<section id="property_search" class="pt-5 pb-24 bg-light_bg_bright -mb-10">

<a name="property_search">
    <div class="PROPERTY_SEARCH">

        <div class="ROW flex justify-center">
            <div>
                <p class="SECTION_TITLE">Search</p>
            </div>
        </div>

        <div class="PROPERTY_TITLE flex justify-center">
            <?php
                //Get the search keyword
                $search2=$_POST['type'];
            ?>
            <p class="font-bold text-light_txt text-5xl font-poppins py-5">
                Property on <span class="text-primary">"<?php echo $search2 ?>"</span>
            </p>
        </div>

        <div class="ROW py-1 px-7 flex gap-5">


                <?php
                    //Get the search keyword
                    $search=$_POST['type'];
                    //query to get all admin
                    $sql = "SELECT * FROM property WHERE type LIKE '%$search%' ORDER BY id DESC";
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

                                    <a href="<?php echo SITEURL_USER; ?>property.php?id=<?php echo $id; ?>">

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

                                        <div class="px-5 py-8 bg-light_bg_bright2 rounded-b-xl w-full">

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
                                    <div class="ERROR">We do not have such data in our database!</div>
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

<?php include('../partials_user/footer.php'); ?>