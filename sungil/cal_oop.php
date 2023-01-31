<?php
class Calcurate{
    private $num1;
    private $num2;
    function __construct($num1,$num2){
        $this->nume1 =  $num1;
        $this->nume2 =  $num2;
    }
    function sum(){
        return $this->num1 + $this->num2;
    }
    function sub(){
        return $this->num2 - $this->num1;
    }
    function mul(){
        return $this->num1 * $this->num2;
    }
    function div(){
        return $this->num2 / $this->num1;
    }
}
$cal = new Calcurate(10,20);
echo "합: ".$cal->sum();
echo "차: ".$cal->sub();
echo "곱: ".$cal->mul();
echo "나누기: ".$cal->div();
?>