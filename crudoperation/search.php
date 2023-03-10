<?php 
include 'connect.php';
$search = $_GET['search'];

$sql = "SELECT * FROM crud WHERE id LIKE '%".$search."%' OR name LIKE '%".$search."%' OR email LIKE '%".$search."%' OR mobile LIKE '%".$search."%'";
$result= $con -> query($sql);

if ($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        echo $row["id"]."  ".$row["name"]."  ".$row["email"]." ".$row["mobile"]." ".$row["password"]."<br>";
    }
    } else {
        echo "0 records";
    }
    
    $con->close();
?>