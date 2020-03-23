# Js Dictionary
새롭게 배운 함수, object들을 기억하기 위한 나만의 사전

### new Date()
    'new': object를 생성하는 함수    
    'Date()': 현재 시각을 표현해주는 함수   
    `getHours','getMinutes' 등을 이용하여 Date()의 value를 직접 가져올 수 있음    
```js
const date = new Date();
const hours = date.getHours();
```

### localStorage
    사용자의 application 안에 key와 value를 저장하고 가져오는 함수
```js
  localStorage.setItem("key","value");
  localStorage.getItem("key")
```
