<h3>for test</h3>
<?php

for($num = 2; $num<=10 ; $num+=2){
echo "코끼리".$num. "마리가 거미줄에 걸렸네<br/>";
}

?>

<h3>while test</h3>
<?php
$num = 1;
while($num<= 10){
echo "코끼리".$num. "마리가 거미줄에 걸렸네<br/>";
$num++;
}

?>
<h3>break / eontinue</h3>
<?php
$num = 0;
while(true){
    $num++;
    if($num > 10) break;
    if($num % 2 == 1) continue;
    echo "코끼리".$num. "마리가 거미줄에 걸렸네<br/>";
}

?>

