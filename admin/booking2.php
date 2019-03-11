<?php

require "conn.php";
$id = $_GET['id'];
mysqli_query($conn, "update client set status = 1 where id = '$id'");


echo "<script>alert('Client Request Accepted ')</script>";
echo "<script>window.location.href='booking.php'</script>";


?>