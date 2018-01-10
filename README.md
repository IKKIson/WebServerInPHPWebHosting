## KoreaPolyTechnic University PHP Web Class

Webserver construction Training Education In ComputerEng.

- PHP.org
[http://php.net/](http://php.net/)

- Study PHP
    - [W3schools](https://www.w3schools.com/php/default.asp)
    - [TCPschool](http://tcpschool.com/php/php_intro_intro)
    - [opentutorial_CodingEverybody](https://www.opentutorials.org/course/3018)
    - [TutorialSPoint PHP](https://www.tutorialspoint.com/php/index.htm)
    - [TutorialSPoint PHP7](https://www.tutorialspoint.com/php7/index.htm)
    - [TutorialSPoint CakePHP](https://www.tutorialspoint.com/cakephp/index.htm)
    - [TutorialSPoint FuelPHP](https://www.tutorialspoint.com/fuelphp/index.htm)

</hr>

### Development
#### IDE
- Goorm
    - Web IDE @ Korea
    - URL : [GoormIDE](https://ide.goorm.io/)
    - 이거 존나 편함
    
- Slack
    - Development Tool
    - URL : [SLACK](https://slack.com/)
    - 이것도 존나 좋음

</hr>

## Day 01 20180110
### Class 01 IDE Setting for PHP in Web
1. Using GoormIDE
2. Make Project PHP
3. if 

#### PHP Basic
1. Just Print Out on Web
- echo

		<?php
			$name = "산기대";
			$text = "hello kpu!!";
			$text2 = 'e517';
		?>

2. Value Define
- $value
'$' and Naming 

		<!-- Get/Set Data-->
		<?php
			$name = "산기대";
			$text = "hello kpu!!";
			$text2 = 'e517';
		?>
		
		<!-- Just use value-->
		<?php
			echo $name."halo"."안녕".$text;
			echo $text;
			echo $text2;
		?>

</hr>
    
### Class 02 PHP GET/POST and function

#### GET & POST Method Page URL Parameter
1. 게시판, 글, 글리스트 등 조회 기능 시 GET으로 작성
    - GET방식의 경우 URL주소에 파라미터 값이 노출이되므로 게시판, 글 등 조회기능에 주로사용한다.
2. 로그인, 게시글 작성 등 생성, 수정 기능 시 POST로 작성
    - 로그인이나 개인정보, 은닉이 필요한 데이터들을 사용해야 되는 경우 POST 방식을 사용한다.

#### GET Method in PHP
1. URL 주소를 이용한 GET방식
    - http://ikkisonwebserverinphp.run.goorm.io/IKKIson/test.php?id=11&board_type=parametertest
    - URL 주소 뒤에 '?'를 사용하여 이 후 나오는 것들은 파라미터값 사용으로 처리한다.
    - URL 주소 : http://ikkisonwebserverinphp.run.goorm.io/IKKIson/test.php
    - 파라미터사용 : ?id=11
    - 파라미터 여러개사용 : ?id=11&board_type=parametertest
        - 파라미터를 여러개 사용할 경우 '&'로 파라미터들을 구분한다.
	
2. GET 방식 예제
test.php 일부분

		<?php
			//get방식의 id에 있는 파라미터
			$board_id = $_GET['id'];	
			$type = $_get['board_type'];
		
			//$sql = "select * from board where id = ".$board_id;
		
			//파라미터 넘기기
			echo 'test.php 입니닷!!'.$board_id."<br>"."타입은".$type;
		?>	

#### POST Method in PHP
1. POST
로그인 시 대놓고 아이디어 비밀번호가 명시되있으면 안된다.
일반적으로 보안이 필요한 것들은 POST를 사용
단, 남발하지 않는 이유는 보안이 필요한 기능에만 사용
    
2. GET 방식 예제
- test.php 일부분

		<form action="mypost.php" method="post">
			<input type="text" name="id">
			<input type="password" name="password">
			<button>
				로그인 하러 가기!!
			</button>
		</form>
		
- mypost.php
		
		<?php
			$id = $_POST['id'];
			$pw = $_POST['password'];
		
			echo "아이디는 : ".$id."<br>비밀번호는 : ".$pw;
		?>

#### Function in PHP
- function Name(parameter)    
- 함수 생성 시 'function' 와 함수명을 함께 명시해준다.
- 파라미터와 함수 내부 작성은 기존의 언어들과 동일하다.
- Example)
```markdown
	//View Login id and pw Function
	function mytext($param1, $param2) {
		return "아이디는 : ".$param1."<br>비밀번호는 : ".$param2."<br>";
	}
```
  
#### 실습과제 01
- 아이디 kpu, 비밀번호 1234로만 로그인해야'로그인 성공'을 출력하게 작성 
- test.php
```markdown
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
```
- mypost.php
```markdown
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
```

#### 실습과제 01 - 취소
- bmi.php - form 키, 몸무게 입력 post방식 사용
- bmi_result.php 
	- bmi계산하여 출력
	- 입력받아서 function으로 연산 후 출력	
    
    
#### [이론 - 작성 방법]
- Web 개발 방법
    - Model 1 방식
        : presenter, view, Model이 한 곳에 함께 작성되는 방식

    - Model 2 방식
        MVC 방식
            Model :  
            View : 
            Contorller : 

            * BMI_VIEW, BMI_CONTLROLLER
            * View와 Controller간의 통신 : Model


#### MySQL
1. dothome에서 제공해주는 MySQL 유틸을 이용하여 데이터베이스 관리.
2. dothome의 해당 웹호스팅 생성 시 설정한 FTP와 MySQL(데이터베이스) 두개의 계정을 이용하여 연결한다.
- DB Connection 하기
- test.php
```markdown
					//호스트주소, id, pw
	$conn = mysqli_connect('localhost', 'shout2517', 'ihson83729405');
	mysqli_select_db($conn, 'shout2517');//데이터베이스 명
```

3. DB Connection 후 쿼리 작성하여 사용
- select * from table의 경우 
    - 여러개의 row에서 하나씩 출력하고 싶거나 핸들링할 때 하니씩 fetch 해야된다.
	- test.php 일부

```markdown
	while($row = mysqli_fetch_array($result)) {
		echo $row['title']."<br>";
	}
```


### 개발 TIP
MySQL의 경우 #이 주석처리가 되는데 select 쿼리 사용 시 #이 들어가는 단어로 입력받게 되면 PHP가 인코딩하면 쿼리문에서 # 뒤부터는 주석이 되어 의도하지 않은 출력값이 나오게된다.
Ex) 전체 내용이 출력되거나, 로그인문제 발생
해결) 어느 정도의 시큐어 코딩이 필요하다.  
