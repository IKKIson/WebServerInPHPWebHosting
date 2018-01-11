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
        mysqli_select_db($conn, 'shout2517');//데이터베이스 명
        return $conn;
    }
    //DB connection global
    function global_db_init(){
        //Set MySQL of dothome
					//호스트주소, id, pw
        $conn = mysqli_connect('localhost', 'shout2517', 'ihson83729405');
        mysqli_select_db($conn, 'shout2517');//데이터베이스 명
        return $conn;
    }

    /* DB SQL Query*/
    //01 insert query
    $sql_insert_notice_2 = "insert into notice(title, content) values('titlesample2', 'descriptsample2')";

    //02 select query
    $sql_select_notice_all = "select *from notice";

?>