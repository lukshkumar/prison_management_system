<?php 

require "conn.php";

if(isset($_POST["submit"]))
{
    $i = 0;
    foreach($_POST as $key=>$value)
    {
              //  echo "<script>alert('".$value."');</script>";

        $a[$i] = $value;
        $i++;
        
    }
    if($query = mysqli_query($conn, "select * from admin_registration where email = '".$a[0]."'"))
    {
        $num = mysqli_num_rows($query);
        if($num>0)
        {
                            echo "<script>alert('This email already exists, please try with other email address!');</script>";

        }
        else
        {


            if(mysqli_query($conn,"insert into admin_registration values (null, '".mysqli_real_escape_string($conn, $a[0])."','".md5(mysqli_real_escape_string($conn,$a[1]))."')"))
    {
                echo "<script>alert('Admin Registered!');</script>";

    }
    else
    {
        echo "<script>alert('error in query');</script>";
    }
        }
    }
    
}
include "header_admin.html";
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
                                    <header>Admin registration</header>
                                    
                                </div>
                                <div class="card-body " id="bar-parent">
                                    <form action="#" method="POST">
                                        <div class="form-group">
                                            <label for="simpleFormEmail">Email address</label>
                                            <input type="email" id="simpleFormEmail" placeholder="Enter email address" name ="email" maxlength="30" minlength="0">
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleFormPassword">Password</label>
                                            <input type="password" maxlength="30" minlength="0" id="simpleFormPassword" placeholder="Password" name="pass" max="30" >
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