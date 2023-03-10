<!DOCTYPE html>
     <html> 
     <head> 
  <title>Assignment1</title>
  </head>
  <?php
    $first_num = $_POST['first_num'];
    $second_num = $_POST['second_num'];
    $opeartor = $_POST['operator'];
    $result = '';
    if(is_numeric($first_num) && is_numeric($second_num)){
        switch($opeartor){
            case "Add":
                $result = $first_num + $second_num;
                break;
            case "subtract":
                $result = $first_num - $second_num;
                break;
            case "Multiply":
                $result = $first_num * $second_num;
                break;
            case "Divide":
                $result = $first_num / $second_num;
                break;
        }
    }
    ?>
  <body> 
  <h3>Simple Calculator</h3>
    <div id="page-wrap">
        <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="first_num"  id="first_num" required="required" value="<?php echo $first_num; ?>" /><b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>" /><b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"/><b>Result</b>
            </p>
            <input type="submit" name="operator" value="Add"/>
            <input type="submit" name="operator" value="subtract"/>
            <input type="submit" name="operator" value="Multiply"/>
            <input type="submit" name="operator" value="Divide"/>
        </form>
    </div>
  </body>
  </html>
