<?php
$x = "Hello uCertify";
$y = "Hello Shivam";
$z = 50;
$f = 30.76;
$cars = array("Volvo","BMW","Toyota");

class car{
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
    }

    public function message(){
        return "My car is a ". $this->color . " " .$this->model. "!";
    }
}
$myCar = new Car("black", "Maruti suzuki");
echo $myCar-> message();
echo "<br>";
$myCar = new Car("red", "BMW");
echo $myCar-> message();
echo $x;
echo "<br>";
echo $y;
echo "<br>";
var_dump($z);
var_dump($f);
var_dump($cars);

?>
