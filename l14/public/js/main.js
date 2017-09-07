/*var obj = {
	attr1: 5,
	attr2: 10,
	setAttr: function(x1 = 0, x2 = 0){
		this.attr1 += x1;
		this.attr2 += x2;
		obj1.attr1 += x1 + x2;
	}

};

var obj1 = {
	attr1: 0
}

console.log(obj);
obj.attr1 += 100;
console.log(obj);
obj.setAttr(10, 5);
console.log(obj);
console.log(obj1);


// Event

// 1. Xác định toàn bộ các thẻ button có class = plus => array
var plusbtn = document.getElementsByClassName("plus");
var minusbtn = document.getElementsByClassName("minus");

// 2. Sử dụng vòng lặp để set sự kiện cho từng thẻ button trong array ở trên
for (var i = 0; i < plusbtn.length; i++) {
	plusbtn[i].addEventListener('click', function(){
		fnCount();
	});
}

var count = 0;
function fnCount(){
	count++;
	console.log(count);
}

function fnCountMinus(){
	count--;
	console.log(count);
}*/
var count = 0;
$(document).ready(function(){

	$('.plus').on('click', function(){
		count++;
		console.log($(this).text());
		$('#result').text(count);
		$('#result').removeClass('bg-danger');
		$('#result').addClass('bg-info');
		$('.minus').text('thienth changed this');
		$('#target').attr('x', 900);
	});

	var arr = [1,2,3,4,5,6,6,7,8,9];
	$.each(arr, function(index, value){
		console.log(index + ' - ' + value);
	});
	/*$('#inputTarget').on('keydown', function(e){
		debugger;
		if(e.keyCode != 13){
			if(e.keyCode < 48 && e.keyCode > 57){
				return false;
			}
		}
	});*/
	$('.minus').on('click', function(){
		count--;
		$('#result').text(count);
		$('#result').removeClass('bg-info');
		$('#result').addClass('bg-danger');
	});
});















