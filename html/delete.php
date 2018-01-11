<?php

//call func in util.php
require("util.php");
kpu();

/* 1일차 함수 모듈화 X */
/*
//Set MySQL of dothome
					//호스트주소, id, pw
$conn = mysqli_connect('localhost', 'shout2517', 'ihson83729405');
mysqli_select_db($conn, 'shout2517');//데이터베이스 명
*/
/* 2일차 함수 모듈화 */
$conn = db_init();
$title = "3434";


//Make Query delete
$sql = "delete notice where title = '".$title."'";

if($conn){
	$result = mysqli_query($conn, $sql);
	//Delete 시
	if($result == true){
        echo "Delete Query Success"."<br>";
    } else {
        echo "Delete Query Failed"."<br>";
        mysqli_error();
    }

}
?>