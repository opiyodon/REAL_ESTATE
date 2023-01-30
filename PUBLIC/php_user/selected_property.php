<?php include('../partials_user/menu.php'); ?>

<!--===========================================================SELECTED PROPERTY SECTION START====================================================-->
<section class="pt-5 pb-24 bg-light_bg_bright">


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

                    <?php
                        if(isset($_SESSION['add'])) //checking wether session message is set or not
                        {
                            echo $_SESSION['add']; //displaying session message
                            unset($_SESSION['add']); //removing session message
                        }

                        if(isset($_SESSION['upload'])) //checking wether session message is set or not
                        {
                            echo $_SESSION['upload']; //displaying session message
                            unset($_SESSION['upload']); //removing session message
                        }
                    ?>

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
                                $pictureName2=$rows['pictureName2'];
                                $oldPrice=$rows['oldPrice'];
                                $discount=$rows['discount'];
                                $price=$rows['price'];
                                $discountPercent=$rows['discountPercent'];
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

                                            <div class="ROW flex gap-10">

                                                <div class="ROW">

                                                    <div class="BACKGROUND_IMAGE p-2">
                                                        <div class="B_cad">
                                                            <?php

                                                                //check whether image is availabele or not
                                                                if($backgroundName!="")
                                                                {
                                                                    //display image
                                                                    ?>

                                                                    <img src="../images/property/background/<?php echo $backgroundName ?>" class="w-full rounded-md">

                                                                    <?php
                                                                }
                                                                else
                                                                {
                                                                    //display message
                                                                    echo "<div class='ERROR'>Image Not Added</div>";
                                                                }

                                                            ?>
                                                        </div>
                                                    </div>

                                                    <div class="PICTURES flex justify-center gap-3 p-2">

                                                        <div class="S_cad">

                                                            <?php

                                                                //check whether image is availabele or not
                                                                if($backgroundName!="")
                                                                {
                                                                    //display image
                                                                    ?>

                                                                    <img src="../images/property/background/<?php echo $backgroundName ?>" class="w-full rounded-sm">

                                                                    <?php
                                                                }
                                                                else
                                                                {
                                                                    //display message
                                                                    echo "<div class='ERROR'>Image Not Added</div>";
                                                                }

                                                            ?>
                                                            
                                                        </div>

                                                        <div class="S_cad">

                                                            <?php

                                                                //check whether image is availabele or not
                                                                if($pictureName!="")
                                                                {
                                                                    //display image
                                                                    ?>

                                                                    <img src="../images/property/picture/<?php echo $pictureName ?>" class="w-full rounded-sm">

                                                                    <?php
                                                                }
                                                                else
                                                                {
                                                                    //display message
                                                                    echo "<div class='ERROR'>Image Not Added</div>";
                                                                }

                                                            ?>

                                                        </div>

                                                        <div class="S_cad">

                                                            <?php

                                                                //check whether image is availabele or not
                                                                if($pictureName2!="")
                                                                {
                                                                    //display image
                                                                    ?>

                                                                    <img src="../images/property/picture/<?php echo $pictureName2 ?>" class="w-full rounded-sm">

                                                                    <?php
                                                                }
                                                                else
                                                                {
                                                                    //display message
                                                                    echo "<div class='ERROR'>Image Not Added</div>";
                                                                }

                                                            ?>

                                                        </div>

                                                    </div>

                                                    <div class="RATINGS flex justify-center gap-3 p-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                                            </svg>

                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                                            </svg>

                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                                            </svg>

                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                                            </svg>

                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd" />
                                                            </svg>


                                                            <p>4.8</p>
                                                            <p>|</p>
                                                            <?php
                                                                //get property id
                                                                $p_id=$_GET['id'];
                                                                
                                                                //query to get all admin
                                                                $sql = "SELECT * FROM reviews WHERE property_id=$p_id ORDER BY id DESC";
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

                                                                            //displaying the values in our card
                                                                            ?>

                                                                                <p><?php echo $count ?> Reviews</p>

                                                                            <?php

                                                                    }
                                                                    else
                                                                    {
                                                                        ?>
                                                                            <p>0 Reviews</p>
                                                                        <?php
                                                                    }
                                                                }
                                                            ?>

                                                    </div>

                                                </div>

                                                <div class="ROW p-5">

                                                    <div class="ROW w-60 pb-10">
                                                        <p><?php echo $name; ?> | <?php echo $description; ?></p>
                                                    </div>

                                                    <div class="ROW pb-10">
                                                        <div class="flex flex-row justify-center gap-2 rounded-l-lg rounded-r-full py-2 px-5 border-2 border-primary w-full relative">
                                                            <p>Price : </p>
                                                            <p>Ksh.<?php echo $price; ?></p>
                                                            <strike class="text-red-600"><p>Ksh.<?php echo $oldPrice ; ?></p> </strike>
                                                            <div class="flex justify-end">
                                                                <div class="absolute -top-10 rounded-full bg-primary2 backdrop-blur-md">
                                                                    <p class="py-1 px-3 flex text-primary text-center"><?php echo $discountPercent ?>%<br>off</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="ROW flex flex-col gap-5">
                                                        <div class="SECTION_TITLE_2">Owner Details</div>
                                                        <div class="flex flex-row gap-2">
                                                            <p>Owner : </p>
                                                            <p class="hover:text-light_txt text-primary hover:underline"><?php echo $owner; ?></p>
                                                        </div>
                                                        <div class="flex flex-row gap-2">
                                                            <p>Phone : </p>
                                                            <p class="hover:text-light_txt text-primary hover:underline"><a href=""><?php echo $phone; ?></a></p>
                                                        </div>
                                                        <div class="flex flex-row gap-2">
                                                            <p>Whatsapp : </p>
                                                            <p class="hover:text-light_txt text-primary hover:underline"><a href=""><?php echo $whatsapp; ?></a></p>
                                                        </div>
                                                        <div class="flex flex-row gap-2">
                                                            <p>Email : </p>
                                                            <p class="hover:text-light_txt text-primary hover:underline"><a href=""><?php echo $email; ?></a></p>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <section id="Reviews" class="ROW pt-10">
                                                
                                                    <div>
                                                        <div class="SECTION_TITLE_2">Reviews</div>
                                                    </div>
                                                    <div>
                                                        <p class="R_TOGGLER text-primary hover:text-light_txt underline cursor-pointer flex justify-end">View All >></p>
                                                    </div>

                                                    <div class="R_CONTAINER flex flex-col gap-5 pt-2 h-60 overflow-hidden ////// ">

                                                    <?php
                                                        //get property id
                                                        $p_id=$_GET['id'];
                                                        
                                                        //query to get all admin
                                                        $sql = "SELECT * FROM reviews WHERE property_id=$p_id ORDER BY id DESC";
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
                                                                    $username=$rows['username'];
                                                                    $profileName=$rows['profileName'];
                                                                    $review=$rows['review'];
                                                                    $active=$rows['active'];

                                                                    //displaying the values in our card
                                                                    ?>

                                                                        <div class="REVIEW_CARD">
                                                                            <div class="rounded-l-full rounded-r-lg border-2 border-primary px-5 py-2 flex gap-5 align-middle items-center">

                                                                                <div class="ROW flex gap-5 items-center border-r-2 border-primary pr-5">
                                                                                    <div class="PIC w-10">
                                                                                        <?php

                                                                                            //check whether image is availabele or not
                                                                                            if($profileName!="")
                                                                                            {
                                                                                                //display image
                                                                                                ?>

                                                                                                    <img src="../images/user/profileName/<?php echo $profileName ?>" alt="<?php echo $username ?>" class="rounded-full w-10 h-10">

                                                                                                <?php
                                                                                            }
                                                                                            else
                                                                                            {
                                                                                                //display message
                                                                                                echo "<div class='ERROR'>Image Not Added</div>";
                                                                                            }

                                                                                        ?>
                                                                                    </div>
                                                                                    <div class="NAME w-24">
                                                                                        <p><?php echo $username ?></p>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="ROW">
                                                                                    <p><?php echo $review ?></p>
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
                                                                        <div class="ERROR">No Review has been made on this property yet.</div>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                            }
                                                        }
                                                    ?>

                                                    </div>
                                                
                                            </section>

                                            <section id="Add_Review" class="ROW pt-10">
                                                
                                                    <div>
                                                        <div class="SECTION_TITLE_2">Add Review</div>
                                                    </div>
                                                    <div class="ADD_REVIEW py-2 px-3">
                                                        <form action="" method="POST" enctype="multipart/form-data" class="flex">

                                                            <table class="">
                                                                
                                                                <tr class="flex items-center gap-5">
                                                                    <td>Username :</td>
                                                                    <td>
                                                                        <input type="text" class="INPUT2" name="username" placeholder="Enter Your Username">
                                                                    </td>
                                                                </tr>

                                                                <tr class="flex items-center gap-12">
                                                                    <td>Picture :</td>
                                                                    <td>
                                                                        <input type="file" class="INPUT2" name="profileName">
                                                                    </td>
                                                                </tr>

                                                                <tr class="flex items-center gap-12">
                                                                    <td>Review :</td>
                                                                    <td>
                                                                        <textarea type="text" class="INPUT2" name="review" placeholder="Enter Your Review Here..."></textarea>
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>
                                                                        <input type="submit" name="submit" value="Add Review" class="BTN2">
                                                                    </td>
                                                                </tr>

                                                            </table>

                                                        </form>

                                                        <?php 

                                                            //Process the Value from Form and Save in Database

                                                            //Check whether the Submit button is clicked or not

                                                            if(isset($_POST['submit']))
                                                            {
                                                                //Button Clicked

                                                                //1. Get the data from Form
                                                                $username = $_POST['username'];
                                                                $review = $_POST['review'];

                                                                //2a. Upload images if selected
                                                                //check whether Select Image is clicked or not and upload image only if selected
                                                                if(isset($_FILES['profileName']['name']))
                                                                {
                                                                    //get the details of the selected image
                                                                    $image_name = $_FILES['profileName']['name'];

                                                                    //check whether the image is selected or not and upload image only if selected
                                                                    if($image_name!="")
                                                                    {
                                                                        //image is selected
                                                                        //A.REname the image
                                                                        //get the extension of selected image
                                                                        $ext = end(explode('.', $image_name));

                                                                        //create new name for image
                                                                        $image_name = "Profile-Name-".rand(0000,9999).".".$ext; //new image name may be "Profile-Name-8462.jpg"

                                                                        //B.UPload the image
                                                                        //get the SRC path and Destination path

                                                                        //Source path is the current location of image to be uploaded
                                                                        $src = $_FILES['profileName']['tmp_name'];

                                                                        //Destination path is the location uploaded image will be stored
                                                                        $dst = "../images/user/profileName/".$image_name;

                                                                        //finally upload the image
                                                                        $upload = move_uploaded_file($src, $dst);

                                                                        //check whether image uploaded or not
                                                                        if($upload==false)
                                                                        {
                                                                            //failed to upload the image
                                                                            //redirect to home page with error
                                                                            $_SESSION['upload'] = "<div class='ERROR flex justify-start'>Failed to Upload Image</div>";
                                                                            header('location:'.SITEURL_USER.'selected_property.php');
                                                                            ob_end_flush();
                                                                            //stop the process
                                                                            die();
                                                                        }
                                                                    }
                                                                }
                                                                else
                                                                {
                                                                    $image_name = ""; //setting default value as blank
                                                                }

                                                                //get property id
                                                                $p_id=$_GET['id'];
                                                                
                                                                //3. SQL Query to Save the data into database
                                                                //for numerical values we do not need to pass value inside quotes "" but for string values it is compulsory
                                                                $sql = "INSERT INTO reviews SET
                                                                    property_id = '$p_id',
                                                                    username = '$username',
                                                                    profileName = '$image_name',
                                                                    review = '$review',
                                                                    active = 'Yes'
                                                                ";

                                                                //4. Executing query and inserting data into database
                                                                $res = mysqli_query($conn, $sql);

                                                                //5. Check whether the (query is executed) data is inserted or not and display approriate message
                                                                if($res==TRUE)
                                                                    {
                                                                        //Property Submitted
                                                                        //create session message variable to display message
                                                                        $_SESSION['add'] = "<div class='SUCCESS flex justify-start'>Property Submitted Successfully</div>";
                                                                        //redirect to Manage Admin Page
                                                                        header('location:'.SITEURL_USER.'selected_property.php');
                                                                        ob_end_flush();
                                                                    }
                                                                else
                                                                    {
                                                                        //failed to add Admin
                                                                        //create session message variable to display message
                                                                        $_SESSION['add'] = "<div class='ERROR flex justify-start'>Failed to Submit Property</div>";
                                                                        //redirect to Manage Admin Page
                                                                        header('location:'.SITEURL_USER.'selected_property.php');
                                                                        ob_end_flush();
                                                                    }

                                                            }

                                                        ?>

                                                    </div>
                                                
                                            </section>

                                            <section id="Property_Description" class="ROW pt-10">
                                                
                                                    <div class="pb-5">
                                                        <div class="SECTION_TITLE_2">Description</div>
                                                    </div>
                                                    <div class="px-5 flex flex-col gap-5">
                                                        <p>Type : <?php echo $type; ?></p>
                                                        <p> Status : <?php echo $status; ?></p>
                                                        <p> Location : <?php echo $city; ?></p>
                                                        <p> Description : <?php echo $description; ?></p>
                                                        <p> Old Price : Ksh.<?php echo $oldPrice; ?></p>
                                                        <p> Discount : Ksh.<?php echo $discount; ?></p>
                                                        <p> Percent : <?php echo $discountPercent; ?>%</p>
                                                        <p> Price : Ksh.<?php echo $price; ?></p>
                                                        <p> Bedrooms : <?php echo $bedrooms; ?></p>
                                                        <p> Bathrooms : <?php echo $bathrooms; ?></p>
                                                        <p> Square Ft : <?php echo $squareFt; ?> ft</p>
                                                    </div>
                                                
                                            </section>

                                            <section id="Images" class="ROW pt-10">
                                                
                                                    <div class="pb-5">
                                                        <div class="SECTION_TITLE_2">Images</div>
                                                    </div>
                                                    <div class="flex flex-col items-center gap-10 w-96"><!--============ custom this width to have nice view of photos ==========-->
                                                        <div class="pic_box">

                                                            <?php

                                                                //check whether image is availabele or not
                                                                if($backgroundName!="")
                                                                {
                                                                    //display image
                                                                    ?>

                                                                    <img src="../images/property/background/<?php echo $backgroundName ?>" class="w-full rounded-md">

                                                                    <?php
                                                                }
                                                                else
                                                                {
                                                                    //display message
                                                                    echo "<div class='ERROR'>Image Not Added</div>";
                                                                }

                                                            ?>
                                                            
                                                        </div>
                                                        <div class="pic_box">

                                                            <?php

                                                                //check whether image is availabele or not
                                                                if($pictureName!="")
                                                                {
                                                                    //display image
                                                                    ?>

                                                                    <img src="../images/property/picture/<?php echo $pictureName ?>" class="w-full rounded-md">

                                                                    <?php
                                                                }
                                                                else
                                                                {
                                                                    //display message
                                                                    echo "<div class='ERROR'>Image Not Added</div>";
                                                                }

                                                            ?>

                                                        </div>
                                                        <div class="pic_box">

                                                            <?php

                                                                //check whether image is availabele or not
                                                                if($pictureName2!="")
                                                                {
                                                                    //display image
                                                                    ?>

                                                                    <img src="../images/property/picture/<?php echo $pictureName2 ?>" class="w-full rounded-md">

                                                                    <?php
                                                                }
                                                                else
                                                                {
                                                                    //display message
                                                                    echo "<div class='ERROR'>Image Not Added</div>";
                                                                }

                                                            ?>

                                                        </div>
                                                    </div>
                                                
                                            </section>

                                            <div class="ROW pt-10">
                                                <a href="<?php echo SITEURL_USER; ?>order_property.php?id=<?php echo $id; ?>&name=<?php echo $name; ?>" class="BTN2 w-28 flex justify-center">Submit</a>
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