<?php
$num = $_GET['num'];

$name = $_POST['name'];
$pass = $_POST['pass'];
$sub = $_POST['subject'];
$cont = $_POST['content'];
$day=date('Y-m-d(H:i)');
//mysql접속
$conn = mysqli_connect("localhost", "root", "123456", "sungil");
if(!$conn)
    die("서버연결실패".mysqli_connect_error());


$sql ="update freeboard set name= '$name',pass='$pass',subject='$sub', content='$cont', regist_day='$day' where num=$num";
//mysql 명령실행
$result = mysqli_query($conn, $sql);


//DB해제
mysqli_close($conn);


//목록보기
echo "<script>location.href='list.php'; </script>";



?>