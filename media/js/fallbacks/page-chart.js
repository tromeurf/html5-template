$(document).ready(function () {
	var htmlSommaire = '<div class="board-section"><div class="content-board"><ul></ul></div><button class="toggle-board"></button></div>'
	$('body').append(htmlSommaire);
	$('h2.title-section').each(function (index, elem) {
		$(this).attr('id', 'chart-anchor'+index)
		$('.board-section ul').append('<li><a href="#chart-anchor'+index+'">'+$(this).text()+'</a></li>');
	});

	$('body').on('click', '.board-section a', function () {
		var $board = $('.board-section').addClass('hidden-board');
	});

	$('body').on('click', '.board-section .toggle-board', function () {
		var $board = $(this).closest('.board-section');
		if ($board.hasClass('hidden-board')) {
			$board.removeClass('hidden-board');
		} else {
			$board.addClass('hidden-board');
		}
	});

	var firstScroll = true;

	$(window).scroll(function (e) {
		if ($(window).scrollTop() > 500 && firstScroll == true) {
			$('.board-section').addClass('hidden-board');
			firstScroll = false;
		}
	});
});