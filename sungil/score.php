<?php
$score = 85;

//90점이상이면 A
//80점이상이면 B
//70점이상이면 c
//60점이상이면 d
//나뭐지 F

if($score >= 90 ){
    $grade = "A";
}
elseif($score >= 80 ){
    $grade = "B";
}

elseif($score >= 70 ){
    $grade = "C";
}

elseif($score >= 60 ){
    $grade = "D";
}

else
{
    $grade = "F";
}
echo "점수 : ".$score. "점<br/>";
echo "학점 : ".$grade. "점<br/>";



switch($grade){
    case "A":
        echo "FC성남";
    break;
    case "B":
        echo "FC제주";
        break;
       default:
            echo "탈락";
    breack;
    }
?>