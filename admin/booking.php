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
                                    <header>Room Details</header>
                                     <table class = "table table-striped table-bordered table-hover">
                                        <tr>
                                            <th class="text-centered">
                                            Serial No                                        </th>
                                        <th class="text-centered">
                                        Type
                                        </th>
                                        <th class="text-centered">
                                            Arrival     
                                        </th>
                                       <th class="text-centered">
                                            Depart
                                        </th>
                                       
                                      
                                        </tr>
                                       <?php

                                        $q = mysqli_query($conn, "select * from booking");
                                        $i = 1;
                                        while($row = mysqli_fetch_array($q))
                                        {
                                            echo "<tr>
                                            <td class='text-centered'>".$i."</td>
                                            <td class='text-centered'>".$row[1]."</td>
                                            <td class='text-centered'>".$row[2]."</td>";
                                            if($row[6]==1)
                                            echo "<td class='text-centered'><button class='btn btn-sucess'>Active</button></td>";
                                            else
                                             echo "<td class='text-centered'><button class='btn btn-danger'>Cancelled</button></td>";

                                            echo "<td class='text-centered'><button onclick=\"window.location.href='booking2.php?id=".$row[0]."'\" class='btn btn-info'>View Details</button></td>";

                                           
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