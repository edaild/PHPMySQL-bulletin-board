<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>성남 성일정보고 freeboard</title>
<link rel="stylesheet"  href="style.css">
</head>
<body> 
	<h2>자유 게시판 > 목록보기</h2>
	<ul class="board_list">
		<li>
			<span class="col1">번호</span>
			<span class="col2">제목</span>
			<span class="col3">글쓴이</span>
			<span class="col4">등록일</span>
		</li>
<?php
    //여기에 글 목록을 보여주는 코드를 작성하세요.. 
	$conn = mysqli_connect("localhost", "root", "123456", "sungil");
if(!$conn)
    die("서버연결실패".mysqli_connect_error());
//	echo "서버연결성공";

	//DB에 저장된 데이터 가져오기
	$sql = "select * from freeboard order by num desc;";
	$result = mysqli_query($conn, $sql);
	$total_record = mysqli_num_rows($result); //전체의 검색한 레코드 수

	for($i=0; $i<$total_record; $i++){
		mysqli_data_seek($result , $i);
		$row = mysqli_fetch_assoc($result);
		$num = $row['num'];
		$sub = $row['subject'];
		$name = $row['name'];
		$reg_day = $row['regist_day'];
?>
		<li>
			<span class="col1"><?= $num ?></span>		
			<span class="col2"><a href="view.php?num=<?= $num ?>"><?= $sub ?></a></span>
			<span class="col3"><?= $name ?></span>
			<span class="col4"><?= $reg_day ?></span>
		</li>	
<?php
	}
	mysqli_close($conn);
?>
	    </ul>
		<ul class="buttons">
			<li><button onclick="location.href='list.php'">목록</button></li>
			<li><button onclick="location.href='form.php'">글쓰기</button></li>
		</ul>		
</body>
</html>