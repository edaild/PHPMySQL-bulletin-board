<?php
//password.php?mode=modify&num=7
$mode = $_GET['mode'];
$num = $_GET['num'];
$pw = $_POST['pass'];


$conn = mysqli_connect("localhost", "root", "123456", "sungil");
if(!$conn)
    die("서버연결실패".mysqli_connect_error());


$sql = "select pass from freeboard where num=$num";
$result = mysqli_query($conn, $sql);


$row = mysqli_fetch_assoc($result);
$db_pw = $row['pass'];
mysqli_close($conn);


if($pw == $db_pw){
    //수정 or 삭제
    if($mode=='modify'){
        $url = "modify_form.php?num=$num";
    }
    else{  //delete
        $url = "delete.php?num=$num";
    }
    echo "<script>self.close(); opener.location.href='$url';</script>";
}
else{
    echo "<script>
    location.href='password_form.php?num=$num&error=y';
    </script>";
}
?>
