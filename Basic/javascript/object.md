# 객체화
웹 브라우저의 대부분의 요소는 객체화 되어있다.   
이 객체들을 제어하는 것이 'javascript'  

# Document Object Model(DOM)
윈도우 객체가 가지고 있는 document(html)을 제어하는 역할

### document.getElementsByTageName()
* document는 html을 나타내는 객체
* 이미 랜더링 된 html을 수정하는 것은 불가능하기 때문에   
javascript를 이용하여 제어해야 함.
* html의 태그를 제어
```js
var imgs = document.getElementsByTageName('img');
imgs[0].style.width = '300px';
```

# Browser Object Model(BOM)
브라우저를 제어하기 위한 객체들의 모임

### 전역객체
객체를 만드는 것은 window객체의 property를 만드는 것과 동일하다는 것

### 사용자와 커뮤니케이션
* alert   
말 그대로 경고창    
하나가 실행되면 그 다음 코드는 실행되지 않는다는 특징이 있다.
```js
alert('hello world');
```
