# php와 mysql
데이터베이스에 있는 정보를 가져와 사용하는 것은 많은 이점이 있다.
* 방대한 양의 데이터를 관리하기 쉽다.
* 개별적인 file을 사용하는 것보다 보안성이 높다.  

# php로 mysql에 접근하는 방법
* MySQL monior의 역할을 'mysqli' 함수가 대신한다.
```php
<?php
  $conn=mysqli_connect('localhost','root','111111');
?>
```
# php로 mysql의 데이터를 html로 불러오는 방법
1. 서버접속
```php
<?php
  $conn = mysqli_connect('server', 'user', 'pwd');
?>
```
2. DB선택
```php
<?php
  $conn = mysqli_connect('server', 'user', 'pwd');
  mysqli_select_db($conn,'opentutorials');
?>
```
3. 조회 및 출력
```php
<?php
  $conn = mysqli_connect('server', 'user', 'pwd');
  mysqli_select_db($conn,'opentutorials');
  $result = mysqli_query($conn,'SELECT * FROM topic');
  $row = mysqli_fetch_assoc($result);
  echo $row['title'];
?>
```

# 활용
* Database안에 있는 리스트를 while문을 통해 불러오기
```php
<?php
  while($row = mysqli_fetch_assoc($result)){
    echo $row['title'].'\n';
  }
?>
```
* php에 html태그 적용하기
```php
<?php
  while($row = mysqli_fetch_assoc($result)){
    echo '<li><a href="localhost/myweb/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'.'\n';
  }
?>
```
* id 값에 따라 database안에 있는 내용 불러오기
```php
<?php
  if(empty($_GET['id'])===false){
    $sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo '<h2>'.$row['title'].'</h2>';
    echo $row['description'];
   };
?>
```
