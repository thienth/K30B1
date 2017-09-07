window.caro = {
	init: function(){
		var grids = [ 5, 7, 10, 15, 18, 20];
		$.each(grids, function(i, v){

			// tạo ra thẻ bằng javascript
			var option = document.createElement('option');
			option.value = v;
			option.innerText = v + " x " + v;

			// thêm thẻ option vào trong thẻ select
			$('#gridSize').append(option);
			caro.drawPlayground();
		});
	},
	turn: "X",
	xcheck: 0,
	ocheck: 0,
	drawPlayground: function(){
		$('tbody').empty();
		caro.gridSize = parseInt($('#gridSize').val());
		for (var i = 0; i < caro.gridSize; i++) {
			var trow = document.createElement('tr');
			for (var j = 0; j < caro.gridSize; j++) {
				var td = document.createElement('td');
				$(td).attr({
					x: j,
					y: i,
					onclick: "caro.choose(this)"
				});
				$(trow).append(td);
			}
			$('tbody').append(trow);
		}

	},
	choose(e){
		if($(e).text() == ""){
			$(e).text(caro.turn);
			var color = caro.turn == "X" ? "lightblue" : "lightpink";
			$(e).css('background', color);
			if(caro.turn == "X"){
				caro.xcheck++;
			}else{
				caro.ocheck++;
			}
			if(caro.winnerRule(e)) {
				alert("team " + caro.turn + " win!");
			}else{
				caro.turn = caro.turn == "X" ? "O" : "X";
			}
			
		}
	},
	winnerRule: function(target){
		if(caro.xcheck >= 5 || caro.ocheck >= 5){
			// 1. Kiem tra theo hang doc
			var xdim = parseInt($(target).attr('x'));
			var listXDim = $('td[x='+xdim+']');
			var point = 0;
			$.each(listXDim, function(i, v){
				// Neu element dang dc check co text = turn
				// thi point ++
				if($(v).text() == caro.turn){
					point++;
				}else{
					// Neu element dang dc check co text != turn
					// thi point = 0
					point = 0;
				}
				// Neu point >= 5 thi break ra khoi for
				if(point >= 5){
					return false;
				}
			});
			// Neu point >= 5 return true
			if(point >= 5){
				return true;
			}

			point = 0;

			var ydim = parseInt($(target).attr('y'));
			var listYDim = $('td[y='+ydim+']');
			var point = 0;
			$.each(listYDim, function(i, v){
				// Neu element dang dc check co text = turn
				// thi point ++
				if($(v).text() == caro.turn){
					point++;
				}else{
					// Neu element dang dc check co text != turn
					// thi point = 0
					point = 0;
				}
				// Neu point >= 5 thi break ra khoi for
				if(point >= 5){
					return false;
				}
			});
			// Neu point >= 5 return true
			if(point >= 5){
				return true;
			}
			point = 0;
			var j = 0;
			// Cheo tu phai sang trai
			for (var i = (xdim+ydim); i >= 0; i--) {
				if(point >= 5){
					break;
				}
				if($('td[x='+i+'][y='+j+']').text() == caro.turn){
					point++;
				}else{
					point = 0;
				}
				j++;
			}

			if(point >= 5) return true;

			var minus = ydim - xdim;
			for (var i = 0; i <= caro.gridSize; i++) {
				if(point >= 5 || minus == caro.gridSize){
					break;
				}
				if($('td[x='+i+'][y='+minus+']').text() == caro.turn){
					point++;
				}else{
					point = 0;
				}
				minus++;
			}
			
			if(point >= 5) return true;
		}
		return false;
	}
}








