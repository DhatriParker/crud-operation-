<?php
    $id=$_REQUEST["stdid"];

    include("connection.php");
    mysqli_query($con,"delete from student_info where s_id=$id");
    header("location:displayStudent.php");
?>