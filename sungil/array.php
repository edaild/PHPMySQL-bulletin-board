<?php

var_dump($bts);
echo $bts["vocal"];

foreach ($bts as $key=>$value){
    echo $key. ":".$value."<br>";
}

sort($bts);
var_dump($bts);

sort($bts);
var_dump($bts);
?>