<?php
//delete.php?num=3
$num = $_GET['num'];


//mysql접속
$conn = mysqli_connect("localhost", "root", "123456", "sungil");
if(!$conn)
    die("서버연결실패".mysqli_connect_error());


$sql ="delete from freeboard where num=$num";
//mysql 명령실행
$result = mysqli_query($conn, $sql);


//DB해제
mysqli_close($conn);


//목록보기
echo "<script>location.href='list.php'; </script>";
?>
