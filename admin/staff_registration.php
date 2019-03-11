<?php 

require "conn.php";

if(isset($_POST["submit"]))
{
    $i = 0;
    foreach($_POST as $key=>$value)
    {

        $a[$i] = $value;
                    // echo "<script>alert('".$i."     ".mysqli_real_escape_string($conn, $a[$i])."');</script>";

        $i++;
        
    }
    if(true)
    {

            if($a[9]=='')
            {
                       if(mysqli_query($conn,"insert into staff_registration values (null, '".mysqli_real_escape_string($conn, $a[0])."','".mysqli_real_escape_string($conn,$a[1])."', '".mysqli_real_escape_string($conn, $a[2])."','".mysqli_real_escape_string($conn, $a[3])."','".mysqli_real_escape_string($conn, $a[4])."','".mysqli_real_escape_string($conn, $a[5])."','".mysqli_real_escape_string($conn, $a[6])."','".mysqli_real_escape_string($conn, $a[7])."','".mysqli_real_escape_string($conn, $a[8])."',null,'".mysqli_real_escape_string($conn, $a[10])."','".md5(mysqli_real_escape_string($conn, $a[11]))."')"))
    {   
                echo "<script>alert('Staff Registered!');</script>";

    }     
            }
            else
            {
            if(mysqli_query($conn,"insert into staff_registration values (null, '".mysqli_real_escape_string($conn, $a[0])."','".mysqli_real_escape_string($conn,$a[1])."', '".mysqli_real_escape_string($conn, $a[2])."','".mysqli_real_escape_string($conn, $a[3])."','".mysqli_real_escape_string($conn, $a[4])."','".mysqli_real_escape_string($conn, $a[5])."','".mysqli_real_escape_string($conn, $a[6])."','".mysqli_real_escape_string($conn, $a[7])."','".mysqli_real_escape_string($conn, $a[8])."','".mysqli_real_escape_string($conn, $a[9])."','".mysqli_real_escape_string($conn, $a[10])."','".md5(mysqli_real_escape_string($conn, $a[11]))."')"))
    {   
                echo "<script>alert('Staff Registered!');</script>";

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
                                    <header>Staff registration</header>
                                    
                                </div>
                                <div class="card-body " id="bar-parent">
                                    <form action="#" method="POST">
                                        <div class="form-group">
                                            <label for="simpleFormEmail">First name</label><br>
                                            <input type="name" maxlength="30" minlength="2" id="simpleFormEmail" placeholder="Luksh" name ="email1" pattern="[A-Z a-z]{1,32}" title="Please input the Name in the correct format"
>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="simpleFormEmail">Last name</label><br>
                                            <input type="name" maxlength="30" minlength="2"  id="simpleFormEmail" placeholder="Kumar" name ="email2" pattern="[A-Z a-z]{1,32}" title="Please input the Name in the correct format"
>
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleFormEmail">Designation</label><br>
                                            <input type="name" maxlength="30" minlength="2" id="simpleFormEmail" placeholder="Manager" name ="email3" pattern="[A-Z a-z]{1,32}" title="Please input the Name in the correct format"
>
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleFormEmail">Time In</label><br>
                                            <input type="time" maxlength="30" minlength="2"  id="simpleFormEmail" placeholder="Time In" name ="email4">
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleFormEmail">Time out</label><br>
                                            <input type="time" maxlength="30" minlength="2" id="simpleFormEmail" placeholder="Time Out" name ="email5">
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleFormEmail">Salary</label><br>
                                            <input type="number" maxlength="30" minlength="2"  id="simpleFormEmail" placeholder="5000" name ="email6">
                                        </div>

                                        <div class="form-group">
                                            <label for="simpleFormEmail">Commision</label><br>
                                            <input type="number" maxlength="30" minlength="2"  id="simpleFormEmail" placeholder="50" name ="email7">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="simpleFormPassword">Hiredate</label><br>
                                            <input type="date" maxlength="30" minlength="2"  id="simpleFormPassword" placeholder="" name="pass">
                                        </div>

                                        <div class="form-group">
                                            <label for="simpleFormEmail">Department</label><br>
                                            <select name ="dept">
                                                <?php

                                                $query  = mysqli_query($conn, "select * from dept");

                                                while($row  = mysqli_fetch_array($query))
                                                {
                                                          //  echo "<script>alert('".$row[0]."  ".$row[1]."');</script>";

                                                    echo "<option value ='".$row[0]."'>".$row[1]."</option>";
                                                    }                                                                                                 
                                                ?>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="simpleFormEmail">Supervisor</label><br>
                                            <select name ="super">
                                                <?php

                                                $query  = mysqli_query($conn, "select * from staff_registration");

                                                while($row  = mysqli_fetch_array($query))
                                                {
                                                         //echo "<script>alert('".$row[0]."  ".$row[1]." ".$row[1]."');</script>";

                                                    echo "<option value ='".$row[0]."'>".$row[1]." ".$row[2]."</option>";
                                                }
                                                 echo "<option value =''>None</option>";
                                                                                                    
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleFormEmail">Email</label><br>
                                            <input type="email" maxlength="30" minlength="2" id="simpleFormEmail" placeholder="Enter email address" name ="email22">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="simpleFormPassword">Password</label><br>
                                            <input type="password" maxlength="30" minlength="8"  id="simpleFormPassword" placeholder="Password" name="pass22">
                                        </div>

                                        
                                        

                                       
                                        <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                            </div>




                                <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>List of Staff</header>
                                    
                                     <table class = "table table-striped table-bordered table-hover">
                                        <tr>
                                            <th class="text-centered">
                                            Serial No                                    </th>
                                        <th class="text-centered">
                                            Firstname
                                        </th>
                                        <th class="text-centered">
                                            Lastname
                                        </th>
                                        <th class="text-centered">
                                            Designation
                                        </th>
                                        <th class="text-centered">
                                            time In
                                        </th>
                                        
                                      
                                      <th class="text-centered">
                                            Time Out
                                        </th>
                                      
                                      <th class="text-centered">
                                            Salary
                                        </th>
                                      
                                      <th class="text-centered">
                                            Commision
                                        </th>
                                      
                                      <th class="text-centered">
                                            hiredate
                                        </th>
                                      
                                      <th class="text-centered">
                                            Department
                                        </th>
                                        <th class="text-centered">
                                            Email
                                        </th>
                                      
                    
                                      

                                      
                                      
                                        </tr>
                                       <?php

                                        $q = mysqli_query($conn, "select * from staff_registration");
                                        $i = 1;
                                        while($row = mysqli_fetch_array($q))
                                        {
                                            $q2 = mysqli_query($conn, "select * from dept where id ='".$row[9]."'");
                                            $row2 = mysqli_fetch_array($q2);

                                            echo "<tr>
                                            <td class='text-centered'>".$i."</td>
                                            <td class='text-centered'>".$row[1]."</td>
                                            <td class='text-centered'>".$row[2]."</td>
                                            <td class='text-centered'>".$row[3]."</td>
                                            <td class='text-centered'>".$row[4]."</td>
                                            <td class='text-centered'>".$row[5]."</td>
                                            <td class='text-centered'>".$row[6]."</td>
                                            <td class='text-centered'>".$row[7]."</td>
                                            <td class='text-centered'>".$row[8]."</td>
                                            <td class='text-centered'>".$row2[1]."</td>
                                            <td class='text-centered'>".$row[11]."</td>
                                            
                                            ";

                                            
                                            $i++;
                                        }


                                       ?>

                                    </table>


                                </div>
                                <div class="card-body " id="bar-parent">
                                    
                                   
                                </div>
                            </div>
                        </div>
                        
                            </div>

                       













      <?php

      include "footer.html";
      ?>