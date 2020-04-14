<?php

$message = "world!<br/>";
echo "Hello\n";
echo $message;

$a = 100;
$b = 50;
$text = "Some text\n";
$number = '123';
$c = $a + $b;
$d = $a.$b;
$text .= "here";
$a += $number;
$b .= $number;
echo "c = $c<br/>";
echo "d = $d<br/>";
echo "text = $text<br/>";
echo "a = $a<br/>";
echo "b = $b<br/>";

$c = $message;
echo "c = $c";

$message = $d;
echo "message = $message<br/>";

$a = 100;
$b = 50;
if ($a > $b){
    echo "a > b<br/>";
}
if ($a){
    echo "a = $a<br/>";
}
if ($a == $b){
    echo "a == b<br/>";
} else {
    echo "a != b<br/>";
}

$message = "30";
$text = "20";
if ($message >= $text){
    echo "$message<br/>";
} else {
    echo "$text<br/>";
}

if ($a > $message){
    echo "a = $a<br/>";
}
if ($a === $message){
    echo "a === b<br/>";
} else {
    echo "a !==b<br/>";
}

$x = 0;
while ($x++ < 5){
    echo "x(while) = $x<br/>";
}

for ($x = 0; $x++<5;) echo "x(for) = $x<br/>";

$arr = [1, 2, 3];
foreach ($arr as $i) {
    echo "<b>$i</b><br>";
}

$array = ['low' => '1', 'high' => '100'];
foreach ($array as $key => $i) {
    echo "<b>$i $key</b><br>";
}

$text  = "We have some text here";
echo "standart text = $text<br/>";
$text_explode = explode(" ", $text);
echo "explode<br/>";
foreach ($text_explode as $i) {
    echo "<b>$i</b><br>";
};
echo "implode<br/>";
$text_imlode = implode(",", $text_explode);
echo "$text_imlode<br/>";

$a = "hello";
$hello = "world";
echo "$a<br/>";
echo $$a;
echo "<br/>";

class A{
    var $name;
    function __construct($Name){
        $this->name = $Name;
    }
    function __destruct(){
        echo "Deleting<br/><br/>";
        unset($A);
    }
    function setName($Name){
        $this->name = $Name;
    }
    function getName(){
        echo "$this->name<br/>";
    }
}

class B extends A{
    var $surname;
    function __construct($Surname){
        $this->surname = $Surname;
        A::__construct("Jack");
    }
    function __destruct(){
        echo "Deleting<br/><br/>";
        unset($B);
    }
    function setSurname($Surname){
        $this->surname = $Surname;
    }
    function getSurname(){
        echo "$this->surname<br/>";
    }
}

$obj = new A("Jack");
$obj->getName();
$obj->setName("Andrii");
$obj->getName();

$obj = new B("Brown");
$obj->getSurname();
$obj->getName();

echo "<br/>";

class Singleton{
    private static $instance = null;
    protected $text = "Hello world";
    private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    public function getText(){
        echo "$this->text<br/>";
    }
}

$object1 = Singleton::getInstance();
$object1->getText();

$object2 = new Singleton();
?>