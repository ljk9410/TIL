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
