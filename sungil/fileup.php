<?php

$upload_dir = getcwd().'\file\\'; 
$upload_file = $upload_dir. $_FILES['userfile']['name'];
$result = move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_file );
if($result){
    echo "파일이 업로드되었습니다.<br>";
}
else{
    echo "파일 업로드 실패했습니다.";
}
?>

<img src="file/<?=$_FILES['userfile']['name']?>"/>