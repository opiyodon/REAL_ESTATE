<?php include('../partials_admin/menu.php'); ?>

	<!--===========================================================HOME SECTION START====================================================-->
	<section id="Home" class="bg-light_bg_bright">

		<a name="Home">

            <div class="MAIN_CONTENT flex justify-center">

                <div class="ROW">

                    <div class="HEADER flex justify-center">Update Admin</div>

                    <?php
                        if(isset($_SESSION['update'])) //checking wether session message is set or not
                        {
                            echo $_SESSION['update']; //displaying session message
                            unset($_SESSION['update']); //removing session message
                        }
                    ?>

                    <?php

                        //1. Get the ID of selected Admin
                        $id=$_GET['id'];

                        //2. Create sql query to get the details
                        $sql="SELECT * FROM user WHERE id=$id";

                        //3.Execute query
                        $res=mysqli_query($conn, $sql);

                        //check whether the query is executed or not
                        if($res==TRUE)
                        {
                            //check whether data is available or not
                            $count = mysqli_num_rows($res);
                            //check whether we have admin data or not
                            if($count==1)
                            {
                                //get the details
                                $row=mysqli_fetch_assoc($res);

                                $full_name=$row['full_name'];
                                $username=$row['username'];
                                $email=$row['email'];
                                $phone=$row['phone'];
                                $admin=$row['admin'];
                            }
                            else
                            {
                                //redirect to manage admin page
                                header('location:'.SITEURL_ADMIN.'manage_admin.php');
                            }
                        }

                    ?>

                    <form action="" method="POST" class="flex justify-center">

                        <table class="TBL_30">
                                                        
                            <tr>
                                <td>Full Name</td>
                                <td>
                                    <input type="text" class="INPUT" name="full_name" value="<?php echo $full_name; ?>">
                                </td>
                            </tr>

                            <tr>
                                <td>Username</td>
                                <td>
                                    <input type="text" class="INPUT" name="username" value="<?php echo $username; ?>">
                                </td>
                            </tr>

                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="text" class="INPUT" name="email" value="<?php echo $email; ?>">
                                </td>
                            </tr>

                            <tr>
                                <td>Phone</td>
                                <td>
                                    <input type="text" class="INPUT" name="phone" value="<?php echo $phone; ?>">
                                </td>
                            </tr>

                            <tr>
                                <td>Admin</td>
                                <td>
                                    <div class="ROW flex gap-4">
                                        <div class="flex gap-1">
                                            <input type="radio" name="admin" value="<?php echo $admin; ?>">
                                            <p>Yes</p>
                                        </div>
                                        <div class="flex gap-1">
                                            <input type="radio" name="admin" value="<?php echo $admin; ?>">
                                            <p>No</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <input type="submit" name="submit" value="Update Admin" class="BTN_PRI">
                                </td>
                            </tr>

                        </table>

                    </form>
                    
                </div>

            </div>
			
	    </a>
	
	</section>
	<!--===========================================================HOME SECTION END====================================================-->
	
	<?php

        //check whether button is clicked or not
        if(isset($_POST['submit']))
        {
            //get all values from form and save in database
            $id=$_POST['id'];
            $full_name=$_POST['full_name'];
            $username=$_POST['username'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $admin=$_POST['admin'];

            //create sql to update admin
            $sql = "UPDATE user SET
            full_name='$full_name',
            username='$username',
            email='$email',
            phone='$phone',
            admin='$admin'
            WHERE id='$id'
            ";

            //execute the query
            $res = mysqli_query($conn, $sql);

            //check whether query is executed successfully or not
            if($res==true)
            {
                //query executed and admin updated
                $_SESSION['update'] = "<div class='SUCCESS'>Admin Updated Successfully</div>";
                //redirect to Manage Admin Page
                header('location:'.SITEURL_ADMIN.'manage_admin.php');
            }
            else
            {
                //Failed to update Admin
                $_SESSION['update'] = "<div class='ERROR'>Failed to Update Admin</div>";
                //redirect to Manage Admin Page
                header('location:'.SITEURL_ADMIN.'manage_admin.php');
            }
        }

    ?>
    
    
    <?php include('../partials_admin/footer.php'); ?>