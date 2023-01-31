<?php

function hap($num1, $num2){ //함수 정의
    echo "합".($num1+$num2);
    $total = $num1+$num2;
    return $total;
}

function cha($num1, $num2){
    echo "차".($num1-$num2);
    $total = $num1-$num2;
    return $total;
}

 hap(20,10). "<br>"; //함수호출
 hap(30,10)."<br>";
 hap(10,20) +hap(30,40). "<br>";
 cha(30,20). "<br>"; //함수호출
 cha(30,10)."<br>";
 cha(40,20) -hap(30,40). "<br>";
?>