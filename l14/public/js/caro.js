window.caro = {
	init: function(){
		var grids = [ 3, 5, 7, 10, 15, 18, 20];
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
			caro.turn = caro.turn == "X" ? "O" : "X";
		}
	}
}