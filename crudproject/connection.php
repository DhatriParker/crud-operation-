<?php
$con=mysqli_connect("127.0.0.1","root","") or die("Data base connection error");
mysqli_select_db($con,"crudproject") or die("database selection error");
?>