<!DOCTYPE html>
<html>
<body>

<?php
echo strtolower("Hello WORLD.");
echo "<br/>"; 

$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
echo "<br/>";

echo strpos("I am bhavya","bhavya");
echo "<br/>";

echo ucfirst("hello world!");
echo "<br/>";

echo substr("Hello world",6);
echo "<br/>";

$a1 = array("red","green");
$a2 = array("blue", "yellow");
print_r(array_merge($a1,$a2));
echo "<br/>";

$a=array("red","green","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];
echo "<br/>";

$a=array("red","green","blue","yellow");
print_r(array_slice($a,2));
echo "<br/>";

$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
print_r(array_merge_recursive($a1,$a2));
echo "<br/>";

$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));
echo "<br/>"
?>

   
</body>
</html>
