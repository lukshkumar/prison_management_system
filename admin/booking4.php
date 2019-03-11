<?php

require "conn.php";
$id = $_GET['id'];
mysqli_query($conn, "delete from client where id = '$id'");


echo "<script>alert('Client Deleted ')</script>";
echo "<script>window.location.href='booking.php'</script>";


?>