<?php
$x="abc";
$$x=200;
echo $x."<br/>";
echo $$x."<br/>";
echo $abc."<br>";

// class Fruit{
//     public $name;
//     public $color;

//     function set_name($name){
//         $this->name = $name;
//     }

//     function get_name(){
//         return $this->name;
//     }

//     function set_color($color){
//         return $this->color = $color;
//     }

//     function get_color(){
//         return $this->color;
//     }

// }

// $apple = new Fruit();
// $banana = new Fruit();
// $apple->set_name('Apple');
// $banana->set_name('Banana');
// $apple->set_color('Red');

// echo "Name:" .$apple->get_name();
// echo "<br>";
// echo "Name:" .$banana->get_name();
// echo "<br>";
// echo "color:" .$apple->get_color();


// class Fruit{
//     public $name;
//     public $color;

//     function __construct($name){
//         $this->name=$name;
//     }

//     function get_name(){
//         return $this->name;
//     }
// }
// $apple = new Fruit("Apple");
// echo $apple->get_name();

// class Fruit{
//     public $name;
//     public $color;

//     function __construct($name){
//         $this->name = $name;
//     }
//     function __destruct(){
//         echo "The fruit is {$this->name}.";
//     }
// }
// $apple = new Fruit("Apple");

// class Fruit{
//     var $name;
//     var $color;

//     function __construct($name, $color){
//         $this->name = $name;
//         $this->color = $color;
//     }

//     function __destruct()
//     {
//         echo "The fruit is {$this->name} and the color is {$this->color}";
//     }
// }

// $apple = new Fruit("Apple", "Red");

// class Fruit{
// public $name;
// public $color;
// public $weight;

// function set_name($n)
// {
//     $this->name= $n;
//     echo $this->name;
// }

// function set_color($n){
//     $this->color = $n;
//     echo $this->color;
// }

// function set_weight($n){
//     $this->weight = $n;
//     echo $this->weight;
// }
// }

// $mango = new Fruit();
// $mango->set_name('Mango');
// $mango->set_color('Yellow');
// $mango->set_weight("300");


// class Fruit{
//     public $name;
//     public $color;

//     public function __construct($name,$color){
//         $this->name = $name;
//         $this->color = $color;
//     }

//     protected function intro(){
//         echo "The fruit is {$this->name} and color is {$this->color}";
//     }
// }

//     class strawberry extends fruit{
//         public $weight;
//         public function __construct($name,$color,$weight)
//         {
//             $this->name = $name;
//             $this->color = $color;
//             $this->weight = $weight;
//         }
//         public function intro(){
//             echo "The Fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
//         }
//     }

//     $strawberry = new strawberry("strawberry","red", 500);
//     $strawberry->intro();


// class Goodbye{
//     const   LEAVING_MESSAGE = "Thank you bhavya";
// }
// echo Goodbye :: LEAVING_MESSAGE;

// class Goodbye{
//     const LEAVING_MESSAGE = "Thank You bhavya";
//     public function byebye(){
//         echo self :: LEAVING_MESSAGE; 
//     }
// }
// $goodbye = new Goodbye();
// $goodbye->byebye();


//Parent class
// abstract class Car{
//     public $name;
//     public function __construct($name){
//         $this->name = $name;
//     }
//     abstract public function intro() : string;
// } 

// //child classes
// class Audi extends Car{
//     public function intro() : string {
//         return "Choose German quality! I'm an $this->name";
//     } 
// }

// class Volvo extends Car{
//     public function intro() : string {
//         return "Proud to be Swedish! I'm a $this->name";
//     } 
// }

// class Tata extends Car{
//     public function intro() : string {
//         return "I'm a $this->name";
//     } 
// }

// //Create object from child classes
// $audi = new audi('Audi');
// echo $audi->intro()."<br>";

// $volvo = new volvo('Volvo');
// echo $volvo->intro()."<br>";

// $tata = new tata('Tata');
// echo $tata->intro()."<br>";

// abstract class ParentClass{
//     abstract protected function prefixName($name);
// }

// class ChildClass extends ParentClass{
//     public function prefixName($name){
//         if($name == "Bhavya Chavda"){
//             $prefix = "Mr.";
//         }else if ($name == "Deval Parmar"){
//             $prefix = "Mr.";
//         }else {
//             $prefix = "";
//         }
//         return "{$prefix} {$name}";
//     }
// }

// $class = new ChildClass;
// echo $class->prefixName("Bhavya Chavda")."<br>";
// echo $class->prefixName("Deval Parmar")."<br>";

class domain{
    protected static function getwebsiteName(){
        return "w3school.com";
    }
}

class domainw3 extends domain{
    public $websitename;
    public function __construct(){
        $this->websitename = parent :: getwebsiteName();
    }
}

$domainw3 = new domainw3;
echo $domainw3->websitename;
?>