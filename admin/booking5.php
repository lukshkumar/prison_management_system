<?php 

require "conn.php";


include "header_admin.html";
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
                                    <header>Client Restaurants</header>
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
                                           Delete Restaurant    
                                        </th>
                                       
									
                                      
                                        </tr>
                                       <?php
										$id = $_GET['id'];
                                        $q = mysqli_query($conn, "select * from restaurant where client_id  = '$id'");
                                        $i = 1;
                                        while($row = mysqli_fetch_array($q))
                                        {
                                            echo "<tr>
                                            <td class='text-centered'>".$i."</td>
                                            <td class='text-centered'>".$row[2]."</td>
                                            <td class='text-centered'>".$row[3]."</td>
											<td class='text-centered'><img src='".$row[4]."' width=200 height=100></td>
											<td><button onclick=\"window.location.href='booking6.php?id=".$row[0]."'\"  class='btn btn-danger'>Delete Restaurants</button></td>
											</td>
											
											
                                       ";
                                           
                                            
                                           
                                            $i++;
                                        }


                                       ?>

                                    </table>
									
									 <button onclick="window.location.href='booking.php'" class="btn btn-info">Go Back</button>


                                </div>
								
								
                               
                            </div>
                        </div>
                        
                            </div>

                       













      <?php

      include "footer.html";
      ?>