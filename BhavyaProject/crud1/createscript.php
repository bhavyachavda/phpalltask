<?php

include('db.php');

if(isset($_POST['create'])){
   
      $msg=insert_data($con);
      
}

// insert query
function insert_data($con){
   
      $full_name= legal_input($_POST['fname']);
      $email_address= legal_input($_POST['email']);
      $city = legal_input($_POST['city']);
      $country = legal_input($_POST['country']);

      $query="INSERT INTO user_details (full_name,email_address,city,country) VALUES ('$full_name','$email_address','$city','$country')";
      $exec= mysqli_query($con,$query);
      if($exec){

        $msg="Data was created sucessfully";
        return $msg;
      
      }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($con);
      }
}

// convert illegal input to legal input
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>