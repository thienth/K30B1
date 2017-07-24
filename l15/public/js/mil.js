window.bank = [
	{
		question: "abc xyz?",
		answers: ["A: a", "B: b", "C: c", "D: d"],
		correct: 2,
		money: 1000
	},
	{
		question: "def ghk?",
		answers: ["A: a", "B: b", "C: c", "D: d"],
		correct: 0,
		money: 2000
	},
];
window.game = {
	init: function(){
		var question = bank[game.qOrder];
		game.play(question);
	},
	qOrder: 0,
	play: function(q){
		$('#qLocation').text(q.question);
		$('#qMoney').text(q.money);
		$('#aLocation').empty();
		$.each(q.answers, function(i, v){
			var answer = document.createElement('div');
			$(answer).addClass('col-xs-6 bg-success');
			$(answer).text(v);
			$(answer).attr('onclick', 'game.choose('+i+')');

			$('#aLocation').append(answer);
		});
	},
	choose: function(index){
		var question = bank[game.qOrder];
		if(index == question.correct){
			$("#playerMoney").text(question.money);
			game.qOrder++;
			question = bank[game.qOrder];
			if(question == undefined){
				alert('Chúc mừng, bạn đã trở thành tỷ phú.');
				return false;
			}
			game.play(question);
		}
	}
}