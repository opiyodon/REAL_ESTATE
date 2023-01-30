<?php include('../partials_admin/menu.php'); ?>

	<!--===========================================================HOME SECTION START====================================================-->
	<section id="Home" class="bg-light_bg_bright">

		<a name="Home">

            <div class="MAIN_CONTENT">

                <div class="ROW">

                    <div class="HEADER flex justify-center">Update Property</div>

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

                        if(isset($_SESSION['upload3'])) //checking wether session message is set or not
                        {
                            echo $_SESSION['upload3']; //displaying session message
                            unset($_SESSION['upload3']); //removing session message
                        }
                    ?>

                    <?php

                        //check whether the id is set or not
                        if(isset($_GET['id']))
                        {
                            //get id and all other details
                            $id = $_GET['id'];

                            //sql query to get all other details
                            $sql2 = "SELECT * FROM property WHERE id=$id";

                            //execute query
                            $res2 = mysqli_query($conn, $sql2);

                            //count the rows to check whether the id is valid or not
                            $count2 = mysqli_num_rows($res2);

                            if($count2==1)
                            {
                                $row2 = mysqli_fetch_assoc($res2);
                                //get all the data
                                $name = $row2['name'];
                                $type = $row2['type'];
                                $status = $row2['status'];
                                $city = $row2['city'];
                                $backgroundName = $row2['backgroundName'];
                                $pictureName = $row2['pictureName'];
                                $pictureName2 = $row2['pictureName2'];
                                $oldPrice = $row2['oldPrice'];
                                $discount = $row2['discount'];
                                $bedrooms = $row2['bedrooms'];
                                $bathrooms = $row2['bathrooms'];
                                $squareFt = $row2['squareFt'];
                                $description = $row2['description'];
                                $featured = $row2['featured'];
                                $active = $row2['active'];
                                $owner = $row2['owner'];
                                $phone = $row2['phone'];
                                $whatsapp = $row2['whatsapp'];
                                $email = $row2['email'];
                            }
                            else
                            {
                                //redirect to manage_property with session message
                                $_SESSION['property'] = "<div class='ERROR'>No Property Found</div>";
                                header('location:'.SITEURL_ADMIN.'manage_property.php');
                                ob_end_flush();
                            }
                        }
                        else
                        {
                            //redirect to manage_property
                            header('location:'.SITEURL_ADMIN.'manage_property.php');
                            ob_end_flush();
                        }

                    ?>

                    <form action="" method="POST" enctype="multipart/form-data" class="flex justify-center">

                        <div class="flex flex-col gap-7">

                            <div class="ROW flex gap-28">

                                <table class="TBL_30">
                                    
                                    <tr class="flex gap-5">
                                        <td class="w-44">Name :</td>
                                        <td>
                                            <input type="text" class="INPUT" name="name" value="<?php echo $name ?>">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Type :</td>
                                        <td>
                                            <select name="type" id="Type" class="INPUT2">

                                                <option><?php echo $type ?></option>

                                            </select>
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Status :</td>
                                        <td>
                                            <select name="status" id="Status" class="INPUT2">

                                                <option><?php echo $status ?></option>

                                            </select>
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">City :</td>
                                        <td>
                                            <input type="text" class="INPUT" name="city" value="<?php echo $city ?>">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Current Background :</td>
                                                <td>

                                                    <?php

                                                        //check whether image is availabele or not
                                                        if($backgroundName!="")
                                                        {
                                                            //display image
                                                            ?>

                                                            <img src="../images/property/background/<?php echo $backgroundName ?>" class="w-36 rounded-md">

                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            //display message
                                                            echo "<div class='ERROR'>Image Not Added</div>";
                                                        }
                                                    
                                                    ?>
                                                    
                                                </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Select New Background :</td>
                                        <td>
                                            <input type="file" class="INPUT w-80" name="backgroundName">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Current Picture 1 :</td>
                                                <td>

                                                    <?php

                                                        //check whether image is availabele or not
                                                        if($pictureName!="")
                                                        {
                                                            //display image
                                                            ?>

                                                            <img src="../images/property/picture/<?php echo $pictureName ?>" class="w-36 rounded-md">

                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            //display message
                                                            echo "<div class='ERROR'>Image Not Added</div>";
                                                        }
                                                    
                                                    ?>
                                                    
                                                </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Select New Picture 1 :</td>
                                        <td>
                                            <input type="file" class="INPUT w-80" name="pictureName">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Current Picture 2 :</td>
                                                <td>

                                                    <?php

                                                        //check whether image is availabele or not
                                                        if($pictureName2!="")
                                                        {
                                                            //display image
                                                            ?>

                                                            <img src="../images/property/picture/<?php echo $pictureName2 ?>" class="w-36 rounded-md">

                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            //display message
                                                            echo "<div class='ERROR'>Image Not Added</div>";
                                                        }
                                                    
                                                    ?>
                                                    
                                                </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Select New Picture 2 :</td>
                                        <td>
                                            <input type="file" class="INPUT w-80" name="pictureName2">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Old Price :</td>
                                        <td>
                                            <input type="number" class="INPUT" name="oldPrice" value="<?php echo $oldPrice ?>">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Discount :</td>
                                        <td>
                                            <input type="number" class="INPUT" name="discount" value="<?php echo $discount ?>">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Bedrooms :</td>
                                        <td>
                                            <input type="number" class="INPUT w-80" name="bedrooms" value="<?php echo $bedrooms ?>">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Bathrooms :</td>
                                        <td>
                                            <input type="number" class="INPUT w-80" name="bathrooms" value="<?php echo $bathrooms ?>">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Square Ft :</td>
                                        <td>
                                            <input type="number" class="INPUT w-80" name="squareFt" value="<?php echo $squareFt ?>">
                                        </td>
                                    </tr>

                                </table>

                                <table class="TBL_30">
                                    
                                    <tr  class="flex gap-5">
                                        <td>Description :</td>
                                    </tr>
                                    
                                    <tr  class="flex gap-5">
                                        <td>
                                            <textarea type="text" class="INPUT" name="description" id="" cols="30" rows="10"><?php echo $description ?></textarea>
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Featured :</td>
                                        <td>
                                            <div class="ROW flex gap-4">
                                                <div class="flex gap-1">
                                                    <input type="radio" <?php if($featured=='Yes'){echo "checked";} ?> name="featured" value="Yes">
                                                    <p>Yes</p>
                                                </div>
                                                <div class="flex gap-1">
                                                    <input type="radio" <?php if($featured=='No'){echo "checked";} ?> name="featured" value="No">
                                                    <p>No</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Active :</td>
                                        <td>
                                            <div class="ROW flex gap-4">
                                                <div class="flex gap-1">
                                                    <input type="radio" <?php if($active=='Yes'){echo "checked";} ?> name="active" value="Yes">
                                                    <p>Yes</p>
                                                </div>
                                                <div class="flex gap-1">
                                                    <input type="radio" <?php if($active=='No'){echo "checked";} ?> name="active" value="No">
                                                    <p>No</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Owner :</td>
                                        <td>
                                            <input type="text" class="INPUT" name="owner" value="<?php echo $owner ?>">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Phone :</td>
                                        <td>
                                            <input type="number" class="INPUT" name="phone" value="<?php echo $phone ?>">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Whatsapp :</td>
                                        <td>
                                            <input type="number" class="INPUT w-72" name="whatsapp" value="<?php echo $whatsapp ?>">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Email :</td>
                                        <td>
                                            <input type="email" class="INPUT" name="email" value="<?php echo $email ?>">
                                        </td>
                                    </tr>

                                </table>

                            </div>

                            <div class="ROW">

                            <table class="TBL_30">
                                    
                                    <tr>
                                        <td>
                                            <input type="submit" name="submit" value="Update Property" class="BTN_SEC">
                                        </td>
                                    </tr>

                                </table>

                            </div>

                        </div>

                    </form>

                    

                    <?php 

                        //Process the Value from Form and Save in Database

                        //Check whether the Submit button is clicked or not

                        if(isset($_POST['submit']))
                        {
                            //Button Clicked

                            //1. Get the data from Form
                            $name = $_POST['name'];
                            $type = $_POST['type'];
                            $status = $_POST['status'];
                            $city = $_POST['city'];
                            $backgroundName = $_POST['backgroundName'];
                            $pictureName = $_POST['pictureName'];
                            $oldPrice = $_POST['oldPrice'];
                            $discount = $_POST['discount'];
                            $bedrooms = $_POST['bedrooms'];
                            $bathrooms = $_POST['bathrooms'];
                            $squareFt = $_POST['squareFt'];
                            $description = $_POST['description'];
                            $featured = $_POST['featured'];
                            $active = $_POST['active'];
                            $owner = $_POST['owner'];
                            $phone = $_POST['phone'];
                            $whatsapp = $_POST['whatsapp'];
                            $email = $_POST['email'];

                            //2a. Upload images if selected
                            //check whether Select Image is clicked or not and upload image only if selected
                            if(isset($_FILES['backgroundName']['name']))
                            {
                                //A=get the details of the selected image
                                $image_name = $_FILES['backgroundName']['name'];

                                //check whether the image is selected or not and upload image only if selected
                                if($image_name!="")
                                {
                                    //image is selected
                                    //A.REname the image
                                    //get the extension of selected image
                                    $ext = end(explode('.', $image_name));

                                    //create new name for image
                                    $image_name = "Background-Name-".rand(0000,9999).".".$ext; //new image name may be "Background-Name-8462.jpg"

                                    //B.UPload the image
                                    //get the SRC path and Destination path

                                    //Source path is the current location of image to be uploaded
                                    $src = $_FILES['backgroundName']['tmp_name'];

                                    //Destination path is the location uploaded image will be stored
                                    $dst = "../images/property/background/".$image_name;

                                    //finally upload the image
                                    $upload = move_uploaded_file($src, $dst);

                                    //check whether image uploaded or not
                                    if($upload==false)
                                    {
                                        //failed to upload the image
                                        //redirect to home page with error
                                        $_SESSION['upload1'] = "<div class='ERROR'>Failed to Upload Background</div>";
                                        header('location:'.SITEURL_ADMIN.'manage_property.php');
                                        ob_end_flush();
                                        //stop the process
                                        die();
                                    }

                                    //B=Removing the current image
                                    //A:::remove the physical image file is avilable
                                    if($backgroundName != "")
                                    {
                                        //image is available. so remove it
                                        $path = "../images/property/background/".$backgroundName;
                                        //remove the image
                                        $remove = unlink($path);

                                        //IF Failed to remove image then add an error and stop the process
                                        if($remove==false)
                                        {
                                            //set the session message
                                            $_SESSION['remove'] = "<div class='ERROR'>Failed to Remove Background</div>";
                                            //redirect to Manage Property Page
                                            header('location:'.SITEURL_ADMIN.'manage_property.php');
                                            ob_end_flush();
                                            //stop the process
                                            die();
                                        }
                                    }
                                }
                                else
                                {
                                    $image_name = $backgroundName; //setting default value
                                }
                            }
                            else
                            {
                                $image_name = $backgroundName; //setting default value
                            }

                            //2b. Upload images if selected
                            //check whether Select Image is clicked or not and upload image only if selected
                            if(isset($_FILES['pictureName']['name']))
                            {
                                //A=get the details of the selected image
                                $image_name2 = $_FILES['pictureName']['name'];

                                //check whether the image is selected or not and upload image only if selected
                                if($image_name2!="")
                                {
                                    //image is selected
                                    //A.REname the image
                                    //get the extension of selected image
                                    $ext = end(explode('.', $image_name2));

                                    //create new name for image
                                    $image_name2 = "Picture-Name-".rand(0000,9999).".".$ext; //new image name may be "Picture-Name-8462.jpg"

                                    //B.UPload the image
                                    //get the SRC path and Destination path

                                    //Source path is the current location of image to be uploaded
                                    $src = $_FILES['pictureName']['tmp_name'];

                                    //Destination path is the location uploaded image will be stored
                                    $dst = "../images/property/picture/".$image_name2;

                                    //finally upload the image
                                    $upload = move_uploaded_file($src, $dst);

                                    //check whether image uploaded or not
                                    if($upload==false)
                                    {
                                        //failed to upload the image
                                        //redirect to home page with error
                                        $_SESSION['upload2'] = "<div class='ERROR'>Failed to Upload Picture</div>";
                                        header('location:'.SITEURL_ADMIN.'manage_property.php');
                                        ob_end_flush();
                                        //stop the process
                                        die();
                                    }

                                    //B=Removing the current image
                                    //B.remove the physical image file is avilable
                                    if($pictureName != "")
                                    {
                                        //image is available. so remove it
                                        $path = "../images/property/picture/".$pictureName;
                                        //remove the image
                                        $remove = unlink($path);

                                        //IF Failed to remove image then add an error and stop the process
                                        if($remove==false)
                                        {
                                            //set the session message
                                            $_SESSION['remove2'] = "<div class='ERROR'>Failed to Remove Picture</div>";
                                            //redirect to Manage Property Page
                                            header('location:'.SITEURL_ADMIN.'manage_property.php');
                                            ob_end_flush();
                                            //stop the process
                                            die();
                                        }
                                    }
                                }
                                else
                                {
                                    $image_name2 = $pictureName; //setting default value
                                }
                            }
                            else
                            {
                                $image_name2 = $pictureName; //setting default value
                            }

                            //2b. Upload images if selected
                            //check whether Select Image is clicked or not and upload image only if selected
                            if(isset($_FILES['pictureName2']['name']))
                            {
                                //get the details of the selected image
                                $image_name3 = $_FILES['pictureName2']['name'];

                                //check whether the image is selected or not and upload image only if selected
                                if($image_name3!="")
                                {
                                    //image is selected
                                    //A.REname the image
                                    //get the extension of selected image
                                    $ext = end(explode('.', $image_name3));

                                    //create new name for image
                                    $image_name3 = "Picture-Name2-".rand(0000,9999).".".$ext; //new image name may be "Picture-Name2-8462.jpg"

                                    //B.UPload the image
                                    //get the SRC path and Destination path

                                    //Source path is the current location of image to be uploaded
                                    $src = $_FILES['pictureName2']['tmp_name'];

                                    //Destination path is the location uploaded image will be stored
                                    $dst = "../images/property/picture/".$image_name3;

                                    //finally upload the image
                                    $upload = move_uploaded_file($src, $dst);

                                    //check whether image uploaded or not
                                    if($upload==false)
                                    {
                                        //failed to upload the image
                                        //redirect to home page with error
                                        $_SESSION['upload3'] = "<div class='ERROR flex justify-end'>Failed to Upload Image</div>";
                                        header('location:'.SITEURL_USER.'home.php');
                                        ob_end_flush();
                                        //stop the process
                                        die();
                                    }
                                }
                            }
                            else
                            {
                                $image_name3 = ""; //setting default value as blank
                            }

                            //3. SQL Query to Save the data into database
                            //for numerical values we do not need to pass value inside quotes "" but for string values it is compulsory
                            $sql = "UPDATE property SET
                                name = '$name',
                                type = '$type',
                                status = '$status',
                                city = '$city',
                                backgroundName = '$image_name',
                                pictureName = '$image_name2',
                                pictureName2 = '$image_name3',
                                oldPrice = $oldPrice,
                                discount = $discount,
                                price = ($oldPrice-$discount),
                                discountPercent = ($discount/$oldPrice*100),
                                bedrooms = $bedrooms,
                                bathrooms = $bathrooms,
                                squareFt = $squareFt,
                                description = '$description',
                                featured = '$featured',
                                active = '$active',
                                owner = '$owner',
                                phone = $phone,
                                whatsapp = $whatsapp,
                                email = '$email'
                                WHERE id=$id
                            ";

                            //4. Executing query and inserting data into database
                            $res = mysqli_query($conn, $sql);

                            //5. Check whether the (query is executed) data is inserted or not and display approriate message
                            if($res==TRUE)
                                {
                                    //Property Updated
                                    //create session message variable to display message
                                    $_SESSION['update'] = "<div class='SUCCESS flex justify-center'>Property Updated Successfully</div>";
                                    //redirect to Manage Property Page
                                    header('location:'.SITEURL_ADMIN.'manage_property.php');
                                    ob_end_flush();
                                }
                            else
                                {
                                    //failed to update property
                                    //create session message variable to display message
                                    $_SESSION['update'] = "<div class='ERROR flex justify-center'>Failed to Update Property</div>";
                                    //redirect to Manage Property Page
                                    header('location:'.SITEURL_ADMIN.'manage_property.php');
                                    ob_end_flush();
                                }

                        }

                    ?>
                    
                </div>

            </div>
			
	    </a>
	
	</section>
	<!--===========================================================HOME SECTION END====================================================-->
	
	<?php include('../partials_admin/footer.php'); ?>