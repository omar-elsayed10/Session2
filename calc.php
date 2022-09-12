<?php
class MyCalculator {
private $numberOne, $numberTwo;
    public function __construct( $Val1, $Val2 )
     {
        $this->numberOne = $Val1;  
        $this->numberTwo = $Val2;
    }

public function Addition() {
    return $this->numberOne + $this->numberTwo;
}
public function Subtraction() {
    return $this->numberOne - $this->numberTwo;
}
    public function Multiplication() {
return $this->numberOne * $this->numberTwo;
}
public function Division() {
    return $this->numberOne / $this->numberTwo;
}
}

$mycalc = new MyCalculator(10,20); 
echo "Addition = " .      $mycalc-> Addition() .       "<br>";
echo "Subtraction = ".    $mycalc-> Multiplication() . "<br>";
echo "Multiplication = ". $mycalc-> Subtraction() .    "<br>";
echo "Division = ".       $mycalc-> Division(); 
?>