<?php

$name = $_POST['name'];
$pw = $_POST['pass'];
$sub = $_POST['subject'];
$cont = $_POST['content'];
$reg_day = date("Y-m-d(H:i)");

$conn = mysqli_connect("localhost", "root", "123456", "sungil");
if(!$conn)
    die("서버연결실패".mysqli_connect_error());

    echo "서버연결성공";
    
    //데이터 추가
    $sql = "INSERT INTO freeboard(name, pass, subject, content, regist_day)
    VALUES('$name', '$pw','$sub','$cont','$reg_day');";
    
    $result = mysqli_query($conn, $sql);
    if($result)
        echo "데이터 추가 완료";
    else
        echo "데이터 추가 에러".mysqli_errer($conn);

    mysqli_close($conn);

    echo "<script> location.href='list.php' </script>";

?>