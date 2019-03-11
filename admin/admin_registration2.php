<?php 

require "conn.php";
session_start();

if(isset($_POST['submit']))
{
   $q =  mysqli_query($conn, "select * from admin_registration where id = '".$_SESSION['change']."' and password= '".md5($_POST['email'])."'");
   $num  = mysqli_num_rows($q);
   if($num>0)
   {
        if(mysqli_query($conn, "update admin_registration set password = '".md5($_POST['pass'])."' where id  = '".$_SESSION['change']."'"))
        {
            echo "<script>alert('Password Changed!')</script>";
            echo "<script>window.location.href='statistics.php'</script>";
        }

   }
   else
   {
                    echo "<script>alert('Error: Old Password is not correct!')</script>";

   }



}

if($_GET['id']!='')
{
    $_SESSION['change']= $_GET['id'];

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
                                            <label for="simpleFormEmail">Old Password</label>
                                            <input type="password" class="form-control" id="simpleFormEmail" placeholder="Enter email address" name ="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleFormPassword">New Password</label>
                                            <input type="password" class="form-control" id="simpleFormPassword" placeholder="Password" name="pass">
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