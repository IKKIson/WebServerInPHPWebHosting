<?php
    //include_once("util.php");
    include_once($_SERVER['DOCUMENT_ROOT']."/util.php");
    kpu();

    //GET과 POST를 분개
    //GET
    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        //echo 'GET 으로 요청된 상태 입니다.';
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
            내용 : <textarea name = "content"></textarea><br><br>
            <button>글 쓰기</button>
    </body>
</html>
    


<?php
    }//end of GET

    //POST
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo 'POST 으로 요청된 상태 입니다.';
    }//end of POST

?>
