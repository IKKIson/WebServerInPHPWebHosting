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








You can use the [editor on GitHub](https://github.com/IKKIson/WebServerInPHP/edit/master/index.md) to maintain and preview the content for your website in Markdown files.

Whenever you commit to this repository, GitHub Pages will run [Jekyll](https://jekyllrb.com/) to rebuild the pages in your site, from the content in your Markdown files.

### Markdown

Markdown is a lightweight and easy-to-use syntax for styling your writing. It includes conventions for

```markdown
Syntax highlighted code block

# Header 1
## Header 2
### Header 3

- Bulleted
- List

1. Numbered
2. List

**Bold** and _Italic_ and `Code` text

[Link](url) and ![Image](src)
```

For more details see [GitHub Flavored Markdown](https://guides.github.com/features/mastering-markdown/).

### Jekyll Themes

Your Pages site will use the layout and styles from the Jekyll theme you have selected in your [repository settings](https://github.com/IKKIson/WebServerInPHP/settings). The name of this theme is saved in the Jekyll `_config.yml` configuration file.

### Support or Contact

Having trouble with Pages? Check out our [documentation](https://help.github.com/categories/github-pages-basics/) or [contact support](https://github.com/contact) and we’ll help you sort it out.
