<?php include('../partials_user/menu.php'); ?>

<!--===========================================================SELECTED PROPERTY SECTION START====================================================-->
<section class="pt-5 pb-24 bg-light_bg_bright -mb-10">


    <div class="SELECTED_PROPERTY">

        <div class="ROW flex justify-center">
            <div>
                <p class="SECTION_TITLE">Selected</p>
            </div>
        </div>

        <div class="PROPERTY_TITLE flex justify-center">
            <?php

                //get property name
                $name=$_GET['name'];
                //display property name in result
                ?>
                    <p class="font-bold text-light_txt text-5xl font-poppins py-5">
                        You Selected <span class="text-primary">"<?php echo $name ?>"</span>
                    </p>
                <?php
                
            ?>
        </div>

        <div class="ROW py-1 px-7 flex justify-center gap-5">


                <?php
                
                    $id=$_GET['id'];
                    //query to get all admin
                    $sql = "SELECT * FROM property WHERE id=$id";
                    //execute the query
                    $res = mysqli_query($conn, $sql);

                    //check whether the query is executed or not
                    if($res==TRUE)
                    {
                        //Count rows to check whether we have data in database or not
                        $count = mysqli_num_rows($res);//function to get all rows in the database

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
                                $owner=$rows['owner'];
                                $phone=$rows['phone'];
                                $whatsapp=$rows['whatsapp'];
                                $email=$rows['email'];

                                //displaying the values in our table
                                ?>

                                    <div class="flex justify-center">
                                        <div class="PROPERTY_CARD flex flex-col p-10 bg-light_bg_bright2 rounded-xl">

                                            <div class="ROW flex">

                                                <div class="ROW">

                                                    <div class="BACKGROUND_IMAGE">
                                                        <div class="B_cad"><?php echo $backgroundName; ?></div>
                                                    </div>

                                                    <div class="PICTURES flex">

                                                        <div class="S_cad"><?php echo $backgroundName; ?></div>

                                                        <div class="S_cad"><?php echo $pictureName; ?></div>

                                                        <div class="S_cad"><?php echo $pictureName; ?></div>

                                                    </div>

                                                    <div class="RATINGS flex">
                                                        <i class="fas fa-sun text-xl"></i>
                                                        <i class="fas fa-sun text-xl"></i>
                                                        <i class="fas fa-sun text-xl"></i>
                                                        <i class="fas fa-sun text-xl"></i>
                                                        <i class="fas fa-sun text-xl"></i>

                                                        <p>4.8</p>
                                                        <p>|</p>
                                                        <p>20 Reviews</p>
                                                    </div>

                                                </div>

                                                <div class="ROW">

                                                    <div class="ROW w-60">
                                                        <p><?php echo $name; ?> | <?php echo $description; ?></p>
                                                    </div>

                                                    <div class="ROW">
                                                        <p><?php echo $price; ?></p>
                                                    </div>

                                                    <div class="ROW">
                                                        <p><?php echo $owner; ?></p>
                                                        <p><?php echo $phone; ?></p>
                                                        <p><?php echo $whatsapp; ?></p>
                                                        <p><?php echo $email; ?></p>
                                                    </div>

                                                </div>

                                            </div>

                                            <section id="Reviews" class="ROW">
                                                
                                                    <div>
                                                        <div class="SECTION_TITLE_2">Reviews</div>
                                                    </div>
                                                    <div>
                                                        <p class="text-primary hover:text-light_txt underline cursor-pointer flex justify-end">View All >></p>
                                                    </div>
                                                    <div>

                                                        <div class="REVIEW_CARD"></div>

                                                    </div>
                                                
                                            </section>

                                            <section id="Property_Description" class="ROW">
                                                
                                                    <div>
                                                        <div class="SECTION_TITLE_2">Property Description</div>
                                                    </div>
                                                    <div>
                                                        <p>Type : <?php echo $type; ?></p>
                                                        <p> Status : <?php echo $status; ?></p>
                                                        <p> Location : <?php echo $city; ?></p>
                                                        <p> Description : <?php echo $description; ?></p>
                                                        <p> Price : <?php echo $price; ?></p>
                                                        <p> Bedrooms : <?php echo $bedrooms; ?></p>
                                                        <p> Bathrooms : <?php echo $bathrooms; ?></p>
                                                        <p> Square Ft : <?php echo $squareFt; ?></p>
                                                    </div>
                                                
                                            </section>

                                            <section id="Images" class="ROW">
                                                
                                                    <div>
                                                        <div class="SECTION_TITLE_2">Images</div>
                                                    </div>
                                                    <div>
                                                        <div class="pic_box"><?php echo $backgroundName; ?></div>
                                                        <div class="pic_box"><?php echo $pictureName; ?></div>
                                                        <div class="pic_box"><?php echo $pictureName; ?></div>
                                                    </div>
                                                
                                            </section>

                                            <div class="ROW">
                                                <a href="<?php echo SITEURL_USER; ?>order_property.php?id=<?php echo $id; ?>" class="BTN2 w-28 flex justify-center">Submit</a>
                                            </div>
                                            
                                        </div>
                                    </div>

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


</section>
<!--===========================================================SELECTED PROPERTY SECTION END====================================================-->

<?php include('../partials_user/footer.php'); ?>