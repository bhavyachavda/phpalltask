<!DOCTYPE html>
<html>
<head>
	<title>Person Eligible to vote</title>
</head>
<body>
<h2>Check Eligibility to Vote</h2>
  <form method="POST">
    Enter your age:  <input type="number" name="age" required><br>
    <input type="submit" name="submit" value="check">
  </form>
  <?php 
    if(isset($_POST['submit'])){
        $age = $_POST['age'];
        if($age>=18)
        {
            echo $age.",<font color = green> You are Eligible to vote";
        }
        else 
        {
            echo "<font color = red> Sorry You are not Eligible to vote";
        }
    }
   ?>
    
</body>
</html>