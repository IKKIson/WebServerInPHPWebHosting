<?php
	$he = $_POST['height'];
	$we = $_POST['weight'];

	//Not Using Func
	//echo "아이디는 : ".$id."<br>비밀번호는 : ".$pw;
	echo bmi_fomula($he, $we);
	echo mybody($he, $we);

	//BMI result Function
	function bmi_fomula($param_h, $param_w) {
		$result = $param_w / ($param_h * $param_h) * 10000;
		
		if($result > 40) {
			return "고도비만 : ".$result."<br>";
		} else if($result > 30) {
			return "비만(2도비만) : ".$result."<br>";
		} else if($result > 25) {
			return "과체중(1도비만) : ".$result."<br>";
		} else if($result > 20) {
			return "정상체중 : ".$result."<br>";
		} else {
			return "저체중 : ".$result."<br>";
		}
		
	}

	function mybody($param1, $param2) {
		return "키 : ".$param1."<br>몸무게 : ".$param2."<br>";
	}
?>