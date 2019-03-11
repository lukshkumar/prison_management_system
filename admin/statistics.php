<?php 

//require "conn.php";

if(isset($_POST["submit"]))
{
    $i = 0;
    foreach($_POST as $key=>$value)
    {
              //  echo "<script>alert('".$value."');</script>";

        $a[$i] = $value;
        $i++;
        
    }
    if(true)
    {
       


            if(mysqli_query($conn,"insert into room values (null, '".mysqli_real_escape_string($conn, $a[0])."','".mysqli_real_escape_string($conn,$a[1])."')"))
    {
                echo "<script>alert('Room Registered!');</script>";

    }
    else
    {
        echo "<script>alert('error in query');</script>";
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
                        
                                    <h1>Statistics</h1>
                                    
                                </div>
                                  <div class="state-overview">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 col-12">
                              <div class="info-box bg-blue">
                                <span class="info-box-icon push-bottom"><i class="material-icons">style</i></span>
                                <div class="info-box-content">
                                  <span class="info-box-text">Total Staff</span>
                                  <span class="info-box-number">

                                     <?php
                                        $q = mysqli_query($conn, "select count(*) from staff_registration");
                                        $row = mysqli_fetch_array($q);
                                        echo $row[0];
                                      ?>

                                     

                                  </span>
                                  
                                  </div>
                                 
                                </div>
                                <!-- /.info-box-content -->
                              </div>
                              <!-- /.info-box -->
                          
                            <!-- /.col -->
                            <div class="col-xl-3 col-md-6 col-12">
                              <div class="info-box bg-orange">
                                <span class="info-box-icon push-bottom"><i class="material-icons">card_travel</i></span>
                                <div class="info-box-content">
                                  <span class="info-box-text">Total Guests</span>
                                  <span class="info-box-number">
                                      <?php
                                        $q = mysqli_query($conn, "select count(*) from guest_registration");
                                        $row = mysqli_fetch_array($q);
                                        echo $row[0];
                                      ?>

                                  </span>
                                  <div>
                                <!-- /.info-box-content -->
                              </div>
                              <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                            <div class="col-xl-3 col-md-6 col-12">
                              <div class="info-box bg-purple">
                                <span class="info-box-icon push-bottom"><i class="material-icons">phone_in_talk</i></span>
                                <div class="info-box-content">
                                  <span class="info-box-text">Total Bookings</span>
                                  <span class="info-box-number">
                                      

                                      <?php
                                        $q = mysqli_query($conn, "select count(*) from booking");
                                        $row = mysqli_fetch_array($q);
                                        echo $row[0];
                                      ?>

                                  </span>
                                 
                                </div>
                                <!-- /.info-box-content -->
                              </div>
                              <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-xl-3 col-md-6 col-12">
                              <div class="info-box bg-success">
                                <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
                                <div class="info-box-content">
                                  <span class="info-box-text">Total Revenue</span>
                                  <span class="info-box-number">
                                       <?php
                                        $sum = 0;
                                        $q = mysqli_query($conn, "SELECT sum(price) from expenses inner join guest_expenses on expenses.id = expenses_id");
                                        $row  = mysqli_fetch_array($q);
                                        $sum = $sum +$row[0];
                                        $q = mysqli_query($conn, "SELECT sum(price) from membership inner join guest_membership on membership.id = membership_id");
                                        $row  = mysqli_fetch_array($q);
                                        $sum = $sum +$row[0];
                                        $q = mysqli_query($conn, "SELECT sum(amount) from booking_payment");
                                        $row  = mysqli_fetch_array($q);
                                        $sum = $sum +$row[0];
                                        echo $sum;
                                        

                                      ?>

                                     
                                  </span>
                                  
                                <!-- /.info-box-content -->
                              </div>
                              <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                          </div>
                        </div>


                            <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                      <header >Admin Accounts</header>
                                     <table class = "table table-striped table-bordered table-hover">
                                        <tr>
                                            <th class="text-centered">
                                            Serail No                                        </th>
                                        <th class="text-centered">
                                            Email
                                        </th>
                                        <th class="text-centered">
                                            Change Settings
                                        </th>
                                      
                                      
                                        </tr>
                                       <?php

                                        $q = mysqli_query($conn, "select * from admin_registration");
                                        $i = 1;
                                        while($row = mysqli_fetch_array($q))
                                        {
                                            echo "<tr>
                                            <td class='text-centered'>".$i."</td>
                                            <td class='text-centered'>".$row[1]."</td>
                                            <td class='text-centered'><button onclick=\"window.location.href='admin_registration2.php?id=".$row[0]."'\" class='btn btn-danger'>Change Password</button></td>"
                                            ;
                                            
                                            $i++;
                                        }


                                       ?>

                                    </table>


                                </div>
                               
                            </div>
                        </div>
                        
                            </div>

                         
                       













      <?php

      include "footer.html";
      ?>