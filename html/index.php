<?php
    //get/set DB connection
    include_once($_SERVER['DOCUMENT_ROOT']."/util.php");
    $conn = global_db_init();
    kpu();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>공동 게시판 [손익현]</title>
    </head>
    <body>
        <h1>공동 게시판</h1><br>
        <form action="" method="POST">
            이름 : <input type = "text" name = "name"><br><br>
            제목 : <input type = "text" name = "title"><br><br>
            내용 : <textarea name = "content"></textarea><br><br>
            <button>글 쓰기</button><br>

            <br><br>
    </body>
</html>

<?php
    //POST
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //echo 'POST 으로 요청된 상태 입니다.';
        $title = $_POST['title'];
        $content = $_POST['content'];
        $name = $_POST['name'];

        $sql = sql_insert_board($title, $content, $name);
        if($conn){
            $result = mysqli_query($conn, $sql);
            echo ($result == true) ? "저장 성공" : "저장 실패";
        } 
    }//end of POST
?>


<?php
    //GET과 POST를 분개
    //GET
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        //echo 'GET 으로 요청된 상태 입니다.';
        $sql = sql_select_board_all_orderby();
        //Execute Query
        $result = mysqli_query($conn, $sql);
        //while($row = mysqli_fetch_arrary($result) ){
        while($row = $result->fetch_array()){
            echo "</hr>";
            echo $row['title']." // ";
            echo $row['content']." // ";
            echo $row['name']."<br>";
            echo "</hr>";
        }
    }//end of GET
?>