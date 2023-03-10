<?php 
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

$con = mysqli_connect("localhost","root","","mydb") or die("Connection Failed");

$sql = "UPDATE student set sname = '{$stu_name}', saddress = '{$stu_address}', sclass = '{$stu_class}' , sphone = '{$stu_phone}' where sid = {$stu_id}";
$result = mysqli_query($con, $sql) or die("Query unsuccessful");

header("Location: http://localhost/Crud/index.php");

mysqli_close($con);
?>