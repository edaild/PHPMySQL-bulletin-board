<?php
//cookie_access.php
//쿠키접근
$result = isset($_COOKIE['user']);
if( isset($_COOKIE['time']) )
echo "시간: ".(time()-$_COOKIE['time']);
if($result){
    echo "사용자 : " .$_COOKIE['user'];
}
else{
    echo "쿠키가 존재하지 않습니다.";
}



?>