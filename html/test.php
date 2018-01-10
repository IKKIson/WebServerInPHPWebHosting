<?php
					//호스트주소, id, pw
$conn = mysql_connect('localhost', 'kpucom', 'e517e517');
mysqli_connect($conn, 'kpucom');//데이터베이스 명

$sql = "insert into notice (title, content) values ('제목', '내용')";

$result = mysqli_query($conn, $sql);
echo $result;

?>