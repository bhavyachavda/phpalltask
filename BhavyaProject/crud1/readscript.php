<?php

include('db.php');

$fetchdata = fetch_data($con);

//fetch query
function fetch_data($con){
    $query = "select * from user_details order by id desc";
    $exec = mysqli_query($con,$query);
    if(mysqli_num_rows($exec)>0){
        $row = mysqli_fetch_all($exec,MYSQLI_ASSOC);
        return $row;
    }else{
        return $row=[];
      }
}
?>