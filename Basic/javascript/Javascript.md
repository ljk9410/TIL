# Javascript
Html을 제어하는 언어
```html
<ol id="target"></ol>
<input type="button" value="강조" onclick="document.getElementById('target').className='em'"/>
```
* onclick    
    사용자가 클릭을 했을 때 무언가를 동작하게 하는 문법
* getElementById('')    
    ''안에 있는 아이디를 가진 태그를 선택하게 하는 문법
* .className=''    
    getElementById를 통해 선택한 태그에 class를 부여하는 문법

# Event programming 이란?   
웹페이지 상에서 사용자들과 상호작용할 수 있게끔 만들어주는 프로그래밍   
'onclick', 'onfocus', 'onblur' 등이 있다.
```html
<input type='text' onclick="alert('Hello world')"/>
```

# Class   
서로 다른 객체를 한 그룹으로 묶는 태그
```html
<style>
  .cs{
    font-size: 40px;
  }
</style>
<li class="cs">class</li>
<li class-"cs">class2</li>
```


