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

$row = mysqli_fetch_assoc($result);
$pass = $row['pass'];
$sub = $row['subject'];
$name = $row['name'];
$reg_day = $row['regist_day'];
$cont = $row['content'];
mysqli_close($conn);
?>	
<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>성남 성일정보고 freeboard</title>
<link rel="stylesheet" href="style.css">
<script>
  	function check_input() {
		if (!document.board.name.value) {			// 이름 체크
          	alert("이름을 입력하세요!");
          	document.board.name.focus();
          	return;
		}		  
		if (!document.board.pass.value) {			// 비밀번호 체크
          	alert("비밀번호를 입력하세요!");    
          	document.board.pass.focus();
          	return;
      	}			
      	if (!document.board.subject.value) {		// 제목 체크
          	alert("제목을 입력하세요!");
          	document.board.subject.focus();
          	return;
		}
      	if (!document.board.content.value) {		// 내용 체크
          	alert("내용을 입력하세요!");    
          	document.board.content.focus();
          	return;
      	}  
      	document.board.submit();
   	}
</script>
</head>
<body> 
	<h2>자유 게시판 > 글 수정하기</h2>
	<form name="board" method="post" action="modify.php?num=<?=$n?>">
	    <ul class="board_form">
			<li>
				<span class="col1">이름 : </span>
				<span class="col2"><input name="name" type="text" value="<?= $name?>"></span>
			</li>		
	    	<li>	
	    		<span class="col1">비밀번호 : </span>
	    		<span class="col2">
					<input name="pass" type="password" value="<?= $pass?>">
	    		</span>
	    	</li>				
	    	<li>
	    		<span class="col1">제목 : </span>
	    		<span class="col2"><input name="subject" type="text" value="<?= $sub?>"></span>
	    	</li>	    	
	    	<li class="area">	
	    		<span class="col1">내용 : </span>
	    		<span class="col2">
	    			<textarea name="content"><?= $cont?></textarea>
	    		</span>
	    	</li>
	    </ul>
	    <ul class="buttons">
			<li><button type="button" onclick="check_input()">저장하기</button></li>
			<li><button type="button" onclick="location.href='list.php'">목록보기</button></li>
		</ul>
	</form>
</body>
</html>