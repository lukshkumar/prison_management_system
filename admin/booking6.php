<?php

require "conn.php";
$id = $_GET['id'];
mysqli_query($conn, "delete from restaurant where id = '$id'");


echo "<script>alert('Client Restaurant Deleted ')</script>";
echo "<script>window.location.href='booking.php'</script>";


?>