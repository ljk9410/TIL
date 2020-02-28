# php와 Javascript 기본개념   
## php 실행    
```php
<?php
  echo "hello world";
?>
```

## Javascript 실행   
Javascript는 'script'태그에 의해 실행   
```Javascript
<script>
 document.write("Hello world");
</script>
```   

* php는 server side 언어, js는 client side 언어   

## 연산자와 변수 그리고 디버깅   
* +,-,/,* 등의 기호들을 연산자라고 한다
* 변수 - 변할 수 있는 값
    - 변수를 사용하는 이유?    
    수정과 추가, 제거 등에 있어서 중요한 문제   
    변할 수 있는 부분과 변하지 않는 부분을 구분해서 
    변할 수 있는 부분에 집중해야 한다.

## 디버깅   
에러를 찾아내는 방법에는 여러가지가 있다
* error log 확인하기   
* 구글 크롬에서 도구 더보기 - 개발자 도구에서 확인하기

## 조건문을 이용한 로그인 기능 구현하기
* 조건문
    조건에 따라(true, false) 다양한 처리를 하게 해주는 문법
* Javascript 조건문
```javascript
<script>
  if(1==1){
    document.write("True");
  } else{
    document.write("False);
  }
</script>   
```   
* php 조건문
```php
<?php
  if(1==1){
    echo "True";
  } else{
    echo "False";
  }
?>
```   
* log_in 기능의 원리   
: 조건문을 이용하여 입력값과 기존의 값이 일치하는지 안하는지를 판단
```javascript
    <script>
      password = prompt("비밀번호");
      if(password == 1111) {
        document.write("환영합니다");
      } else {
        document.write("누구신가요?");
      }
    </script>
```
## $_GET["}
    php의 특수한 문법:   
    사용자가 입력한 값중 "" 안에 있는 값, 이를 받아내기 위한 특수한 변수
