# php의 기본적인 문법
* 주소와 값을 구분할 때에는 '?'
* 값과 값을 구분할 때에는 '&'

# $_GET['']
' '값에 해당하는 파일을 불러오기 위한 문법
```php
<?php
  echo $_GET['id'].",".$_GET['name'];
?>
```
* .은 'and'와 같은 역할

# file_get_contents(" ");
" "와 같은 파일을 불러오기 위한 문법
```php
<?php
  echo file_get_contents($_GET['id'].".txt");
?>
```
* 'id'값.txt 파일을 불러오는 응용문법

# 중복의 제거
php는 '중복의 제거'라는 관점에서 굉장히 중요한 역할을 한다.
