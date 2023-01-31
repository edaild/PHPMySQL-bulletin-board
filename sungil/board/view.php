<?php
if(isset($_GET['num']))
	$n = $_GET['num'];
else
	$n="";

$conn = mysqli_connect("localhost", "root", "123456", "sungil");
if(!$conn)
    die("서버연결실패".mysqli_connect_error());

$sql = "select * from freeboard where num=$n";
$result = mysqli_query($conn, $sql);
//if($result)
//	echo "데이터 가져오기 완료";
//else
//	echo "데이터 가져오기 에러".mysqli_errer($conn);

	$row = mysqli_fetch_assoc($result);
	$num = $row['num'];
	$sub = $row['subject'];
	$name = $row['name'];
	$reg_day = $row['regist_day'];
	$cont = $row['content'];

?>	
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>성남 성일정보고 freeboard</title>
<link rel="stylesheet" href="style.css">
<script>
	function check_password(mode, num) {
		// mode : modify(수정) delete(삭제), num : 레코드 번호
     	window.open("password_form.php?mode="+mode+"&num="+num,
         "pass_check",
          "left=700,top=300,width=550,height=150,scrollbars=no,resizable=yes");
   }
</script>   
</head>
<body> 
	<h2>자유 게시판 > 내용보기</h2>
	<ul class="board_view">
		<li class="row1">
			<span class="col1"><b>제목 :</b><?=$sub?></span>	<!-- 제목 출력 -->
			<span class="col2"><?=$name?><?=$reg_day?>  </span>	<!-- 이름, 작성일 출력 -->
		</li>
		<li class="row2">
				 <!-- 내용 출력 -->
				 <?=$cont?>
		</li>		
	</ul>
	<ul class="buttons">
		<li><button onclick="location.href='list.php'">목록보기</button></li>
		<li><button onclick="check_password('modify', '<?=$num?>')">수정하기</button></li>   
		<li><button onclick="check_password('delete', '<?=$num?>')">삭제하기</button></li>
		<li><button onclick="location.href='form.php'">글쓰기</button></li>
	</ul>
</body>
</html>