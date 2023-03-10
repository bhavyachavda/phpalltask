<?php 
include 'db.php';

echo $stu_id = $_GET['id'];

$sql = "delete from student where sid = {$stu_id}";
$result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/Crud/index.php");

mysqli_close($con);
?>