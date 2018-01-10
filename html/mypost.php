<?php
	$id = $_POST['id'];
	$pw = $_POST['password'];

	//Not Using Func
	//echo "아이디는 : ".$id."<br>비밀번호는 : ".$pw;
	echo mytext($id, $pw);
	echo login_check($id, $pw);

	//View Login id and pw Function
	function mytext($param1, $param2) {
		return "아이디는 : ".$param1."<br>비밀번호는 : ".$param2."<br>";
	}

	//Login - ID Check Func
	function id_check($param_id){
		if($param_id == 'kpu'){
			return '로그인 성공';
		} else {
			return '로그인 실패';
		}
		
		
	}
	//Login Check Func
	function login_check($param_id, $param_pw){
		if($param_id == 'kpu' && $param_pw == 1234){
			return '로그인 성공';
		} else {
			return '로그인 실패';
		}
	}
?>