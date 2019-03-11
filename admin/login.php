<?php

//require "conn.php";
session_start();
if(isset($_POST['guest']))
{
    if($q = mysqli_query($conn, "select * from guest_registration where email = '".$_POST['email']."' and password = '".md5($_POST['password'])."'"))
    {
        $num  = mysqli_num_rows($q);
        if($num == 1)
        {

            $row = mysqli_fetch_array($q);
            $_SESSION['guest_id']  = $row[0];
            echo "<script>window.location.href='user_checkin.php';</script>>";
    }
    else
    {
        echo "<script>alert('Incorrect username or password !');</script>";
    }
}
    else
    {
        echo "<script>alert('query failed');</script>";
    }
}
if(isset($_POST['staff']))
{
    if($q = mysqli_query($conn, "select * from staff_registration where email = '".$_POST['email']."' and password = '".md5($_POST['password'])."'"))
    {
        $num  = mysqli_num_rows($q);
        if($num == 1)
        {

            $row = mysqli_fetch_array($q);
            $_SESSION['staff_id']  = $row[0];
            echo "<script>window.location.href='attendance.php';</script>>";
    }
     else
    {
        echo "<script>alert('Incorrect username or password !');</script>";
    }
}
    else
    {
        echo "<script>alert('query failed');</script>";
    }
}
if(isset($_POST['admin']))
{
    //echo "<script>alert('".$_POST['email']."   ".$_POST['password']."')</script>";
    if($q = mysqli_query($conn, "select * from admin_registration where email = '".$_POST['email']."' and password = '".md5($_POST['password'])."'"))
    {
        $num  = mysqli_num_rows($q);
        if($num == 1)
        {

            $row = mysqli_fetch_array($q);
            $_SESSION['admin_id']  = $row[0];
            echo "<script>window.location.href='statistics.php';</script>>";
    }
     else
    {
        echo "<script>alert('Incorrect username or password !');</script>";
    }
}
    else
    {
        echo "<script>alert('query failed');</script>";
    }
}

?>

<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Login- Hotel Management System</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="assets/plugins/iconic/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="assets/css/pages/extra_pages.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" /> 
</head>
<body>
    <div class="limiter">
        <div class="container-login100 page-background">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method ="POST" action ="#">
                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-flower"></i>
                    </span>
                    <span class="login100-form-title p-b-34 p-t-27">
                        Log in
                    </span>
                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>
                 
                    <div class="container-login100-form-btn">
                        <input class="btn btn-info" type ="submit" name ="guest" value="Login as Guest"><br>
                                            
                        
                         <input class="btn btn-success" type ="submit" name ="staff" value="Login as Staff"><br>
                           
                       
                        <input class="btn btn-danger"  type ="submit" name ="admin" value="Login as Admin"><br>
                            
                    
                    </div>
                   

                 
                </form>
            </div>
        </div>
    </div>
    <!-- start js include path -->
    <script src="assets/plugins/jquery/jquery.min.js" ></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="assets/js/pages/extra_pages/login.js" ></script>
    <!-- end js include path -->
</body>

<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Nov 2018 12:10:58 GMT -->
</html>