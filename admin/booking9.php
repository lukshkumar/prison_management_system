<?php

require "conn.php";
$id = $_GET['id'];
mysqli_query($conn, "delete from item where id = '$id'");


echo "<script>alert('Item Deleted ')</script>";
echo "<script>window.location.href='view_res.php'</script>";


?>