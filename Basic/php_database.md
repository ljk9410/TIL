# php와 mysql
데이터베이스에 있는 정보를 가져와 사용하는 것은 많은 이점이 있다.
* 방대한 양의 데이터를 관리하기 쉽다.
* 개별적인 file을 사용하는 것보다 보안성이 높다.  

### php로 mysql에 접근하는 방법
* MySQL monior의 역할을 'mysqli' 함수가 대신한다.
```php
<?php
  $conn=mysqli_connect('localhost','root','111111');
?>
```
