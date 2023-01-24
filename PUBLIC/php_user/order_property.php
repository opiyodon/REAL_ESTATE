<?php include('../partials_user/menu.php'); ?>

<!--===========================================================ORDER PROPERTY SECTION START====================================================-->
<section id="property_search" class="pt-5 pb-24 bg-light_bg_bright -mb-10">

<a name="property_search">
    <div class="PROPERTY_SEARCH">

        <div class="ROW flex justify-center">
            <div>
                <p class="SECTION_TITLE">Order</p>
            </div>
        </div>

        <div class="PROPERTY_TITLE flex justify-center">
            <p class="font-bold text-light_txt text-5xl font-poppins py-5">
                You Selected...
            </p>
        </div>

        <div class="ROW py-1 px-7 flex gap-5">


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

                                //displaying the values in our table
                                ?>

                                    <div class="ROW"></div>

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
<!--===========================================================ORDER PROPERTY SECTION END====================================================-->

<?php include('../partials_user/footer.php'); ?>