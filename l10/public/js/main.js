var sum = getSummary(3, 4);

// console.log(sum);

function getSummary(a, b){
	return a + b; // return of function - 
	// browser will not compile below code
}

// condition statement
if(sum <= 5){
	alert("sum <= 5");
}

// if - else statement
if(sum <= 5){
	alert("sum <= 5");
}else{
	// alert("sum > 5");
}

sum = 7;
// if - else if statement
if(sum <= 5){
	alert("sum <= 5");
}else if(sum <= 6){
	alert("sum <= 6");
}else if(sum <= 7){
	// alert("sum <= 7");
}

sum = 8;
// if - else if - else statement
if(sum <= 5){
	alert("sum <= 5");
}else if(sum <= 6){
	alert("sum <= 6");
}else if(sum <= 7){
	alert("sum <= 7");
}else {
	// alert('sum > 7');
}

var dump = 1;

var value = dump == null ? 0 : dump;


var value1 = null;
// same with
if(dump == null ){
	value1 = 0;
}else{
	value1 = dump;
}

alert(value);

/*if(dk1 && dk2 && ( dk3 || dk4 )){ // both condition is true
	// code here
}

if(dk1 || dk2){ // at least of conditions is true
	// code here
}*/

/*
// compare operator
== // so sánh giá trị - so sánh bằng
!= // so sánh khác
=== // so sánh bằng tuyệt đối (giá trị và kiểu dữ liệu)
!== // Khác tuyệt đối
> // Lớn hơn
>= // Lớn hơn hoặc bằng
< // Nhỏ hơn
<= // nhỏ hơn hoặc bằng
! // Phủ định
var i = false;
// if(!i)
if(i*(-1) == true){
	console.log('correct!');
}
*/
var x = 8;
switch(x){
	case 1: 
		alert("x = 1");
		break;
	case 5:
		alert("x = 5");
		break;
	default:
		alert("x = " + x);
		break;
}


// Looping
// 1. Vòng lặp không biết trước số lần lặp
while(dk){
	// câu lệnh
	break; // Thoát khỏi vòng lặp
	continue; // Bỏ qua các lệnh phía sau và bắt đầu vòng lặp mới
}


do{
	// câu lệnh
}while(dk)

// 2. Vòng lặp biết trước số lần lặp
for (var i = 0; i < 100; i++) {
	// câu lệnh
}

for (var i = 100 - 1; i >= 0; i--) {
	// câu lệnh
}

// phép toán đặc biệt
var x = 0;
x += 5; // tương đương x = x + 5;
x += 4; // tương đương x = x + 4;
console.log(x); // x = 9

x *= 2;
x -= 1;
x /= 3;

console.log(--x);
console.log(x--);
console.log(++x);
console.log(x++);














