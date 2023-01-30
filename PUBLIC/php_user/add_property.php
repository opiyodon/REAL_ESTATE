<?php include('../partials_user/menu.php'); ?>

	<!--===========================================================HOME SECTION START====================================================-->
	<section id="Home" class="bg-light_bg_bright">

		<a name="Home">

            <div class="MAIN_CONTENT">

                <div class="ROW">

                    <div class="HEADER flex justify-center">Submit Property</div>

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

                    <form action="" method="POST" enctype="multipart/form-data" class="flex justify-center">

                        <div class="flex flex-col gap-7">

                            <div class="ROW flex gap-28">

                                <table class="TBL_30">
                                    
                                    <tr class="flex gap-5">
                                        <td class="w-44">Name :</td>
                                        <td>
                                            <input type="text" class="INPUT" name="name" placeholder="Enter Property Name">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Type :</td>
                                        <td>
                                            <select name="type" id="Type" class="INPUT2">

                                                <option value="Select_Type">Select Type</option>

                                                <option value="apartment">Apartment</option>

                                                <option value="flat">Flat</option>

                                                <option value="building">Building</option>

                                                <option value="house">House</option>

                                                <option value="villa">Villa</option>

                                                <option value="office">Office</option>

                                            </select>
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Status :</td>
                                        <td>
                                            <select name="status" id="Status" class="INPUT2">

                                                <option value="Select_Status">Select Status</option>

                                                <option value="FOR SALE">FOR SALE</option>

                                                <option value="FOR RENT">FOR RENT</option>

                                            </select>
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">City :</td>
                                        <td>
                                            <input type="text" class="INPUT" name="city" placeholder="Enter Property Location">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Select Background :</td>
                                        <td>
                                            <input type="file" class="INPUT w-80" name="backgroundName">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Select Picture 1 :</td>
                                        <td>
                                            <input type="file" class="INPUT w-80" name="pictureName">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Select Picture 2 :</td>
                                        <td>
                                            <input type="file" class="INPUT w-80" name="pictureName2">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Old Price :</td>
                                        <td>
                                            <input type="number" class="INPUT" name="oldPrice" placeholder="Enter Property Price">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Discount :</td>
                                        <td>
                                            <input type="number" class="INPUT" name="discount" placeholder="Enter Property Discount">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Bedrooms :</td>
                                        <td>
                                            <input type="number" class="INPUT w-80" name="bedrooms" placeholder="Enter Number of Bedrooms">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Bathrooms :</td>
                                        <td>
                                            <input type="number" class="INPUT w-80" name="bathrooms" placeholder="Enter Number of Bathrooms">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Square Ft :</td>
                                        <td>
                                            <input type="number" class="INPUT w-80" name="squareFt" placeholder="Enter Property Square Ft">
                                        </td>
                                    </tr>

                                </table>

                                <table class="TBL_30">
                                    
                                    <tr  class="flex gap-5">
                                        <td>Description :</td>
                                    </tr>
                                    
                                    <tr  class="flex gap-5">
                                        <td>
                                            <textarea type="text" class="INPUT" name="description" id="" cols="30" rows="10" placeholder="Enter A Short Description of Your Property"></textarea>
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Featured :</td>
                                        <td>
                                            <div class="ROW flex gap-4">
                                                <div class="flex gap-1">
                                                    <input type="radio" name="featured" value="Yes">
                                                    <p>Yes</p>
                                                </div>
                                                <div class="flex gap-1">
                                                    <input type="radio" <?php {echo "checked";} ?> name="featured" value="No">
                                                    <p>No</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Owner :</td>
                                        <td>
                                            <input type="text" class="INPUT" name="owner" placeholder="Enter Property Owner">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Phone :</td>
                                        <td>
                                            <input type="number" class="INPUT" name="phone" placeholder="Enter Phone Number">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Whatsapp :</td>
                                        <td>
                                            <input type="number" class="INPUT w-72" name="whatsapp" placeholder="Enter Whatsapp Number">
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Email :</td>
                                        <td>
                                            <input type="email" class="INPUT" name="email" placeholder="Enter Your Email">
                                        </td>
                                    </tr>

                                </table>

                            </div>

                            <div class="ROW">

                            <table class="TBL_30">
                                    
                                    <tr>
                                        <td>
                                            <input type="submit" name="submit" value="Submit Property" class="BTN2">
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
                            $oldPrice = $_POST['oldPrice'];
                            $discount = $_POST['discount'];
                            $bedrooms = $_POST['bedrooms'];
                            $bathrooms = $_POST['bathrooms'];
                            $squareFt = $_POST['squareFt'];
                            $description = $_POST['description'];
                            $featured = $_POST['featured'];
                            $owner = $_POST['owner'];
                            $phone = $_POST['phone'];
                            $whatsapp = $_POST['whatsapp'];
                            $email = $_POST['email'];

                            //Check whether radio button for featured and active are checked or not
                            //if(isset($_POST['featured']))
                            //{
                                //$featured = $_POST['featured'];
                            //}
                            //else
                            //{
                                //$featured = "No";//setting default value
                            //}

                            //2a. Upload images if selected
                            //check whether Select Image is clicked or not and upload image only if selected
                            if(isset($_FILES['backgroundName']['name']))
                            {
                                //get the details of the selected image
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
                                        $_SESSION['upload1'] = "<div class='ERROR flex justify-end'>Failed to Upload Image</div>";
                                        header('location:'.SITEURL_USER.'home.php');
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

                            //2b. Upload images if selected
                            //check whether Select Image is clicked or not and upload image only if selected
                            if(isset($_FILES['pictureName']['name']))
                            {
                                //get the details of the selected image
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
                                        $_SESSION['upload2'] = "<div class='ERROR flex justify-end'>Failed to Upload Image</div>";
                                        header('location:'.SITEURL_USER.'home.php');
                                        ob_end_flush();
                                        //stop the process
                                        die();
                                    }
                                }
                            }
                            else
                            {
                                $image_name2 = ""; //setting default value as blank
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
                            $sql = "INSERT INTO property SET
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
                                active = 'Yes',
                                blog = 'No',
                                owner = '$owner',
                                phone = $phone,
                                whatsapp = $whatsapp,
                                email = '$email'
                            ";

                            //4. Executing query and inserting data into database
                            $res = mysqli_query($conn, $sql);

                            //5. Check whether the (query is executed) data is inserted or not and display approriate message
                            if($res==TRUE)
                                {
                                    //Property Submitted
                                    //create session message variable to display message
                                    $_SESSION['add'] = "<div class='SUCCESS flex justify-end'>Property Submitted Successfully</div>";
                                    //redirect to Manage Admin Page
                                    header('location:'.SITEURL_USER.'home.php');
                                    ob_end_flush();
                                }
                            else
                                {
                                    //failed to add Admin
                                    //create session message variable to display message
                                    $_SESSION['add'] = "<div class='ERROR flex justify-end'>Failed to Submit Property</div>";
                                    //redirect to Manage Admin Page
                                    header('location:'.SITEURL_USER.'home.php');
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