<?php

include('readscript.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP CRUD Operations</title>
<style>
     table, td, th {  
      border: 1px solid #ddd;
      text-align: left;
    }
    
    table {
      border-collapse: collapse;
      max-width: 100%;
     width:90%;

    }
    .table-data{
      
      width:65%;
      float: left;
    }
    th, td {
      padding: 15px;
    }
body{
    overflow-x: hidden;
}

* {
  box-sizing: border-box;}
</style>
</head>
<body>


<div class="table-data">
        <div class="list-title">
 <h2>CRUD List</h2>
          
            </div>

    <table border="1">

        <tr>
            <th>S.N</th>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>City</th>
            <th>Country</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        
<?php

        if(count($fetchdata)>0){
        $sn=1;
        foreach($fetchdata as $data){
            
?> <tr>
<td><?php echo $sn; ?></td>
<td><?php echo $data['full_name']; ?></td>
<td><?php echo $data['email_address']; ?></td>
<td><?php echo $data['city']; ?></td>
<td><?php echo $data['country']; ?></td>
<td><a href="updateform.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
<td><a href="deletescript.php?delete=<?php echo $data['id']; ?>">Delete</a></td>
</tr> <?php

      $sn++; }

      }else{
            
?>

      <tr>
        <td colspan="7">No Data Found</td>
      </tr>
                
<?php

    }
?>
 
    </table>
    </div>

</body>
</html>