<?php
	//get방식의 id에 있는 파라미터
	$board_id = $_GET['id'];	
	$type = $_get['board_type'];

	//$sql = "select * from board where id = ".$board_id;

	//파라미터 넘기기
	echo 'test.php 입니닷!!'.$board_id."<br>"."타입은".$type;
?>

<form action="mypost.php" method="post">
	<input type="text" name="id">
	<input type="password" name="password">
	<button>
		로그인 하러 가기!!
	</button>
</form>