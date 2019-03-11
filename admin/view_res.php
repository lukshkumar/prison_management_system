<?php 

require "conn.php";

session_start();
include "header_staff.html";

$id = $_SESSION['id'];

?>
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        
                    </div>
                  



                                <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Your Restaurant Lists</header>
                                     <table class = "table table-striped table-bordered table-hover">
                                        <tr>
                                            <th class="text-centered">
                                            Serial No                                        </th>
                                        <th class="text-centered">
                                        Name
                                        </th>
                                        <th class="text-centered">
                                           Description     
                                        </th>
										<th class="text-centered">
                                           Image     
                                        </th>
                                       
										<th class="text-centered">
											Products
                                        </th>
										
										<th class="text-centered">
                                           Delete     
                                        </th>
                                       
                                      
                                        </tr>
                                       <?php

                                        $q = mysqli_query($conn, "select * from restaurant where client_id = '$id'");
                                        $i = 1;
                                        while($row = mysqli_fetch_array($q))
                                        {
                                            echo "<tr>
                                            <td class='text-centered'>".$i."</td>
                                            <td class='text-centered'>".$row[2]."</td>
                                            <td class='text-centered'>".$row[3]."</td>
											<td class='text-centered'><img src'".$row[4]."' width= 200 height= 100></td>
											<td><button onclick=\"window.location.href='booking8.php?id=".$row[0]."'\"  class='btn btn-info'>View Restaurant</button></td>
											</td>
											<td><button onclick=\"window.location.href='booking7.php?id=".$row[0]."'\"  class='btn btn-danger'>Delete Restaurant</button></td>
											</td>
											
											
                                       ";
                                           
                                            
                                           
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