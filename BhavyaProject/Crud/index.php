<!DOCTYPE html>
<html>
    <head>
        <title>CRUD</title>
    </head>
    <?php  include('config.php'); ?>
<body>
<?php $results = mysqli_query($db, "SELECT * FROM data"); ?>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    
    <?php while ($row = mysqli_fetch_array($results)) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td>
                <a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
            </td>
            <td>
                <a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
    <form method="POST" action="config.php">
        <div class="input-group">
            <label>Name</label>
            <input type="text" name="name" value="">
        </div>
        <div class="input-group">
            <label>Address</label>
            <input type="text" name="address" value="">
        </div>
        <div class="input-group">
            <button class="btn" type="submit" name="save">Save</button>
        </div>
    </form>
</body>
</html>