<?php include('../partials_admin/menu.php'); ?>

	<!--===========================================================HOME SECTION START====================================================-->
	<section id="Home" class="bg-light_bg_bright">

		<a name="Home">

            <div class="MAIN_CONTENT">

                <div class="ROW">

                    <div class="HEADER">Manage Admin</div>

                    <?php
                        if(isset($_SESSION['add'])) //checking wether session message is set or not
                        {
                            echo $_SESSION['add']; //displaying session message
                            unset($_SESSION['add']); //removing session message
                        }

                        if(isset($_SESSION['delete'])) //checking wether session message is set or not
                        {
                            echo $_SESSION['delete']; //displaying session message
                            unset($_SESSION['delete']); //removing session message
                        }

                        if(isset($_SESSION['update'])) //checking wether session message is set or not
                        {
                            echo $_SESSION['update']; //displaying session message
                            unset($_SESSION['update']); //removing session message
                        }
                    ?>

                    <a href="<?php echo SITEURL_ADMIN; ?>add_admin.php">
                        <div class="ROW px-4 py-3">
                            <p class="BTN_PRI">Add Admin</p>
                        </div>
                    </a>

                    <table class="TBL_FULL">
                        <tr>
                            <th class="TH">S.N.</th>
                            <th class="TH text-left">Full Name</th>
                            <th class="TH text-left">Username</th>
                            <th class="TH text-left">Actions</th>
                        </tr>

                        <?php
                            //query to get all admin
                            $sql = "SELECT * FROM user ORDER BY id DESC";
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
                                        $full_name=$rows['full_name'];
                                        $username=$rows['username'];

                                        //displaying the values in our table
                                        ?>

                                            <tr>
                                                <td class="flex justify-center"><?php echo $sn++ ?>.</td>
                                                <td><?php echo $full_name ?></td>
                                                <td><?php echo $username ?></td>
                                                <td class="flex gap-5">
                                                    <div class="ROW flex justify-center items-center gap-5">
                                                        <a href="<?php echo SITEURL_ADMIN; ?>update_admin.php?id=<?php echo $id; ?>">
                                                            <p class="BTN_SEC">Update Admin</p>
                                                        </a>
                                                        <a href="<?php echo SITEURL_ADMIN; ?>delete_admin.php?id=<?php echo $id; ?>">
                                                            <p class="BTN_DAN">Delete Admin</p>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                        <?php

                                    }
                                }
                                else
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo "We Do Not Have Data in Database"; ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>

                    </table>
                    
                </div>

            </div>
			
	    </a>
	
	</section>
	<!--===========================================================HOME SECTION END====================================================-->
	
	<?php include('../partials_admin/footer.php'); ?>