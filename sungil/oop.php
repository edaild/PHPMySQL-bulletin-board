<?php
   
   $var = array(10,20,30);
   array_push($var, 40);
    var_dump($var);

$obj = new ArrayObject(array(10,20,30));
$obj->append(40);
var_dump($obj)

?>