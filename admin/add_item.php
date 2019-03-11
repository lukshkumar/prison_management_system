<?php 

require "conn.php";

session_start();

$id = $_SESSION['id'];

if(isset($_POST["submit"]))
{
	
	
	

	$id = $_SESSION['id'];
	
	$name = $_POST['name'];
$des = $_POST['des'];	
$price  = $_POST['price'];
$res = $_POST['res'];
$cat = $_POST['cat'];

	if(mysqli_query($conn,"insert into item values(null, '$res', '$name', '$des', '$price', '$cat')"))
	{
		echo "<script>alert('Product Registered!');</script>";
	}
	else{
		echo "<script>alert('failed to upload the product');</script>";
	}
}


include "header_staff.html";
?>
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Restaurant Product registration</header>
                                    
                                </div>
                                <div class="card-body " id="bar-parent">
                                    <form action="#" method="POST" enctype='multipart/form-data'>
									<div class="form-group">
                                            <label for="simpleFormEmail">Select Your Restaurant</label><br>
                                            <?php
											
											$q = mysqli_query($conn, "select * from restaurant where client_id  = '$id' ");
											
											echo "<select name='res'>";
											
											while($row = mysqli_fetch_array($q))
											{
												echo "<option value = '".$row[0]."'>".$row[2]."</option>";
											}
											
											echo "</select>";
											
											?>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="simpleFormEmail">Name </label><br>
                                            <input type="name" id="simpleFormEmail"  name ="name" title="Please input the Name in the correct format"
>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="simpleFormEmail">Description</label><br>
                                            <input type="name"   id="simpleFormEmail" name ="des"  title="Please input the Name in the correct format"
>
                                        </div>
										<div class="form-group">
                                            <label for="simpleFormEmail">Price</label><br>
                                            <input type="name"   id="simpleFormEmail"  name ="price"  title="Please input the Name in the correct format"
>
                                        </div>
										<div class="form-group">
                                            <label for="simpleFormEmail">Category</label><br>
                                            <input type="name"   id="simpleFormEmail" name ="cat"  title="Please input the Name in the correct format"
>
                                        </div>
										
										
										
										
										
										
                 

                                       
                                        <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                            </div>
							
							





                       













      <?php

      include "footer.html";
      ?>