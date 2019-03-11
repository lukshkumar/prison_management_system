<?php 

require "conn.php";

session_start();

if(isset($_POST["submit"]))
{
	
	
	$name = $_FILES["url"]["name"];
    $tmp_name = $_FILES["url"]["tmp_name"];
	$target = "imgs/".$name;
	move_uploaded_file($tmp_name,$target);

	$id = $_SESSION['id'];
	
	$name = $_POST['name'];
$des = $_POST['des'];	
	if(mysqli_query($conn,"insert into restaurant values(null, '$id', '$name', '$des', '$target')"))
	{
		echo "<script>alert('Restaurant Registered!');</script>";
	}
	else{
		echo "<script>alert('failed to upload the restaurant');</script>";
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
                                    <header>Restaurant registration</header>
                                    
                                </div>
                                <div class="card-body " id="bar-parent">
                                    <form action="#" method="POST" enctype='multipart/form-data'>
                                        <div class="form-group">
                                            <label for="simpleFormEmail">Name </label><br>
                                            <input type="name" id="simpleFormEmail" placeholder="Inception Hotel" name ="name" title="Please input the Name in the correct format"
>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="simpleFormEmail">Description</label><br>
                                            <input type="name"   id="simpleFormEmail" placeholder="my hotel is best..." name ="des"  title="Please input the Name in the correct format"
>
                                        </div>
										
										<div class="form-group">
                                            <label for="simpleFormEmail">Insert Restaurant Picture</label><br>
											<input type='file' name='url'>

                                           
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