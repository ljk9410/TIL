# Vanilla JavaScript
꾸밈없는 날 것 그대로의 JavaScript

### Start
script tag로 동작한다
```html
<script>
alert("Hello world");
</script>
```

### Variable
변수, 변할 수 있는 수
  * var, let, const   
  var과 let은 변수를 지정하는 코드   
  const도 같지만 상수로 취급하기 때문에 덮어쓰기가 불가능하다.
  
  * Data type   
    1. String: text 타입   
    2. Boolean: true, false
    3. Number: 숫자
    4. Float: 소숫점을 포함한 숫자
    
### Array & Object
데이터를 담는 그릇
  * Array   
  배열, 데이터의 나열을 도와줌
```js
const array = [
  "Lee",
  "Jung Kyu",
  "27",
  "Bucheon",
  "Jung-ang univ"
];
console.log(array);
```
  * Object   
  기본적으로 array와 같지만, 변수의 value를 지정할 수 있고,   
  object안에 array와 object를 또 다시 쓸 수 있다.
```js
const object = {
  first: "Lee",
  second: "Jung Kyu",
  age: 27,
  city: "Bucheon",
  university: "Jung-ang univ",
  favFood: {
    Chicken: {
      brand: ["nene","goopne","BBQ"],
      type: ["crispy","soy"]
    },
    Ramen: {
      brand: ["samyang","nongsim"],
      type: ["bibim","white",'red']
    }
  }
};
console.log(object);
```

### Function
함수, 코드를 내가 원하는만큼 재활용해주는 것

 * 함수 만들기   
 ```js
 function hi() {
  console.log("hi")
 };
 ```
 * Argument   
 인자, 함수 () 안에 무언가를 받을 때 사용   
 인자는 무제한으로 사용할 수 있다.
```js
function hi(name, age) {
 console.log(
 "Hi", name,
 "How old are you?", age
};
hi("jung kyu",27);
```
  
### Condition
if-else를 이용해서, true이면 if 안에 있는 것을 false이면 else안에 것을 return
```js
const age = prompt("How old are you?");

if(age >= 18 && age <= 21){
  console.log('You can drink but should not');
} else if(age > 21){
  console.log('Drink');
} else{
  console.log('You cannot drink');
};
```

### Toggle
argument가 있으면 remove, 없으면 add 해주는 함수
```js
//기본
const CLICKED_CLASS = "clicked";
const hasClass = title.classList.contains(CLICKED_CLASS);
  if(hasClass){
    title.classList.remove(CLICKED_CLASS);
  } else {
    title.classList.add(CLICKED_CLASS);
  }
//toggle
const CLICKED_CLASS = "clicked";
title.classList.toggle(CLICKED_CLASS);
```
