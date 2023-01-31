<?php
echo "상호 : ".$_POST['name']."<br>";
echo "전화번호 : ".$_POST['tel']."<br>";
echo "주소 : ".$_POST['addres']."<br>";

$name = $_POST['name'];
$tel = $_POST['tel'];
$addres = $_POST['addres'];

//mysql -uroot -p123456 -hlocalhost
//use sungil;
$conn = mysqli_connect("localhost", "root", "123456", "sungil","3306");
if(!$conn)
    die("서버연결실패".mysqli_connect_error());

    echo "서버연결성공";
    
    //데이터 추가
    $sql = "INSERT INTO school(name, tel, address)
    VALUES('$name', '$tel','$addres');";
    
    $result = mysqli_query($conn, $sql);
    if($result)
        echo "데이터 추가 완료";
    else
        echo "데이터 추가 에러".mysqli_errer($conn);

    mysqli_close($conn);
?>