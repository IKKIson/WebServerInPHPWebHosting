<?php
    //Sample
    function kpu(){
        echo '517'."<br>";
    }


    /*
    * DB DI
    */
    /* DB Init & Set */
    //DB connection basic
    function db_init(){
        //Set MySQL of dothome
					//호스트주소, id, pw
        $conn = mysqli_connect('localhost', 'shout2517', 'ihson83729405');
        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        //Choose DB
        mysqli_select_db($conn, 'shout2517');//데이터베이스 명
        return $conn;
    }
    //DB connection global
    function global_db_init(){
        //Set MySQL of dothome
					//호스트주소, id, pw
        $conn = mysqli_connect("dev.make-it.co.kr", "kpu", "kpu@65443818");
        mysqli_select_db($conn, "kpucom");
        return $conn;
    }

    /* DB SQL Query*/
    /* Table : notice */
    //01 insert title & content
    function sql_insert_notice(){
        return "insert into notice(title, content) values('titlesample2', 'descriptsample2')";
    } 
    //02 select all
    function sql_select_notice_all(){
        return "select *from notice";
    }

    /* Table : board */
    //01 select all
    function sql_select_board_all(){
        return "select * from board";
    }
    //02 insert board
    function sql_insert_board($parma_title, $parma_content, $parma_name){
        return "insert into board(title, content, name) values ('".$parma_title."', '".$parma_content."', '".$parma_nam."')";
    }
    //03 select all nad View Reverse
    function sql_select_board_all_orderby(){
        return "select * from board order by board_key desc";
    }

?>