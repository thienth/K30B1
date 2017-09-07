var count = 0;
function changeBg(){
	document.getElementById('target').style.background = 'green';
	count++;
	document.getElementById('count').innerText = count;
}