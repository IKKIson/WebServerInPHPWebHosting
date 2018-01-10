<?php
					//호스트주소, id, pw
$conn = mysqli_connect('localhost', 'shout2517', 'ihson83729405');
mysqli_select_db($conn, 'shout2517');//데이터베이스 명

//01 insert query
//$sql = "insert into notice(title, content) values('titlesample2', 'descriptsample2')";

//02 select query
$sql = "select *from notice";

if($conn){

	$result = mysqli_query($conn, $sql);

	//01 insert dml query
	//var_dump($result);
	
	//02 select query
	// select 조회
	while($result = mysqli_fetch_arrary($result)) {
		echo $row['title']."<br>";
	}
	
	echo $result;
}
?>