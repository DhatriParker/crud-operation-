<html>
<head>

</head>

<body>
<h1>Student List<h1>
<?php
include("connection.php");

$rsStudent=mysqli_query($con,"select * from student_info");
echo("<table border='1'>");
echo("<th>Id</th> <th>s name</th> <th> s fname</th> <th colspan='2'>status</th>");
$cnt=0;
while($row=mysqli_fetch_array($rsStudent))

{
    $x=$row["s_id"];
    $count=$row[0];
    $cnt++;

echo("<tr>");  

echo("<td>");
echo("$cnt");
echo("</td>");

echo("<td>");
echo($row["s_name"]);
echo("</td>");

echo("<td>");
echo($row["s_fname"]);
echo("</td>");

echo("<td>");
echo("<a href='editStudent.php?id=$x'>Update</a>");
echo("</td>");

echo("<td>");

echo("<a href='deleteStudent.php?stdid=$x'>delete</a>");
echo("</td>");

echo("<br>");
echo("</tr>");
}
echo("</table>");
?>
</body>
</html>