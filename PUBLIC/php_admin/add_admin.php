<?php include('../partials_admin/menu.php'); ?>

	<!--===========================================================HOME SECTION START====================================================-->
	<section id="Home" class="bg-light_bg_bright">

		<a name="Home">

            <div class="MAIN_CONTENT">

                <div class="ROW">

                    <div class="HEADER flex justify-center">Add Admin</div>

                    <?php
                        if(isset($_SESSION['add'])) //checking wether session message is set or not
                        {
                            echo $_SESSION['add']; //displaying session message
                            unset($_SESSION['add']); //removing session message
                        }
                    ?>

                    <form action="" method="POST" class="flex justify-center">

                        <table class="TBL_30">
                            
                            <tr>
                                <td>Full Name</td>
                                <td>
                                    <input type="text" class="INPUT" name="full_name" placeholder="Enter Full Name">
                                </td>
                            </tr>

                            <tr>
                                <td>Username</td>
                                <td>
                                    <input type="text" class="INPUT" name="username" placeholder="Enter Username">
                                </td>
                            </tr>

                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="text" class="INPUT" name="email" placeholder="Enter Email">
                                </td>
                            </tr>

                            <tr>
                                <td>Phone</td>
                                <td>
                                    <input type="text" class="INPUT" name="phone" placeholder="Enter Phone">
                                </td>
                            </tr>

                            <tr>
                                <td>Password</td>
                                <td>
                                    <input type="password" class="INPUT" name="password" placeholder="Enter Password">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Add Admin" class="BTN_PRI">
                                </td>
                            </tr>

                        </table>

                    </form>
                    
                </div>

            </div>
			
	    </a>
	
	</section>
	<!--===========================================================HOME SECTION END====================================================-->
	
	<?php include('../partials_admin/footer.php'); ?>

    <?php 

        //Process the Value from Form and Save in Database

        //Check whether the Submit button is clicked or not

        if(isset($_POST['submit']))
        {
            //Button Clicked

            //1. Get the data from Form
            $full_name = $_POST['full_name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = md5($_POST['password']); //password encryption with md5

            //2. SQL Query to Save the data into database
            $sql = "INSERT INTO user SET
                full_name = '$full_name',
                username = '$username',
                email = '$email',
                phone = '$phone',
                password = '$password',
                admin = 'Yes'
            ";

            //3. Executing query and inserting data into database
            $res = mysqli_query($conn, $sql);

            //4. Check whether the (query is executed) data is inserted or not and display approriate message
            if($res==TRUE)
                {
                    //Admin Added
                    //create session message variable to display message
                    $_SESSION['add'] = "<div class='SUCCESS'>Admin Added Successfully</div>";
                    //redirect to Manage Admin Page
                    header('location:'.SITEURL_ADMIN.'manage_admin.php');
                    ob_end_flush();
                }
            else
                {
                    //failed to add Admin
                    //create session message variable to display message
                    $_SESSION['add'] = "<div class='ERROR'>Failed to add Admin</div>";
                    //redirect to Manage Admin Page
                    header('location:'.SITEURL_ADMIN.'manage_admin.php');
                    ob_end_flush();
                }

        }

    ?>