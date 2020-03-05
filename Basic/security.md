# 보안
최악의 상황을 대비하는 것   
정보시스템에서 가장 중요한 '데이터'를 보호하는 것   
데이터의 집인 '서버'를 보호하는 것

# escaping
웹브라우저가 html태그를 해석하지 못하게끔 하는 기법

### htmlspecialchars()
```php
<?php
  htmlspecialchars();
?>
```
- 웹상에서 사용자가 입력하는 값 중 javascript가 포함되어 있다면   
여러가지 보안상의 문제점이 발생할 수 있는데, 이를 무력화 시키는 함수

### strip_tags()
```php
<?php
  strip_tags($row['description'],'<a><h1><h2><h3>');
?>
```
- 자신이 원하는 html태그만 선별적으로 기능하게 할 수 있는 함수

### Login application에 활용
* 기본적인 로그인 어플리케이션
```php
<?php
  $conn = mysqli_connect('localhost','root','mypwd');
  mysqli_select_db($conn,'opentutorials');
  $sql = "SELECT * FROM user WHERE name='".$_GET['name']."' AND 
  password='".$_GET['password']."'";
  $result = mysqli_query($conn,$sql);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      if($result->num_rows=="1"){
        echo "환영합니다 ".$_GET['name'].'님';
      } else{
        echo "누구십니까?";
      }
     ?>
  </body>
</html>
```
이 경우 cracker가 url의 입력값을 조작해서 정보를 빼낼 수 있다.

* mysqli_real_escape_string을 이용하여 이를 막기
```php
<?php
  $conn = mysqli_connect('localhost','root','mypwd');
  mysqli_select_db($conn,'opentutorials');
  $name = mysqli_real_escape_string($conn,$_GET['name']);
  $password = mysqli_real_escape_string($conn,$_GET['password']);
  $sql = "SELECT * FROM user WHERE name='".$name."' AND
  password='".$password."'";
  echo $sql;
  $result = mysqli_query($conn,$sql);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      if($result->num_rows=="0"){
        echo "누구십니까?";
      } else{
        echo "환영합니다 ".$_GET['name'].'님';
      }
     ?>
  </body>
</html>
```

### 보안에 대한 감수성 기르기!
