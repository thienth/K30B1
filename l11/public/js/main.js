/*var x = prompt("dien vao day: ");

// check x is number or not then alert
if(Number(x) = Number.NaN){
	alert('x is not a number!');
}else{
	alert('x is number with value = ' + x);
}


*/

// alert(Math.round(Math.random() * 100));

/*// 1. Nhan du lieu tu nguoi dung
var x = prompt('Nhap chuoi 1: ');
var y = prompt('Nhap chuoi 2: ');

// 2. Xoa khoang trang
x = x.trim();
y = y.trim();

// 3. dua ve chu thuong
x = x.toLowerCase();
y = y.toLowerCase();

// 4. so sanh 2 chuoi
if(x == y){
	alert("bon no giong nhau");
}else{
	alert('khac roi, lam lai');
}*/

/*var ar = [1,2,3,4,6,7];

ar.splice(2, 1);
console.log(ar);*/
// for (var i = 0; i < ar.length; i++) {
// 	if(ar[i] == undefined){
// 		continue;
// 	}
// 	alert(ar[i]);
// }
var team = 1;
var objects = [];
var content = "";
for (var i = 0; i < 6; i++) {
	
	content += `<tr>`;
		for (var j = 0; j < 6; j++) {
			objects.push({x: i, y: j, team: null});
			content += `<td id="`+i+`-`+j+`" onclick="callme(`+i+`, `+j+`)"></td>`;
		}
	content += `</tr>`;
}

document.getElementById('playground').innerHTML = content;
console.log(objects);
function callme(x, y){
	console.log(x + ' -- ' + y);
	// tim trong object tai doi tuong co x, y = xy nhap vao
	// xem team cua no co null khong
	// neu null
	var color = team == 1 ? 'lightpink' : 'lightgreen';
	var tdText = team == 1 ? 'X' : 'O';
	document.getElementById(x+"-"+y).innerText = tdText;
	document.getElementById(x+"-"+y).style.background = color;

	team = team == 1 ? 2 : 1;
}







