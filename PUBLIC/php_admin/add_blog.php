<?php include('../partials_admin/menu.php'); ?>

	<!--===========================================================HOME SECTION START====================================================-->
	<section id="Home" class="bg-light_bg_bright">

		<a name="Home">

            <div class="MAIN_CONTENT">

                <div class="ROW">

                    <div class="HEADER flex justify-center">Add Blog</div>

                    <?php
                        if(isset($_SESSION['add'])) //checking wether session message is set or not
                        {
                            echo $_SESSION['add']; //displaying session message
                            unset($_SESSION['add']); //removing session message
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
                                $id=$row2['id'];
                                $name=$row2['name'];
                                $type=$row2['type'];
                                $backgroundName=$row2['backgroundName'];
                                $featured_blog=$row2['featured_blog'];
                                $active_blog=$row2['active_blog'];
                                $comment=$row2['comment'];
                                $date=$row2['date'];
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
                                                <td class="w-44">Background :</td>
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
                                        <td class="w-44">Featured :</td>
                                        <td>
                                            <div class="ROW flex gap-4">
                                                <div class="flex gap-1">
                                                    <input type="radio" name="featured_blog" value="Yes">
                                                    <p>Yes</p>
                                                </div>
                                                <div class="flex gap-1">
                                                    <input type="radio" <?php {echo "checked";} ?> name="featured_blog" value="No">
                                                    <p>No</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="flex gap-5">
                                        <td class="w-44">Date :</td>
                                        <td>
                                            <input type="date" class="INPUT" name="date" value="<?php echo $date ?>">
                                        </td>
                                    </tr>


                                </table>

                                <table class="TBL_30">
                                    
                                    <tr  class="flex gap-5">
                                        <td>Comment :</td>
                                    </tr>
                                    
                                    <tr  class="flex gap-5">
                                        <td>
                                            <textarea type="text" class="INPUT" name="comment" id="" cols="30" rows="10"><?php echo $comment ?></textarea>
                                        </td>
                                    </tr>

                                </table>

                            </div>

                            <div class="ROW">

                            <table class="TBL_30">
                                    
                                    <tr>
                                        <td>
                                            <input type="submit" name="submit" value="Add Blog" class="BTN_PRI">
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
                            $comment = $_POST['comment'];
                            $featured_blog = $_POST['featured_blog'];
                            $date = $_POST['date'];

                            //2. SQL Query to Save the data into database
                            //for numerical values we do not need to pass value inside quotes "" but for string values it is compulsory
                            $sql = "UPDATE property SET
                                comment = '$comment',
                                featured_blog = '$featured_blog',
                                active_blog = 'Yes',
                                date = '$date',
                                blog = 'Yes'
                                WHERE id=$id
                            ";

                            //3. Executing query and inserting data into database
                            $res = mysqli_query($conn, $sql);

                            //5. Check whether the (query is executed) data is inserted or not and display approriate message
                            if($res==TRUE)
                                {
                                    //Blog Added
                                    //create session message variable to display message
                                    $_SESSION['add'] = "<div class='SUCCESS flex justify-start'>Blog Added Successfully</div>";
                                    //redirect to Manage Admin Page
                                    header('location:'.SITEURL_ADMIN.'manage_property.php');
                                    ob_end_flush();
                                }
                            else
                                {
                                    //failed to add Blog
                                    //create session message variable to display message
                                    $_SESSION['add'] = "<div class='ERROR flex justify-start'>Failed to Add Blog</div>";
                                    //redirect to Manage Admin Page
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