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
